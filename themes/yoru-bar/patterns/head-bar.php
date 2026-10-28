<?php
/**
 * Title: Header bar
 * Slug: yoru-bar/head-bar
 * Categories: yoru-bar
 * Keywords: bar, header, navigation
 * Viewport Width: 1440
 * Description: Transparent overlay header: moon ring and wordmark at the left; Reserve, language list and a vertical Menu between two hairlines at the right.
 */
?>
<!-- wp:group {"className":"yb-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group yb-header__bar"><!-- wp:group {"className":"yb-brand","layout":{"type":"default"}} -->
<div class="wp-block-group yb-brand"><!-- wp:html -->
<?php echo yoru_bar_moon( 40, 'hd', 'yb-moon yb-brand__moon' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"yb-brand__name"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-header__end","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group yb-header__end"><!-- wp:paragraph {"className":"yb-header__reserve"} -->
<p class="yb-header__reserve"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( yoru_bar_t( 'reserve_label' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-header__lang"} -->
<p class="yb-header__lang"><strong>EN</strong> / FR / DE / ZH / JA</p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"always","className":"yb-nav","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
