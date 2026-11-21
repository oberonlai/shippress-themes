<?php
/**
 * Title: Home: book a shoot
 * Slug: kirinuki-studio/front-book
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: Closing band on the hero mist with a white sheet: the one Book a shoot pill, the studio email and phone and the open dates list sign-up.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"kr-close","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull kr-close"><!-- wp:group {"className":"kr-sheet kr-sheet--book","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--book"><!-- wp:heading {"level":2,"className":"kr-close__h"} -->
<h2 class="wp-block-heading kr-close__h"><?php echo esc_html( kirinuki_studio_t( 'book_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-close__p"} -->
<p class="kr-close__p"><?php echo esc_html( kirinuki_studio_t( 'book_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kr-btns"} -->
<div class="wp-block-buttons kr-btns"><!-- wp:button {"className":"kr-pill kr-pill--dark"} -->
<div class="wp-block-button kr-pill kr-pill--dark"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"kr-close__nl","layout":{"type":"default"}} -->
<div class="wp-block-group kr-close__nl"><!-- wp:heading {"level":3,"className":"kr-close__h3"} -->
<h3 class="wp-block-heading kr-close__h3"><?php echo esc_html( kirinuki_studio_t( 'open_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-close__p"} -->
<p class="kr-close__p"><?php echo esc_html( kirinuki_studio_t( 'open_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@kirinuki-studio.example', 'label' => kirinuki_studio_t( 'forms_email' ), 'submit' => kirinuki_studio_t( 'forms_subscribe' ), 'notice' => kirinuki_studio_t( 'forms_mail_notice' ), 'subject' => kirinuki_studio_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
