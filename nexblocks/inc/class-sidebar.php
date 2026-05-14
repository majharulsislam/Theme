<?php
/**
 * Widget Areas / Sidebars
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Sidebar
 */
class NexBlocks_Sidebar {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );
	}

	/**
	 * Register all widget areas.
	 */
	public function register_sidebars() {
		$sidebars = array(
			array(
				'id'          => 'nexblocks-sidebar-main',
				'name'        => esc_html__( 'Blog / Page Sidebar', 'nexblocks' ),
				'description' => esc_html__( 'Widgets shown in the main sidebar.', 'nexblocks' ),
			),
			array(
				'id'          => 'nexblocks-sidebar-woo',
				'name'        => esc_html__( 'WooCommerce Sidebar', 'nexblocks' ),
				'description' => esc_html__( 'Widgets shown on WooCommerce pages.', 'nexblocks' ),
			),
			array(
				'id'          => 'nexblocks-footer-col-1',
				'name'        => esc_html__( 'Footer Column 1', 'nexblocks' ),
				'description' => esc_html__( 'First footer widget column.', 'nexblocks' ),
			),
			array(
				'id'          => 'nexblocks-footer-col-2',
				'name'        => esc_html__( 'Footer Column 2', 'nexblocks' ),
				'description' => esc_html__( 'Second footer widget column.', 'nexblocks' ),
			),
			array(
				'id'          => 'nexblocks-footer-col-3',
				'name'        => esc_html__( 'Footer Column 3', 'nexblocks' ),
				'description' => esc_html__( 'Third footer widget column.', 'nexblocks' ),
			),
			array(
				'id'          => 'nexblocks-footer-col-4',
				'name'        => esc_html__( 'Footer Column 4', 'nexblocks' ),
				'description' => esc_html__( 'Fourth footer widget column.', 'nexblocks' ),
			),
			array(
				'id'          => 'nexblocks-header-top-left',
				'name'        => esc_html__( 'Header Top Bar Left', 'nexblocks' ),
				'description' => esc_html__( 'Left side of the header top bar.', 'nexblocks' ),
			),
			array(
				'id'          => 'nexblocks-header-top-right',
				'name'        => esc_html__( 'Header Top Bar Right', 'nexblocks' ),
				'description' => esc_html__( 'Right side of the header top bar.', 'nexblocks' ),
			),
			array(
				'id'          => 'nexblocks-404-content',
				'name'        => esc_html__( '404 Page Widget', 'nexblocks' ),
				'description' => esc_html__( 'Widgets displayed on the 404 error page.', 'nexblocks' ),
			),
		);

		foreach ( $sidebars as $sidebar ) {
			register_sidebar(
				array(
					'id'            => $sidebar['id'],
					'name'          => $sidebar['name'],
					'description'   => $sidebar['description'],
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			);
		}
	}
}

new NexBlocks_Sidebar();
