<?php
/**
 * Title: Home: how a drink is built
 * Slug: yoru-bar/front-build
 * Categories: yoru-bar
 * Keywords: bar, process, white
 * Viewport Width: 1440
 * Description: White section: a pale macro photograph washed to white at its edges, a struck display word in ink with a spaced line below, a narrow left text column and a strip of four photographs that bleeds off both edges.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-build","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-build"><!-- wp:group {"className":"yb-build__top","layout":{"type":"default"}} -->
<div class="wp-block-group yb-build__top"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y7 yb-build__wash"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y7 yb-build__wash"><img src="<?php echo esc_url( yoru_bar_img( 'Y7' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y7' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yb-wrap yb-build__inner","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-build__inner"><!-- wp:group {"className":"yb-build__head sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yb-build__head sp-stagger"><!-- wp:heading {"fontSize":"xx-large","className":"yb-struck yb-struck--ink sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yb-struck yb-struck--ink sp-reveal sp-reveal--up has-xx-large-font-size"><?php echo esc_html( yoru_bar_t( 'bd_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yb-line"} -->
<p class="yb-line"><?php echo esc_html( yoru_bar_t( 'bd_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-build__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yb-build__text sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( yoru_bar_t( 'bd_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo yoru_bar_more( 'bd_more', '/the-build/', 'yb-more--ink sp-reveal sp-reveal--up' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-tiles sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-tiles sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y8 yb-tile"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y8 yb-tile"><img src="<?php echo esc_url( yoru_bar_img( 'Y8' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y8' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y9 yb-tile"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y9 yb-tile"><img src="<?php echo esc_url( yoru_bar_img( 'Y9' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y9' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y10 yb-tile"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y10 yb-tile"><img src="<?php echo esc_url( yoru_bar_img( 'Y10' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y11 yb-tile"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y11 yb-tile"><img src="<?php echo esc_url( yoru_bar_img( 'Y11' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y11' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
