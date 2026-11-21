<?php
/**
 * Title: Page: Open dates list
 * Slug: kirinuki-studio/page-newsletter
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: Newsletter page: mist head, how the list works and the sign-up form that opens the mail app when no form plugin is active.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kr-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-ihead"><!-- wp:html -->
<div class="kr-grain" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kr-ihead__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__inner"><!-- wp:group {"className":"kr-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__text"><!-- wp:paragraph {"className":"kr-eyebrow kr-dots"} -->
<p class="kr-eyebrow kr-dots"><?php echo esc_html( kirinuki_studio_t( 'i_crumb_newsletter' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kr-ihead__h"} -->
<h1 class="wp-block-heading kr-ihead__h"><?php echo esc_html( kirinuki_studio_t( 'i_newsletter_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-ihead__lede"} -->
<p class="kr-ihead__lede"><?php echo esc_html( kirinuki_studio_t( 'i_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-triptych kr-triptych--s","layout":{"type":"default"}} -->
<div class="wp-block-group kr-triptych kr-triptych--s"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'b1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_b1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'w6.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w6' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'c2.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_c2' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground"><!-- wp:group {"className":"kr-sheet kr-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--plain"><!-- wp:group {"className":"kr-sheet__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_nl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_nl_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_newsletter_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_newsletter_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_newsletter_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_newsletter_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground kr-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground kr-sec--tight"><!-- wp:group {"className":"kr-sheet kr-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--plain"><!-- wp:group {"className":"kr-prow kr-prow--form","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow kr-prow--form"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_nl_form_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kr-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-formwrap"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@kirinuki-studio.example', 'label' => kirinuki_studio_t( 'forms_email' ), 'submit' => kirinuki_studio_t( 'forms_subscribe' ), 'notice' => kirinuki_studio_t( 'forms_mail_notice' ), 'subject' => kirinuki_studio_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
