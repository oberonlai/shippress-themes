<?php
/**
 * Title: Header: brand, menu and assessment button
 * Slug: taiyo-solar-works/header-main
 * Categories: taiyo-solar-works
 * Keywords: header
 * Inserter: no
 * Viewport Width: 1440
 * Description: Site header with the ring mark, one top menu and a small outline button.
 */
?>
<!-- wp:group {"tagName":"header","align":"full","className":"ts-header","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull ts-header"><!-- wp:group {"className":"ts-header__bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group ts-header__bar"><!-- wp:group {"className":"ts-brand","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group ts-brand"><!-- wp:html -->
<span class="ts-brand__ring" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"ts-brand__name"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ts-header__end","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group ts-header__end"><!-- wp:navigation {"overlayMenu":"mobile","className":"ts-menu","layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:buttons {"className":"ts-header__cta"} -->
<div class="wp-block-buttons ts-header__cta"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/free-roof-assessment/"><?php echo wp_kses_post( taiyo_solar_works_t( 'k79e2be34' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->

