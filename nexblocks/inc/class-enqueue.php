<?php
/**
 * Asset Enqueue Class
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Enqueue
 */
class NexBlocks_Enqueue {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_conditional' ) );
	}

	/**
	 * Enqueue stylesheets.
	 */
	public function enqueue_styles() {
		wp_enqueue_style(
			'nexblocks-main',
			get_theme_file_uri( 'assets/css/main.css' ),
			array(),
			NEXBLOCKS_VERSION
		);

		// RTL support.
		wp_style_add_data( 'nexblocks-main', 'rtl', 'replace' );

		// Active header CSS.
		$active_header = nexblocks_get_option( 'active_header', 'header-1' );
		$header_css    = get_theme_file_uri( 'assets/css/headers/' . sanitize_file_name( $active_header ) . '.css' );
		if ( file_exists( get_theme_file_path( 'assets/css/headers/' . sanitize_file_name( $active_header ) . '.css' ) ) ) {
			wp_enqueue_style(
				'nexblocks-header',
				$header_css,
				array( 'nexblocks-main' ),
				NEXBLOCKS_VERSION
			);
		}

		// Active footer CSS.
		$active_footer = nexblocks_get_option( 'active_footer', 'footer-1' );
		$footer_css    = get_theme_file_uri( 'assets/css/footers/' . sanitize_file_name( $active_footer ) . '.css' );
		if ( file_exists( get_theme_file_path( 'assets/css/footers/' . sanitize_file_name( $active_footer ) . '.css' ) ) ) {
			wp_enqueue_style(
				'nexblocks-footer',
				$footer_css,
				array( 'nexblocks-main' ),
				NEXBLOCKS_VERSION
			);
		}

		// Per-template CSS.
		if ( is_page_template() ) {
			$template = get_page_template_slug();
			$slug     = sanitize_file_name( basename( $template, '.php' ) );
			$css_file = get_theme_file_path( 'assets/css/templates/' . $slug . '.css' );
			if ( file_exists( $css_file ) ) {
				wp_enqueue_style(
					'nexblocks-template-' . $slug,
					get_theme_file_uri( 'assets/css/templates/' . $slug . '.css' ),
					array( 'nexblocks-main' ),
					NEXBLOCKS_VERSION
				);
			}
		}

		// WooCommerce styles.
		if ( class_exists( 'WooCommerce' ) && ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) ) {
			wp_enqueue_style(
				'nexblocks-woocommerce',
				get_theme_file_uri( 'assets/css/woocommerce.css' ),
				array( 'nexblocks-main' ),
				NEXBLOCKS_VERSION
			);
		}
	}

	/**
	 * Enqueue scripts.
	 */
	public function enqueue_scripts() {
		wp_enqueue_script(
			'nexblocks-main',
			get_theme_file_uri( 'assets/js/main.js' ),
			array(),
			NEXBLOCKS_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);

		wp_localize_script(
			'nexblocks-main',
			'nexblocksData',
			array(
				'ajaxurl'       => admin_url( 'admin-ajax.php' ),
				'nonce'         => wp_create_nonce( 'nexblocks-nonce' ),
				'themeUri'      => esc_url( NEXBLOCKS_URI ),
				'currentHeader' => esc_js( nexblocks_get_option( 'active_header', 'header-1' ) ),
				'currentFooter' => esc_js( nexblocks_get_option( 'active_footer', 'footer-1' ) ),
			)
		);
	}

	/**
	 * Enqueue conditional scripts and styles.
	 */
	public function enqueue_conditional() {
		// Skip link focus fix.
		wp_enqueue_script(
			'nexblocks-skip-link-focus-fix',
			get_theme_file_uri( 'assets/js/skip-link-focus-fix.js' ),
			array(),
			NEXBLOCKS_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);

		// Comments reply.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// MediaElement on single posts with media.
		if ( is_singular() && wp_attachment_is( 'audio' ) || is_singular() && wp_attachment_is( 'video' ) ) {
			wp_enqueue_style( 'wp-mediaelement' );
			wp_enqueue_script( 'wp-mediaelement' );
		}
	}
}

new NexBlocks_Enqueue();
