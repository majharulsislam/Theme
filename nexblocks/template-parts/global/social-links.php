<?php
/**
 * Template part: social links menu.
 *
 * @package NexBlocks
 */

if ( ! has_nav_menu( 'social' ) ) {
	return;
}

wp_nav_menu(
	array(
		'theme_location'  => 'social',
		'container'       => 'nav',
		'container_class' => 'social-links',
		'container_id'    => 'social-links',
		'menu_class'      => 'social-links__list',
		'depth'           => 1,
		'link_before'     => '<span class="screen-reader-text">',
		'link_after'      => '</span>',
		'fallback_cb'     => false,
	)
);
