<?php
/**
 * Template part: blog loop post card.
 *
 * @package NexBlocks
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?> itemscope itemtype="https://schema.org/BlogPosting">

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-card__thumbnail entry-thumbnail">
			<a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
				<?php the_post_thumbnail( 'nexblocks-blog-thumb', array( 'itemprop' => 'image' ) ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="post-card__body">

		<?php
		$categories = get_the_category();
		if ( $categories ) :
			?>
			<a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="post-card__category" itemprop="about">
				<?php echo esc_html( $categories[0]->name ); ?>
			</a>
		<?php endif; ?>

		<h2 class="post-card__title entry-title" itemprop="headline">
			<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><?php the_title(); ?></a>
		</h2>

		<div class="entry-meta">
			<?php nexblocks_posted_on(); ?>
			<span class="sep">&middot;</span>
			<?php nexblocks_posted_by(); ?>
			<span class="sep">&middot;</span>
			<span class="reading-time">
				<?php echo esc_html( nexblocks_reading_time() ); ?>
			</span>
		</div>

		<?php if ( has_excerpt() ) : ?>
			<div class="post-card__excerpt" itemprop="description">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>

		<a href="<?php the_permalink(); ?>" class="button button--outline" aria-label="<?php echo esc_attr( sprintf( __( 'Read more about %s', 'nexblocks' ), get_the_title() ) ); ?>">
			<?php esc_html_e( 'Read More', 'nexblocks' ); ?>
			<?php echo nexblocks_get_svg( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</a>

	</div>

</article>
