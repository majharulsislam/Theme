<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Template part: search result item.
 *
 * @package NexBlocks
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-card__thumbnail entry-thumbnail">
			<a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
				<?php the_post_thumbnail( 'nexblocks-card' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="post-card__body">

		<h2 class="post-card__title entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>

		<div class="entry-meta">
			<?php nexblocks_posted_on(); ?>
			<span class="sep">&middot;</span>
			<span><?php echo esc_html( ucfirst( get_post_type() ) ); ?></span>
		</div>

		<div class="post-card__excerpt">
			<?php the_excerpt(); ?>
		</div>

		<a href="<?php the_permalink(); ?>" class="button">
			<?php esc_html_e( 'View Result', 'nexblocks' ); ?>
			<?php echo nexblocks_get_svg( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</a>

	</div>

</article>
