<?php
/**
 * Header Manager Class
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Header_Manager
 *
 * Auto-discovers header template parts and renders the active one.
 */
class NexBlocks_Header_Manager {

	/**
	 * Directory containing header template parts.
	 *
	 * @var string
	 */
	private $headers_dir;

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->headers_dir = NEXBLOCKS_DIR . '/template-parts/headers/';
	}

	/**
	 * Discover all available header template files.
	 *
	 * @return array<string,string> Slug => label pairs.
	 */
	public function get_available_headers() {
		$headers = array();

		if ( ! is_dir( $this->headers_dir ) ) {
			return $headers;
		}

		$files = glob( $this->headers_dir . '*.php' );

		if ( ! $files ) {
			return $headers;
		}

		foreach ( $files as $file ) {
			$slug           = sanitize_key( basename( $file, '.php' ) );
			$headers[ $slug ] = ucwords( str_replace( '-', ' ', $slug ) );
		}

		ksort( $headers );

		return $headers;
	}

	/**
	 * Get the currently active header slug.
	 *
	 * @return string
	 */
	public function get_active_header() {
		$active = nexblocks_get_option( 'active_header', 'header-1' );
		return sanitize_key( $active );
	}

	/**
	 * Render the active header template part.
	 */
	public function render() {
		$slug = $this->get_active_header();
		$file = $this->headers_dir . $slug . '.php';

		if ( file_exists( $file ) ) {
			get_template_part( 'template-parts/headers/' . $slug );
		} else {
			// Fallback: basic header.
			$this->render_fallback();
		}
	}

	/**
	 * Render a minimal fallback header.
	 */
	private function render_fallback() {
		?>
		<header id="masthead" class="site-header site-header--default" itemscope itemtype="https://schema.org/WPHeader">
			<div class="container">
				<div class="site-header__inner">
					<div class="site-branding">
						<?php get_template_part( 'template-parts/global/site-branding' ); ?>
					</div>
					<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'nexblocks' ); ?>">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<?php echo nexblocks_get_svg( 'menu', '', __( 'Menu', 'nexblocks' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span><?php esc_html_e( 'Menu', 'nexblocks' ); ?></span>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
								'container'      => false,
								'menu_class'     => 'nav-menu',
								'walker'         => new NexBlocks_Walker_Nav(),
								'fallback_cb'    => false,
							)
						);
						?>
					</nav>
				</div>
			</div>
		</header>
		<?php
	}
}

// Global instance.
$GLOBALS['nexblocks_header_manager'] = new NexBlocks_Header_Manager();
