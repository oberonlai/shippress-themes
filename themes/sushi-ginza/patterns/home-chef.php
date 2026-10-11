<?php
/**
 * Title: Home: the chef’s hands
 * Slug: sushi-ginza/home-chef
 * Categories: sushi-ginza
 * Keywords: chef, about, photographs
 * Viewport Width: 1440
 * Description: Two photographs and a short paragraph about the chef.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-section sg-chef","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sg-section sg-chef"><!-- wp:group {"className":"sg-pair","layout":{"type":"default"}} -->
<div class="wp-block-group sg-pair"><!-- wp:image {"sizeSlug":"full","className":"sg-pair__a"} -->
<figure class="wp-block-image size-full sg-pair__a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.jpg' ) ); ?>" alt="A chef in a white jacket pressing a piece of nigiri over a hinoki counter"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sg-pair__text","layout":{"type":"default"}} -->
<div class="wp-block-group sg-pair__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The chef</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sg-pair__title"} -->
<h2 class="wp-block-heading sg-pair__title">Twenty-two years, the same knife</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Haruki Senda trained for eleven years at a counter in Tsukiji’s back streets before opening his own. He still sharpens one yanagiba each night and keeps the rice at body warmth, the way he was taught.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sg-links"} -->
<div class="wp-block-buttons sg-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/about/">About the counter</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","className":"sg-pair__b"} -->
<figure class="wp-block-image size-full sg-pair__b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/interior.jpg' ) ); ?>" alt="An empty pale wood counter with eight stools and indigo curtains"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
