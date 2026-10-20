<?php
/**
 * Title: Shipping & Returns: page head
 * Slug: hibi-wear/shipping-head
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: T1 head and a T2 block with the packing studio.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-t2sec hw-pagehead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-t2sec hw-pagehead"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'sp_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h hw-h--page","level":1} -->
<h1 class="wp-block-heading hw-h hw-h--page"><?php echo hibi_wear_lines( 'sp_title' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hw-t2","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-t2"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-t2__photo"} -->
<figure class="wp-block-image size-full hw-t2__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s8-packing.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_s8' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hw-t2__text","layout":{"type":"default"}} -->
<div class="wp-block-group hw-t2__text"><!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'sp_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'sp_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'sp_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'sp_l4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-go"} -->
<p class="hw-go"><a class="hw-go__circle" href="/sizing/" aria-label="<?php echo esc_attr( hibi_wear_t( 'sp_go' ) ); ?>">→</a><a class="hw-go__text" href="/sizing/"><?php echo esc_html( hibi_wear_t( 'sp_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
