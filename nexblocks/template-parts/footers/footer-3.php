<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Footer 3 — Newsletter + 3 Widget Columns
 *
 * Newsletter banner · 3 widget columns · Bottom bar
 *
 * @package NexBlocks
 */

$copyright       = nexblocks_get_option( 'footer_copyright', '' );
$newsletter_title = nexblocks_get_option( 'footer_newsletter_title', __( 'Stay in the loop', 'nexblocks' ) );
$newsletter_desc  = nexblocks_get_option( 'footer_newsletter_desc', __( 'Get the latest news and updates delivered to your inbox.', 'nexblocks' ) );
?>
<footer id="colophon" class="site-footer footer-3" itemscope itemtype="https://schema.org/WPFooter">

	<div class="footer-3__newsletter">
		<div class="container">
			<div class="footer-3__newsletter-inner">
				<div class="footer-3__newsletter-text">
					<h2 class="footer-3__newsletter-title"><?php echo esc_html( $newsletter_title ); ?></h2>
					<p><?php echo esc_html( $newsletter_desc ); ?></p>
				</div>
				<form class="footer-3__newsletter-form" action="<?php echo esc_url( nexblocks_get_option( 'newsletter_action_url', '#' ) ); ?>" method="post">
					<div class="footer-3__newsletter-field">
						<label for="footer-newsletter-email" class="screen-reader-text"><?php esc_html_e( 'Email address', 'nexblocks' ); ?></label>
						<input
							type="email"
							id="footer-newsletter-email"
							name="EMAIL"
							placeholder="<?php esc_attr_e( 'Enter your email address', 'nexblocks' ); ?>"
							required
							autocomplete="email"
						/>
						<button type="submit" class="button">
							<?php esc_html_e( 'Subscribe', 'nexblocks' ); ?>
							<?php echo nexblocks_get_svg( 'arrow-right' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</button>
					</div>
					<p class="footer-3__newsletter-consent">
						<?php esc_html_e( 'By subscribing you agree to our privacy policy. Unsubscribe anytime.', 'nexblocks' ); ?>
					</p>
					<?php wp_nonce_field( 'nexblocks_newsletter', 'nexblocks_newsletter_nonce' ); ?>
				</form>
			</div>
		</div>
	</div>

	<?php
	$has_widgets = is_active_sidebar( 'nexblocks-footer-col-1' )
		|| is_active_sidebar( 'nexblocks-footer-col-2' )
		|| is_active_sidebar( 'nexblocks-footer-col-3' );
	if ( $has_widgets ) :
	?>
	<div class="footer-3__widgets">
		<div class="container">
			<div class="footer-3__widgets-grid">
				<?php for ( $col = 1; $col <= 3; $col++ ) : ?>
					<?php if ( is_active_sidebar( 'nexblocks-footer-col-' . $col ) ) : ?>
					<div class="footer-3__col">
						<?php dynamic_sidebar( 'nexblocks-footer-col-' . $col ); ?>
					</div>
					<?php endif; ?>
				<?php endfor; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="footer-3__bottom">
		<div class="container">
			<div class="footer-3__bottom-inner">
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
