<?php
/**
 * Title: Home: cover
 * Slug: michi-motors/front-cover
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Full-bleed dimmed front-on car photo, staggered four-line light headline split across the left and right halves, crimson rule with a three-line lead, down-arrow cue and an outline ring.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mm-cover mm-band", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mm-cover mm-band"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mm-band__img"} -->
<figure class="wp-block-image size-full mm-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s1-cover.webp' ) ); ?>" alt="A graphite hatchback seen from the front on a wet forecourt at dusk, showroom glass lit behind it"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mm-cover__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-cover__grid"><!-- wp:heading {"level":1,"className":"mm-t1 mm-t1--cover"} -->
<h1 class="wp-block-heading mm-t1 mm-t1--cover"><span class="mm-t1__l mm-t1__l--1">Driven</span><span class="mm-t1__l mm-t1__l--2">here since,</span><span class="mm-t1__l mm-t1__l--3">nineteen</span><span class="mm-t1__l mm-t1__l--4">eighty-seven.</span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-rule-lead mm-cover__lead"} -->
<p class="mm-rule-lead mm-cover__lead">A family dealership in Sacramento, Davis and Roseville. New cars, approved used and a service bay that has been open since 1987.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-cue"} -->
<p class="mm-cue"><a href="#forecourt"><span class="mm-cue__arrow">&#8595;</span> See the forecourt</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-ringlink mm-ringlink--corner"} -->
<p class="mm-ringlink mm-ringlink--corner"><a href="/test-drive/" aria-label="Book a test drive"></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
