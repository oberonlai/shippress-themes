<?php
/**
 * Title: Footer: newsletter, address, links and hours
 * Slug: rinrin-cycletours/footer-main
 * Categories: rinrin-cycletours
 * Viewport Width: 1440
 * Description: Mist footer: the newsletter slot (email and submit, with or without a plugin), then four columns of address, tours, company and office hours.
 */
?>
<!-- wp:group {"className":"rc-foot","layout":{"type":"default"}} -->
<div class="wp-block-group rc-foot"><!-- wp:group {"className":"rc-foot__news","layout":{"type":"default"}} -->
<div class="wp-block-group rc-foot__news"><!-- wp:group {"className":"rc-foot__newsl","layout":{"type":"default"}} -->
<div class="wp-block-group rc-foot__newsl"><!-- wp:paragraph {"className":"rc-label"} -->
<p class="rc-label"><?php echo esc_html( rinrin_cycletours_t( 'foot_news_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"rc-foot__newst"} -->
<p class="rc-foot__newst"><?php echo esc_html( rinrin_cycletours_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-foot__slot","layout":{"type":"default"}} -->
<div class="wp-block-group rc-foot__slot"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@rinrin-cycletours.example', 'label' => rinrin_cycletours_t( 'forms_email' ), 'submit' => rinrin_cycletours_t( 'forms_subscribe' ), 'notice' => rinrin_cycletours_t( 'forms_mail_notice' ), 'subject' => rinrin_cycletours_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group rc-foot__cols"><!-- wp:group {"className":"rc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group rc-foot__c"><!-- wp:paragraph {"className":"rc-foot__name"} -->
<p class="rc-foot__name"><?php echo esc_html( rinrin_cycletours_t( 'logo_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"rc-foot__txt"} -->
<p class="rc-foot__txt"><?php echo rinrin_cycletours_lines( 'foot_address' ); ?><br><a href="tel:+001234 5678">+00 1234 5678</a><br><a href="mailto:hello@rinrin-cycletours.example">hello@rinrin-cycletours.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group rc-foot__c"><!-- wp:paragraph {"className":"rc-foot__h"} -->
<p class="rc-foot__h"><?php echo esc_html( rinrin_cycletours_t( 'foot_tours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"rc-foot__idx"} -->
<p class="rc-foot__idx"><a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'nav_tours' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/departures/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'nav_departures' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/grades/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'nav_grades' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'nav_book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group rc-foot__c"><!-- wp:paragraph {"className":"rc-foot__h"} -->
<p class="rc-foot__h"><?php echo esc_html( rinrin_cycletours_t( 'foot_company_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"rc-foot__idx"} -->
<p class="rc-foot__idx"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'nav_about' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/bike-hire/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'nav_bike_hire' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/luggage/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'nav_luggage' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'nav_journal' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( rinrin_cycletours_t( 'nav_contact' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"rc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group rc-foot__c"><!-- wp:paragraph {"className":"rc-foot__h"} -->
<p class="rc-foot__h"><?php echo esc_html( rinrin_cycletours_t( 'foot_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"rc-foot__txt"} -->
<p class="rc-foot__txt"><?php echo rinrin_cycletours_lines( 'foot_hours' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"rc-foot__legal"} -->
<p class="rc-foot__legal"><?php echo esc_html( rinrin_cycletours_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
