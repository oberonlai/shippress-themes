<?php
/**
 * Title: Page: Newsletter
 * Slug: hojo-brokers/page-newsletter
 * Categories: hojo-brokers
 * Keywords: newsletter,form
 * Viewport Width: 1440
 * Description: Newsletter page: what Renewal Notes covers, how often, and a subscribe form slot that opens the mail app when no plugin is active.
 */
?>
<!-- wp:group {"align":"full","className":"hb-headband hb-headband--inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hb-headband hb-headband--inner"><!-- wp:html -->
<span class="hb-wedge hb-wedge--a" aria-hidden="true"></span><span class="hb-wedge hb-wedge--b" aria-hidden="true"></span>
<!-- /wp:html -->
<!-- wp:group {"className":"hb-wrap hb-headband__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap hb-headband__in"><!-- wp:paragraph {"className":"hb-label"} -->
<p class="hb-label"><?php echo wp_kses_post( hojo_brokers_t( 'ke93d9005' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"hb-h1 hb-h1--inner"} -->
<h1 class="wp-block-heading hb-h1 hb-h1--inner"><?php echo wp_kses_post( hojo_brokers_t( 'k12c9b7b2' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-inner hb-introsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hb-sec hb-inner hb-introsec"><!-- wp:group {"className":"hb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap"><!-- wp:paragraph {"className":"hb-lead hb-lead--inner"} -->
<p class="hb-lead hb-lead--inner"><?php echo wp_kses_post( hojo_brokers_t( 'ka601490b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hb-contact","layout":{"type":"default"}} -->
<div class="wp-block-group hb-contact"><!-- wp:group {"className":"hb-contact__text","layout":{"type":"default"}} -->
<div class="wp-block-group hb-contact__text"><!-- wp:heading {"className":"hb-h2 hb-h2--m"} -->
<h2 class="wp-block-heading hb-h2 hb-h2--m"><?php echo wp_kses_post( hojo_brokers_t( 'kf546fd6d' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hojo_brokers_t( 'k1407e555' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"hb-h2 hb-h2--m"} -->
<h2 class="wp-block-heading hb-h2 hb-h2--m"><?php echo wp_kses_post( hojo_brokers_t( 'ke2e2b852' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hojo_brokers_t( 'k3e7ea65c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"hb-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group hb-contact__form"><!-- wp:paragraph {"className":"hb-letter__h2"} -->
<p class="hb-letter__h2"><?php echo wp_kses_post( hojo_brokers_t( 'k739aadc3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hb-formcard","layout":{"type":"default"}} -->
<div class="wp-block-group hb-formcard"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'review@hojobrokers.example', 'label' => hojo_brokers_t( 'forms_email' ), 'submit' => hojo_brokers_t( 'forms_subscribe' ), 'notice' => hojo_brokers_t( 'forms_mail_notice' ), 'subject' => hojo_brokers_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
