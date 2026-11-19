<?php
/**
 * Title: Footer: address, hours, index and the seasonal letter
 * Slug: shitsurae-interiors/footer-main
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Dark footer in four columns: wordmark and address, hours, a link index and the newsletter form slot.
 */
?>
<!-- wp:group {"backgroundColor":"dark","textColor":"base","className":"si-foot","layout":{"type":"default"}} -->
<div class="wp-block-group si-foot has-base-color has-dark-background-color has-text-color has-background"><!-- wp:group {"className":"si-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group si-foot__cols"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"si-foot__name"} -->
<p class="si-foot__name"><?php echo esc_html( shitsurae_interiors_t( 'logo_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-foot__txt"} -->
<p class="si-foot__txt"><?php echo shitsurae_interiors_lines( 'foot_address' ); ?><br><a href="tel:+00205550193">+00 20 555 0193</a><br><a href="mailto:studio@shitsurae.example">studio@shitsurae.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"si-foot__h"} -->
<p class="si-foot__h"><?php echo esc_html( shitsurae_interiors_t( 'foot_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-foot__txt"} -->
<p class="si-foot__txt"><?php echo esc_html( shitsurae_interiors_t( 'foot_hours_1' ) ); ?><br><?php echo esc_html( shitsurae_interiors_t( 'foot_hours_2' ) ); ?><br><?php echo esc_html( shitsurae_interiors_t( 'foot_hours_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"si-foot__h"} -->
<p class="si-foot__h"><?php echo esc_html( shitsurae_interiors_t( 'foot_index_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-foot__index"} -->
<p class="si-foot__index"><a href="<?php echo esc_url( home_url( '/cases/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'nav_cases' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/works/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'nav_works' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'nav_process' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'nav_fees' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/studio/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'nav_studio' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'nav_journal' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-foot__letter","layout":{"type":"default"}} -->
<div class="wp-block-group si-foot__letter"><!-- wp:paragraph {"className":"si-foot__h"} -->
<p class="si-foot__h"><?php echo esc_html( shitsurae_interiors_t( 'foot_letter_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-foot__txt"} -->
<p class="si-foot__txt"><?php echo esc_html( shitsurae_interiors_t( 'forms_newsletter_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'studio@shitsurae.example', 'label' => shitsurae_interiors_t( 'forms_email' ), 'submit' => shitsurae_interiors_t( 'forms_subscribe' ), 'notice' => shitsurae_interiors_t( 'forms_mail_notice' ), 'subject' => shitsurae_interiors_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"si-foot__legal"} -->
<p class="si-foot__legal"><?php echo esc_html( shitsurae_interiors_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
