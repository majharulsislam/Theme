<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: Features – Alternating Rows
 * Slug: nexblocks/features-alternating
 * Categories: nexblocks-features
 * Description: Alternating image and text rows showcasing key features.
 * Keywords: features, alternating, image, text
 *
 * @package NexBlocks
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-bottom:5rem">
<div style="max-width:1200px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2rem)">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"4rem","margin":{"bottom":"4rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="gap:4rem;margin-bottom:4rem">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image" style="border-radius:12px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Feature illustration', 'nexblocks' ); ?>" style="width:100%;min-height:300px;background:#e0f2fe;border-radius:12px;display:block"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#2563eb"}}} --><p style="color:#2563eb;font-size:.875rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase">Header Layouts</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.5rem,3.5vw,2.25rem)","fontWeight":"800"},"color":{"text":"#0f172a"}}} --><h2 class="wp-block-heading" style="color:#0f172a;font-size:clamp(1.5rem,3.5vw,2.25rem);font-weight:800">12 Beautiful Header Layouts</h2><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} --><p style="color:#475569">Choose from 12 professionally crafted header designs including sticky, transparent, topbar, mega-menu, and centered logo styles — all switchable from the Customizer.</p><!-- /wp:paragraph -->
<!-- wp:list {"style":{"color":{"text":"#374151"},"spacing":{"padding":{"left":"0"}}},"className":"nexblocks-check-list"} --><ul class="nexblocks-check-list" style="color:#374151;padding-left:0"><li>&#x2713; Sticky &amp; transparent headers</li><li>&#x2713; Mobile hamburger menu</li><li>&#x2713; Search overlay</li><li>&#x2713; WooCommerce cart icon</li></ul><!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"4rem"}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="gap:4rem">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#7c3aed"}}} --><p style="color:#7c3aed;font-size:.875rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase">Customizer</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.5rem,3.5vw,2.25rem)","fontWeight":"800"},"color":{"text":"#0f172a"}}} --><h2 class="wp-block-heading" style="color:#0f172a;font-size:clamp(1.5rem,3.5vw,2.25rem);font-weight:800">Real-Time Live Preview</h2><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} --><p style="color:#475569">Every color, font, layout, and header/footer choice updates live in the WordPress Customizer so you can see exactly how your site looks before saving.</p><!-- /wp:paragraph -->
<!-- wp:list {"style":{"color":{"text":"#374151"}}} --><ul style="color:#374151"><li>&#x2713; Global color controls</li><li>&#x2713; Google Fonts integration</li><li>&#x2713; Layout width control</li><li>&#x2713; Sidebar position options</li></ul><!-- /wp:list -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image" style="border-radius:12px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Customizer preview', 'nexblocks' ); ?>" style="width:100%;min-height:300px;background:#ede9fe;border-radius:12px;display:block"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

</div>
</div>
<!-- /wp:group -->
