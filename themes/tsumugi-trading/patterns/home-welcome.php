<?php
/**
 * Title: Home: a word from the chair
 * Slug: tsumugi-trading/home-welcome
 * Categories: tsumugi-trading
 * Keywords: about, welcome
 * Viewport Width: 1440
 * Description: Two narrative paragraphs from the chair beside a portrait.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-section"><!-- wp:group {"align":"wide","className":"tt-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-split__photo tt-split__photo--tall"} -->
<figure class="wp-block-image size-large tt-split__photo tt-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/director-portrait-1.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'home_welcome_01' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( tsumugi_trading_t( 'home_welcome_02' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tt-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'home_welcome_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tt-split__title"} -->
<h2 class="wp-block-heading tt-split__title"><?php echo wp_kses_post( tsumugi_trading_t( 'home_welcome_04' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'home_welcome_05' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'home_welcome_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tt-sign"} -->
<p class="tt-sign"><?php echo wp_kses_post( tsumugi_trading_t( 'home_welcome_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
