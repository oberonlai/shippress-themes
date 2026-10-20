<?php
/**
 * Title: Home: care
 * Slug: hibi-wear/front-wash
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: T3: before/after split photo with two flat tabs and a big serif number.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-wash","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-wash"><!-- wp:group {"align":"wide","className":"hw-wash__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-wash__grid"><!-- wp:group {"className":"hw-wash__text","layout":{"type":"default"}} -->
<div class="wp-block-group hw-wash__text"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'wa_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h"} -->
<h2 class="wp-block-heading hw-h"><?php echo hibi_wear_lines( 'wa_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'wa_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'wa_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-go"} -->
<p class="hw-go"><a class="hw-go__circle" href="/fabrics/" aria-label="<?php echo esc_attr( hibi_wear_t( 'wa_go' ) ); ?>">→</a><a class="hw-go__text" href="/fabrics/"><?php echo esc_html( hibi_wear_t( 'wa_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hw-split","layout":{"type":"default"}} -->
<div class="wp-block-group hw-split"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-split__img"} -->
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
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
