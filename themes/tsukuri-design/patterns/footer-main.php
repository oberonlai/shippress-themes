<?php
/**
 * Title: Footer: address, hours, index and the studio letter
 * Slug: tsukuri-design/footer-main
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Dark footer in four columns: wordmark and address, hours, a link index and the newsletter form slot.
 */
?>
<!-- wp:group {"backgroundColor":"dark","textColor":"base","className":"td-foot","layout":{"type":"default"}} -->
<div class="wp-block-group td-foot has-base-color has-dark-background-color has-text-color has-background"><!-- wp:group {"className":"td-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group td-foot__cols"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"td-foot__name"} -->
<p class="td-foot__name"><?php echo esc_html( tsukuri_design_t( 'logo_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-foot__txt"} -->
<p class="td-foot__txt"><?php echo tsukuri_design_lines( 'foot_address' ); ?><br><a href="tel:+00315550172">+00 31 555 0172</a><br><a href="mailto:studio@tsukuri.example">studio@tsukuri.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"td-foot__h"} -->
<p class="td-foot__h"><?php echo esc_html( tsukuri_design_t( 'foot_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-foot__txt"} -->
<p class="td-foot__txt"><?php echo esc_html( tsukuri_design_t( 'foot_hours_1' ) ); ?><br><?php echo esc_html( tsukuri_design_t( 'foot_hours_2' ) ); ?><br><?php echo esc_html( tsukuri_design_t( 'foot_hours_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"td-foot__h"} -->
<p class="td-foot__h"><?php echo esc_html( tsukuri_design_t( 'foot_index_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-foot__index"} -->
<p class="td-foot__index"><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_work' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/method/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_method' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/studio/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_studio' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_fees' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_journal' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_contact' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/medical/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_medical' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/consumer/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_consumer' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/model-shop/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_model_shop' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'nav_newsletter' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-foot__letter","layout":{"type":"default"}} -->
<div class="wp-block-group td-foot__letter"><!-- wp:paragraph {"className":"td-foot__h"} -->
<p class="td-foot__h"><?php echo esc_html( tsukuri_design_t( 'foot_letter_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-foot__txt"} -->
<p class="td-foot__txt"><?php echo esc_html( tsukuri_design_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'studio@tsukuri.example', 'label' => tsukuri_design_t( 'forms_email' ), 'submit' => tsukuri_design_t( 'forms_subscribe' ), 'notice' => tsukuri_design_t( 'forms_mail_notice' ), 'subject' => tsukuri_design_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-foot__legal"} -->
<p class="td-foot__legal"><?php echo esc_html( tsukuri_design_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
