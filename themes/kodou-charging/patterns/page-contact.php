<?php
/**
 * Title: Page: contact
 * Slug: kodou-charging/page-contact
 * Categories: kodou-charging
 * Inserter: no
 * Viewport Width: 1440
 * Description: Request a site assessment: the contact form slot with a mailto fallback, address, hours and what happens next.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--page kc-sec--ptitle","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--page kc-sec--ptitle">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:html -->
<p class="kc-eyebrow kc-crumb"><a href="/"><?php echo esc_html( kodou_charging_t( 'crumb_home' ) ); ?></a><span aria-hidden="true"> / </span><?php echo esc_html( kodou_charging_t( 'crumb_contact' ) ); ?></p>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( kodou_charging_t( 'ct_h1' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"kc-band kc-band--kv sp-parallax","layout":{"type":"default"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group alignfull kc-band kc-band--kv sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-band__img"} -->
<figure class="wp-block-image size-full kc-band__img"><img src="<?php echo kodou_charging_img( 'wall-unit-detail.webp' ); ?>" alt="<?php echo kodou_charging_a( 'alt_p14' ); ?>" style="object-position:40% 40%"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--lead">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo esc_html( kodou_charging_t( 'ct_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--contact">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-contact","layout":{"type":"default"}} -->
<div class="wp-block-group kc-contact">
<!-- wp:group {"className":"kc-contact__main","layout":{"type":"default"}} -->
<div class="wp-block-group kc-contact__main">
<!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo esc_html( kodou_charging_t( 'contact_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-prose"} -->
<p class="kc-prose"><?php echo esc_html( kodou_charging_t( 'ct_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formwrap">
<?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kc-btn"} -->
<div class="wp-block-button kc-btn"><a class="wp-block-button__link wp-element-button" href="mailto:visits@kodou-charging.example?subject=<?php echo esc_attr( rawurlencode( kodou_charging_t( 'contact_subject' ) ) ); ?>"><?php echo esc_html( kodou_charging_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-info","layout":{"type":"default"}} -->
<div class="wp-block-group kc-info">
<!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( kodou_charging_t( 'ct_s2_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:html -->
<dl class="kc-info__dl"><div><dt><?php echo esc_html( kodou_charging_t( 'ct_addr_l' ) ); ?></dt><dd><?php echo esc_html( kodou_charging_t( 'ft_addr' ) ); ?></dd></div><div><dt><?php echo esc_html( kodou_charging_t( 'ct_phone_l' ) ); ?></dt><dd><a href="tel:+002079460180"><?php echo esc_html( kodou_charging_t( 'phone' ) ); ?></a></dd></div><div><dt><?php echo esc_html( kodou_charging_t( 'ct_email_l' ) ); ?></dt><dd><a href="mailto:visits@kodou-charging.example"><?php echo esc_html( kodou_charging_t( 'email' ) ); ?></a></dd></div><div><dt><?php echo esc_html( kodou_charging_t( 'ct_office_l' ) ); ?></dt><dd><?php echo esc_html( kodou_charging_t( 'ct_office_v' ) ); ?></dd></div><div><dt><?php echo esc_html( kodou_charging_t( 'ct_visit_l' ) ); ?></dt><dd><?php echo esc_html( kodou_charging_t( 'ct_visit_v' ) ); ?></dd></div></dl>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-info__p"} -->
<p class="kc-info__p"><?php echo esc_html( kodou_charging_t( 'ct_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( kodou_charging_t( 'ct_s3_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-info__p"} -->
<p class="kc-info__p"><?php echo esc_html( kodou_charging_t( 'ct_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--close">
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-close","layout":{"type":"default"}} -->
<div class="wp-block-group kc-close">
<!-- wp:html -->
<a class="kc-banner kc-banner--close" href="mailto:visits@kodou-charging.example"><span class="kc-banner__pic"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" stroke="#2F4A45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="10" y="4" width="22" height="30" rx="4"/><path d="M22 10l-4 8h5l-3 7"/><path d="M14 38h14"/><path d="M21 34v4"/><path d="M32 22h4c3 0 5 2 5 5v9c0 3 2 5 5 5"/><path d="M44 36l5-1v-3l-5-1z"/><path d="M10 49h26"/><path d="M42 47c0-5 4-8 9-8-0 5-3 9-9 8z" fill="#C8873A" stroke="none"/><path d="M42 49c1-3 3-5 6-6"/></svg></span><span class="kc-banner__text"><?php echo esc_html( kodou_charging_t( 'ct_ban_a' ) ); ?><b class="kc-acc"><?php echo esc_html( kodou_charging_t( 'ct_ban_b' ) ); ?></b><?php echo esc_html( kodou_charging_t( 'ct_ban_c' ) ); ?></span><span class="kc-banner__go"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="20" cy="20" r="19"/><path d="M14 26 26 14M16.5 14H26v9.5"/></svg></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
