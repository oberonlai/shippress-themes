<?php
/**
 * Title: Home: the photograph under the transparent header
 * Slug: hana-kago/home-hero
 * Categories: hana-kago, banner
 * Keywords: hero, home, intro, photograph
 * Viewport Width: 1440
 * Description: A full-width photograph that runs under the transparent header, with the greeting, a short line and two buttons over a blush veil.
 */
?>
<!-- wp:group {"align":"full","className":"hk-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hk-hero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-hero__photo"} -->
<figure class="wp-block-image size-full hk-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="A loose bouquet of coral ranunculus, blush roses and eucalyptus lying on pink linen"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group hk-hero__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Florist on Petal Row · since 2014</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Flowers gathered <em>by hand</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Seasonal bouquets, baskets, dried posies and wreaths from a small shop in Ashcombe, wrapped in paper and cycled to your door the same day.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/">Shop the flower table</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/subscriptions/">Flowers every week</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
