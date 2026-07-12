<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Template Name: Landing Page
 * Template Post Type: page
 *
 * Minimal landing page — no footer widgets, no sidebar, no breadcrumb.
 * Ideal for sales or campaign pages.
 *
 * @package NexBlocks
 */

get_header();
?>
<div id="content" class="site-content nexblocks-landing">
	<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
		?>
	</main>
</div>
<?php get_footer();
