<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Header 3 — Centered Logo
 *
 * Navigation split left · Logo centered · Secondary nav + search right
 *
 * @package NexBlocks
 */

$sticky      = nexblocks_get_option( 'sticky_header', true ) ? ' is-sticky' : '';
$transparent = ( nexblocks_get_option( 'transparent_header', false ) && is_front_page() ) ? ' is-transparent' : '';
?>
<header id="masthead" class="site-header header-3<?php echo esc_attr( $sticky . $transparent ); ?>" itemscope itemtype="https://schema.org/WPHeader">

	<div class="header-main header-3__main">
		<div class="container">
			<div class="header-3__inner">

				<nav class="main-navigation header-3__nav-left" aria-label="<?php esc_attr_e( 'Primary menu', 'nexblocks' ); ?>">
					<button class="menu-toggle header-3__toggle" aria-controls="primary-menu-3" aria-expanded="false">
						<?php echo nexblocks_get_svg( 'menu', '', __( 'Open menu', 'nexblocks' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu-3',
							'container'      => false,
							'menu_class'     => 'nav-menu',
							'walker'         => new NexBlocks_Walker_Nav(),
							'fallback_cb'    => false,
						)
					);
					?>
				</nav>

				<div class="header-3__brand">
					<?php get_template_part( 'template-parts/global/site-branding' ); ?>
				</div>

				<div class="header-3__right">
					<?php if ( has_nav_menu( 'secondary' ) ) : ?>
					<nav class="main-navigation header-3__nav-right" aria-label="<?php esc_attr_e( 'Secondary menu', 'nexblocks' ); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'secondary',
								'menu_id'        => 'secondary-menu-3',
								'container'      => false,
								'menu_class'     => 'nav-menu',
								'walker'         => new NexBlocks_Walker_Nav(),
								'fallback_cb'    => false,
								'depth'          => 1,
							)
						);
						?>
					</nav>
					<?php endif; ?>

					<div class="header-actions">
						<button class="search-toggle header-icon-btn" aria-label="<?php esc_attr_e( 'Open search', 'nexblocks' ); ?>" aria-expanded="false" aria-controls="search-overlay-3">
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
	</div>

	<div id="search-overlay-3" class="search-overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Search', 'nexblocks' ); ?>">
		<div class="search-form-inner">
			<?php get_search_form(); ?>
		</div>
		<button id="search-overlay-close" class="search-overlay__close" aria-label="<?php esc_attr_e( 'Close search', 'nexblocks' ); ?>">
			<?php echo nexblocks_get_svg( 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</button>
	</div>

</header>
