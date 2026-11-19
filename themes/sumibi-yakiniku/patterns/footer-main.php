<?php
/**
 * Title: Footer: address, hours and the letter
 * Slug: sumibi-yakiniku/footer-main
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Charcoal footer in the 1080px column: wordmark with address, phone and email, opening hours, the newsletter form slot on dark tokens, a row of page links and the copyright line.
 */
?>
<!-- wp:group {"className":"sy-foot","layout":{"type":"default"}} -->
<div class="wp-block-group sy-foot"><!-- wp:group {"className":"sy-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group sy-foot__in"><!-- wp:group {"className":"sy-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group sy-foot__cols"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"sy-foot__name"} -->
<p class="sy-foot__name"><?php echo esc_html( str_replace( '|', ' ', sumibi_yakiniku_t( 'logo_name' ) ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'foot_address' ) ); ?><br><a href="tel:+00315550172">+00 31 555 0172</a><br><a href="mailto:table@sumibi.example">table@sumibi.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"sy-foot__h"} -->
<p class="sy-foot__h"><?php echo esc_html( sumibi_yakiniku_t( 'foot_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'foot_hours_1' ) ); ?><br><?php echo esc_html( sumibi_yakiniku_t( 'foot_hours_2' ) ); ?><br><?php echo esc_html( sumibi_yakiniku_t( 'foot_hours_3' ) ); ?><br><?php echo esc_html( sumibi_yakiniku_t( 'foot_hours_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-foot__letter","layout":{"type":"default"}} -->
<div class="wp-block-group sy-foot__letter"><!-- wp:paragraph {"className":"sy-foot__h"} -->
<p class="sy-foot__h"><?php echo esc_html( sumibi_yakiniku_t( 'foot_letter_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'table@sumibi.example', 'label' => sumibi_yakiniku_t( 'forms_email' ), 'submit' => sumibi_yakiniku_t( 'forms_subscribe' ), 'notice' => sumibi_yakiniku_t( 'forms_mail_notice' ), 'subject' => sumibi_yakiniku_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-foot__index"} -->
<p class="sy-foot__index"><a href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'nav_visit' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/house-notes/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'nav_house_notes' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'nav_contact' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'nav_newsletter' ) ); ?></a> · <a href="<?php echo esc_url( home_url( '/people/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'nav_people' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-foot__legal"} -->
<p class="sy-foot__legal"><?php echo esc_html( sumibi_yakiniku_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
