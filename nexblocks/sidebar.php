<?php
/**
 * Default sidebar template.
 *
 * @package NexBlocks
 */

if ( ! is_active_sidebar( 'nexblocks-sidebar-main' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" aria-label="<?php esc_attr_e( 'Sidebar', 'nexblocks' ); ?>">
	<?php dynamic_sidebar( 'nexblocks-sidebar-main' ); ?>
</aside>
