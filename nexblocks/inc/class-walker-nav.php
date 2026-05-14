<?php
/**
 * Accessible Navigation Walker
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Walker_Nav
 *
 * Extends Walker_Nav_Menu with accessible dropdown toggles.
 */
class NexBlocks_Walker_Nav extends Walker_Nav_Menu {

	/**
	 * Starts the element output.
	 *
	 * @param string   $output  Output string.
	 * @param WP_Post  $item    Menu item data object.
	 * @param int      $depth   Depth of menu item.
	 * @param stdClass $args    Menu arguments.
	 * @param int      $id      Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent = $depth ? str_repeat( "\t", $depth ) : '';

		$class_names = implode(
			' ',
			array_filter( (array) $item->classes )
		);
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id_attr = apply_filters( 'nav_menu_item_id', 'menu-item-' . absint( $item->ID ), $item, $args );
		$id_attr = $id_attr ? ' id="' . esc_attr( $id_attr ) . '"' : '';

		$output .= $indent . '<li' . $id_attr . $class_names . '>';

		$attributes = '';
		if ( ! empty( $item->attr_title ) ) {
			$attributes .= ' title="' . esc_attr( $item->attr_title ) . '"';
		}
		if ( ! empty( $item->target ) ) {
			$attributes .= ' target="' . esc_attr( $item->target ) . '"';
		}
		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
			$attributes .= ' rel="noopener noreferrer"';
		} elseif ( ! empty( $item->xfn ) ) {
			$attributes .= ' rel="' . esc_attr( $item->xfn ) . '"';
		}
		if ( ! empty( $item->url ) ) {
			$attributes .= ' href="' . esc_url( $item->url ) . '"';
		}

		$has_children = in_array( 'menu-item-has-children', (array) $item->classes, true );

		if ( $has_children ) {
			$attributes .= ' aria-haspopup="true" aria-expanded="false"';
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = '';
		if ( isset( $args->before ) ) {
			$item_output .= $args->before;
		}

		$item_output .= '<a' . $attributes . '>';
		if ( isset( $args->link_before ) ) {
			$item_output .= $args->link_before;
		}
		$item_output .= $title;
		if ( isset( $args->link_after ) ) {
			$item_output .= $args->link_after;
		}

		if ( $has_children ) {
			$item_output .= '<button class="dropdown-toggle" aria-label="' . esc_attr__( 'Toggle submenu', 'nexblocks' ) . '" aria-expanded="false" tabindex="-1">'
				. nexblocks_get_svg( 'arrow-down', 'dropdown-icon' )
				. '</button>';
		}

		$item_output .= '</a>';
		if ( isset( $args->after ) ) {
			$item_output .= $args->after;
		}

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
