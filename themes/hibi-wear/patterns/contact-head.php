<?php
/**
 * Title: Contact: page head
 * Slug: hibi-wear/contact-head
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: T1 head and a T2 block: the studio address, hours and a mail circle.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-t2sec hw-pagehead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-t2sec hw-pagehead"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'ct_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h hw-h--page","level":1} -->
<h1 class="wp-block-heading hw-h hw-h--page"><?php echo hibi_wear_lines( 'ct_title' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hw-t2","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-t2"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hw-t2__photo hw-t2__photo--crop"} -->
<figure class="wp-block-image size-full hw-t2__photo hw-t2__photo--crop"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s1-cover.webp' ) ); ?>" alt="<?php echo esc_attr( hibi_wear_t( 'alt_cover' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hw-t2__text","layout":{"type":"default"}} -->
<div class="wp-block-group hw-t2__text"><!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'ct_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'ct_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-line"} -->
<p class="hw-line"><?php echo esc_html( hibi_wear_t( 'ct_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><a href="tel:+15035550142">+1 503 555 0142</a> · <a href="mailto:hello@hibiwear.example">hello@hibiwear.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hw-body"} -->
<p class="hw-body"><?php echo esc_html( hibi_wear_t( 'ct_note' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hw-go"} -->
<p class="hw-go"><a class="hw-go__circle" href="mailto:hello@hibiwear.example" aria-label="<?php echo esc_attr( hibi_wear_t( 'ct_go' ) ); ?>">→</a><a class="hw-go__text" href="mailto:hello@hibiwear.example"><?php echo esc_html( hibi_wear_t( 'ct_go' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
