<?php
/**
 * Title: Home: the short list
 * Slug: yoru-bar/front-list
 * Categories: yoru-bar
 * Keywords: bar, drinks, panel
 * Viewport Width: 1440
 * Description: Full-viewport panel, mirrored: text at the left under a struck display word, three tall photograph strips of different heights touching each other at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-panel yb-panel--list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-panel yb-panel--list"><!-- wp:group {"className":"yb-panel__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yb-panel__text sp-stagger"><!-- wp:paragraph {"className":"yb-sub"} -->
<p class="yb-sub"><?php echo esc_html( yoru_bar_t( 'ls_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large","className":"yb-struck sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yb-struck sp-reveal sp-reveal--up has-xx-large-font-size"><?php echo esc_html( yoru_bar_t( 'ls_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"yb-body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yb-body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( yoru_bar_t( 'ls_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( yoru_bar_t( 'ls_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo yoru_bar_more( 'ls_more', '/the-list/', 'sp-reveal sp-reveal--up' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-strips","layout":{"type":"default"}} -->
<div class="wp-block-group yb-strips"><!-- wp:group {"className":"yb-strip yb-strip--1 sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group yb-strip yb-strip--1 sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y3 yb-strip__img"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y3 yb-strip__img"><img src="<?php echo esc_url( yoru_bar_img( 'Y3' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y3' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-strip yb-strip--2 sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group yb-strip yb-strip--2 sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y4 yb-strip__img"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y4 yb-strip__img"><img src="<?php echo esc_url( yoru_bar_img( 'Y4' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y4' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-strip yb-strip--3 sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group yb-strip yb-strip--3 sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y5 yb-strip__img"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y5 yb-strip__img"><img src="<?php echo esc_url( yoru_bar_img( 'Y5' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y5' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
