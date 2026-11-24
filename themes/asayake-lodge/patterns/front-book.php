<?php
/**
 * Title: Home: key-card band
 * Slug: asayake-lodge/front-book
 * Categories: asayake-lodge
 * Viewport Width: 1440
 * Description: Rounded tinted band with a short heading, an outline button and a tilted key photograph with a soft shadow.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"al-sec al-book","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull al-sec al-book"><!-- wp:group {"className":"al-keyband","layout":{"type":"default"}} -->
<div class="wp-block-group al-keyband"><!-- wp:group {"className":"al-keyband__text","layout":{"type":"default"}} -->
<div class="wp-block-group al-keyband__text"><!-- wp:heading {"level":2,"className":"al-keyband__h"} -->
<h2 class="wp-block-heading al-keyband__h"><?php echo esc_html( asayake_lodge_t( 'book_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"al-keyband__p"} -->
<p class="al-keyband__p"><?php echo esc_html( asayake_lodge_t( 'book_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"al-btn al-btn--outline-wrap"} -->
<div class="wp-block-buttons al-btn al-btn--outline-wrap"><!-- wp:button {"className":"al-btn al-btn--outline"} -->
<div class="wp-block-button al-btn al-btn--outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'cta_bed' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"al-keyband__photo","layout":{"type":"default"}} -->
<div class="wp-block-group al-keyband__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"al-keyband__img"} -->
<figure class="wp-block-image size-full al-keyband__img"><img src="<?php echo asayake_lodge_img( 'p10-room-key.webp' ); ?>" alt="<?php echo asayake_lodge_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
