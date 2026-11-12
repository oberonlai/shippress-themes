<?php
/**
 * Title: Home: booking band
 * Slug: homura-safety/front-book
 * Categories: homura-safety
 * Keywords: book, contact, cta
 * Viewport Width: 1440
 * Description: A chestnut band with the single booking call to action, the address, hours, phone and email, beside a portrait photo.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"hs-book","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull hs-book"><!-- wp:group {"align":"wide","className":"hs-book__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-book__grid"><!-- wp:group {"className":"hs-book__text","layout":{"type":"default"}} -->
<div class="wp-block-group hs-book__text"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'bk_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'bk_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'bk_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hs-book__facts","layout":{"type":"default"}} -->
<div class="wp-block-group hs-book__facts"><!-- wp:paragraph -->
<p><strong><?php echo esc_html( homura_safety_t( 'bk_l1' ) ); ?></strong><br><?php echo esc_html( homura_safety_t( 'ft_address' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html( homura_safety_t( 'bk_l2' ) ); ?></strong><br><?php echo esc_html( homura_safety_t( 'bk_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html( homura_safety_t( 'bk_l3' ) ); ?></strong><br>+00 21 4460 2011</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html( homura_safety_t( 'bk_l4' ) ); ?></strong><br><a href="mailto:hello@homura-safety.example"><?php echo wp_kses_post( homura_safety_t( 'kfbdd61ce' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hs-btn hs-btn--white hs-btn--arrow"} -->
<div class="wp-block-button hs-btn hs-btn--white hs-btn--arrow"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( homura_safety_t( 'bk_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"hs-book__photo"} -->
<figure class="wp-block-image size-full hs-book__photo"><img src="<?php echo homura_safety_img( 'hs-17-evening-door' ); ?>" alt="<?php echo esc_attr( homura_safety_t( 'alt_17' ) ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
