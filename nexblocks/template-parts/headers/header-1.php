<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Header 1 — Standard Sticky
 *
 * Logo left · Navigation right · Search + Cart icons · Mobile toggle
 *
 * @package NexBlocks
 */

$sticky      = nexblocks_get_option( 'sticky_header', true ) ? ' is-sticky' : '';
$transparent = ( nexblocks_get_option( 'transparent_header', false ) && is_front_page() ) ? ' is-transparent' : '';
?>
<header id="masthead" class="site-header header-1<?php echo esc_attr( $sticky . $transparent ); ?>" itemscope itemtype="https://schema.org/WPHeader">

	<?php if ( is_active_sidebar( 'nexblocks-header-top-left' ) || is_active_sidebar( 'nexblocks-header-top-right' ) ) : ?>
	<div class="header-topbar">
		<div class="container">
			<div class="header-topbar__inner">
				<div class="header-topbar__left">
					<?php dynamic_sidebar( 'nexblocks-header-top-left' ); ?>
				</div>
				<div class="header-topbar__right">
					<?php dynamic_sidebar( 'nexblocks-header-top-right' ); ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="header-main">
		<div class="container">
			<div class="header-main__inner">

				<?php get_template_part( 'template-parts/global/site-branding' ); ?>

				<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'nexblocks' ); ?>">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<?php echo nexblocks_get_svg( 'menu', '', __( 'Open menu', 'nexblocks' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'nexblocks' ); ?></span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'menu_class'     => 'nav-menu',
							'walker'         => new NexBlocks_Walker_Nav(),
							'fallback_cb'    => false,
						)
					);
					?>
				</nav>

				<div class="header-actions" role="toolbar" aria-label="<?php esc_attr_e( 'Header actions', 'nexblocks' ); ?>">
					<button class="search-toggle header-icon-btn" aria-label="<?php esc_attr_e( 'Open search', 'nexblocks' ); ?>" aria-expanded="false" aria-controls="search-overlay">
						<?php echo nexblocks_get_svg( 'search' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</button>
					<?php if ( nexblocks_is_woocommerce_active() ) : ?>
					<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="header-cart header-icon-btn" aria-label="<?php esc_attr_e( 'Shopping cart', 'nexblocks' ); ?>">
						<?php echo nexblocks_get_svg( 'cart' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<?php if ( function_exists( 'WC' ) && WC()->cart ) : ?>
						<span class="header-cart__count" aria-live="polite"><?php echo absint( WC()->cart->get_cart_contents_count() ); ?></span>
						<?php endif; ?>
					</a>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>

	<div id="search-overlay" class="search-overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Search', 'nexblocks' ); ?>">
		<div class="search-form-inner">
			<?php get_search_form(); ?>
		</div>
		<button id="search-overlay-close" class="search-overlay__close" aria-label="<?php esc_attr_e( 'Close search', 'nexblocks' ); ?>">
			<?php echo nexblocks_get_svg( 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</button>
	</div>

</header>
