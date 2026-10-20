<?php
/**
 * Title: Home: careers on a deep ink band
 * Slug: tsumugi-trading/front-careers
 * Categories: tsumugi-trading
 * Keywords: home, company, trading
 * Viewport Width: 1440
 * Description: A deep ink band with a photograph of a trainee at a desk, a narrative paragraph and the open roles as a list.
 */
?>
<!-- wp:group {"tagName":"section","className":"tt-fp tt-car","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-fp tt-car"><!-- wp:group {"className":"tt-fp__in tt-car__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-fp__in tt-car__in"><!-- wp:group {"className":"tt-car__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tt-car__grid"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-car__photo"} -->
<figure class="wp-block-image size-large tt-car__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/trainee-desk.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_car_a' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tt-car__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tt-car__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'front_car_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tsumugi_trading_t( 'front_car_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_car_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"tt-roles"} -->
<ul class="wp-block-list tt-roles"><!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'front_car_r1' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'front_car_r2' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( tsumugi_trading_t( 'front_car_r3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/careers/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_car_b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
