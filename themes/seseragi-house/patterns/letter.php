<?php
/**
 * Title: Letter: the river letter
 * Slug: seseragi-house/letter
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: A quiet letter sign-up under a hairline: one paragraph and the newsletter slot (email and submit, with the optional plugins).
 */
?>
<!-- wp:group {"tagName":"section","anchor":"letter","className":"sese-sec sese-letter","layout":{"type":"default"}} -->
<section id="letter" class="wp-block-group sese-sec sese-letter">
<!-- wp:group {"className":"sese-col sese-col--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sese-col--narrow">
<!-- wp:heading {"level":2,"className":"sese-h2 sese-h2--sm"} -->
<h2 class="wp-block-heading sese-h2 sese-h2--sm"><?php echo esc_html( seseragi_house_t( 'letter_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'letter_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'stay@seseragihouse.example',
	'label'   => seseragi_house_t( 'forms_email' ),
	'submit'  => seseragi_house_t( 'forms_subscribe' ),
	'notice'  => seseragi_house_t( 'forms_mail_notice' ),
	'subject' => seseragi_house_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
