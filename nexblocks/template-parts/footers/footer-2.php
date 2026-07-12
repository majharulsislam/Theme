<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Footer 2 — Minimal Single Row
 *
 * Logo left · Copyright center · Social links right
 *
 * @package NexBlocks
 */

$copyright = nexblocks_get_option( 'footer_copyright', '' );
?>
<footer id="colophon" class="site-footer footer-2" itemscope itemtype="https://schema.org/WPFooter">
	<div class="container">
		<div class="footer-2__inner">

			<div class="footer-2__brand">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-2__site-name">
						<?php bloginfo( 'name' ); ?>
					</a>
				<?php endif; ?>
			</div>

			<p class="footer-copyright">
				<?php
				if ( $copyright ) {
					echo wp_kses_post( $copyright );
				} else {
					printf(
						/* translators: 1: year, 2: site name */
						esc_html__( '&copy; %1$s %2$s', 'nexblocks' ),
						esc_html( gmdate( 'Y' ) ),
						esc_html( get_bloginfo( 'name' ) )
					);
				}
				?>
			</p>

			<?php get_template_part( 'template-parts/global/social-links' ); ?>

		</div>
	</div>
</footer>
