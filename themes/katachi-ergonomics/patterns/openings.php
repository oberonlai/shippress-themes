<?php
/**
 * Title: Home: next openings (newsletter)
 * Slug: katachi-ergonomics/openings
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk, consultancy
 * Viewport Width: 1440
 * Description: Pale panel with a label, title and sentence at the left and the newsletter form slot at the right (email and submit, mailto fallback without plugins).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"openings","className":"ke-sec ke-openings","layout":{"type":"default"}} -->
<section id="openings" class="wp-block-group alignfull ke-sec ke-openings"><!-- wp:group {"className":"ke-wrap ke-open__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ke-wrap ke-open__grid"><!-- wp:group {"className":"ke-open__l","layout":{"type":"default"}} -->
<div class="wp-block-group ke-open__l"><!-- wp:paragraph {"className":"ke-label"} -->
<p class="ke-label"><?php echo esc_html( katachi_ergonomics_t( 'op_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ke-open__t"} -->
<h2 class="wp-block-heading ke-open__t"><?php echo esc_html( katachi_ergonomics_t( 'op_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-open__p"} -->
<p class="ke-open__p"><?php echo esc_html( katachi_ergonomics_t( 'op_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ke-open__r","layout":{"type":"default"}} -->
<div class="wp-block-group ke-open__r"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@katachi-ergonomics.example',
	'label'   => katachi_ergonomics_t( 'forms_email' ),
	'submit'  => katachi_ergonomics_t( 'forms_subscribe' ),
	'notice'  => katachi_ergonomics_t( 'forms_mail_notice' ),
	'subject' => katachi_ergonomics_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
