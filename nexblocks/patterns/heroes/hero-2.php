<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: Hero – Split Content
 * Slug: nexblocks/hero-split
 * Categories: nexblocks-heroes
 * Description: Two-column hero: text left, image right.
 * Keywords: hero, split, two-column, image
 *
 * @package NexBlocks
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}},"color":{"background":"#f8fafc"}}} -->
<div class="wp-block-group alignfull" style="background-color:#f8fafc;padding-top:5rem;padding-bottom:5rem">
<div class="wp-block-group__inner-container" style="max-width:1200px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2rem)">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"4rem"}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="gap:4rem">

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#2563eb"}}} -->
<p style="color:#2563eb;font-size:.875rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase">&#x26A1; Trusted by 10,000+ customers</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2rem,5vw,3.25rem)","fontWeight":"800","lineHeight":"1.15"},"color":{"text":"#0f172a"}}} -->
<h1 class="wp-block-heading" style="color:#0f172a;font-size:clamp(2rem,5vw,3.25rem);font-weight:800;line-height:1.15">The WordPress Theme That Does It All</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.0625rem"},"color":{"text":"#475569"}}} -->
<p style="color:#475569;font-size:1.0625rem">NexBlocks gives you 12 header layouts, 12 footer layouts, and 25+ page templates — everything you need to launch a stunning website in minutes.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#2563eb","text":"#ffffff"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.75rem","right":"1.75rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-text-color" href="#" style="background-color:#2563eb;color:#fff;border-radius:6px;padding:.75rem 1.75rem">Start Building Now</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#2563eb"},"border":{"radius":"6px","color":"#2563eb"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.75rem","right":"1.75rem"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color" href="#" style="color:#2563eb;border:2px solid #2563eb;border-radius:6px;padding:.75rem 1.75rem">Watch Demo</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"16px"},"boxShadow":"0 20px 60px rgba(0,0,0,0.15)"}} -->
<figure class="wp-block-image size-large" style="border-radius:16px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'NexBlocks theme preview', 'nexblocks' ); ?>" style="border-radius:16px;box-shadow:0 20px 60px rgba(0,0,0,.15);width:100%;height:auto;min-height:360px;background:#e2e8f0;display:block"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
</div>
<!-- /wp:group -->
