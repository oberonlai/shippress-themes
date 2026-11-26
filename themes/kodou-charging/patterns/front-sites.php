<?php
/**
 * Title: Home: which sites suit, filled-cell tabs
 * Slug: kodou-charging/front-sites
 * Categories: kodou-charging
 * Viewport Width: 1440
 * Description: Section heading and intro, then a soft-shadow two-cell tab box that swaps a pale panel (photo and five dotted criteria) without JavaScript.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"sites","align":"full","className":"kc-sec kc-sec--sites sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<section id="sites" class="wp-block-group alignfull kc-sec kc-sec--sites sp-reveal sp-reveal--up">
<!-- wp:group {"className":"kc-wrap kc-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap kc-wrap--c">
<!-- wp:heading {"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo esc_html( kodou_charging_t( 'sites_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"kc-intro"} -->
<p class="kc-intro"><?php echo esc_html( kodou_charging_t( 'sites_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-tabs","layout":{"type":"default"}} -->
<div class="wp-block-group kc-tabs">
<!-- wp:html -->
<div class="kc-tabbox" role="group" aria-label="<?php echo kodou_charging_a( 'tabs_label' ); ?>"><input class="kc-tab__in" type="radio" name="kc-tab" id="kc-tab-staff" checked><input class="kc-tab__in" type="radio" name="kc-tab" id="kc-tab-fleet"><label class="kc-tab__l" for="kc-tab-staff"><?php echo esc_html( kodou_charging_t( 'tab_staff' ) ); ?></label><label class="kc-tab__l" for="kc-tab-fleet"><?php echo esc_html( kodou_charging_t( 'tab_fleet' ) ); ?></label></div>
<!-- /wp:html -->
<!-- wp:group {"className":"kc-panel kc-panel--staff","layout":{"type":"default"}} -->
<div class="wp-block-group kc-panel kc-panel--staff">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-panel__img"} -->
<figure class="wp-block-image size-full kc-panel__img"><img src="<?php echo kodou_charging_img( 'staff-bays.webp' ); ?>" alt="<?php echo kodou_charging_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kc-panel__b","layout":{"type":"default"}} -->
<div class="wp-block-group kc-panel__b">
<!-- wp:html -->
<ul class="kc-dots"><li><?php echo esc_html( kodou_charging_t( 'sites_staff_1' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_staff_2' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_staff_3' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_staff_4' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_staff_5' ) ); ?></li></ul>
<!-- /wp:html --><!-- wp:paragraph {"className":"kc-panel__s"} -->
<p class="kc-panel__s"><?php echo esc_html( kodou_charging_t( 'sites_staff_s' ) ); ?></p>
<!-- /wp:paragraph -->
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
<!-- wp:html -->
<ul class="kc-dots"><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_1' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_2' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_3' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_4' ) ); ?></li><li><?php echo esc_html( kodou_charging_t( 'sites_fleet_5' ) ); ?></li></ul>
<!-- /wp:html --><!-- wp:paragraph {"className":"kc-panel__s"} -->
<p class="kc-panel__s"><?php echo esc_html( kodou_charging_t( 'sites_fleet_s' ) ); ?></p>
<!-- /wp:paragraph -->
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
