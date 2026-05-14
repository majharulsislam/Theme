<?php
/**
 * Template part: numeric pagination.
 *
 * @package NexBlocks
 */

the_posts_pagination(
	array(
		'mid_size'           => 2,
		'prev_text'          => nexblocks_get_svg( 'arrow-left' ) . '<span class="screen-reader-text">' . esc_html__( 'Previous page', 'nexblocks' ) . '</span>',
		'next_text'          => '<span class="screen-reader-text">' . esc_html__( 'Next page', 'nexblocks' ) . '</span>' . nexblocks_get_svg( 'arrow-right' ),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'nexblocks' ) . ' </span>',
	)
);
