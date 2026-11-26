<?php
/**
 * Title: Home: the Friday letter (dark band with the newsletter form)
 * Slug: enban-records/front-letter
 * Categories: enban-records
 * Keywords: newsletter, subscribe
 * Viewport Width: 1440
 * Description: Dark ink band with a centred head, one sentence and the newsletter form slot (email and submit, with a disclosed mail fallback when no form plugin is active).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"letter","className":"eb-sec eb-sec--ink","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec eb-sec--ink" id="letter"><!-- wp:group {"className":"eb-head3","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo wp_kses_post( enban_records_t( 'k1ce861ef' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub"><?php echo wp_kses_post( enban_records_t( 'kb948be64' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","className":"eb-intro"} -->
<p class="has-text-align-center eb-intro"><?php echo wp_kses_post( enban_records_t( 'kdd65e759' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"eb-letter__form","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-letter__form"><?php
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'    => 'newsletter',
		'email'   => 'hello@enban-records.example',
		'label'   => enban_records_t( 'forms_email' ),
		'submit'  => enban_records_t( 'forms_subscribe' ),
		'notice'  => enban_records_t( 'forms_mail_notice' ),
		'subject' => enban_records_t( 'forms_mail_subject' ),
	)
);
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
