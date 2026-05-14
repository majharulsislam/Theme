<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Template part: no content found.
 *
 * @package NexBlocks
 */
?>

<section class="no-results not-found" style="text-align:center;padding:4rem 0;">

	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'nexblocks' ); ?></h1>
	</header>

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
				<?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'nexblocks' ),
						array( 'a' => array( 'href' => array() ) )
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'nexblocks' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'nexblocks' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>

</section>
