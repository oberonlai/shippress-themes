<?php
/**
 * Title: Home: framed window hero
 * Slug: awa-taproom/front-hero
 * Categories: awa-taproom
 * Keywords: brewery, taproom, pub
 * Viewport Width: 1440
 * Description: A sharp-cornered photo frame floats over a full-bleed parallax taproom photo; the caps wordmark crosses the frame edge.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-taproom.webp' ) ); ?>","alt":"Empty taproom before opening with steel fermentation tanks, brick walls, and warm unlit pendant lights.","dimRatio":40,"overlayColor":"umber","isUserOverlayColor":true,"align":"full","className":"awa-hero sp-parallax","minHeight":600,"minHeightUnit":"px"} -->
<div class="wp-block-cover alignfull awa-hero sp-parallax" style="min-height:600px"><img class="wp-block-cover__image-background" alt="Empty taproom before opening with steel fermentation tanks, brick walls, and warm unlit pendant lights." src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-taproom.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-umber-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"awa-frame"} -->
<figure class="wp-block-image size-full awa-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-pour.webp' ) ); ?>" alt="Server pouring a pint of beer from a steel tap into a straight glass."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"awa-lead awa-lead--hero"} -->
<p class="awa-lead awa-lead--hero">Four taps, <u>after work</u>.<br>A seat <u>kept for you</u>.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"awa-mark","layout":{"type":"default"}} -->
<div class="wp-block-group awa-mark">
<!-- wp:heading {"level":1,"className":"awa-wordmark"} -->
<h1 class="wp-block-heading awa-wordmark">AWA TAPROOM</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"awa-mark__sub"} -->
<p class="awa-mark__sub">Small brewery · Bellingham</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"awa-cue","layout":{"type":"default"}} -->
<div class="wp-block-group awa-cue">
<!-- wp:paragraph {"className":"awa-cue__link"} -->
<p class="awa-cue__link"><a href="#pouring">TONIGHT'S TAPS ◉</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"awa-cue__bar"} -->
<p class="awa-cue__bar"></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
