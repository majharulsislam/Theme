<?php
/**
 * Theme Setup Class
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Theme_Setup
 */
class NexBlocks_Theme_Setup {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'after_setup_theme', array( $this, 'content_width' ), 0 );
	}

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	public function setup() {
		load_theme_textdomain( 'nexblocks', NEXBLOCKS_DIR . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// Custom image sizes.
		add_image_size( 'nexblocks-blog-thumb', 800, 450, true );
		add_image_size( 'nexblocks-card',       600, 400, true );
		add_image_size( 'nexblocks-wide',       1200, 600, true );
		add_image_size( 'nexblocks-square',     400, 400, true );
		add_image_size( 'nexblocks-portrait',   450, 600, true );

		add_theme_support(
			'html5',
			array(
				'comment-list',
				'comment-form',
				'search-form',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support( 'editor-styles' );
		add_editor_style( 'editor-style.css' );

		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'width'               => 250,
				'height'              => 100,
				'flex-width'          => true,
				'flex-height'         => true,
				'unlink-homepage-logo' => true,
			)
		);

		add_theme_support(
			'custom-header',
			array(
				'default-image' => '',
				'width'         => 1920,
				'height'        => 600,
				'flex-width'    => true,
				'flex-height'   => true,
			)
		);

		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'ffffff',
			)
		);

		register_nav_menus(
			array(
				'primary'     => esc_html__( 'Primary Menu',      'nexblocks' ),
				'secondary'   => esc_html__( 'Secondary Menu',    'nexblocks' ),
				'mobile'      => esc_html__( 'Mobile Menu',       'nexblocks' ),
				'footer-col-1' => esc_html__( 'Footer Column 1', 'nexblocks' ),
				'footer-col-2' => esc_html__( 'Footer Column 2', 'nexblocks' ),
				'footer-col-3' => esc_html__( 'Footer Column 3', 'nexblocks' ),
				'social'      => esc_html__( 'Social Links Menu', 'nexblocks' ),
			)
		);
	}

	/**
	 * Set the content width in pixels.
	 */
	public function content_width() {
		$GLOBALS['content_width'] = apply_filters( 'nexblocks_content_width', 1200 );
	}
}

new NexBlocks_Theme_Setup();
