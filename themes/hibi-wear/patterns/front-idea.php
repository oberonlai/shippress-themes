<?php
/**
 * Title: Home: the idea
 * Slug: hibi-wear/front-idea
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: T2: a rounded portrait straddling the warm band, five short lines bottom-aligned, an outline circle arrow.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-t2sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-t2sec"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'id_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h"} -->
<h2 class="wp-block-heading hw-h"><?php echo hibi_wear_lines( 'id_title' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hw-t2","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-t2"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-t2__photo"} -->
<figure class="wp-block-image size-full hw-t2__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s2-portrait.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_s2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hw-t2__text","layout":{"type":"default"}} -->
<div class="wp-block-group hw-t2__text"><!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'id_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'id_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'id_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'id_l4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'id_l5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'id_body' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hw-go"} -->
<p class="hw-go"><a class="hw-go__circle" href="/about/" aria-label="<?php echo esc_attr( hibi_wear_t( 'id_go' ) ); ?>">→</a><a class="hw-go__text" href="/about/"><?php echo esc_html( hibi_wear_t( 'id_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
