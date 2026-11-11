<?php
/**
 * Title: Home: foot wordmark first screen
 * Slug: nagisa-grill/front-kv
 * Categories: nagisa-grill
 * Keywords: hero, restaurant, wordmark, info bar
 * Viewport Width: 1440
 * Description: Full-bleed film photograph with a slow parallax drift, the six-letter name spread edge to edge along the foot, and an info bar with a hairline, the day's service and two outlined tabs.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-service.webp' ) ); ?>","alt":"Server placing a whole grilled fish on a pale plate between two seated guests.","dimRatio":30,"overlayColor":"scene","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full","className":"ng-kv sp-parallax","tagName":"section"} -->
<section class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left ng-kv sp-parallax" style="min-height:100vh"><img class="wp-block-cover__image-background" alt="Server placing a whole grilled fish on a pale plate between two seated guests." src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-service.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-scene-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"ng-wm"} -->
<h1 class="wp-block-heading ng-wm"><span>N</span><span>A</span><span>G</span><span>I</span><span>S</span><span>A</span></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ng-infobar"} -->
<div class="wp-block-group ng-infobar"><!-- wp:paragraph {"className":"ng-infobar__l"} -->
<p class="ng-infobar__l"><span class="ng-scroll">Scroll</span><span class="ng-tick" aria-hidden="true"></span>Wed–Sun · one service · 18:00 / 20:30</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ng-infobar__r"} -->
<div class="wp-block-group ng-infobar__r"><!-- wp:paragraph {"className":"ng-infobar__boat"} -->
<p class="ng-infobar__boat">Today's boat: the Wren, Berth 14</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ng-tabs"} -->
<div class="wp-block-buttons ng-tabs"><!-- wp:button {"className":"is-style-outline ng-tab"} -->
<div class="wp-block-button is-style-outline ng-tab"><a class="wp-block-button__link wp-element-button" href="/menu/">The menu</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline ng-tab"} -->
<div class="wp-block-button is-style-outline ng-tab"><a class="wp-block-button__link wp-element-button" href="/tables/">Tables</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->
