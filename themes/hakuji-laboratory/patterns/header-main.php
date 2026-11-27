<?php
/**
 * Title: Header: split bar
 * Slug: hakuji-laboratory/header-main
 * Categories: hakuji-laboratory
 * Inserter: no
 * Viewport Width: 1440
 * Description: Split top bar: three anchors left, the wordmark in the centre, two anchors and the one repeated account button right.
 */
?>
<!-- wp:group {"align":"full","className":"hk-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hk-header">
<!-- wp:group {"align":"wide","className":"hk-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-bar">
<!-- wp:paragraph {"className":"hk-wordmark"} -->
<p class="hk-wordmark"><a href="/"><span class="hk-dot" aria-hidden="true"></span><?php echo esc_html( hakuji_laboratory_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"mobile","className":"hk-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<!-- wp:buttons {"className":"hk-btn hk-head-btn"} -->
<div class="wp-block-buttons hk-btn hk-head-btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><span class="hk-lbl-long"><?php echo esc_html( hakuji_laboratory_t( 'btn_open' ) ); ?></span><span class="hk-lbl-short"><?php echo esc_html( hakuji_laboratory_t( 'btn_open_short' ) ); ?></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
