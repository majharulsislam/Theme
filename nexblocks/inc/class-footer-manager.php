<?php
/**
 * Footer Manager Class
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Footer_Manager
 *
 * Auto-discovers footer template parts and renders the active one.
 */
class NexBlocks_Footer_Manager {

	/**
	 * Directory containing footer template parts.
	 *
	 * @var string
	 */
	private $footers_dir;

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->footers_dir = NEXBLOCKS_DIR . '/template-parts/footers/';
	}

	/**
	 * Discover all available footer template files.
	 *
	 * @return array<string,string> Slug => label pairs.
	 */
	public function get_available_footers() {
		$footers = array();

		if ( ! is_dir( $this->footers_dir ) ) {
			return $footers;
		}

		$files = glob( $this->footers_dir . '*.php' );

		if ( ! $files ) {
			return $footers;
		}

		foreach ( $files as $file ) {
			$slug           = sanitize_key( basename( $file, '.php' ) );
			$footers[ $slug ] = ucwords( str_replace( '-', ' ', $slug ) );
		}

		ksort( $footers );

		return $footers;
	}

	/**
	 * Get the currently active footer slug.
	 *
	 * @return string
	 */
	public function get_active_footer() {
		$active = nexblocks_get_option( 'active_footer', 'footer-1' );
		return sanitize_key( $active );
	}

	/**
	 * Render the active footer template part.
	 */
	public function render() {
		$slug = $this->get_active_footer();
		$file = $this->footers_dir . $slug . '.php';

		if ( file_exists( $file ) ) {
			get_template_part( 'template-parts/footers/' . $slug );
		} else {
			$this->render_fallback();
		}
	}

	/**
	 * Render a minimal fallback footer.
	 */
	private function render_fallback() {
		?>
		<footer id="colophon" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
			<div class="container">
				<?php if ( is_active_sidebar( 'nexblocks-footer-col-1' ) || is_active_sidebar( 'nexblocks-footer-col-2' ) || is_active_sidebar( 'nexblocks-footer-col-3' ) || is_active_sidebar( 'nexblocks-footer-col-4' ) ) : ?>
					<div class="footer-widgets">
						<?php for ( $col = 1; $col <= 4; $col++ ) : ?>
							<?php if ( is_active_sidebar( 'nexblocks-footer-col-' . $col ) ) : ?>
								<div class="footer-widget-col">
									<?php dynamic_sidebar( 'nexblocks-footer-col-' . $col ); ?>
								</div>
							<?php endif; ?>
						<?php endfor; ?>
					</div>
				<?php endif; ?>
				<div class="footer-bottom">
					<p class="footer-copyright">
						&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>.
						<?php esc_html_e( 'All rights reserved.', 'nexblocks' ); ?>
					</p>
				</div>
			</div>
		</footer>
		<?php
	}
}

$GLOBALS['nexblocks_footer_manager'] = new NexBlocks_Footer_Manager();
