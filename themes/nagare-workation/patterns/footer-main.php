<?php
/**
 * Title: Footer: address, hours, index and the lake letter
 * Slug: nagare-workation/footer-main
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Dark footer in four columns: wordmark and address, hours, a link index and the newsletter form slot.
 */
?>
<!-- wp:group {"backgroundColor":"ink","textColor":"ground","className":"nw-foot","layout":{"type":"default"}} -->
<div class="wp-block-group nw-foot has-ground-color has-ink-background-color has-text-color has-background"><!-- wp:group {"className":"nw-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group nw-foot__cols"><!-- wp:group {"className":"nw-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group nw-foot__c"><!-- wp:paragraph {"className":"nw-foot__name"} -->
<p class="nw-foot__name"><?php echo esc_html( nagare_workation_t( 'logo_name' ) ); ?> <span><?php echo esc_html( nagare_workation_t( 'logo_sub' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-foot__txt"} -->
<p class="nw-foot__txt"><?php echo esc_html( nagare_workation_t( 'foot_addr1' ) ); ?><br><?php echo esc_html( nagare_workation_t( 'foot_addr2' ) ); ?><br><a href="tel:+00465550142">+00 46 555 0142</a><br><a href="mailto:stay@nagare-hotel.example">stay@nagare-hotel.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group nw-foot__c"><!-- wp:paragraph {"className":"nw-foot__h"} -->
<p class="nw-foot__h"><?php echo esc_html( nagare_workation_t( 'foot_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-foot__txt"} -->
<p class="nw-foot__txt"><?php echo esc_html( nagare_workation_t( 'foot_hours_1' ) ); ?><br><?php echo esc_html( nagare_workation_t( 'foot_hours_2' ) ); ?><br><?php echo esc_html( nagare_workation_t( 'foot_hours_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group nw-foot__c"><!-- wp:paragraph {"className":"nw-foot__h"} -->
<p class="nw-foot__h"><?php echo esc_html( nagare_workation_t( 'foot_index_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-foot__index"} -->
<p class="nw-foot__index"><a href="<?php echo esc_url( home_url( '/rates/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_rates' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_rooms' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/coworking/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_coworking' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/a-week/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_a_week' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/lakeside/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_lakeside' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_about' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_stories' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_faq' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_book' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_contact' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_journal' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'nav_newsletter' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-foot__c nw-foot__letter","layout":{"type":"default"}} -->
<div class="wp-block-group nw-foot__c nw-foot__letter"><!-- wp:paragraph {"className":"nw-foot__h"} -->
<p class="nw-foot__h"><?php echo esc_html( nagare_workation_t( 'foot_letter_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-foot__txt"} -->
<p class="nw-foot__txt"><?php echo esc_html( nagare_workation_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@nagare-hotel.example', 'label' => nagare_workation_t( 'forms_email' ), 'submit' => nagare_workation_t( 'forms_subscribe' ), 'notice' => nagare_workation_t( 'forms_mail_notice' ), 'subject' => nagare_workation_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-foot__legal"} -->
<p class="nw-foot__legal"><?php echo esc_html( nagare_workation_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
