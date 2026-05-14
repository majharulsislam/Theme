<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * 404 error page template.
 *
 * @package NexBlocks
 */

get_header();
?>

<div id="content" class="site-content">
	<div class="container">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found" style="text-align:center;padding:4rem 0;">

				<h1 class="page-title" style="font-size:clamp(4rem,15vw,8rem);line-height:1;color:var(--nexblocks-color-primary);margin-bottom:.25rem;">404</h1>

				<h2><?php esc_html_e( 'Page Not Found', 'nexblocks' ); ?></h2>

				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'nexblocks' ); ?></p>

				<div style="max-width:500px;margin:2rem auto;">
					<?php get_search_form(); ?>
				</div>

				<?php if ( is_active_sidebar( 'nexblocks-404-content' ) ) : ?>
					<div class="widget-area" style="max-width:800px;margin:3rem auto;text-align:left;">
						<?php dynamic_sidebar( 'nexblocks-404-content' ); ?>
					</div>
				<?php endif; ?>

				<p style="margin-top:2rem;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">
						<?php echo nexblocks_get_svg( 'home', '', __( 'Home', 'nexblocks' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<?php esc_html_e( 'Return Home', 'nexblocks' ); ?>
					</a>
				</p>

			</section>

		</main>
	</div>
</div>

<?php get_footer();
