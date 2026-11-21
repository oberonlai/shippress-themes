<?php
/**
 * Title: Header: centred wordmark and menu
 * Slug: yunagi-jazz/header-main
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Thin pale header: language pill left, wordmark above one centred menu, ticket stub flush right.
 */
?>
<!-- wp:group {"className":"yj-head","layout":{"type":"default"}} -->
<div class="wp-block-group yj-head">
<!-- wp:html -->
<a class="yj-lang" href="/" aria-label="<?php echo esc_attr( yunagi_jazz_t( 'head_lang_label' ) ); ?>">EN</a>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"yj-logo"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","hasIcon":false,"className":"yj-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:buttons {"className":"yj-stubwrap"} -->
<div class="wp-block-buttons yj-stubwrap-wrap"><!-- wp:button {"className":"yj-stub yj-head__buy"} -->
<div class="wp-block-button yj-stub yj-head__buy"><a class="wp-block-button__link wp-element-button" href="/tickets/"><?php echo esc_html( yunagi_jazz_t( 'head_buy' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
