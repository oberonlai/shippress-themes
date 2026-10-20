<?php
/**
 * Title: Home: our business lines
 * Slug: tsumugi-trading/home-services
 * Categories: tsumugi-trading
 * Keywords: business, lines
 * Viewport Width: 1440
 * Description: A paragraph on the business lines beside a photograph of a textile mill.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-section"><!-- wp:group {"align":"wide","className":"tt-split tt-split--flip tt-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-split tt-split--flip tt-split--top"><!-- wp:group {"className":"tt-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'services_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tt-split__title"} -->
<h2 class="wp-block-heading tt-split__title"><?php echo wp_kses_post( tsumugi_trading_t( 'home_services_01' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'home_services_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled tt-prices"} -->
<ul class="wp-block-list is-style-ruled tt-prices"><!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'home_services_03' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'home_services_04' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'home_services_05' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'home_services_06' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/care/"><?php echo wp_kses_post( tsumugi_trading_t( 'home_services_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-split__photo tt-split__photo--wide"} -->
<figure class="wp-block-image size-large tt-split__photo tt-split__photo--wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/textile-mill.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'services_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( tsumugi_trading_t( 'home_services_08' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
