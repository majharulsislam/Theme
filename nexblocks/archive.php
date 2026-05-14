<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Archive template.
 *
 * @package NexBlocks
 */

get_header();

$sidebar_position = nexblocks_get_sidebar_position();
$has_sidebar      = ( 'none' !== $sidebar_position ) && is_active_sidebar( 'nexblocks-sidebar-main' );
?>

<div id="content" class="site-content">
	<div class="container">
		<?php nexblocks_breadcrumb(); ?>

		<header class="page-header" style="margin-bottom:2rem;">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</header>

		<div class="<?php echo $has_sidebar ? 'layout-with-sidebar sidebar-' . esc_attr( $sidebar_position ) : ''; ?>">

			<main id="main" class="site-main content-area" role="main">
				<?php if ( have_posts() ) : ?>
					<div class="posts-grid">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content/content' );
						endwhile;
						?>
					</div>
					<?php get_template_part( 'template-parts/global/pagination' ); ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
				<?php endif; ?>
			</main>

			<?php if ( $has_sidebar ) : ?>
				<aside class="widget-area" aria-label="<?php esc_attr_e( 'Archive Sidebar', 'nexblocks' ); ?>">
					<?php dynamic_sidebar( 'nexblocks-sidebar-main' ); ?>
				</aside>
			<?php endif; ?>

		</div>
	</div>
</div>

<?php get_footer();
