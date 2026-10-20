<?php
/**
 * Title: Home: sustainability with a photograph and three ruled figures
 * Slug: tsumugi-trading/front-sustain
 * Categories: tsumugi-trading
 * Keywords: home, company, trading
 * Viewport Width: 1440
 * Description: A wide rounded photograph of the warehouse roof, a short narrative and three figures in hairline-ruled cells.
 */
?>
<!-- wp:group {"tagName":"section","className":"tt-fp tt-sus","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-fp tt-sus"><!-- wp:group {"className":"tt-fp__in tt-sus__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-fp__in tt-sus__in"><!-- wp:group {"className":"tt-sus__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tt-sus__grid"><!-- wp:group {"className":"tt-sus__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tt-sus__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/sustainability/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-sus__photo"} -->
<figure class="wp-block-image size-large tt-sus__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/solar-roof.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_sus_a' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-sfigs","layout":{"type":"default"}} -->
<div class="wp-block-group tt-sfigs"><!-- wp:group {"className":"tt-sfig","layout":{"type":"default"}} -->
<div class="wp-block-group tt-sfig"><!-- wp:paragraph {"className":"tt-sfig__no"} -->
<p class="tt-sfig__no"><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_f1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tt-sfig__text"} -->
<p class="tt-sfig__text"><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_f1t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-sfig","layout":{"type":"default"}} -->
<div class="wp-block-group tt-sfig"><!-- wp:paragraph {"className":"tt-sfig__no"} -->
<p class="tt-sfig__no"><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_f2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tt-sfig__text"} -->
<p class="tt-sfig__text"><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_f2t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-sfig","layout":{"type":"default"}} -->
<div class="wp-block-group tt-sfig"><!-- wp:paragraph {"className":"tt-sfig__no"} -->
<p class="tt-sfig__no"><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_f3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tt-sfig__text"} -->
<p class="tt-sfig__text"><?php echo wp_kses_post( tsumugi_trading_t( 'front_sus_f3t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
