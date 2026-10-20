<?php
/**
 * Title: Home: the port at dawn (photograph, words below)
 * Slug: tsumugi-trading/home-opening
 * Categories: tsumugi-trading
 * Keywords: home, hero, port
 * Viewport Width: 1440
 * Description: A photograph of the port, the headline and a short paragraph with a link below it, then a quiet info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-hero"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-hero__picture"} -->
<figure class="wp-block-image size-large tt-hero__picture"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/port-dawn.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'home_opening_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"tt-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-hero__copy"><!-- wp:group {"className":"tt-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group tt-hero__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'home_opening_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tt-hero__title"} -->
<h1 class="wp-block-heading tt-hero__title"><?php echo wp_kses_post( tsumugi_trading_t( 'home_opening_03' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group tt-hero__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( tsumugi_trading_t( 'home_opening_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( tsumugi_trading_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/care/"><?php echo wp_kses_post( tsumugi_trading_t( 'home_opening_05' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-hero__bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group tt-hero__bar"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:list {"className":"tt-facts"} -->
<ul class="wp-block-list tt-facts"><!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'home_opening_06' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'home_opening_07' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'home_opening_08' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'home_opening_09' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
