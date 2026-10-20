<?php
/**
 * Title: Home: who we are, with two staggered photographs
 * Slug: tsumugi-trading/front-intro
 * Categories: tsumugi-trading
 * Keywords: home, company, trading
 * Viewport Width: 1440
 * Description: Three narrative paragraphs on the company beside two photographs set at different heights.
 */
?>
<!-- wp:group {"tagName":"section","className":"tt-fp tt-intro","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-fp tt-intro"><!-- wp:group {"className":"tt-fp__in tt-intro__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-fp__in tt-intro__in"><!-- wp:group {"className":"tt-intro__copy","layout":{"type":"default"}} -->
<div class="wp-block-group tt-intro__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'front_intro_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tsumugi_trading_t( 'front_intro_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_intro_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_intro_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'front_intro_p3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( tsumugi_trading_t( 'front_intro_b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tt-intro__photos","layout":{"type":"default"}} -->
<div class="wp-block-group tt-intro__photos"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-intro__p1"} -->
<figure class="wp-block-image size-large tt-intro__p1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/head-office.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_intro_a1' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-intro__p2"} -->
<figure class="wp-block-image size-large tt-intro__p2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting-room.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'front_intro_a2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
