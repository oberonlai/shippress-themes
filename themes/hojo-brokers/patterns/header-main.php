<?php
/**
 * Title: Header: utility row and slate anchor menu
 * Slug: hojo-brokers/header-main
 * Categories: hojo-brokers
 * Keywords: header
 * Viewport Width: 1440
 * Description: Two-tier header: wordmark and contact utility row, then a slate navigation band with the one repeated call to action.
 */
?>
<!-- wp:group {"className":"hb-head","layout":{"type":"default"}} -->
<div class="wp-block-group hb-head"><!-- wp:group {"className":"hb-util","layout":{"type":"default"}} -->
<div class="wp-block-group hb-util"><!-- wp:group {"className":"hb-util__in","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group hb-util__in"><!-- wp:html -->
<?php echo wp_kses_post( hojo_brokers_t( 'k54152417' ) ); ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hb-util__contact"} -->
<p class="hb-util__contact"><?php echo wp_kses_post( hojo_brokers_t( 'k6bbd81db' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-navband","layout":{"type":"default"}} -->
<div class="wp-block-group hb-navband"><!-- wp:group {"className":"hb-navband__in","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group hb-navband__in"><!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"primary","overlayTextColor":"white","className":"hb-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"hb-cta-row hb-cta-row--head"} -->
<div class="wp-block-buttons hb-cta-row hb-cta-row--head"><!-- wp:button {"className":"hb-cta"} -->
<div class="wp-block-button hb-cta"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( hojo_brokers_t( 'kb27f46a5' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
