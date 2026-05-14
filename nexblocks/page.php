<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Default page template.
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

			<?php if ( $has_sidebar ) : ?>
				<aside class="widget-area" aria-label="<?php esc_attr_e( 'Page Sidebar', 'nexblocks' ); ?>">
					<?php dynamic_sidebar( 'nexblocks-sidebar-main' ); ?>
				</aside>
			<?php endif; ?>

		</div>
	</div>
</div>

<?php get_footer();
