<?php
/**
 * Title: Footer
 * Slug: hiroba-food-hall/footer-body
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Inserter: no
 * Description: Ink footer with the inverted hours chip, address and links.
 */
?>
<!-- wp:group {"align":"full","className":"hb-foot","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hb-foot"><!-- wp:group {"align":"wide","className":"hb-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-foot__grid"><!-- wp:group {"className":"hb-foot__name","layout":{"type":"default"}} -->
<div class="wp-block-group hb-foot__name"><!-- wp:site-title {"level":0,"className":"hb-foot__mark"} /-->

<!-- wp:paragraph {"className":"hb-foot__tag"} -->
<p class="hb-foot__tag"><?php echo esc_html( hiroba_t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-foot__info","layout":{"type":"default"}} -->
<div class="wp-block-group hb-foot__info"><!-- wp:group {"className":"hb-hours-row hb-hours-row--inv","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hours-row hb-hours-row--inv"><!-- wp:paragraph {"className":"hb-chip"} -->
<p class="hb-chip"><?php echo esc_html( hiroba_t( 'chip_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hb-hours-lines","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hours-lines"><!-- wp:paragraph {"className":"hb-hl"} -->
<p class="hb-hl"><?php echo esc_html( hiroba_t( 'hours_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-hl"} -->
<p class="hb-hl"><?php echo esc_html( hiroba_t( 'hours_l2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hb-foot__addr"} -->
<p class="hb-foot__addr"><?php echo esc_html( hiroba_t( 'addr_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-foot__addr"} -->
<p class="hb-foot__addr"><?php echo esc_html( hiroba_t( 'contact_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","className":"hb-foot__nav","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"Footer"} -->

<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_kitchens' ) ); ?>,"url":"/kitchens/","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_lunch' ) ); ?>,"url":"/lunch-hour/","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_tables' ) ); ?>,"url":"/tables/","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_visit' ) ); ?>,"url":"/visit/","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_journal' ) ); ?>,"url":"/journal/","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hb-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-foot__base"><!-- wp:paragraph {"className":"hb-foot__legal"} -->
<p class="hb-foot__legal"><?php echo esc_html( hiroba_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
