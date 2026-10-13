<?php
/**
 * Title: Home: a word from the host
 * Slug: engawa-works/home-host
 * Categories: engawa-works
 * Keywords: coworking, workspace
 * Viewport Width: 1440
 * Description: The engawa rail divider, then a host portrait beside a short quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ew-section ew-home-host","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ew-section ew-home-host"><!-- wp:separator {"className":"is-style-rail"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-rail"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","className":"ew-host","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ew-host"><!-- wp:image {"sizeSlug":"large","className":"ew-host__img"} -->
<figure class="wp-block-image size-large ew-host__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/host.jpg' ) ); ?>" alt="Kenji Hanazawa, one of the hosts, standing by the courtyard door"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ew-host__text","layout":{"type":"default"}} -->
<div class="wp-block-group ew-host__text"><!-- wp:paragraph {"className":"ew-eyebrow"} -->
<p class="ew-eyebrow">From the host</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ew-quote"} -->
<p class="ew-quote">&#8220;People come for the desk and stay for the edge of the house: ten minutes on the veranda between two calls, the pine doing nothing in particular.&#8221;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ew-quote__by"} -->
<p class="ew-quote__by">Kenji Hanazawa, host since the house opened in 2021</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ew-links"} -->
<div class="wp-block-buttons ew-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/the-space/">About the space</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
