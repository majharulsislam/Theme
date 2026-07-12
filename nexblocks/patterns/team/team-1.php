<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/**
 * Title: Team – Four Column Grid
 * Slug: nexblocks/team-grid
 * Categories: nexblocks-team
 * Description: Four-column team member cards with photos, names, roles, and social links.
 * Keywords: team, members, staff, grid
 *
 * @package NexBlocks
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-bottom:5rem">
<div style="max-width:1200px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2rem)">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"},"style":{"spacing":{"blockGap":"0.75rem","margin":{"bottom":"3.5rem"}}}} -->
<div class="wp-block-group" style="margin-bottom:3.5rem">
<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"clamp(1.75rem,4vw,2.5rem)","fontWeight":"800"},"color":{"text":"#0f172a"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#0f172a;font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800">Meet Our Team</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"1.0625rem"}}} -->
<p class="has-text-align-center" style="color:#64748b;font-size:1.0625rem">The talented people behind NexBlocks — passionate about WordPress and helping you build better websites.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
<div class="wp-block-columns" style="gap:2rem">

<!-- Member 1 -->
<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f8fafc"},"textAlign":"center"}} -->
<div class="wp-block-column" style="background-color:#f8fafc;border-radius:12px;padding:2rem 1.5rem;text-align:center">
<!-- wp:image {"width":96,"height":96,"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"1.25rem"}}}} --><figure class="wp-block-image" style="border-radius:50%;width:96px;height:96px;margin:0 auto 1.25rem"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Alex Turner', 'nexblocks' ); ?>" style="width:96px;height:96px;border-radius:50%;background:#dbeafe;display:block"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0.25rem"}}}} --><h3 class="wp-block-heading has-text-align-center" style="color:#0f172a;font-size:1.125rem;font-weight:700;margin-bottom:.25rem">Alex Turner</h3><!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"bottom":"1rem"}}}} --><p style="color:#64748b;font-size:.875rem;margin-bottom:1rem;text-align:center">Lead Developer</p><!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"1.25rem"}}} --><p style="color:#94a3b8;font-size:1.25rem;text-align:center">&#x1F426; &#x1F517; &#x1F4BC;</p><!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- Member 2 -->
<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f8fafc"},"textAlign":"center"}} -->
<div class="wp-block-column" style="background-color:#f8fafc;border-radius:12px;padding:2rem 1.5rem;text-align:center">
<!-- wp:image {"width":96,"height":96,"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"1.25rem"}}}} --><figure class="wp-block-image" style="border-radius:50%;width:96px;height:96px;margin:0 auto 1.25rem"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Priya Sharma', 'nexblocks' ); ?>" style="width:96px;height:96px;border-radius:50%;background:#fce7f3;display:block"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0.25rem"}}}} --><h3 class="wp-block-heading has-text-align-center" style="color:#0f172a;font-size:1.125rem;font-weight:700;margin-bottom:.25rem">Priya Sharma</h3><!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"bottom":"1rem"}}}} --><p style="color:#64748b;font-size:.875rem;margin-bottom:1rem;text-align:center">UI/UX Designer</p><!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"1.25rem"}}} --><p style="color:#94a3b8;font-size:1.25rem;text-align:center">&#x1F426; &#x1F517; &#x1F3A8;</p><!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- Member 3 -->
<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f8fafc"},"textAlign":"center"}} -->
<div class="wp-block-column" style="background-color:#f8fafc;border-radius:12px;padding:2rem 1.5rem;text-align:center">
<!-- wp:image {"width":96,"height":96,"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"1.25rem"}}}} --><figure class="wp-block-image" style="border-radius:50%;width:96px;height:96px;margin:0 auto 1.25rem"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'James Okafor', 'nexblocks' ); ?>" style="width:96px;height:96px;border-radius:50%;background:#d1fae5;display:block"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0.25rem"}}}} --><h3 class="wp-block-heading has-text-align-center" style="color:#0f172a;font-size:1.125rem;font-weight:700;margin-bottom:.25rem">James Okafor</h3><!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"bottom":"1rem"}}}} --><p style="color:#64748b;font-size:.875rem;margin-bottom:1rem;text-align:center">WordPress Expert</p><!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"1.25rem"}}} --><p style="color:#94a3b8;font-size:1.25rem;text-align:center">&#x1F426; &#x1F517; &#x1F4E7;</p><!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- Member 4 -->
<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#f8fafc"},"textAlign":"center"}} -->
<div class="wp-block-column" style="background-color:#f8fafc;border-radius:12px;padding:2rem 1.5rem;text-align:center">
<!-- wp:image {"width":96,"height":96,"style":{"border":{"radius":"50%"},"spacing":{"margin":{"bottom":"1.25rem"}}}} --><figure class="wp-block-image" style="border-radius:50%;width:96px;height:96px;margin:0 auto 1.25rem"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Sofia Reyes', 'nexblocks' ); ?>" style="width:96px;height:96px;border-radius:50%;background:#fef3c7;display:block"/></figure><!-- /wp:image -->
<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"},"color":{"text":"#0f172a"},"spacing":{"margin":{"bottom":"0.25rem"}}}} --><h3 class="wp-block-heading has-text-align-center" style="color:#0f172a;font-size:1.125rem;font-weight:700;margin-bottom:.25rem">Sofia Reyes</h3><!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"bottom":"1rem"}}}} --><p style="color:#64748b;font-size:.875rem;margin-bottom:1rem;text-align:center">Customer Success</p><!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"1.25rem"}}} --><p style="color:#94a3b8;font-size:1.25rem;text-align:center">&#x1F426; &#x1F517; &#x1F4AC;</p><!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
</div>
<!-- /wp:group -->
