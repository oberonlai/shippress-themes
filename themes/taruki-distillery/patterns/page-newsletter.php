<?php
/**
 * Title: Newsletter page
 * Slug: taruki-distillery/page-newsletter
 * Categories: taruki-distillery
 * Inserter: no
 * Description: Standalone subscribe page: a heading, one paragraph and the email slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--white td-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--white td-page"><!-- wp:paragraph {"className":"td-caps"} -->
<p class="td-caps"><?php echo esc_html( taruki_t( 'nl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"td-h1 td-h1--page"} -->
<h1 class="wp-block-heading td-h1 td-h1--page"><?php echo esc_html( taruki_t( 'nl_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( taruki_t( 'nl_body' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"td-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group td-letter__form"><?php
echo shippress_form_slot(
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@taruki-distillery.example',
		'label'   => taruki_t( 'forms_email' ),
		'submit'  => taruki_t( 'forms_subscribe' ),
		'notice'  => taruki_t( 'forms_mail_notice' ),
		'subject' => taruki_t( 'forms_mail_subject' ),
	)
);
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
