<?php
/**
 * Search results template.
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
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: search query */
					esc_html__( 'Search Results for: %s', 'nexblocks' ),
					'<span>' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>
		</header>

		<div class="<?php echo $has_sidebar ? 'layout-with-sidebar sidebar-' . esc_attr( $sidebar_position ) : ''; ?>">

			<main id="main" class="site-main content-area" role="main">
				<?php if ( have_posts() ) : ?>
					<div class="posts-grid">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content/content', 'search' );
						endwhile;
						?>
					</div>
					<?php get_template_part( 'template-parts/global/pagination' ); ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
				<?php endif; ?>
			</main>

			<?php if ( $has_sidebar ) : ?>
				<aside class="widget-area" aria-label="<?php esc_attr_e( 'Search Sidebar', 'nexblocks' ); ?>">
					<?php dynamic_sidebar( 'nexblocks-sidebar-main' ); ?>
				</aside>
			<?php endif; ?>

		</div>
	</div>
</div>

<?php get_footer();
