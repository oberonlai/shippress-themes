<?php
/**
 * Title: Home: visit and book
 * Slug: nagisa-grill/front-visit
 * Categories: nagisa-grill
 * Keywords: visit, address, hours, parallax
 * Viewport Width: 1440
 * Description: Full-bleed harbour-at-dusk photograph with a slow parallax drift; the address, hours, a white pill and a text link bottom left.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-harbour.webp' ) ); ?>","alt":"Calm coastal harbour at dusk with restaurant windows lit along the water's edge.","dimRatio":30,"overlayColor":"scene","isUserOverlayColor":true,"minHeight":72,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full","className":"ng-visit sp-parallax","tagName":"section"} -->
<section class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left ng-visit sp-parallax" style="min-height:72vh"><img class="wp-block-cover__image-background" alt="Calm coastal harbour at dusk with restaurant windows lit along the water's edge." src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-harbour.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-scene-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ng-visit__col"} -->
<div class="wp-block-group ng-visit__col"><!-- wp:group {"className":"ng-label"} -->
<div class="wp-block-group ng-label"><?php echo nagisa_grill_tide(); ?>

<!-- wp:paragraph {"className":"ng-label__t"} -->
<p class="ng-label__t">Visit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"ng-h-photo","fontSize":"x-large"} -->
<h2 class="wp-block-heading ng-h-photo has-x-large-font-size">7 Harbour Row,<br>Port Ellery.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ng-copy"} -->
<p class="ng-copy">Wednesday to Sunday · bar from 17:30 · seatings at 18:00 and 20:30. Take the harbour tram to the Harbour Row stop, just a four-minute walk from the quay.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ng-visit__actions"} -->
<div class="wp-block-group ng-visit__actions"><!-- wp:buttons {"className":"ng-pill-white"} -->
<div class="wp-block-buttons ng-pill-white"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/tables/">Book a table</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ng-link"} -->
<p class="ng-link"><a href="/visit/">How to find us</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->
