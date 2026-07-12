<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Template Name: Wide Layout
 * Template Post Type: page
 *
 * Full browser-width content — no max-width constraint.
 *
 * @package NexBlocks
 */

get_header();
?>
<div id="content" class="site-content">
	<main id="main" class="site-main nexblocks-wide-layout" role="main">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
		?>
	</main>
</div>
<?php get_footer();
