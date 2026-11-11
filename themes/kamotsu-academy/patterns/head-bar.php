<?php
/**
 * Title: Header: split menu, wordmark and two pills
 * Slug: kamotsu-academy/head-bar
 * Categories: kamotsu-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: Split header: the one menu at the left, the wordmark in the centre and two navy pills at the right; transparent over the page-head photo, solid white on narrow screens.
 */
?>
<!-- wp:group {"align":"full","className":"ka-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ka-bar">
<!-- wp:navigation {"overlayMenu":"mobile","className":"ka-nav","layout":{"type":"flex","justifyContent":"left"}} /-->
<!-- wp:group {"className":"ka-brand","layout":{"type":"default"}} -->
<div class="wp-block-group ka-brand">
<!-- wp:html -->
<a class="ka-mark" href="/" aria-hidden="true" tabindex="-1"></a>
<!-- /wp:html -->
<!-- wp:site-title {"level":0,"className":"ka-brand__title"} /-->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"ka-bar__pills"} -->
<div class="wp-block-buttons ka-bar__pills">
<!-- wp:button {"className":"ka-pill ka-pill--open"} -->
<div class="wp-block-button ka-pill ka-pill--open"><a class="wp-block-button__link wp-element-button" href="/contact/#open-yard"><?php echo wp_kses_post( kamotsu_academy_t( 'pill_open' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"ka-pill ka-pill--book"} -->
<div class="wp-block-button ka-pill ka-pill--book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( kamotsu_academy_t( 'pill_book' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
