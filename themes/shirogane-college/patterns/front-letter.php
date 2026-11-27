<?php
/**
 * Title: Home: the intake letter
 * Slug: shirogane-college/front-letter
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Newsletter slot: heading and two lines on the left, the dynamic newsletter form on the right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"letter","align":"full","className":"sg-sec sg-sec--letter","layout":{"type":"default"}} -->
<section id="letter" class="wp-block-group alignfull sg-sec sg-sec--letter">
<!-- wp:group {"className":"sg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wrap">
<!-- wp:group {"className":"sg-split sg-split--57 sg-letter","layout":{"type":"default"}} -->
<div class="wp-block-group sg-split sg-split--57 sg-letter">
<!-- wp:group {"className":"sg-letter__l","layout":{"type":"default"}} -->
<div class="wp-block-group sg-letter__l">
<!-- wp:heading {"level":3,"className":"sg-letter__h"} -->
<h3 class="wp-block-heading sg-letter__h"><?php echo esc_html( shirogane_college_t( 'let_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-body"} -->
<p class="sg-body"><?php echo esc_html( shirogane_college_t( 'let_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sg-letter__r","layout":{"type":"default"}} -->
<div class="wp-block-group sg-letter__r">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'admissions@shirogane-college.example', 'label' => shirogane_college_t( 'forms_email' ), 'submit' => shirogane_college_t( 'forms_subscribe' ), 'notice' => shirogane_college_t( 'forms_mail_notice' ), 'subject' => shirogane_college_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->