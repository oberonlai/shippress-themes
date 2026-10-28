<?php
/**
 * Title: Home: framed cover
 * Slug: yoru-bar/front-kv
 * Categories: yoru-bar
 * Keywords: bar, cover, hero
 * Viewport Width: 1440
 * Description: Full-bleed photograph framed by two big foreground objects, a centred moon ring and wordmark that fade in, a vertical cue and a bottom info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-kv sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-kv sp-parallax"><!-- wp:group {"className":"yb-kv__media","layout":{"type":"default"}} -->
<div class="wp-block-group yb-kv__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-ph yb-ph--y1 yb-kv__img sp-parallax__layer"} -->
<figure class="wp-block-image size-full yb-ph yb-ph--y1 yb-kv__img sp-parallax__layer"><img src="<?php echo esc_url( yoru_bar_img( 'Y1' ) ); ?>" alt="<?php echo esc_attr( yoru_bar_t( 'alt_Y1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-kv__fg","layout":{"type":"default"}} -->
<div class="wp-block-group yb-kv__fg"><!-- wp:html -->
<?php echo yoru_bar_moon( 140, 'kv', 'yb-moon yb-kv__moon' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- /wp:html -->

<!-- wp:heading {"level":1,"fontSize":"x-large","className":"yb-kv__h1"} -->
<h1 class="wp-block-heading yb-kv__h1 has-x-large-font-size">YORU<br>BAR</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yb-kv__sub"} -->
<p class="yb-kv__sub"><?php echo esc_html( yoru_bar_t( 'kv_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yb-kv__cue"} -->
<p class="yb-kv__cue"><?php echo esc_html( yoru_bar_t( 'kv_cue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yb-kv__bar","layout":{"type":"default"}} -->
<div class="wp-block-group yb-kv__bar"><!-- wp:paragraph {"className":"yb-kv__item"} -->
<p class="yb-kv__item"><?php echo esc_html( yoru_bar_t( 'kv_bar1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-kv__item"} -->
<p class="yb-kv__item"><?php echo esc_html( yoru_bar_t( 'kv_bar2' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo yoru_bar_more( 'kv_cta', '/reserve/', 'yb-more--sm yb-kv__item' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
