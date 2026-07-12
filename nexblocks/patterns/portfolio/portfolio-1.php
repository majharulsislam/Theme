<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: Portfolio – Masonry Grid
 * Slug: nexblocks/portfolio-grid
 * Categories: nexblocks-portfolio
 * Description: Six-item portfolio/gallery grid showcasing work samples with category labels.
 * Keywords: portfolio, gallery, work, projects, grid
 *
 * @package NexBlocks
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}},"color":{"background":"#f8fafc"}}} -->
<div class="wp-block-group alignfull" style="background-color:#f8fafc;padding-top:5rem;padding-bottom:5rem">
<div style="max-width:1200px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2rem)">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"},"style":{"spacing":{"blockGap":"0.75rem","margin":{"bottom":"3.5rem"}}}} -->
<div class="wp-block-group" style="margin-bottom:3.5rem">
<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"clamp(1.75rem,4vw,2.5rem)","fontWeight":"800"},"color":{"text":"#0f172a"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#0f172a;font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800">Our Recent Work</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"1.0625rem"}}} -->
<p class="has-text-align-center" style="color:#64748b;font-size:1.0625rem">A selection of websites built with NexBlocks across different industries and styles.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- Row 1 -->
<!-- wp:columns {"style":{"spacing":{"blockGap":"1.5rem","margin":{"bottom":"1.5rem"}}}} -->
<div class="wp-block-columns" style="gap:1.5rem;margin-bottom:1.5rem">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"background":"#ffffff"}}} -->
<div class="wp-block-group" style="background-color:#fff;border-radius:12px;overflow:hidden">
<!-- wp:image --><figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'E-commerce website project', 'nexblocks' ); ?>" style="width:100%;height:240px;object-fit:cover;background:#dbeafe;display:block"/></figure><!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}}}} -->
<div class="wp-block-group" style="padding:1.25rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#2563eb"}}} --><p style="color:#2563eb;font-size:.75rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase">E-Commerce</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"},"color":{"text":"#0f172a"}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.125rem;font-weight:700">Fashion Boutique Store</h3><!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"}}} -->
<div class="wp-block-group" style="background-color:#fff;border-radius:12px;overflow:hidden">
<!-- wp:image --><figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Agency website project', 'nexblocks' ); ?>" style="width:100%;height:240px;object-fit:cover;background:#d1fae5;display:block"/></figure><!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}}}} -->
<div class="wp-block-group" style="padding:1.25rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#059669"}}} --><p style="color:#059669;font-size:.75rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase">Agency</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"},"color":{"text":"#0f172a"}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.125rem;font-weight:700">Digital Marketing Agency</h3><!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"}}} -->
<div class="wp-block-group" style="background-color:#fff;border-radius:12px;overflow:hidden">
<!-- wp:image --><figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Blog website project', 'nexblocks' ); ?>" style="width:100%;height:240px;object-fit:cover;background:#fce7f3;display:block"/></figure><!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}}}} -->
<div class="wp-block-group" style="padding:1.25rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#7c3aed"}}} --><p style="color:#7c3aed;font-size:.75rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase">Blog</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"},"color":{"text":"#0f172a"}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.125rem;font-weight:700">Lifestyle &amp; Travel Blog</h3><!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- View all button -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2rem">
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#2563eb"},"border":{"radius":"6px","color":"#2563eb","width":"2px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color" href="#" style="color:#2563eb;border:2px solid #2563eb;border-radius:6px;padding:.875rem 2rem">View All Projects &#x2192;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
</div>
<!-- /wp:group -->
