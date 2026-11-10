<?php
/**
 * Title: Home: visit
 * Slug: yawara-rheumatology/front-visit
 * Categories: yawara-rheumatology
 * Viewport Width: 1440
 * Description: A wide parallax photo strip with a caption tab, then address, hours, phone and the single call to action from the 50% column.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yw-visit"} -->
<section class="wp-block-group alignfull yw-visit"><!-- wp:group {"align":"full","className":"yw-band yw-band--visit sp-parallax"} -->
<div class="wp-block-group alignfull yw-band yw-band--visit sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yw-band__img"} -->
<figure class="wp-block-image size-full yw-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14-entrance.webp' ) ); ?>" alt="<?php echo esc_attr( yawara_rheumatology_t( 'daylight_view_of_a_modern_glass__ab33' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yw-caption"} -->
<p class="yw-caption"><?php echo esc_html( yawara_rheumatology_t( 'harrow_quay_entrance_north_side_7b94' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-sec yw-split yw-visit__body"} -->
<div class="wp-block-group yw-sec yw-split yw-visit__body"><!-- wp:group {"className":"yw-split__l"} -->
<div class="wp-block-group yw-split__l"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( yawara_rheumatology_t( 'visit_the_clinic_3978' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yw-sub"} -->
<p class="yw-sub"><?php echo esc_html( yawara_rheumatology_t( 'bus_14_3_min_walk_7cb9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-split__r"} -->
<div class="wp-block-group yw-split__r"><!-- wp:paragraph -->
<p><?php echo esc_html( yawara_rheumatology_t( '12_linden_row_harrow_quay_on_the_9121' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-phone"} -->
<p class="yw-phone"><a href="tel:+15550142300">+1 555 0142 300</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-hours"} -->
<p class="yw-hours"><?php echo esc_html( yawara_rheumatology_t( 'mon_fri_8_30_17_30_sat_8_30_12_3_5df5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yw-cta yw-cta--flow"} -->
<div class="wp-block-buttons yw-cta yw-cta--flow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( yawara_rheumatology_t( 'book_a_first_visit_fca8' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
