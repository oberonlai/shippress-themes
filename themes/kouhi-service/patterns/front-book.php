<?php
/**
 * Title: Home: book
 * Slug: kouhi-service/front-book
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: The one booking panel: text, phone and a filled button on the left, a square photograph on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"ks-sec ks-book-sec","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull ks-sec ks-book-sec"><!-- wp:group {"className":"ks-in ks-book","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in ks-book"><!-- wp:group {"className":"ks-book__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-book__text"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo esc_html( kouhi_service_t( 'lbl_book' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo esc_html( kouhi_service_t( 'book_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kouhi_service_t( 'book_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="mailto:hello@kouhi.example"><?php echo esc_html( kouhi_service_t( 'book_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-photo ks-photo--11"} -->
<figure class="wp-block-image size-full ks-photo ks-photo--11"><img src="<?php echo kouhi_service_img( 'p10-case.webp' ); ?>" alt="<?php echo esc_attr( kouhi_service_t( 'alt_P10' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
