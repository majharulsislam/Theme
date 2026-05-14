<?php
/**
 * WooCommerce Compatibility
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_WooCommerce
 */
class NexBlocks_WooCommerce {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'after_setup_theme',    array( $this, 'setup' ) );
		add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
		add_action( 'woocommerce_before_main_content', array( $this, 'wrapper_start' ), 10 );
		add_action( 'woocommerce_after_main_content',  array( $this, 'wrapper_end' ), 10 );
		add_action( 'woocommerce_sidebar',             array( $this, 'sidebar' ), 10 );
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
	}

	/**
	 * WooCommerce theme support.
	 */
	public function setup() {
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}

	/**
	 * WooCommerce content wrapper start.
	 */
	public function wrapper_start() {
		echo '<div class="container"><div class="layout-with-sidebar sidebar-right"><main id="main" class="site-main content-area">';
	}

	/**
	 * WooCommerce content wrapper end.
	 */
	public function wrapper_end() {
		echo '</main>';
	}

	/**
	 * WooCommerce sidebar.
	 */
	public function sidebar() {
		if ( is_active_sidebar( 'nexblocks-sidebar-woo' ) ) {
			echo '<aside class="widget-area" aria-label="' . esc_attr__( 'Shop Sidebar', 'nexblocks' ) . '">';
			dynamic_sidebar( 'nexblocks-sidebar-woo' );
			echo '</aside>';
		}
		echo '</div></div>';
	}
}

new NexBlocks_WooCommerce();
