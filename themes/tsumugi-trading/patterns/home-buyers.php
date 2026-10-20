<?php
/**
 * Title: Home: sustainability band
 * Slug: tsumugi-trading/home-buyers
 * Categories: tsumugi-trading
 * Keywords: sustainability, band
 * Viewport Width: 1440
 * Description: A band with a photograph of the solar roof, a paragraph and a quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-section tt-band tt-band--slate","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-band tt-band--slate"><!-- wp:group {"align":"wide","className":"tt-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-split__photo tt-split__photo--land"} -->
<figure class="wp-block-image size-large tt-split__photo tt-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/solar-roof.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'home_buyers_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tt-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'home_buyers_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tt-split__title"} -->
<h2 class="wp-block-heading tt-split__title"><?php echo wp_kses_post( tsumugi_trading_t( 'home_buyers_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'home_buyers_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'home_buyers_05' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( tsumugi_trading_t( 'home_buyers_06' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/vaccinations-and-checks/"><?php echo wp_kses_post( tsumugi_trading_t( 'home_buyers_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
