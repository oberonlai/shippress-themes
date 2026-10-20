<?php
/**
 * Title: Sustainability: two voices in their words
 * Slug: tsumugi-trading/buyers-stories
 * Categories: tsumugi-trading
 * Keywords: sustainability, quotes
 * Viewport Width: 1440
 * Description: Two quotes from partners or colleagues, beside a photograph of cartons being packed.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-section tt-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-band"><!-- wp:group {"align":"wide","className":"tt-split tt-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-split tt-split--top"><!-- wp:group {"className":"tt-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'buyers_stories_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'buyers_stories_02' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( tsumugi_trading_t( 'buyers_stories_03' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsumugi_trading_t( 'buyers_stories_04' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( tsumugi_trading_t( 'buyers_stories_05' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tt-split__photo tt-split__photo--tall"} -->
<figure class="wp-block-image size-large tt-split__photo tt-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cartons-packing.webp' ) ); ?>" alt="<?php echo esc_attr( tsumugi_trading_t( 'buyers_stories_06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
