<?php
/**
 * Title: Page: Page: Contact
 * Slug: ashiato-hotel/page-contact
 * Categories: ashiato-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact: the contact form slot with a mailto fallback, desk details and how to arrive.
 */
?>
<!-- wp:group {"className":"ah-inner","layout":{"type":"default"}} -->
<div class="wp-block-group ah-inner"><!-- wp:group {"className":"ah-window ah-window--inner ah-window--plain","layout":{"type":"default"}} -->
<div class="wp-block-group ah-window ah-window--inner ah-window--plain"><!-- wp:group {"className":"ah-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ah-hero__copy"><!-- wp:heading {"level":1,"className":"ah-hero__h1 ah-hero__h1--inner"} -->
<h1 class="wp-block-heading ah-hero__h1 ah-hero__h1--inner"><?php echo esc_html( ashiato_hotel_t( 'p_contact_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ah-hero__sub"} -->
<p class="ah-hero__sub"><?php echo esc_html( ashiato_hotel_t( 'p_contact_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ah-paws ah-paws--inner" aria-hidden="true"><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ah-inner__intro","layout":{"type":"default"}} -->
<div class="wp-block-group ah-inner__intro"><!-- wp:paragraph {"className":"ah-lede ah-lede--inner"} -->
<p class="ah-lede ah-lede--inner"><?php echo esc_html( ashiato_hotel_t( 'p_contact_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-twocol","layout":{"type":"default"}} -->
<div class="wp-block-group ah-twocol"><!-- wp:group {"className":"ah-twocol__a","layout":{"type":"default"}} -->
<div class="wp-block-group ah-twocol__a"><?php ob_start(); ?>
<!-- wp:buttons {"className":"ah-pill-wrap"} -->
<div class="wp-block-buttons ah-pill-wrap"><!-- wp:button {"className":"ah-pill"} -->
<div class="wp-block-button ah-pill"><a class="wp-block-button__link wp-element-button" href="mailto:stay@ashiatohotel.example?subject=<?php echo rawurlencode( ashiato_hotel_t( 'contact_subject' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php $fallback = ob_get_clean(); ?>
<!-- wp:group {"className":"ah-form-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ah-form-wrap"><?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-twocol__b","layout":{"type":"default"}} -->
<div class="wp-block-group ah-twocol__b"><!-- wp:group {"className":"ah-ruled","layout":{"type":"default"}} -->
<div class="wp-block-group ah-ruled"><!-- wp:group {"className":"ah-rr ah-rr--ct","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--ct"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'ct_phone_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><a href="tel:+000044310002468"><?php echo esc_html( ashiato_hotel_t( 'ct_phone' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-rr ah-rr--ct","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--ct"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'ct_email_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><a href="mailto:stay@ashiatohotel.example">stay@ashiatohotel.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-rr ah-rr--ct","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--ct"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'ct_hours_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><?php echo esc_html( ashiato_hotel_t( 'ct_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-rr ah-rr--ct","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--ct"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'ct_addr_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><?php echo esc_html( ashiato_hotel_t( 'ct_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-rr ah-rr--ct","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--ct"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'ct_train_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><?php echo esc_html( ashiato_hotel_t( 'ct_train' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-rr ah-rr--ct","layout":{"type":"default"}} -->
<div class="wp-block-group ah-rr ah-rr--ct"><!-- wp:paragraph {"className":"ah-rr__c ah-rr__c1"} -->
<p class="ah-rr__c ah-rr__c1"><?php echo esc_html( ashiato_hotel_t( 'ct_car_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-rr__c ah-rr__c2"} -->
<p class="ah-rr__c ah-rr__c2"><?php echo esc_html( ashiato_hotel_t( 'ct_car' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec"><!-- wp:group {"className":"ah-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 's_contact_1_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_contact_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec"><!-- wp:group {"className":"ah-isec__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 's_contact_2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-isec__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-isec__body sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 's_contact_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
