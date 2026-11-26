<?php
/**
 * Title: Page: newsletter
 * Slug: kodou-charging/page-newsletter
 * Categories: kodou-charging
 * Inserter: no
 * Viewport Width: 1440
 * Description: Standalone updates signup: what we send, and the newsletter form slot with a mailto request fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--page kc-sec--ptitle","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--page kc-sec--ptitle">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:html -->
<p class="kc-eyebrow kc-crumb"><a href="/"><?php echo esc_html( kodou_charging_t( 'crumb_home' ) ); ?></a><span aria-hidden="true"> / </span><?php echo esc_html( kodou_charging_t( 'crumb_newsletter' ) ); ?></p>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( kodou_charging_t( 'nl_h1' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"kc-band kc-band--kv sp-parallax","layout":{"type":"default"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group alignfull kc-band kc-band--kv sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-band__img"} -->
<figure class="wp-block-image size-full kc-band__img"><img src="<?php echo kodou_charging_img( 'twin-post.webp' ); ?>" alt="<?php echo kodou_charging_a( 'alt_p15' ); ?>" style="object-position:35% 50%"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--lead">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo esc_html( kodou_charging_t( 'nl_lead' ) ); ?></p>
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
<h2 class="wp-block-heading kc-h2"><?php echo esc_html( kodou_charging_t( 'nl_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-prose"} -->
<p class="kc-prose"><?php echo esc_html( kodou_charging_t( 'nl_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="kc-dots"><li><?php echo esc_html( kodou_charging_t( 'nl_b1' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'nl_b2' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'nl_b3' ) ); ?></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-info","layout":{"type":"default"}} -->
<div class="wp-block-group kc-info">
<!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( kodou_charging_t( 'nl_s2_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-info__p"} -->
<p class="kc-info__p"><?php echo esc_html( kodou_charging_t( 'nl_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formwrap">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'visits@kodou-charging.example', 'label' => kodou_charging_t( 'forms_email' ), 'submit' => kodou_charging_t( 'forms_subscribe' ), 'notice' => kodou_charging_t( 'forms_mail_notice' ), 'subject' => kodou_charging_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
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
<a class="kc-banner kc-banner--close" href="/contact/"><span class="kc-banner__pic"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" stroke="#2F4A45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="10" y="4" width="22" height="30" rx="4"/><path d="M22 10l-4 8h5l-3 7"/><path d="M14 38h14"/><path d="M21 34v4"/><path d="M32 22h4c3 0 5 2 5 5v9c0 3 2 5 5 5"/><path d="M44 36l5-1v-3l-5-1z"/><path d="M10 49h26"/><path d="M42 47c0-5 4-8 9-8-0 5-3 9-9 8z" fill="#C8873A" stroke="none"/><path d="M42 49c1-3 3-5 6-6"/></svg></span><span class="kc-banner__text"><?php echo esc_html( kodou_charging_t( 'nl_ban_a' ) ); ?><b class="kc-acc"><?php echo esc_html( kodou_charging_t( 'nl_ban_b' ) ); ?></b><?php echo esc_html( kodou_charging_t( 'nl_ban_c' ) ); ?></span><span class="kc-banner__go"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="20" cy="20" r="19"/><path d="M14 26 26 14M16.5 14H26v9.5"/></svg></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
