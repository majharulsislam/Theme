<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Template Name: Full Width
 * Template Post Type: page
 *
 * Full-width layout — no sidebar, edge-to-edge container.
 *
 * @package NexBlocks
 */

get_header();
?>
<div id="content" class="site-content">
	<div class="container">
		<?php nexblocks_breadcrumb(); ?>
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'page' );
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
			?>
		</main>
	</div>
</div>
<?php get_footer();
