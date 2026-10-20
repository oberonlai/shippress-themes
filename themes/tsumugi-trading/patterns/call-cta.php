<?php
/**
 * Title: Call or write to the trading desk
 * Slug: tsumugi-trading/call-cta
 * Categories: tsumugi-trading
 * Keywords: contact, call to action
 * Viewport Width: 1440
 * Description: A short call to contact the desk, beside a photograph of a meeting room.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-section tt-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-section--last"><!-- wp:group {"align":"wide","className":"tt-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-cta"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-cta__photo"} -->
<figure class="wp-block-image size-large tt-cta__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting-room.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'call_cta_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tt-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-cta__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'call_cta_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tt-cta__title"} -->
<h2 class="wp-block-heading tt-cta__title"><?php echo wp_kses_post( tsumugi_trading_t( 'call_cta_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'call_cta_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( tsumugi_trading_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:01632960418">01632 960 418</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
