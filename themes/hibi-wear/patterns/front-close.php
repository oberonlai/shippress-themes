<?php
/**
 * Title: Home: close
 * Slug: hibi-wear/front-close
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: T2 mirrored and small: the packing studio and a line to write to us.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-t2sec hw-close","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-t2sec hw-close"><!-- wp:group {"align":"wide","className":"hw-t2 hw-t2--rev","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-t2 hw-t2--rev"><!-- wp:group {"className":"hw-t2__text","layout":{"type":"default"}} -->
<div class="wp-block-group hw-t2__text"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'cl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h hw-h--s"} -->
<h2 class="wp-block-heading hw-h hw-h--s"><?php echo hibi_wear_lines( 'cl_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'cl_text' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hw-go"} -->
<p class="hw-go"><a class="hw-go__circle" href="/contact/" aria-label="<?php echo esc_attr( hibi_wear_t( 'cl_go' ) ); ?>">→</a><a class="hw-go__text" href="/contact/"><?php echo esc_html( hibi_wear_t( 'cl_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-t2__photo"} -->
<figure class="wp-block-image size-full hw-t2__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s8-packing.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_s8' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
