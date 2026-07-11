<?php
/**
 * Page Template Manager
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Template_Manager
 *
 * Auto-discovers page templates from the page-templates/ directory.
 */
class NexBlocks_Template_Manager {

	/**
	 * Templates directory.
	 *
	 * @var string
	 */
	private $templates_dir;

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->templates_dir = NEXBLOCKS_DIR . '/page-templates/';
		add_filter( 'theme_page_templates', array( $this, 'register_templates' ) );
		add_filter( 'template_include',     array( $this, 'load_template' ) );
	}

	/**
	 * Scan directory and return all discovered page templates.
	 *
	 * @param array $templates Existing template list.
	 * @return array
	 */
	public function register_templates( $templates ) {
		if ( ! is_dir( $this->templates_dir ) ) {
			return $templates;
		}

		$files = glob( $this->templates_dir . '*.php' );

		if ( ! $files ) {
			return $templates;
		}

		foreach ( $files as $file ) {
			$headers = get_file_data(
				$file,
				array( 'Template Name' => 'Template Name' )
			);

			if ( ! empty( $headers['Template Name'] ) ) {
				$relative                  = 'page-templates/' . basename( $file );
				$templates[ $relative ] = sanitize_text_field( $headers['Template Name'] );
			}
		}

		return $templates;
	}

	/**
	 * Include the correct template file when it lives in page-templates/.
	 *
	 * @param string $template Template path.
	 * @return string
	 */
	public function load_template( $template ) {
		if ( is_page() ) {
			$slug = get_page_template_slug();
			if ( $slug && 0 === strpos( $slug, 'page-templates/' ) ) {
				$candidate = get_theme_file_path( $slug );
				if ( file_exists( $candidate ) ) {
					return $candidate;
				}
			}
		}

		return $template;
	}
}

new NexBlocks_Template_Manager();
