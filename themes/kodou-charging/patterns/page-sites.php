<?php
/**
 * Title: Page: sites we fit
 * Slug: kodou-charging/page-sites
 * Categories: kodou-charging
 * Inserter: no
 * Viewport Width: 1440
 * Description: Offices and depots in filled-cell tabs, then the honest suitable and not-suitable lists.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--page kc-sec--ptitle","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--page kc-sec--ptitle">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:html -->
<p class="kc-eyebrow kc-crumb"><a href="/"><?php echo esc_html( kodou_charging_t( 'crumb_home' ) ); ?></a><span aria-hidden="true"> / </span><?php echo esc_html( kodou_charging_t( 'crumb_sites' ) ); ?></p>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( kodou_charging_t( 'si_h1' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"kc-band kc-band--kv sp-parallax","layout":{"type":"default"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group alignfull kc-band kc-band--kv sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-band__img kc-pos-sites"} -->
<figure class="wp-block-image size-full kc-band__img kc-pos-sites"><img src="<?php echo kodou_charging_img( 'story-depot.webp' ); ?>" alt="<?php echo kodou_charging_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--lead">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo esc_html( kodou_charging_t( 'si_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--tabsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--tabsec">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:group {"className":"kc-tabs","layout":{"type":"default"}} -->
<div class="wp-block-group kc-tabs">
<!-- wp:html -->
<div class="kc-tabbox" role="group" aria-label="<?php echo kodou_charging_a( 'tabs_label' ); ?>"><input class="kc-tab__in" type="radio" name="kc-tab" id="kc-tab-staff" checked><input class="kc-tab__in" type="radio" name="kc-tab" id="kc-tab-fleet"><label class="kc-tab__l" for="kc-tab-staff"><?php echo esc_html( kodou_charging_t( 'tab_office' ) ); ?></label><label class="kc-tab__l" for="kc-tab-fleet"><?php echo esc_html( kodou_charging_t( 'tab_depot' ) ); ?></label></div>
<!-- /wp:html -->
<!-- wp:group {"className":"kc-panel kc-panel--staff","layout":{"type":"default"}} -->
<div class="wp-block-group kc-panel kc-panel--staff">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-panel__img"} -->
<figure class="wp-block-image size-full kc-panel__img"><img src="<?php echo kodou_charging_img( 'staff-bays.webp' ); ?>" alt="<?php echo kodou_charging_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kc-panel__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-panel__b">
<!-- wp:heading {"level":3,"className":"kc-h3 kc-h3--panel"} -->
<h3 class="wp-block-heading kc-h3 kc-h3--panel"><?php echo esc_html( kodou_charging_t( 'si_s1_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-panel__p"} -->
<p class="kc-panel__p"><?php echo esc_html( kodou_charging_t( 'si_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="kc-dots"><li><?php echo esc_html( kodou_charging_t( 'sites_staff_1' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_staff_2' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_staff_3' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_staff_4' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_staff_5' ) ); ?></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-panel kc-panel--fleet","layout":{"type":"default"}} -->
<div class="wp-block-group kc-panel kc-panel--fleet">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-panel__img"} -->
<figure class="wp-block-image size-full kc-panel__img"><img src="<?php echo kodou_charging_img( 'fleet-bays.webp' ); ?>" alt="<?php echo kodou_charging_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kc-panel__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-panel__b">
<!-- wp:heading {"level":3,"className":"kc-h3 kc-h3--panel"} -->
<h3 class="wp-block-heading kc-h3 kc-h3--panel"><?php echo esc_html( kodou_charging_t( 'si_s2_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-panel__p"} -->
<p class="kc-panel__p"><?php echo esc_html( kodou_charging_t( 'si_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="kc-dots"><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_1' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_2' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_3' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_4' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_5' ) ); ?></li></ul>
<!-- /wp:html -->
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
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-sec--rows","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-sec--rows">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:group {"className":"kc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"kc-row__h"} -->
<h2 class="wp-block-heading kc-row__h"><?php echo esc_html( kodou_charging_t( 'si_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"kc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__b">
<!-- wp:paragraph {"className":"kc-prose"} -->
<p class="kc-prose"><?php echo esc_html( kodou_charging_t( 'si_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-okno sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-okno sp-reveal sp-reveal--up">
<!-- wp:group {"className":"kc-okno__c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-okno__c">
<!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( kodou_charging_t( 'si_ok_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:html -->
<ul class="kc-dots"><li><?php echo esc_html( kodou_charging_t( 'si_ok_1' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'si_ok_2' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'si_ok_3' ) ); ?></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-okno__c kc-okno__c--no","layout":{"type":"default"}} -->
<div class="wp-block-group kc-okno__c kc-okno__c--no">
<!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( kodou_charging_t( 'si_no_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:html -->
<ul class="kc-dots"><li><?php echo esc_html( kodou_charging_t( 'si_no_1' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'si_no_2' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'si_no_3' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'si_no_4' ) ); ?></li></ul>
<!-- /wp:html -->
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
<a class="kc-banner kc-banner--close" href="/contact/"><span class="kc-banner__pic"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" stroke="#2F4A45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="10" y="4" width="22" height="30" rx="4"/><path d="M22 10l-4 8h5l-3 7"/><path d="M14 38h14"/><path d="M21 34v4"/><path d="M32 22h4c3 0 5 2 5 5v9c0 3 2 5 5 5"/><path d="M44 36l5-1v-3l-5-1z"/><path d="M10 49h26"/><path d="M42 47c0-5 4-8 9-8-0 5-3 9-9 8z" fill="#C8873A" stroke="none"/><path d="M42 49c1-3 3-5 6-6"/></svg></span><span class="kc-banner__text"><?php echo esc_html( kodou_charging_t( 'close_a' ) ); ?><b class="kc-acc"><?php echo esc_html( kodou_charging_t( 'close_b' ) ); ?></b><?php echo esc_html( kodou_charging_t( 'close_c' ) ); ?></span><span class="kc-banner__go"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="20" cy="20" r="19"/><path d="M14 26 26 14M16.5 14H26v9.5"/></svg></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
