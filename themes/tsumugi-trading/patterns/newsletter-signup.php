<?php
/**
 * Title: Newsletter: the trading letter
 * Slug: tsumugi-trading/newsletter-signup
 * Categories: tsumugi-trading
 * Keywords: newsletter, signup
 * Viewport Width: 1440
 * Description: The quarterly newsletter sign-up beside a photograph of a trainee at a desk.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-head tt-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-head tt-section--last"><!-- wp:group {"align":"wide","className":"tt-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-split"><!-- wp:group {"className":"tt-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'newsletter_signup_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tt-head__title"} -->
<h1 class="wp-block-heading tt-head__title"><?php echo wp_kses_post( tsumugi_trading_t( 'newsletter_signup_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( tsumugi_trading_t( 'newsletter_signup_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="tt-form tt-form--row" action="#" method="post"><p class="tt-field"><label for="tt-letter"><?php echo wp_kses_post( tsumugi_trading_t( 'newsletter_signup_04' ) ); ?></label><input id="tt-letter" name="email" type="email" autocomplete="email"></p><p class="tt-field"><button type="submit"><?php echo wp_kses_post( tsumugi_trading_t( 'newsletter_signup_05' ) ); ?></button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"tt-small"} -->
<p class="tt-small"><?php echo wp_kses_post( tsumugi_trading_t( 'newsletter_signup_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-split__photo tt-split__photo--tall"} -->
<figure class="wp-block-image size-large tt-split__photo tt-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/trainee-desk.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'newsletter_signup_07' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
