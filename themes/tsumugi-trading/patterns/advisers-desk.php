<?php
/**
 * Title: Leadership: who to call for what
 * Slug: tsumugi-trading/advisers-desk
 * Categories: tsumugi-trading
 * Keywords: leadership, desks
 * Viewport Width: 1440
 * Description: Who to call for which desk, with office hours, beside a photograph of the head office.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-section tt-band tt-band--slate tt-section--last-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-band tt-band--slate tt-section--last-band"><!-- wp:group {"align":"wide","className":"tt-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-split__photo tt-split__photo--land"} -->
<figure class="wp-block-image size-large tt-split__photo tt-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/head-office.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'advisers_desk_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tt-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'advisers_desk_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tt-split__title"} -->
<h2 class="wp-block-heading tt-split__title"><?php echo wp_kses_post( tsumugi_trading_t( 'advisers_desk_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'advisers_desk_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'advisers_desk_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
