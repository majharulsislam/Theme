<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Main index template — blog fallback.
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

		<div class="<?php echo $has_sidebar ? 'layout-with-sidebar sidebar-' . esc_attr( $sidebar_position ) : ''; ?>">

			<main id="main" class="site-main content-area" role="main">

				<?php if ( have_posts() ) : ?>

					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

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
				<aside class="widget-area" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'nexblocks' ); ?>">
					<?php dynamic_sidebar( 'nexblocks-sidebar-main' ); ?>
				</aside>
			<?php endif; ?>

		</div>
	</div>
</div>

<?php get_footer();
