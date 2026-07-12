<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Footer 1 — Multi-Column Widgets
 *
 * 4 widget columns · Logo · Copyright · Social links
 *
 * @package NexBlocks
 */

$copyright = nexblocks_get_option( 'footer_copyright', '' );
?>
<footer id="colophon" class="site-footer footer-1" itemscope itemtype="https://schema.org/WPFooter">

	<?php
	$has_widgets = is_active_sidebar( 'nexblocks-footer-col-1' )
		|| is_active_sidebar( 'nexblocks-footer-col-2' )
		|| is_active_sidebar( 'nexblocks-footer-col-3' )
		|| is_active_sidebar( 'nexblocks-footer-col-4' );
	if ( $has_widgets ) :
	?>
	<div class="footer-1__widgets">
		<div class="container">
			<div class="footer-1__widgets-grid">
				<?php for ( $col = 1; $col <= 4; $col++ ) : ?>
					<?php if ( is_active_sidebar( 'nexblocks-footer-col-' . $col ) ) : ?>
					<div class="footer-1__col">
						<?php dynamic_sidebar( 'nexblocks-footer-col-' . $col ); ?>
					</div>
					<?php endif; ?>
				<?php endfor; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="footer-1__bottom">
		<div class="container">
			<div class="footer-1__bottom-inner">
				<p class="footer-copyright">
					<?php
					if ( $copyright ) {
						echo wp_kses_post( $copyright );
					} else {
						printf(
							/* translators: 1: year, 2: site name */
							esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'nexblocks' ),
							esc_html( gmdate( 'Y' ) ),
							'<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>'
						);
					}
					?>
				</p>
				<?php get_template_part( 'template-parts/global/social-links' ); ?>
			</div>
		</div>
	</div>

</footer>
