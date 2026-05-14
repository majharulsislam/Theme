<?php
/**
 * Template part: site branding (logo + name + tagline).
 *
 * @package NexBlocks
 */
?>

<div class="site-branding" itemscope itemtype="https://schema.org/Organization">

	<?php if ( has_custom_logo() ) : ?>
		<div class="site-logo">
			<?php the_custom_logo(); ?>
		</div>
	<?php endif; ?>

	<?php if ( ! has_custom_logo() || is_customize_preview() ) : ?>
		<div class="site-name-wrap<?php echo has_custom_logo() ? ' screen-reader-text' : ''; ?>">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title" itemprop="name">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			<?php else : ?>
				<p class="site-title" itemprop="name">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
						<?php bloginfo( 'name' ); ?>
					</a>
				</p>
			<?php endif; ?>

			<?php
			$nexblocks_description = get_bloginfo( 'description', 'display' );
			if ( $nexblocks_description || is_customize_preview() ) :
				?>
				<p class="site-description" itemprop="description"><?php echo esc_html( $nexblocks_description ); ?></p>
			<?php endif; ?>
		</div>
	<?php endif; ?>

</div>
