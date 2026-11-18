<?php
/**
 * Title: Home: batch letter
 * Slug: taruki-distillery/front-letter
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: Newsletter block: two lines at the left, the email slot at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--white td-letter","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--white td-letter"><!-- wp:group {"align":"wide","className":"td-letter__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-letter__grid"><!-- wp:group {"className":"td-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group td-letter__text"><!-- wp:paragraph {"className":"td-caps"} -->
<p class="td-caps"><?php echo esc_html( taruki_t( 'nl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"td-h2"} -->
<h2 class="wp-block-heading td-h2"><?php echo esc_html( taruki_t( 'nl_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( taruki_t( 'nl_body' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

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
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
