<?php
/**
 * Title: Page: Page: Book a room
 * Slug: ashiato-hotel/page-book
 * Categories: ashiato-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Book: Ask, Confirm, Arrive; the booking form slot with a mailto fallback; rates and terms.
 */
?>
<!-- wp:group {"className":"ah-inner","layout":{"type":"default"}} -->
<div class="wp-block-group ah-inner"><!-- wp:group {"className":"ah-window ah-window--inner sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ah-window ah-window--inner sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ah-inner__img"} -->
<figure class="wp-block-image size-full ah-inner__img"><img src="<?php echo ashiato_hotel_img( 'room-arrival.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ah-scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ah-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ah-hero__copy"><!-- wp:heading {"level":1,"className":"ah-hero__h1 ah-hero__h1--inner"} -->
<h1 class="wp-block-heading ah-hero__h1 ah-hero__h1--inner"><?php echo esc_html( ashiato_hotel_t( 'p_book_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ah-hero__sub"} -->
<p class="ah-hero__sub"><?php echo esc_html( ashiato_hotel_t( 'p_book_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ah-paws ah-paws--inner" aria-hidden="true"><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ah-inner__intro","layout":{"type":"default"}} -->
<div class="wp-block-group ah-inner__intro"><!-- wp:paragraph {"className":"ah-lede ah-lede--inner"} -->
<p class="ah-lede ah-lede--inner"><?php echo esc_html( ashiato_hotel_t( 'p_book_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec"><!-- wp:group {"className":"ah-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 's_book_1_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_book_1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ah-steps","layout":{"type":"default"}} -->
<div class="wp-block-group ah-steps"><!-- wp:group {"className":"ah-step","layout":{"type":"default"}} -->
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
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec"><!-- wp:group {"className":"ah-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 'book_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec__body","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__body"><?php ob_start(); ?>
<!-- wp:buttons {"className":"ah-pill-wrap"} -->
<div class="wp-block-buttons ah-pill-wrap"><!-- wp:button {"className":"ah-pill"} -->
<div class="wp-block-button ah-pill"><a class="wp-block-button__link wp-element-button" href="mailto:stay@ashiatohotel.example?subject=<?php echo rawurlencode( ashiato_hotel_t( 'book_subject' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'book_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php $fallback = ob_get_clean(); ?>
<!-- wp:group {"className":"ah-form-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ah-form-wrap"><?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec"><!-- wp:group {"className":"ah-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 's_book_2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_book_2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"ah-rates"} -->
<figure class="wp-block-table ah-rates"><table><thead><tr><th><?php echo esc_html( ashiato_hotel_t( 'rates_col_item' ) ); ?></th><th><?php echo esc_html( ashiato_hotel_t( 'rates_col_detail' ) ); ?></th><th><?php echo esc_html( ashiato_hotel_t( 'rates_col_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate0_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate0_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate0_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate1_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate1_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate2_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate2_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate3_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate3_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate4_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate4_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate5_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate5_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( ashiato_hotel_t( 'rate6_n' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate6_d' ) ); ?></td><td><?php echo esc_html( ashiato_hotel_t( 'rate6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"ah-note"} -->
<p class="ah-note"><?php echo esc_html( ashiato_hotel_t( 'rates_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec"><!-- wp:group {"className":"ah-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 's_book_3_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_book_3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
