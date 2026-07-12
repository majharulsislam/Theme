<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Block Pattern Manager
 *
 * Auto-discovers and registers all block patterns from the patterns/ directory.
 *
 * @package NexBlocks
 */

/**
 * Class NexBlocks_Pattern_Manager
 */
class NexBlocks_Pattern_Manager {

	/**
	 * Pattern categories to register.
	 *
	 * @var array<string,string>
	 */
	private $categories = array();

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->categories = array(
			'nexblocks-heroes'       => __( 'NexBlocks — Heroes',       'nexblocks' ),
			'nexblocks-features'     => __( 'NexBlocks — Features',     'nexblocks' ),
			'nexblocks-cta'          => __( 'NexBlocks — Call to Action', 'nexblocks' ),
			'nexblocks-testimonials' => __( 'NexBlocks — Testimonials', 'nexblocks' ),
			'nexblocks-pricing'      => __( 'NexBlocks — Pricing',      'nexblocks' ),
			'nexblocks-faq'          => __( 'NexBlocks — FAQ',          'nexblocks' ),
			'nexblocks-team'         => __( 'NexBlocks — Team',         'nexblocks' ),
			'nexblocks-portfolio'    => __( 'NexBlocks — Portfolio',    'nexblocks' ),
			'nexblocks-blog'         => __( 'NexBlocks — Blog',         'nexblocks' ),
			'nexblocks-contact'      => __( 'NexBlocks — Contact',      'nexblocks' ),
		);

		add_action( 'init', array( $this, 'register_categories' ), 9 );
		add_action( 'init', array( $this, 'register_patterns' ), 10 );
	}

	/**
	 * Register pattern categories.
	 */
	public function register_categories() {
		if ( ! function_exists( 'register_block_pattern_category' ) ) {
			return;
		}

		foreach ( $this->categories as $slug => $label ) {
			register_block_pattern_category(
				$slug,
				array( 'label' => $label )
			);
		}
	}

	/**
	 * Discover and register all pattern files.
	 */
	public function register_patterns() {
		if ( ! function_exists( 'register_block_pattern' ) ) {
			return;
		}

		$patterns_dir = NEXBLOCKS_DIR . '/patterns/';

		if ( ! is_dir( $patterns_dir ) ) {
			return;
		}

		$iterator = new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator( $patterns_dir, RecursiveDirectoryIterator::SKIP_DOTS ),
			RecursiveIteratorIterator::LEAVES_ONLY
		);

		foreach ( $iterator as $file ) {
			if ( 'php' !== $file->getExtension() ) {
				continue;
			}

			$headers = $this->get_pattern_headers( $file->getPathname() );

			if ( empty( $headers['Slug'] ) || empty( $headers['Title'] ) ) {
				continue;
			}

			$content = $this->get_pattern_content( $file->getPathname() );

			if ( empty( $content ) ) {
				continue;
			}

			$categories = array();
			if ( ! empty( $headers['Categories'] ) ) {
				$categories = array_map( 'trim', explode( ',', $headers['Categories'] ) );
			}

			$args = array(
				'title'       => $headers['Title'],
				'content'     => $content,
				'categories'  => $categories,
				'description' => isset( $headers['Description'] ) ? $headers['Description'] : '',
			);

			if ( ! empty( $headers['Keywords'] ) ) {
				$args['keywords'] = array_map( 'trim', explode( ',', $headers['Keywords'] ) );
			}

			register_block_pattern( sanitize_text_field( $headers['Slug'] ), $args );
		}
	}

	/**
	 * Extract pattern file headers from PHPDoc comment.
	 *
	 * @param string $file Path to pattern file.
	 * @return array<string,string>
	 */
	private function get_pattern_headers( $file ) {
		$headers   = array();
		$keys      = array( 'Title', 'Slug', 'Categories', 'Description', 'Keywords' );
		$file_data = file_get_contents( $file, false, null, 0, 2048 ); // phpcs:ignore WordPress.WP.AlternativeFunctions

		if ( false === $file_data ) {
			return $headers;
		}

		foreach ( $keys as $key ) {
			if ( preg_match( '/' . preg_quote( $key, '/' ) . ':\s*(.+)/i', $file_data, $matches ) ) {
				$headers[ $key ] = trim( $matches[1] );
			}
		}

		return $headers;
	}

	/**
	 * Get the rendered pattern content (output buffer, strip PHP tags area).
	 *
	 * @param string $file Path to pattern file.
	 * @return string
	 */
	private function get_pattern_content( $file ) {
		ob_start();
		include $file;
		return ob_get_clean();
	}
}

new NexBlocks_Pattern_Manager();
