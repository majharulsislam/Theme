<?php
/**
 * NexBlocks Theme Functions
 *
 * @package NexBlocks
 * @version 1.0.0
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NEXBLOCKS_VERSION', '1.0.0' );
define( 'NEXBLOCKS_DIR', get_template_directory() );
define( 'NEXBLOCKS_URI', get_template_directory_uri() );

// Helpers first — other classes depend on them.
require_once NEXBLOCKS_DIR . '/inc/helpers/helper-icons.php';
require_once NEXBLOCKS_DIR . '/inc/helpers/helper-functions.php';

require_once NEXBLOCKS_DIR . '/inc/class-theme-setup.php';
require_once NEXBLOCKS_DIR . '/inc/class-enqueue.php';
require_once NEXBLOCKS_DIR . '/inc/class-walker-nav.php';
require_once NEXBLOCKS_DIR . '/inc/class-sidebar.php';
require_once NEXBLOCKS_DIR . '/inc/class-header-manager.php';
require_once NEXBLOCKS_DIR . '/inc/class-footer-manager.php';
require_once NEXBLOCKS_DIR . '/inc/class-template-manager.php';
require_once NEXBLOCKS_DIR . '/inc/customizer/class-customizer.php';
require_once NEXBLOCKS_DIR . '/inc/class-pattern-manager.php';

if ( class_exists( 'WooCommerce' ) ) {
	require_once NEXBLOCKS_DIR . '/inc/class-woocommerce.php';
}
