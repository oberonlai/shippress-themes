<?php
/**
 * Title: Home: the House Letter
 * Slug: akane-house/front-letter
 * Categories: akane-house
 * Keywords: pub, day, sittings
 * Viewport Width: 1440
 * Description: Chapter 08 with the newsletter slot (email field and submit, works without plugins).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ak-chapter ak-letter", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ak-chapter ak-letter"><!-- wp:group {"className": "ak-chapter__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-chapter__grid"><!-- wp:group {"className": "ak-chapter__l", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-chapter__l"><!-- wp:group {"className": "ak-chapter__head", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-chapter__head"><!-- wp:paragraph {"className": "ak-chapter__n"} -->
<p class="ak-chapter__n">08/</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ak-chapter__t"} -->
<p class="ak-chapter__t"><?php echo wp_kses_post( akane_house_t( 'k82b48fc9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level": 2, "className": "ak-h3"} -->
<h2 class="wp-block-heading ak-h3"><?php echo wp_kses_post( akane_house_t( 'k0801c0b5' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ak-chapter__r", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-chapter__r"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( akane_house_t( 'k092642c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className": "ak-letter__form", "layout": {"type": "default"}} -->
<div class="wp-block-group ak-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'tables@akane-house.example', 'label' => akane_house_t( 'forms_email' ), 'submit' => akane_house_t( 'forms_subscribe' ), 'notice' => akane_house_t( 'forms_mail_notice' ), 'subject' => akane_house_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
