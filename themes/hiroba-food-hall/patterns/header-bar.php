<?php
/**
 * Title: Header: split nav
 * Slug: hiroba-food-hall/header-bar
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Inserter: no
 * Description: Split header: three links, the wordmark, three links and the gold Hold a table button.
 */
?>
<!-- wp:group {"align":"full","className":"hb-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hb-header"><!-- wp:group {"align":"wide","className":"hb-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-bar"><!-- wp:group {"className":"hb-links hb-links--l","layout":{"type":"default"}} -->
<div class="wp-block-group hb-links hb-links--l"><!-- wp:paragraph {"className":"hb-link"} -->
<p class="hb-link"><a href="/kitchens/"><?php echo esc_html( hiroba_t( 'nav_kitchens' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-link"} -->
<p class="hb-link"><a href="/lunch-hour/"><?php echo esc_html( hiroba_t( 'nav_lunch' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-link"} -->
<p class="hb-link"><a href="/tables/"><?php echo esc_html( hiroba_t( 'nav_tables' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-brand","layout":{"type":"default"}} -->
<div class="wp-block-group hb-brand"><!-- wp:paragraph {"className":"hb-brand__title"} -->
<p class="hb-brand__title"><a href="/" rel="home"><?php echo esc_html( hiroba_t( 'brand_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-brand__sub"} -->
<p class="hb-brand__sub"><?php echo esc_html( hiroba_t( 'brand_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"hb-nav hb-nav--r","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"},"ariaLabel":"Main"} -->

<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_kitchens' ) ); ?>,"url":"/kitchens/","kind":"custom","isTopLevelLink":true,"className":"hb-dup"} /-->
<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_lunch' ) ); ?>,"url":"/lunch-hour/","kind":"custom","isTopLevelLink":true,"className":"hb-dup"} /-->
<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_tables' ) ); ?>,"url":"/tables/","kind":"custom","isTopLevelLink":true,"className":"hb-dup"} /-->
<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_visit' ) ); ?>,"url":"/visit/","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_journal' ) ); ?>,"url":"/journal/","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":<?php echo wp_json_encode( hiroba_t( 'nav_hold' ) ); ?>,"url":"/tables/","kind":"custom","isTopLevelLink":true,"className":"hb-nav-btn"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
