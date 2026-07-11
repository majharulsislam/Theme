<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#main">
		<?php esc_html_e( 'Skip to content', 'nexblocks' ); ?>
	</a>

	<?php
	if ( isset( $GLOBALS['nexblocks_header_manager'] ) ) {
		$GLOBALS['nexblocks_header_manager']->render();
	}
	?>
