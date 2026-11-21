<?php
/**
 * Title: Footer: address, hours, season notes
 * Slug: kuruma-tabi/footer-main
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: White footer: address, hours, the newsletter slot and the legal row.
 */
?>
<!-- wp:group {"className":"kt-foot","layout":{"type":"default"}} -->
<div class="wp-block-group kt-foot"><!-- wp:group {"className":"kt-wrap kt-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap kt-foot__in"><!-- wp:group {"className":"kt-foot__c kt-foot__c--b","layout":{"type":"default"}} -->
<div class="wp-block-group kt-foot__c kt-foot__c--b"><!-- wp:paragraph {"className":"kt-wordmark kt-wordmark--f"} -->
<p class="kt-wordmark kt-wordmark--f"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="kt-wordmark__ic"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span><span class="kt-wordmark__t"><?php echo esc_html( kuruma_tabi_t( 'logo_name' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kt-foot__h"} -->
<h3 class="wp-block-heading kt-foot__h"><?php echo esc_html( kuruma_tabi_t( 'f_addr_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-foot__p"} -->
<p class="kt-foot__p"><?php echo esc_html( kuruma_tabi_t( 'f_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group kt-foot__c"><!-- wp:heading {"level":3,"className":"kt-foot__h"} -->
<h3 class="wp-block-heading kt-foot__h"><?php echo esc_html( kuruma_tabi_t( 'f_hours_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-foot__p"} -->
<p class="kt-foot__p"><?php echo kuruma_tabi_lines( 'f_hours' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-foot__c kt-foot__c--n","layout":{"type":"default"}} -->
<div class="wp-block-group kt-foot__c kt-foot__c--n"><!-- wp:heading {"level":3,"className":"kt-foot__h"} -->
<h3 class="wp-block-heading kt-foot__h"><?php echo esc_html( kuruma_tabi_t( 'f_sub_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-foot__p"} -->
<p class="kt-foot__p"><?php echo esc_html( kuruma_tabi_t( 'f_sub_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kt-form kt-form--foot","layout":{"type":"default"}} -->
<div class="wp-block-group kt-form kt-form--foot"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'plan@kurumatabi.example', 'label' => kuruma_tabi_t( 'forms_email' ), 'submit' => kuruma_tabi_t( 'forms_subscribe' ), 'notice' => kuruma_tabi_t( 'forms_mail_notice' ), 'subject' => kuruma_tabi_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-wrap kt-foot__legal","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap kt-foot__legal"><!-- wp:paragraph {"className":"kt-foot__copy"} -->
<p class="kt-foot__copy"><?php echo esc_html( kuruma_tabi_t( 'f_copy' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-foot__links"} -->
<p class="kt-foot__links"><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( kuruma_tabi_t( 'f_priv' ) ); ?></a> <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php echo esc_html( kuruma_tabi_t( 'f_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
