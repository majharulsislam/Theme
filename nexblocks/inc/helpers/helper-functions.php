<?php
/**
 * Helper Functions
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get a theme option with a default fallback.
 *
 * @param string $key     Option key.
 * @param mixed  $default Default value.
 * @return mixed
 */
function nexblocks_get_option( $key, $default = '' ) {
	return get_theme_mod( $key, $default );
}

/**
 * Output accessible post date with schema markup.
 */
function nexblocks_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s" itemprop="datePublished">%2$s</time>';

	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s" itemprop="datePublished">%2$s</time>'
			. '<time class="updated" datetime="%3$s" itemprop="dateModified" style="display:none;">%4$s</time>';
	}

	$time_string = sprintf(
		$time_string,
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( DATE_W3C ) ),
		esc_html( get_the_modified_date() )
	);

	printf(
		'<span class="posted-on"><span class="screen-reader-text">%s </span><a href="%s" rel="bookmark">%s</a></span>',
		esc_html__( 'Posted on', 'nexblocks' ),
		esc_url( get_permalink() ),
		$time_string // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	);
}

/**
 * Output post author with link.
 */
function nexblocks_posted_by() {
	printf(
		'<span class="byline"><span class="screen-reader-text">%s </span><span class="author vcard" itemprop="author" itemscope itemtype="https://schema.org/Person"><a class="url fn n" href="%s" itemprop="url"><span itemprop="name">%s</span></a></span></span>',
		esc_html__( 'by', 'nexblocks' ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_html( get_the_author() )
	);
}

/**
 * Return estimated reading time in minutes.
 *
 * @param int $post_id Post ID.
 * @return string
 */
function nexblocks_reading_time( $post_id = 0 ) {
	$post_id  = $post_id ? absint( $post_id ) : get_the_ID();
	$content  = get_post_field( 'post_content', $post_id );
	$words    = str_word_count( wp_strip_all_tags( $content ) );
	$minutes  = (int) ceil( $words / 200 );
	$minutes  = max( 1, $minutes );

	return sprintf(
		/* translators: %d: reading time in minutes */
		esc_html( _n( '%d min read', '%d min read', $minutes, 'nexblocks' ) ),
		absint( $minutes )
	);
}

/**
 * Output SEO-friendly breadcrumb trail.
 */
function nexblocks_breadcrumb() {
	if ( is_front_page() ) {
		return;
	}

	$separator = '<span class="breadcrumb-sep" aria-hidden="true"> / </span>';
	$items     = array();

	$items[] = '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'nexblocks' ) . '</a>';

	if ( is_category() || is_single() ) {
		$cats = get_the_category();
		if ( $cats ) {
			$items[] = '<a href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">' . esc_html( $cats[0]->name ) . '</a>';
		}
		if ( is_single() ) {
			$items[] = '<span aria-current="page">' . esc_html( get_the_title() ) . '</span>';
		}
	} elseif ( is_page() ) {
		$ancestors = get_post_ancestors( get_the_ID() );
		foreach ( array_reverse( $ancestors ) as $ancestor ) {
			$items[] = '<a href="' . esc_url( get_permalink( $ancestor ) ) . '">' . esc_html( get_the_title( $ancestor ) ) . '</a>';
		}
		$items[] = '<span aria-current="page">' . esc_html( get_the_title() ) . '</span>';
	} elseif ( is_search() ) {
		$items[] = '<span aria-current="page">' . sprintf( esc_html__( 'Search: %s', 'nexblocks' ), '<em>' . esc_html( get_search_query() ) . '</em>' ) . '</span>';
	} elseif ( is_404() ) {
		$items[] = '<span aria-current="page">' . esc_html__( '404 Not Found', 'nexblocks' ) . '</span>';
	} elseif ( is_archive() ) {
		$items[] = '<span aria-current="page">' . esc_html( get_the_archive_title() ) . '</span>';
	}

	echo '<nav class="breadcrumb" aria-label="' . esc_attr__( 'Breadcrumb', 'nexblocks' ) . '">';
	echo '<ol class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">';

	foreach ( $items as $i => $item ) {
		echo '<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
		echo $item; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo '<meta itemprop="position" content="' . absint( $i + 1 ) . '" />';
		echo '</li>';

		if ( $i < count( $items ) - 1 ) {
			echo $separator; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}

	echo '</ol></nav>';
}

/**
 * Return inline SVG from the icon library.
 *
 * @param string $icon  Icon name.
 * @param string $class Additional CSS classes.
 * @param string $aria  ARIA label (empty = aria-hidden).
 * @return string
 */
function nexblocks_get_svg( $icon, $class = '', $aria = '' ) {
	$icons = nexblocks_icon_library();

	if ( ! isset( $icons[ $icon ] ) ) {
		return '';
	}

	$aria_attrs = $aria
		? 'role="img" aria-label="' . esc_attr( $aria ) . '"'
		: 'aria-hidden="true" focusable="false"';

	$class_attr = $class ? ' class="nexblocks-icon ' . esc_attr( $class ) . '"' : ' class="nexblocks-icon"';

	return '<svg' . $class_attr . ' ' . $aria_attrs . ' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em">' . $icons[ $icon ] . '</svg>';
}

/**
 * Check if WooCommerce is active.
 *
 * @return bool
 */
function nexblocks_is_woocommerce_active() {
	return class_exists( 'WooCommerce' );
}

/**
 * Get sidebar position from customizer.
 *
 * @return string 'left'|'right'|'none'
 */
function nexblocks_get_sidebar_position() {
	$default  = 'right';
	$position = nexblocks_get_option( 'sidebar_position', $default );
	$allowed  = array( 'left', 'right', 'none' );

	return in_array( $position, $allowed, true ) ? $position : $default;
}

/**
 * Output schema.org JSON-LD markup for the current page type.
 *
 * @param string $type Schema type override.
 */
function nexblocks_schema_markup( $type = '' ) {
	$schema = array();

	if ( is_singular( 'post' ) ) {
		$schema = array(
			'@context'         => 'https://schema.org',
			'@type'            => 'BlogPosting',
			'headline'         => get_the_title(),
			'datePublished'    => get_the_date( 'c' ),
			'dateModified'     => get_the_modified_date( 'c' ),
			'author'           => array(
				'@type' => 'Person',
				'name'  => get_the_author(),
			),
			'publisher'        => array(
				'@type' => 'Organization',
				'name'  => get_bloginfo( 'name' ),
			),
			'mainEntityOfPage' => array(
				'@type' => 'WebPage',
				'@id'   => get_permalink(),
			),
		);
	} elseif ( is_front_page() || is_home() ) {
		$schema = array(
			'@context' => 'https://schema.org',
			'@type'    => 'WebSite',
			'name'     => get_bloginfo( 'name' ),
			'url'      => home_url( '/' ),
		);
	} else {
		$schema = array(
			'@context' => 'https://schema.org',
			'@type'    => $type ? sanitize_text_field( $type ) : 'WebPage',
			'name'     => wp_strip_all_tags( get_the_title() ),
			'url'      => get_permalink(),
		);
	}

	if ( $schema ) {
		echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
