<?php
/**
 * Title: Page: Newsletter
 * Slug: soko-hotel/page-newsletter
 * Categories: soko-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Letterbox opener, the standalone subscribe form slot, what the letter holds and the privacy note.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-open","layout":{"type":"default"}} -->
<section class="wp-block-group sk-open"><!-- wp:group {"className":"sk-open__frame sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sk-open__frame sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-open__fig"} -->
<figure class="wp-block-image size-full sk-open__fig"><img src="<?php echo soko_hotel_img( 'harbour-night.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-titlebar","layout":{"type":"default"}} -->
<div class="wp-block-group sk-titlebar"><!-- wp:paragraph {"className":"sk-kicker"} -->
<p class="sk-kicker"><?php echo esc_html( soko_hotel_t( 'nws_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sk-titlebar__h"} -->
<h1 class="wp-block-heading sk-titlebar__h"><?php echo esc_html( soko_hotel_t( 'nws_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-intro","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-intro"><!-- wp:paragraph {"className":"sk-intro__p"} -->
<p class="sk-intro__p"><?php echo esc_html( soko_hotel_t( 'nws_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-formsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-formsec"><!-- wp:group {"className":"sk-form","layout":{"type":"default"}} -->
<div class="wp-block-group sk-form"><!-- wp:heading {"level":2,"className":"sk-box__h"} -->
<h2 class="wp-block-heading sk-box__h"><?php echo esc_html( soko_hotel_t( 'nws_form_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-form__lede"} -->
<p class="sk-form__lede"><?php echo esc_html( soko_hotel_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@sokohotel.example', 'label' => soko_hotel_t( 'forms_email' ), 'submit' => soko_hotel_t( 'forms_subscribe' ), 'notice' => soko_hotel_t( 'forms_mail_notice' ), 'subject' => soko_hotel_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-rowsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-rowsec"><!-- wp:heading {"level":2,"className":"sk-h2"} -->
<h2 class="wp-block-heading sk-h2"><?php echo esc_html( soko_hotel_t( 'nws_get_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sk-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sk-rows sp-stagger"><!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'nws_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'nws_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'nws_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'nws_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'nws_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'nws_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-rowsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-rowsec"><!-- wp:group {"className":"sk-rows","layout":{"type":"default"}} -->
<div class="wp-block-group sk-rows"><!-- wp:group {"className":"sk-row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'nws_a_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'nws_a_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'nws_p_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'nws_p_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
