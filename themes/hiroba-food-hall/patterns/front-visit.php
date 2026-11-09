<?php
/**
 * Title: Home: visit
 * Slug: hiroba-food-hall/front-visit
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Description: Stone closing band with address, hours chip and the entrance photo.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-sec--stone hb-sec--close hb-visit","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-sec hb-sec--stone hb-sec--close hb-visit"><!-- wp:group {"className":"hb-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hb-lockup"><!-- wp:paragraph {"className":"hb-caps"} -->
<p class="hb-caps"><?php echo esc_html( hiroba_t( 'caps_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-sub"} -->
<p class="hb-sub"><?php echo esc_html( hiroba_t( 'sub_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-rule"/>
<!-- /wp:separator -->

<!-- wp:heading {"className":"hb-statement"} -->
<h2 class="wp-block-heading hb-statement"><?php echo hiroba_gold( 'st_visit' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-visit__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hb-visit__cols"><!-- wp:group {"className":"hb-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group hb-visit__text"><!-- wp:paragraph {"className":""} -->
<p class=""><?php echo esc_html( hiroba_t( 'visit_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-visit__addr"} -->
<p class="hb-visit__addr"><?php echo esc_html( hiroba_t( 'visit_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hb-hours-row","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hours-row"><!-- wp:paragraph {"className":"hb-chip"} -->
<p class="hb-chip"><?php echo esc_html( hiroba_t( 'chip_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hb-hours-lines","layout":{"type":"default"}} -->
<div class="wp-block-group hb-hours-lines"><!-- wp:paragraph {"className":"hb-hl"} -->
<p class="hb-hl"><?php echo esc_html( hiroba_t( 'visit_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-hl"} -->
<p class="hb-hl"><?php echo esc_html( hiroba_t( 'visit_h2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hb-visit__addr"} -->
<p class="hb-visit__addr"><?php echo esc_html( hiroba_t( 'contact_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hb-btn hb-btn--gold hb-btn--wide"} -->
<div class="wp-block-button hb-btn hb-btn--gold hb-btn--wide"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( hiroba_t( 'visit_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-visit__img"} -->
<figure class="wp-block-image size-full hb-visit__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p18.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
