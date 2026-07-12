<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Template Name: No Sidebar
 * Template Post Type: page
 *
 * Standard layout but no sidebar regardless of global setting.
 *
 * @package NexBlocks
 */

get_header();
?>
<div id="content" class="site-content">
	<div class="container">
		<?php nexblocks_breadcrumb(); ?>
		<main id="main" class="site-main content-area" role="main" style="max-width:860px;margin-inline:auto;">
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
