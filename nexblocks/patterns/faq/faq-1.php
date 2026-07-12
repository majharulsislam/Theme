<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: FAQ – Accordion Style
 * Slug: nexblocks/faq-accordion
 * Categories: nexblocks-faq
 * Description: Frequently asked questions in a clean two-column layout.
 * Keywords: faq, accordion, questions, answers
 *
 * @package NexBlocks
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-bottom:5rem">
<div style="max-width:1200px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2rem)">

<!-- wp:columns {"style":{"spacing":{"blockGap":"5rem"}}} -->
<div class="wp-block-columns" style="gap:5rem">

<!-- Left: heading + description -->
<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#2563eb"}}} --><p style="color:#2563eb;font-size:.875rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase">FAQ</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.75rem,4vw,2.5rem)","fontWeight":"800"},"color":{"text":"#0f172a"}}} --><h2 class="wp-block-heading" style="color:#0f172a;font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800">Frequently Asked Questions</h2><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"1.0625rem"}}} --><p style="color:#64748b;font-size:1.0625rem">Have questions? We've got answers. If you don't find what you're looking for, reach out to our support team.</p><!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:1.5rem">
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#2563eb"},"border":{"radius":"6px","color":"#2563eb"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color" href="#" style="color:#2563eb;border:2px solid #2563eb;border-radius:6px;padding:.75rem 1.5rem">Contact Support</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->

<!-- Right: Q&A list -->
<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%">

<!-- Q1 -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"#e2e8f0","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}}}} -->
<div class="wp-block-group" style="border-bottom:1px solid #e2e8f0;padding-top:1.5rem;padding-bottom:1.5rem">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.0625rem","fontWeight":"700"},"color":{"text":"#0f172a"}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.0625rem;font-weight:700">Do I need coding skills to use NexBlocks?</h3><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} --><p style="color:#475569">No coding skills required. NexBlocks is built for everyone — from beginners to professional developers. The visual Customizer and block patterns let you build beautiful sites without writing a single line of code.</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- Q2 -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"#e2e8f0","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}}}} -->
<div class="wp-block-group" style="border-bottom:1px solid #e2e8f0;padding-top:1.5rem;padding-bottom:1.5rem">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.0625rem","fontWeight":"700"},"color":{"text":"#0f172a"}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.0625rem;font-weight:700">Is NexBlocks compatible with WooCommerce?</h3><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} --><p style="color:#475569">Absolutely. NexBlocks includes custom-designed WooCommerce templates for shop pages, single products, cart, checkout, and My Account — all fully styled and responsive.</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- Q3 -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"#e2e8f0","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}}}} -->
<div class="wp-block-group" style="border-bottom:1px solid #e2e8f0;padding-top:1.5rem;padding-bottom:1.5rem">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.0625rem","fontWeight":"700"},"color":{"text":"#0f172a"}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.0625rem;font-weight:700">How many websites can I use the theme on?</h3><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} --><p style="color:#475569">It depends on your license. The Starter license is for 1 website, Professional covers 5 websites, and the Agency license allows unlimited websites. All licenses include the same features.</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- Q4 -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"#e2e8f0","width":"1px","style":"solid"}},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}}}} -->
<div class="wp-block-group" style="border-bottom:1px solid #e2e8f0;padding-top:1.5rem;padding-bottom:1.5rem">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.0625rem","fontWeight":"700"},"color":{"text":"#0f172a"}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.0625rem;font-weight:700">Will NexBlocks work with my page builder?</h3><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} --><p style="color:#475569">NexBlocks is optimized for the WordPress Block Editor (Gutenberg) and works with popular page builders like Elementor, Beaver Builder, and Divi. Block patterns work exclusively in the native editor.</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- Q5 -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}}}} -->
<div class="wp-block-group" style="padding-top:1.5rem;padding-bottom:1.5rem">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.0625rem","fontWeight":"700"},"color":{"text":"#0f172a"}}} --><h3 class="wp-block-heading" style="color:#0f172a;font-size:1.0625rem;font-weight:700">Do you offer refunds?</h3><!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} --><p style="color:#475569">Yes. We offer a 30-day money-back guarantee. If NexBlocks isn't right for you, contact our support team within 30 days of purchase for a full refund — no questions asked.</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
</div>
<!-- /wp:group -->
