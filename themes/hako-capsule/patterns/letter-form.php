<?php
/**
 * Title: The Last Train Letter: sign-up slot
 * Slug: hako-capsule/letter-form
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: The newsletter slot: a required email field and a submit button, with a visible notice when no newsletter plugin is active.
 */
?>
<!-- wp:group {"className":"hk-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group hk-letter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => hako_capsule_t( 'foot_mail' ),
	'label'   => hako_capsule_t( 'forms_email' ),
	'submit'  => hako_capsule_t( 'forms_subscribe' ),
	'notice'  => hako_capsule_t( 'forms_mail_notice' ),
	'subject' => hako_capsule_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group -->
