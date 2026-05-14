<?php
/**
 * Front page template.
 *
 * @package NexBlocks
 */

get_header();
?>

<div id="content" class="site-content">
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
