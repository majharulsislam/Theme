<?php
/**
 * Template part: single post content.
 *
 * @package NexBlocks
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/BlogPosting">

	<?php nexblocks_schema_markup( 'BlogPosting' ); ?>

	<header class="entry-header">

		<?php
		$categories = get_the_category();
		if ( $categories ) :
			foreach ( $categories as $cat ) :
				echo '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '" class="post-card__category">' . esc_html( $cat->name ) . '</a> ';
			endforeach;
		endif;
		?>

		<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php nexblocks_posted_on(); ?>
			<span class="sep">&middot;</span>
			<?php nexblocks_posted_by(); ?>
			<span class="sep">&middot;</span>
			<span class="reading-time"><?php echo esc_html( nexblocks_reading_time() ); ?></span>
			<?php
			$comment_count = get_comments_number();
			if ( $comment_count > 0 ) :
				?>
				<span class="sep">&middot;</span>
				<a href="#comments">
					<?php echo nexblocks_get_svg( 'comment' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					<?php echo esc_html( $comment_count ); ?>
				</a>
			<?php endif; ?>
		</div>

	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail" style="margin-bottom:2rem;border-radius:12px;overflow:hidden;">
			<?php the_post_thumbnail( 'nexblocks-wide', array( 'itemprop' => 'image' ) ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content" itemprop="articleBody">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nexblocks' ),
					array( 'span' => array( 'class' => array() ) )
				),
				esc_html( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nexblocks' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer class="entry-footer">
		<?php
		$tags = get_the_tags();
		if ( $tags ) :
			echo '<div class="entry-tags">';
			echo nexblocks_get_svg( 'tag', '', __( 'Tags', 'nexblocks' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			foreach ( $tags as $tag ) :
				echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" class="tag-link">' . esc_html( $tag->name ) . '</a> ';
			endforeach;
			echo '</div>';
		endif;
		?>
	</footer>

</article>
