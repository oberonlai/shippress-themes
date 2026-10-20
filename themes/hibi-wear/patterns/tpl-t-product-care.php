<?php
/**
 * Title: Single product: care panel
 * Slug: hibi-wear/tpl-t-product-care
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Inserter: no
 * Description: A small before/after split and the care note.
 */
?>
<!-- wp:group {"className":"hw-care","layout":{"type":"default"}} -->
<div class="wp-block-group hw-care"><!-- wp:group {"className":"hw-split hw-split--small","layout":{"type":"default"}} -->
<div class="wp-block-group hw-split hw-split--small"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-split__img"} -->
<figure class="wp-block-image size-full hw-split__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s3-wash.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_s3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hw-split__tabs","layout":{"type":"default"}} -->
<div class="wp-block-group hw-split__tabs"><!-- wp:paragraph {"className":"hw-tab hw-tab--new"} -->
<p class="hw-tab hw-tab--new"><?php echo esc_html( hibi_wear_t( 'tab_new' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-tab hw-tab--after"} -->
<p class="hw-tab hw-tab--after"><?php echo esc_html( hibi_wear_t( 'tab_after' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hw-split__num"} -->
<p class="hw-split__num"><span><?php echo esc_html( hibi_wear_t( 'num_word' ) ); ?></span>20</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hw-care__text","layout":{"type":"default"}} -->
<div class="wp-block-group hw-care__text"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'care_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h hw-h--sub","level":3} -->
<h3 class="wp-block-heading hw-h hw-h--sub"><?php echo esc_html( hibi_wear_t( 'care_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'care_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
