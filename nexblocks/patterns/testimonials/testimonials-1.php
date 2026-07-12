<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: Testimonials – Three Column Grid
 * Slug: nexblocks/testimonials-grid
 * Categories: nexblocks-testimonials
 * Description: Three testimonial cards in a row with star ratings, quotes, and author info.
 * Keywords: testimonials, reviews, social proof, cards
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
<h2 class="wp-block-heading has-text-align-center" style="color:#0f172a;font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800">What Our Customers Say</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"1.0625rem"}}} -->
<p class="has-text-align-center" style="color:#64748b;font-size:1.0625rem">Thousands of developers and designers trust NexBlocks to build exceptional websites.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-columns" style="gap:1.5rem">

<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"color":{"background":"#ffffff"}}} -->
<div class="wp-block-column" style="background-color:#fff;border-radius:12px;padding:2rem;box-shadow:0 1px 3px rgba(0,0,0,.08)">
<!-- wp:paragraph {"style":{"color":{"text":"#f59e0b"},"typography":{"fontSize":"1.125rem"}}} --><p style="color:#f59e0b;font-size:1.125rem">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p><!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"color":{"text":"#374151"},"typography":{"fontSize":"1rem","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"1.5rem"}}}} --><p style="color:#374151;font-size:1rem;line-height:1.7;margin-bottom:1.5rem">"NexBlocks is hands down the best WordPress theme I've used. The header and footer options alone saved me weeks of custom development."</p><!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}}} -->
<div class="wp-block-group" style="display:flex;align-items:center;gap:.75rem">
<!-- wp:image {"width":48,"height":48,"style":{"border":{"radius":"50%"}}} --><figure class="wp-block-image" style="border-radius:50%;width:48px;height:48px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Sarah Johnson', 'nexblocks' ); ?>" style="width:48px;height:48px;border-radius:50%;background:#dbeafe;display:block"/></figure><!-- /wp:image -->
<div><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9375rem"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0"}}}} --><p style="color:#0f172a;font-size:.9375rem;font-weight:700;margin-bottom:0">Sarah Johnson</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#94a3b8"},"spacing":{"margin":{"top":"0"}}}} --><p style="color:#94a3b8;font-size:.8125rem;margin-top:0">Web Designer, Freelance</p><!-- /wp:paragraph --></div>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"color":{"background":"#ffffff"}}} -->
<div class="wp-block-column" style="background-color:#fff;border-radius:12px;padding:2rem;box-shadow:0 1px 3px rgba(0,0,0,.08)">
<!-- wp:paragraph {"style":{"color":{"text":"#f59e0b"},"typography":{"fontSize":"1.125rem"}}} --><p style="color:#f59e0b;font-size:1.125rem">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p><!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"color":{"text":"#374151"},"typography":{"fontSize":"1rem","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"1.5rem"}}}} --><p style="color:#374151;font-size:1rem;line-height:1.7;margin-bottom:1.5rem">"The WooCommerce integration is seamless. My conversion rate went up 40% after switching to NexBlocks. The checkout templates are beautiful."</p><!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}}} -->
<div class="wp-block-group" style="display:flex;align-items:center;gap:.75rem">
<!-- wp:image {"width":48,"height":48,"style":{"border":{"radius":"50%"}}} --><figure class="wp-block-image" style="border-radius:50%;width:48px;height:48px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Marcus Chen', 'nexblocks' ); ?>" style="width:48px;height:48px;border-radius:50%;background:#d1fae5;display:block"/></figure><!-- /wp:image -->
<div><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9375rem"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0"}}}} --><p style="color:#0f172a;font-size:.9375rem;font-weight:700;margin-bottom:0">Marcus Chen</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#94a3b8"},"spacing":{"margin":{"top":"0"}}}} --><p style="color:#94a3b8;font-size:.8125rem;margin-top:0">eCommerce Manager</p><!-- /wp:paragraph --></div>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"color":{"background":"#ffffff"}}} -->
<div class="wp-block-column" style="background-color:#fff;border-radius:12px;padding:2rem;box-shadow:0 1px 3px rgba(0,0,0,.08)">
<!-- wp:paragraph {"style":{"color":{"text":"#f59e0b"},"typography":{"fontSize":"1.125rem"}}} --><p style="color:#f59e0b;font-size:1.125rem">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</p><!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"color":{"text":"#374151"},"typography":{"fontSize":"1rem","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"1.5rem"}}}} --><p style="color:#374151;font-size:1rem;line-height:1.7;margin-bottom:1.5rem">"I launched my agency website in 2 days using NexBlocks patterns. The block patterns are stunning and the customizer is incredibly intuitive."</p><!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}}} -->
<div class="wp-block-group" style="display:flex;align-items:center;gap:.75rem">
<!-- wp:image {"width":48,"height":48,"style":{"border":{"radius":"50%"}}} --><figure class="wp-block-image" style="border-radius:50%;width:48px;height:48px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Emily Rodriguez', 'nexblocks' ); ?>" style="width:48px;height:48px;border-radius:50%;background:#fce7f3;display:block"/></figure><!-- /wp:image -->
<div><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9375rem"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0"}}}} --><p style="color:#0f172a;font-size:.9375rem;font-weight:700;margin-bottom:0">Emily Rodriguez</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#94a3b8"},"spacing":{"margin":{"top":"0"}}}} --><p style="color:#94a3b8;font-size:.8125rem;margin-top:0">Digital Agency Owner</p><!-- /wp:paragraph --></div>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
</div>
<!-- /wp:group -->
