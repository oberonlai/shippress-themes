<?php
/**
 * Title: Home: book tonight
 * Slug: michikusa-lodge/front-book
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Description: Ink block with the double-hairline band on dark, a 4:5 photograph, a round amber disc, one sentence, the one button and the desk contacts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--ink","anchor":"book","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull ml-sec ml-sec--ink"><!-- wp:group {"className":"ml-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap"><!-- wp:group {"className":"ml-band sp-reveal sp-reveal--up ml-band--ink","layout":{"type":"default"}} -->
<div class="wp-block-group ml-band sp-reveal sp-reveal--up ml-band--ink"><!-- wp:heading {"level":2,"className":"ml-band__h"} -->
<h2 class="wp-block-heading ml-band__h"><?php echo esc_html( michikusa_lodge_t( 'book_band' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-band__sub"} -->
<p class="ml-band__sub"><?php echo esc_html( michikusa_lodge_t( 'book_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-book","layout":{"type":"default"}} -->
<div class="wp-block-group ml-book"><!-- wp:group {"className":"ml-book__photo sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group ml-book__photo sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-book__img"} -->
<figure class="wp-block-image size-full ml-book__img"><img src="<?php echo michikusa_lodge_img( 'p14-guest-walking.webp' ); ?>" alt="<?php echo michikusa_lodge_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-book__text","layout":{"type":"default"}} -->
<div class="wp-block-group ml-book__text"><!-- wp:paragraph {"className":"ml-book__disc"} -->
<p class="ml-book__disc"><?php echo michikusa_lodge_lines( 'disc2' ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-book__p"} -->
<p class="ml-book__p"><?php echo esc_html( michikusa_lodge_t( 'book_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ml-btn ml-btn--light"} -->
<div class="wp-block-button ml-btn ml-btn--light"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book-tonight/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'cta_book2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --><!-- wp:paragraph {"className":"ml-book__c"} -->
<p class="ml-book__c"><a href="tel:+00445550142"><?php echo esc_html( michikusa_lodge_t( 'book_phone' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-book__c"} -->
<p class="ml-book__c"><a href="mailto:desk@michikusa-lodge.example">desk@michikusa-lodge.example</a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-book__small"} -->
<p class="ml-book__small"><?php echo esc_html( michikusa_lodge_t( 'book_small' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
