<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: CTA – Centered Banner
 * Slug: nexblocks/cta-centered
 * Categories: nexblocks-cta
 * Description: Full-width centered call-to-action with heading, text, and two buttons.
 * Keywords: cta, call to action, banner, centered
 *
 * @package NexBlocks
 */
?>
<!-- wp:cover {"overlayColor":"","customOverlayColor":"#1e3a8a","minHeight":380,"minHeightUnit":"px","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}}} -->
<div class="wp-block-cover alignfull is-dark" style="min-height:380px;padding-top:5rem;padding-bottom:5rem;background-color:#1e3a8a">
<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#1e3a8a;background:linear-gradient(135deg,#1e3a8a 0%,#4c1d95 100%)"></span>
<div class="wp-block-cover__inner-container">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"},"style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-group">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(1.75rem,4vw,2.75rem)","fontWeight":"800","lineHeight":"1.15"},"color":{"text":"#ffffff"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#fff;font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;line-height:1.15">Ready to Build Your Dream Website?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.0625rem"},"color":{"text":"#bfdbfe"}}} -->
<p class="has-text-align-center" style="color:#bfdbfe;font-size:1.0625rem">Join 10,000+ customers who trust NexBlocks to power their online presence. Get started today — no coding required.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"1rem","margin":{"top":"1rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:1rem">
<!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#1e3a8a"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"2rem","right":"2rem"}},"typography":{"fontWeight":"700"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-text-color" href="#" style="background-color:#fff;color:#1e3a8a;border-radius:6px;padding:.875rem 2rem;font-weight:700">Get Started Free</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#ffffff"},"border":{"radius":"6px","color":"#ffffff","width":"2px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"2rem","right":"2rem"}},"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color" href="#" style="color:#fff;border:2px solid #fff;border-radius:6px;padding:.875rem 2rem;font-weight:600">View Demo &#x2192;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8125rem"},"color":{"text":"#93c5fd"}}} -->
<p class="has-text-align-center" style="color:#93c5fd;font-size:.8125rem">&#x2714; Free updates &nbsp;&nbsp; &#x2714; 6 months support &nbsp;&nbsp; &#x2714; 30-day refund policy</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
</div>
<!-- /wp:cover -->
