<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: Blog – Post Grid
 * Slug: nexblocks/blog-grid
 * Categories: nexblocks-blog
 * Description: Three-column blog post card grid with featured images, categories, and excerpts.
 * Keywords: blog, posts, grid, articles, news
 *
 * @package NexBlocks
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-bottom:5rem">
<div style="max-width:1200px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2rem)">

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"},"style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
<div class="wp-block-group" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3rem">
<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(1.5rem,3.5vw,2rem)","fontWeight":"800"},"color":{"text":"#0f172a"}}} --><h2 class="wp-block-heading" style="color:#0f172a;font-size:clamp(1.5rem,3.5vw,2rem);font-weight:800">Latest Articles</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><a href="#" style="color:#2563eb;font-weight:600;text-decoration:none">View all posts &#x2192;</a></p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
<div class="wp-block-columns" style="gap:2rem">

<!-- Post 1 -->
<!-- wp:column {"style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"}}} -->
<div class="wp-block-column" style="background-color:#fff;border-radius:12px;overflow:hidden;box-shadow:0 1px 3px rgba(0,0,0,.08)">
<!-- wp:image --><figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Blog post featured image', 'nexblocks' ); ?>" style="width:100%;height:200px;object-fit:cover;background:#dbeafe;display:block"/></figure><!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-group" style="padding:1.5rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#2563eb"},"spacing":{"margin":{"bottom":"0.75rem"}}}} --><p style="color:#2563eb;font-size:.75rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;margin-bottom:.75rem">WordPress Tips</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700","lineHeight":"1.4"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0.75rem"}}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.125rem;font-weight:700;line-height:1.4;margin-bottom:.75rem">10 Ways to Speed Up Your WordPress Website in 2024</h3><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"1.25rem"}}}} --><p style="color:#64748b;font-size:.9375rem;margin-bottom:1.25rem">Learn the proven techniques that top developers use to achieve perfect PageSpeed scores and blazing fast load times.</p><!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}}} -->
<div class="wp-block-group" style="display:flex;align-items:center;justify-content:space-between">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#94a3b8"}}} --><p style="color:#94a3b8;font-size:.8125rem">Jan 15, 2024 · 5 min read</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p><a href="#" style="color:#2563eb;font-size:.875rem;font-weight:600;text-decoration:none">Read more &#x2192;</a></p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- Post 2 -->
<!-- wp:column {"style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"}}} -->
<div class="wp-block-column" style="background-color:#fff;border-radius:12px;overflow:hidden;box-shadow:0 1px 3px rgba(0,0,0,.08)">
<!-- wp:image --><figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Blog post featured image', 'nexblocks' ); ?>" style="width:100%;height:200px;object-fit:cover;background:#d1fae5;display:block"/></figure><!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-group" style="padding:1.5rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#059669"},"spacing":{"margin":{"bottom":"0.75rem"}}}} --><p style="color:#059669;font-size:.75rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;margin-bottom:.75rem">Design</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700","lineHeight":"1.4"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0.75rem"}}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.125rem;font-weight:700;line-height:1.4;margin-bottom:.75rem">How to Choose the Perfect Color Palette for Your Website</h3><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"1.25rem"}}}} --><p style="color:#64748b;font-size:.9375rem;margin-bottom:1.25rem">Color psychology meets web design. Discover how to pick colors that convert visitors into customers.</p><!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}}} -->
<div class="wp-block-group" style="display:flex;align-items:center;justify-content:space-between">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#94a3b8"}}} --><p style="color:#94a3b8;font-size:.8125rem">Feb 3, 2024 · 7 min read</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p><a href="#" style="color:#2563eb;font-size:.875rem;font-weight:600;text-decoration:none">Read more &#x2192;</a></p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- Post 3 -->
<!-- wp:column {"style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"}}} -->
<div class="wp-block-column" style="background-color:#fff;border-radius:12px;overflow:hidden;box-shadow:0 1px 3px rgba(0,0,0,.08)">
<!-- wp:image --><figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Blog post featured image', 'nexblocks' ); ?>" style="width:100%;height:200px;object-fit:cover;background:#fce7f3;display:block"/></figure><!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-group" style="padding:1.5rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#7c3aed"},"spacing":{"margin":{"bottom":"0.75rem"}}}} --><p style="color:#7c3aed;font-size:.75rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;margin-bottom:.75rem">WooCommerce</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700","lineHeight":"1.4"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0.75rem"}}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.125rem;font-weight:700;line-height:1.4;margin-bottom:.75rem">The Complete Guide to Optimizing Your WooCommerce Checkout</h3><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"bottom":"1.25rem"}}}} --><p style="color:#64748b;font-size:.9375rem;margin-bottom:1.25rem">Reduce cart abandonment by up to 35% with these proven checkout optimization strategies.</p><!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}}} -->
<div class="wp-block-group" style="display:flex;align-items:center;justify-content:space-between">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#94a3b8"}}} --><p style="color:#94a3b8;font-size:.8125rem">Mar 12, 2024 · 9 min read</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p><a href="#" style="color:#2563eb;font-size:.875rem;font-weight:600;text-decoration:none">Read more &#x2192;</a></p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
</div>
<!-- /wp:group -->
