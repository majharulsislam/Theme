<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: CTA – Split with Image
 * Slug: nexblocks/cta-split
 * Categories: nexblocks-cta
 * Description: Two-column CTA with text and image side by side.
 * Keywords: cta, call to action, split, image
 *
 * @package NexBlocks
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}},"color":{"background":"#f0f9ff"}}} -->
<div class="wp-block-group alignfull" style="background-color:#f0f9ff;padding-top:5rem;padding-bottom:5rem">
<div style="max-width:1200px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2rem)">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"4rem"}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="gap:4rem">

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#2563eb"}}} -->
<p style="color:#2563eb;font-size:.875rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase">Limited Time Offer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.75rem,4vw,2.5rem)","fontWeight":"800","lineHeight":"1.2"},"color":{"text":"#0f172a"}}} -->
<h2 class="wp-block-heading" style="color:#0f172a;font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800;line-height:1.2">Start Your Free Trial Today</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#475569"},"typography":{"fontSize":"1.0625rem"}}} -->
<p style="color:#475569;font-size:1.0625rem">Try NexBlocks free for 30 days. No credit card required. Cancel anytime. Experience the full power of a premium WordPress theme.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"color":{"text":"#374151"},"spacing":{"padding":{"left":"0"}}},"className":"nexblocks-check-list"} -->
<ul class="nexblocks-check-list" style="color:#374151;padding-left:0"><li>&#x2713; Unlimited websites</li><li>&#x2713; Priority support</li><li>&#x2713; All future updates included</li><li>&#x2713; Full documentation access</li></ul>
<!-- /wp:list -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:1.5rem">
<!-- wp:button {"style":{"color":{"background":"#2563eb","text":"#ffffff"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"2rem","right":"2rem"}},"typography":{"fontWeight":"700","fontSize":"1rem"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-text-color" href="#" style="background-color:#2563eb;color:#fff;border-radius:6px;padding:.875rem 2rem;font-weight:700;font-size:1rem">Start Free Trial &#x2192;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image" style="border-radius:16px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Try NexBlocks free', 'nexblocks' ); ?>" style="width:100%;min-height:340px;background:#dbeafe;border-radius:16px;display:block"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
</div>
<!-- /wp:group -->
