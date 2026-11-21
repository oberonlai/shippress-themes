<?php
/**
 * Title: Home: close and waitlist
 * Slug: hozue-foodfest/front-close
 * Categories: hozue-foodfest
 * Viewport Width: 1440
 * Description: Olive-grey rounded panel repeating the one early-bird call, with the waitlist email slot beneath.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"close","className":"hf-sec hf-sec--ground2 hf-sec--close","layout":{"type":"default"}} -->
<section id="close" class="wp-block-group alignfull hf-sec hf-sec--ground2 hf-sec--close"><!-- wp:group {"className":"hf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hf-wrap"><!-- wp:group {"className":"hf-panel hf-close","layout":{"type":"default"}} -->
<div class="wp-block-group hf-panel hf-close"><!-- wp:heading {"level":2,"className":"hf-close__h"} -->
<h2 class="wp-block-heading hf-close__h"><?php echo esc_html( hozue_foodfest_t( 'cl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hf-close__p"} -->
<p class="hf-close__p"><?php echo esc_html( hozue_foodfest_t( 'cl_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hf-btns"} -->
<div class="wp-block-buttons hf-btns"><!-- wp:button {"className":"hf-pill hf-pill--cta"} -->
<div class="wp-block-button hf-pill hf-pill--cta"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#tickets' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'cl_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"hf-close__rule"} -->
<p class="hf-close__rule"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-close__lede"} -->
<p class="hf-close__lede"><?php echo esc_html( hozue_foodfest_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@hozuefestival.example', 'label' => hozue_foodfest_t( 'forms_email' ), 'submit' => hozue_foodfest_t( 'forms_subscribe' ), 'notice' => hozue_foodfest_t( 'forms_mail_notice' ), 'subject' => hozue_foodfest_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
