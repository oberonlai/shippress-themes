<?php
/**
 * Title: Home: industries band
 * Slug: hagane-machinery/home-buyers
 * Categories: hagane-machinery
 * Keywords: industries, customers
 * Viewport Width: 1440
 * Description: A dark graphite band with a photograph of a customer machining line, a paragraph and a customer quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-band hm-band--slate","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-band hm-band--slate"><!-- wp:group {"align":"wide","className":"hm-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-split__photo hm-split__photo--land"} -->
<figure class="wp-block-image size-large hm-split__photo hm-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/customer-line.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'home_buyers_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hm-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'home_buyers_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hm-split__title"} -->
<h2 class="wp-block-heading hm-split__title"><?php echo wp_kses_post( hagane_machinery_t( 'home_buyers_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'home_buyers_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'home_buyers_05' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( hagane_machinery_t( 'home_buyers_06' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/service/"><?php echo wp_kses_post( hagane_machinery_t( 'home_buyers_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
