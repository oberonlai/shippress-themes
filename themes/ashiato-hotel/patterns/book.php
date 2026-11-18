<?php
/**
 * Title: Book: the one way
 * Slug: ashiato-hotel/book
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: One way to book as three prose rows (Ask, Confirm, Arrive) and a single booking button.
 */
?>
<!-- wp:group {"tagName":"section","className":"ah-sec ah-book","anchor":"book","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group ah-sec ah-book"><!-- wp:group {"className":"ah-book__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ah-book__grid"><!-- wp:group {"className":"ah-book__side sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-book__side sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2 ah-h2--large"} -->
<h2 class="wp-block-heading ah-h2 ah-h2--large"><?php echo esc_html( ashiato_hotel_t( 'book_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'book_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-book__rows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-book__rows sp-reveal sp-reveal--up"><!-- wp:group {"className":"ah-step","layout":{"type":"default"}} -->
<div class="wp-block-group ah-step"><!-- wp:heading {"level":3,"className":"ah-step__n"} -->
<h3 class="wp-block-heading ah-step__n"><?php echo esc_html( ashiato_hotel_t( 'book_ask' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'book_ask_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-step","layout":{"type":"default"}} -->
<div class="wp-block-group ah-step"><!-- wp:heading {"level":3,"className":"ah-step__n"} -->
<h3 class="wp-block-heading ah-step__n"><?php echo esc_html( ashiato_hotel_t( 'book_confirm' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'book_confirm_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-step","layout":{"type":"default"}} -->
<div class="wp-block-group ah-step"><!-- wp:heading {"level":3,"className":"ah-step__n"} -->
<h3 class="wp-block-heading ah-step__n"><?php echo esc_html( ashiato_hotel_t( 'book_arrive' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'book_arrive_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ah-pill-wrap"} -->
<div class="wp-block-buttons ah-pill-wrap"><!-- wp:button {"className":"ah-pill"} -->
<div class="wp-block-button ah-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'book_room_arrow' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ah-desk"} -->
<p class="ah-desk"><?php echo esc_html( ashiato_hotel_t( 'book_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
