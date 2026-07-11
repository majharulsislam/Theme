<?php
/**
 * WooCommerce Archive Product template override.
 *
 * @package NexBlocks
 * @see https://docs.woocommerce.com/document/template-structure/
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<?php do_action( 'woocommerce_before_main_content' ); ?>

	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php do_action( 'woocommerce_archive_description' ); ?>

	<?php if ( woocommerce_product_loop() ) : ?>

		<?php
		do_action( 'woocommerce_before_shop_loop' );
		woocommerce_product_loop_start();

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();
				do_action( 'woocommerce_shop_loop' );
				wc_get_template_part( 'content', 'product' );
			}
		}

		woocommerce_product_loop_end();
		do_action( 'woocommerce_after_shop_loop' );
		?>

	<?php else : ?>
		<?php do_action( 'woocommerce_no_products_found' ); ?>
	<?php endif; ?>

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php do_action( 'woocommerce_sidebar' ); ?>

<?php get_footer( 'shop' );
