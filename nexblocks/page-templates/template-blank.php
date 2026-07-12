<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Template Name: Blank Canvas
 * Template Post Type: page
 *
 * No header, no footer — outputs only page content between wp_head/wp_footer.
 * For fully custom pages built with blocks.
 *
 * @package NexBlocks
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'nexblocks-blank-canvas' ); ?>>
<?php wp_body_open(); ?>

<main id="main" class="site-main" role="main">
	<?php
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
	?>
</main>

<?php wp_footer(); ?>
</body>
</html>
