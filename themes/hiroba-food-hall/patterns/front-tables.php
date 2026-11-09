<?php
/**
 * Title: Home: held tables
 * Slug: hiroba-food-hall/front-tables
 * Categories: hiroba-food-hall
 * Keywords: food hall, restaurant, lunch
 * Viewport Width: 1440
 * Description: Stone band: photo left, lockup, two paragraphs and a gold button right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-sec--stone hb-tables","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-sec hb-sec--stone hb-tables"><!-- wp:group {"className":"hb-tables__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hb-tables__cols"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-tables__img"} -->
<figure class="wp-block-image size-full hb-tables__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14.webp' ) ); ?>" alt="<?php echo esc_attr( hiroba_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hb-tables__text","layout":{"type":"default"}} -->
<div class="wp-block-group hb-tables__text"><!-- wp:group {"className":"hb-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hb-lockup"><!-- wp:paragraph {"className":"hb-caps"} -->
<p class="hb-caps"><?php echo esc_html( hiroba_t( 'caps_tables' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-sub"} -->
<p class="hb-sub"><?php echo esc_html( hiroba_t( 'sub_tables' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"hb-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity hb-rule"/>
<!-- /wp:separator -->

<!-- wp:heading {"className":"hb-statement"} -->
<h2 class="wp-block-heading hb-statement"><?php echo hiroba_gold( 'st_tables' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":""} -->
<p class=""><?php echo esc_html( hiroba_t( 'tables_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":""} -->
<p class=""><?php echo esc_html( hiroba_t( 'tables_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hb-btn hb-btn--gold hb-btn--wide"} -->
<div class="wp-block-button hb-btn hb-btn--gold hb-btn--wide"><a class="wp-block-button__link wp-element-button" href="/tables/"><?php echo esc_html( hiroba_t( 'tables_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
