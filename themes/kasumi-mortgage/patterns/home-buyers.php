<?php
/**
 * Title: Home: first-time buyers band
 * Slug: kasumi-mortgage/home-buyers
 * Categories: kasumi-mortgage
 * Keywords: nervous, anxious, confidence
 * Viewport Width: 1440
 * Description: A deep slate band with a photograph of a couple walking into an empty living room, a paragraph and a client quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-section km-band km-band--slate","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section km-band km-band--slate"><!-- wp:group {"align":"wide","className":"km-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"km-split__photo km-split__photo--land"} -->
<figure class="wp-block-image size-large km-split__photo km-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/empty-living-room.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'home_buyers_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"km-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_buyers_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-split__title"} -->
<h2 class="wp-block-heading km-split__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_buyers_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'home_buyers_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'home_buyers_05' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( kasumi_mortgage_t( 'home_buyers_06' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/first-time-buyers/"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_buyers_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
