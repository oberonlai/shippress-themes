<?php
/**
 * Title: Home: the trail map first
 * Slug: kumotori-hut/home-map
 * Categories: kumotori-hut
 * Keywords: mountain hut, trail
 * Viewport Width: 1440
 * Description: The isometric trail map of the saddle beside the title, a numbered legend (hut, routes, water) and today's reception line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kh-section kh-mapfirst","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kh-section kh-mapfirst"><!-- wp:group {"className":"kh-mapfirst__grid","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kh-mapfirst__grid"><!-- wp:image {"sizeSlug":"large","className":"kh-photo kh-mapfirst__map"} -->
<figure class="wp-block-image size-large kh-photo kh-mapfirst__map"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="An isometric map of the saddle: the timber hut on the ridge, a dotted trail winding up through pines and a small spring below"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kh-mapfirst__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-mapfirst__text"><!-- wp:paragraph {"className":"kh-eyebrow"} -->
<p class="kh-eyebrow">Kumotori Saddle &#183; 2,017 m</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kh-mapfirst__title"} -->
<h1 class="wp-block-heading kh-mapfirst__title">A hut at the saddle, a day above the valley.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Forty bunks, a wood stove and a hot dinner at the point where three trails meet. Open from late June until the first snow.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-legend","layout":{"type":"default"}} -->
<div class="wp-block-group kh-legend"><!-- wp:list {"ordered":true,"className":"kh-legend__list"} -->
<ol class="kh-legend__list"><!-- wp:list-item -->
<li><strong>The hut</strong> Kumotori Saddle, 2,017 m. Forty bunks, one stove, dinner at 17:30.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Three routes</strong> From Mizuhara (4 h), along the Okuyama ridge (6 h) and down to Kirino (3 h 30).</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Water</strong> A spring 200 m below the hut, and a stream at Futamata on the Mizuhara path.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:kumotori-hut/hut-info {"show":"opening"} /-->

<!-- wp:buttons {"className":"kh-links"} -->
<div class="wp-block-buttons kh-links"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/stay/">Book a bunk</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/routes/">See the routes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
