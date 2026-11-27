<?php
/**
 * Title: Home: survey-day list
 * Slug: makido-shutters/front-list
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Pale band: the survey-day list promise on the left and the newsletter form slot on the right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"list","align":"full","className":"mk-sec mk-sec--list mk-sec--band","layout":{"type":"default"}} -->
<section id="list" class="wp-block-group alignfull mk-sec mk-sec--list mk-sec--band">
<!-- wp:group {"className":"mk-wrap mk-list","layout":{"type":"default"}} -->
<div class="wp-block-group mk-wrap mk-list">
<!-- wp:group {"className":"mk-list__l","layout":{"type":"default"}} -->
<div class="wp-block-group mk-list__l">
<!-- wp:heading {"level":3,"className":"mk-h3"} -->
<h3 class="wp-block-heading mk-h3"><?php echo esc_html( makido_shutters_t( 'ls_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-body"} -->
<p class="mk-body"><?php echo esc_html( makido_shutters_t( 'ls_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-list__r","layout":{"type":"default"}} -->
<div class="wp-block-group mk-list__r">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'quotes@makido-shutters.example', 'label' => makido_shutters_t( 'forms_email' ), 'submit' => makido_shutters_t( 'forms_subscribe' ), 'notice' => makido_shutters_t( 'forms_mail_notice' ), 'subject' => makido_shutters_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
