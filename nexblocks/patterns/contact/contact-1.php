<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: Contact – Split Layout
 * Slug: nexblocks/contact-split
 * Categories: nexblocks-contact
 * Description: Two-column contact section with info on the left and a contact form placeholder on the right.
 * Keywords: contact, form, info, split
 *
 * @package NexBlocks
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-bottom:5rem">
<div style="max-width:1200px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2rem)">

<!-- wp:columns {"style":{"spacing":{"blockGap":"5rem"}}} -->
<div class="wp-block-columns" style="gap:5rem">

<!-- Left: Contact Info -->
<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#2563eb"}}} -->
<p style="color:#2563eb;font-size:.875rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase">Get In Touch</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.75rem,4vw,2.25rem)","fontWeight":"800"},"color":{"text":"#0f172a"}}} -->
<h2 class="wp-block-heading" style="color:#0f172a;font-size:clamp(1.75rem,4vw,2.25rem);font-weight:800">We'd Love to Hear From You</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"1.0625rem"}}} -->
<p style="color:#64748b;font-size:1.0625rem">Have a question or need help? Our support team is available Monday through Friday, 9am–6pm EST. We typically respond within 2 business hours.</p>
<!-- /wp:paragraph -->

<!-- Contact items -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem","margin":{"top":"2rem"}}}} -->
<div class="wp-block-group" style="margin-top:2rem">

<!-- wp:group {"style":{"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-group" style="display:flex;align-items:center;gap:1rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"},"spacing":{"margin":{"bottom":"0"}}}} --><p style="font-size:1.5rem;margin-bottom:0">&#x1F4E7;</p><!-- /wp:paragraph -->
<div><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9375rem"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0"}}}} --><p style="color:#0f172a;font-size:.9375rem;font-weight:700;margin-bottom:0">Email</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0"}}}} --><p style="color:#64748b;font-size:.9375rem;margin-top:0">support@nexblocks.com</p><!-- /wp:paragraph --></div>
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-group" style="display:flex;align-items:center;gap:1rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"},"spacing":{"margin":{"bottom":"0"}}}} --><p style="font-size:1.5rem;margin-bottom:0">&#x1F4DE;</p><!-- /wp:paragraph -->
<div><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9375rem"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0"}}}} --><p style="color:#0f172a;font-size:.9375rem;font-weight:700;margin-bottom:0">Phone</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0"}}}} --><p style="color:#64748b;font-size:.9375rem;margin-top:0">+1 (555) 123-4567</p><!-- /wp:paragraph --></div>
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-group" style="display:flex;align-items:center;gap:1rem">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"},"spacing":{"margin":{"bottom":"0"}}}} --><p style="font-size:1.5rem;margin-bottom:0">&#x1F4CD;</p><!-- /wp:paragraph -->
<div><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9375rem"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0"}}}} --><p style="color:#0f172a;font-size:.9375rem;font-weight:700;margin-bottom:0">Address</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.9375rem"},"spacing":{"margin":{"top":"0"}}}} --><p style="color:#64748b;font-size:.9375rem;margin-top:0">123 Main Street, New York, NY 10001</p><!-- /wp:paragraph --></div>
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- Right: Contact Form -->
<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">

<!-- wp:group {"style":{"border":{"radius":"12px","color":"#e2e8f0","width":"1px","style":"solid"},"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"}}}} -->
<div class="wp-block-group" style="border:1px solid #e2e8f0;border-radius:12px;padding:2.5rem">

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
<h3 class="wp-block-heading" style="color:#0f172a;font-size:1.25rem;font-weight:700;margin-bottom:1.5rem">Send Us a Message</h3>
<!-- /wp:heading -->

<!-- Name row -->
<!-- wp:columns {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"1rem"}}}} -->
<div class="wp-block-columns" style="gap:1rem;margin-bottom:1rem">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"},"color":{"text":"#374151"},"spacing":{"margin":{"bottom":"0.375rem"}}}} --><p style="color:#374151;font-size:.875rem;font-weight:600;margin-bottom:.375rem">First Name</p><!-- /wp:paragraph -->
<!-- wp:html --><div style="border:1px solid #e2e8f0;border-radius:6px;padding:.75rem 1rem;background:#fff;color:#94a3b8;font-size:.9375rem">First name</div><!-- /wp:html -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"},"color":{"text":"#374151"},"spacing":{"margin":{"bottom":"0.375rem"}}}} --><p style="color:#374151;font-size:.875rem;font-weight:600;margin-bottom:.375rem">Last Name</p><!-- /wp:paragraph -->
<!-- wp:html --><div style="border:1px solid #e2e8f0;border-radius:6px;padding:.75rem 1rem;background:#fff;color:#94a3b8;font-size:.9375rem">Last name</div><!-- /wp:html -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- Email -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"},"color":{"text":"#374151"},"spacing":{"margin":{"bottom":"0.375rem"}}}} --><p style="color:#374151;font-size:.875rem;font-weight:600;margin-bottom:.375rem">Email Address</p><!-- /wp:paragraph -->
<!-- wp:html --><div style="border:1px solid #e2e8f0;border-radius:6px;padding:.75rem 1rem;background:#fff;color:#94a3b8;font-size:.9375rem;margin-bottom:1rem">you@example.com</div><!-- /wp:html -->

<!-- Subject -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"},"color":{"text":"#374151"},"spacing":{"margin":{"bottom":"0.375rem"}}}} --><p style="color:#374151;font-size:.875rem;font-weight:600;margin-bottom:.375rem">Subject</p><!-- /wp:paragraph -->
<!-- wp:html --><div style="border:1px solid #e2e8f0;border-radius:6px;padding:.75rem 1rem;background:#fff;color:#94a3b8;font-size:.9375rem;margin-bottom:1rem">How can we help?</div><!-- /wp:html -->

<!-- Message -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"},"color":{"text":"#374151"},"spacing":{"margin":{"bottom":"0.375rem"}}}} --><p style="color:#374151;font-size:.875rem;font-weight:600;margin-bottom:.375rem">Message</p><!-- /wp:paragraph -->
<!-- wp:html --><div style="border:1px solid #e2e8f0;border-radius:6px;padding:.75rem 1rem;background:#fff;color:#94a3b8;font-size:.9375rem;min-height:120px;margin-bottom:1.5rem">Your message…</div><!-- /wp:html -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#2563eb","text":"#ffffff"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"2rem","right":"2rem"}},"typography":{"fontWeight":"700","fontSize":"1rem"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-text-color" href="#" style="background-color:#2563eb;color:#fff;border-radius:6px;padding:.875rem 2rem;font-weight:700;font-size:1rem">Send Message &#x2192;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
</div>
<!-- /wp:group -->
