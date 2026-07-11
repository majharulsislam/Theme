<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Header 2 — With Topbar + CTA Button
 *
 * Dark topbar with email/phone/social · Logo left · Nav right · CTA button
 *
 * @package NexBlocks
 */

$sticky = nexblocks_get_option( 'sticky_header', true ) ? ' is-sticky' : '';
?>
<header id="masthead" class="site-header header-2<?php echo esc_attr( $sticky ); ?>" itemscope itemtype="https://schema.org/WPHeader">

	<div class="header-2__topbar">
		<div class="container">
			<div class="header-2__topbar-inner">
				<div class="header-2__topbar-left">
					<?php
					$email = nexblocks_get_option( 'topbar_email', 'hello@example.com' );
					$phone = nexblocks_get_option( 'topbar_phone', '+1 (555) 000-0000' );
					if ( $email ) :
					?>
					<span class="header-2__topbar-item">
						<?php echo nexblocks_get_svg( 'mail', 'topbar-icon', __( 'Email', 'nexblocks' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<a href="mailto:<?php echo esc_attr( antispambot( $email ) ); ?>"><?php echo esc_html( antispambot( $email ) ); ?></a>
					</span>
					<?php endif; ?>
					<?php if ( $phone ) : ?>
					<span class="header-2__topbar-item">
						<?php echo nexblocks_get_svg( 'phone', 'topbar-icon', __( 'Phone', 'nexblocks' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
					</span>
					<?php endif; ?>
				</div>
				<div class="header-2__topbar-right">
					<?php get_template_part( 'template-parts/global/social-links' ); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="header-main header-2__main">
		<div class="container">
			<div class="header-main__inner">

				<?php get_template_part( 'template-parts/global/site-branding' ); ?>

				<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'nexblocks' ); ?>">
					<button class="menu-toggle" aria-controls="primary-menu-2" aria-expanded="false">
						<?php echo nexblocks_get_svg( 'menu', '', __( 'Open menu', 'nexblocks' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'nexblocks' ); ?></span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu-2',
							'container'      => false,
							'menu_class'     => 'nav-menu',
							'walker'         => new NexBlocks_Walker_Nav(),
							'fallback_cb'    => false,
						)
					);
					?>
				</nav>

				<?php
				$btn_text = nexblocks_get_option( 'header_btn_text', __( 'Get Started', 'nexblocks' ) );
				$btn_url  = nexblocks_get_option( 'header_btn_url', '' );
				if ( $btn_text ) :
				?>
				<a href="<?php echo esc_url( $btn_url ? $btn_url : home_url( '/' ) ); ?>" class="button header-2__cta">
					<?php echo esc_html( $btn_text ); ?>
				</a>
				<?php endif; ?>

			</div>
		</div>
	</div>

</header>
