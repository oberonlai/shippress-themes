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
<figure class="wp-block-image size-full yw-band__img"><img src="<?php echo yawara_img( 'p14-entrance.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php esc_attr_e( 'Daylight view of a modern glass entrance door, a pale facade and a wooden bench.', 'yawara-rheumatology' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"yw-caption"} -->
<p class="yw-caption"><?php esc_html_e( 'Harrow Quay entrance / NORTH SIDE', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-sec yw-split yw-visit__body"} -->
<div class="wp-block-group yw-sec yw-split yw-visit__body"><!-- wp:group {"className":"yw-split__l"} -->
<div class="wp-block-group yw-split__l"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Visit the clinic', 'yawara-rheumatology' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yw-sub"} -->
<p class="yw-sub"><?php esc_html_e( 'BUS 14 · 3 MIN WALK', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yw-split__r"} -->
<div class="wp-block-group yw-split__r"><!-- wp:paragraph -->
<p><?php esc_html_e( '12 Linden Row, Harrow Quay, on the second floor with lift access. Take bus 14 to the Linden Row stop; the entrance is a three-minute walk. Flare-day slots for registered patients: weekdays 8:30–9:30 and Saturday 8:30–9:00, booked by phone the same morning.', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-phone"} -->
<p class="yw-phone"><a href="tel:+15550142300">+1 555 0142 300</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yw-hours"} -->
<p class="yw-hours"><?php esc_html_e( 'Mon–Fri 8:30–17:30 · Sat 8:30–12:30 · Closed Sun & public holidays', 'yawara-rheumatology' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yw-cta yw-cta--flow"} -->
<div class="wp-block-buttons yw-cta yw-cta--flow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php esc_html_e( 'Book a first visit', 'yawara-rheumatology' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
