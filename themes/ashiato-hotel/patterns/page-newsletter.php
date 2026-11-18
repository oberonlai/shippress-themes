<?php
/**
 * Title: Page: Page: The register letter
 * Slug: ashiato-hotel/page-newsletter
 * Categories: ashiato-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Newsletter: what the four letters hold and the newsletter form slot (a mail request without plugins).
 */
?>
<!-- wp:group {"className":"ah-inner","layout":{"type":"default"}} -->
<div class="wp-block-group ah-inner"><!-- wp:group {"className":"ah-window ah-window--inner ah-window--plain ah-window--wash","layout":{"type":"default"}} -->
<div class="wp-block-group ah-window ah-window--inner ah-window--plain ah-window--wash"><!-- wp:group {"className":"ah-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ah-hero__copy"><!-- wp:heading {"level":1,"className":"ah-hero__h1 ah-hero__h1--inner"} -->
<h1 class="wp-block-heading ah-hero__h1 ah-hero__h1--inner"><?php echo esc_html( ashiato_hotel_t( 'p_newsletter_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ah-hero__sub"} -->
<p class="ah-hero__sub"><?php echo esc_html( ashiato_hotel_t( 'p_newsletter_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ah-paws ah-paws--inner" aria-hidden="true"><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ah-inner__intro","layout":{"type":"default"}} -->
<div class="wp-block-group ah-inner__intro"><!-- wp:paragraph {"className":"ah-lede ah-lede--inner"} -->
<p class="ah-lede ah-lede--inner"><?php echo esc_html( ashiato_hotel_t( 'p_newsletter_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-form-wrap ah-form-wrap--letter","layout":{"type":"default"}} -->
<div class="wp-block-group ah-form-wrap ah-form-wrap--letter"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@ashiatohotel.example', 'label' => ashiato_hotel_t( 'forms_email' ), 'submit' => ashiato_hotel_t( 'forms_subscribe' ), 'notice' => ashiato_hotel_t( 'forms_mail_notice' ), 'subject' => ashiato_hotel_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec"><!-- wp:group {"className":"ah-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 's_newsletter_1_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_newsletter_1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ah-ruled","layout":{"type":"default"}} -->
<div class="wp-block-group ah-ruled"><!-- wp:group {"className":"ah-rr ah-rr--time","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--time"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'let0_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><?php echo esc_html( ashiato_hotel_t( 'let0_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-rr ah-rr--time","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--time"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'let1_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><?php echo esc_html( ashiato_hotel_t( 'let1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-rr ah-rr--time","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--time"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'let2_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><?php echo esc_html( ashiato_hotel_t( 'let2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-rr ah-rr--time","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--time"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'let3_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><?php echo esc_html( ashiato_hotel_t( 'let3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec"><!-- wp:group {"className":"ah-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 's_newsletter_2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_newsletter_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
