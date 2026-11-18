<?php
/**
 * Title: Page: Snow letter
 * Slug: yukishiro-chalet/page-snow-letter
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Dark newsletter page with the subscribe form slot.
 */
?>
<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--ink yk-dark yk-letterpage","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--ink yk-dark yk-letterpage"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead yk-lead--w"} -->
<p class="yk-lead yk-lead--w"><?php echo esc_html( yukishiro_chalet_t( 'ph_snow-letter_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yk-h1 yk-h1--plain yk-h1--w"} -->
<h1 class="wp-block-heading yk-h1 yk-h1--plain yk-h1--w"><?php echo esc_html( yukishiro_chalet_t( 'ph_snow-letter_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yk-lede yk-lede--full yk-lede--w"} -->
<p class="yk-lede yk-lede--full yk-lede--w"><?php echo esc_html( yukishiro_chalet_t( 'c_snow-letter_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-case","layout":{"type":"default"}} -->
<div class="wp-block-group yk-case"><!-- wp:group {"className":"yk-case__form","layout":{"type":"default"}} -->
<div class="wp-block-group yk-case__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'stay@yukishiro-chalet.example',
	'label'   => yukishiro_chalet_t( 'forms_email' ),
	'submit'  => yukishiro_chalet_t( 'forms_subscribe' ),
	'notice'  => yukishiro_chalet_t( 'forms_mail_notice' ),
	'subject' => yukishiro_chalet_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--ink yk-dark yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--ink yk-dark yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_snow-letter_0_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_snow-letter_0_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--ink yk-dark yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--ink yk-dark yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:heading {"className":"yk-sh yk-sh--w"} -->
<h2 class="wp-block-heading yk-sh yk-sh--w"><?php echo esc_html( yukishiro_chalet_t( 'issues_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"yk-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-rows sp-stagger"><!-- wp:group {"className":"yk-row  sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row  sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yk-row__k"} -->
<p class="yk-row__k"><?php echo esc_html( yukishiro_chalet_t( 'issue1_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-row__v"} -->
<p class="yk-row__v"><?php echo esc_html( yukishiro_chalet_t( 'issue1_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-row  sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row  sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yk-row__k"} -->
<p class="yk-row__k"><?php echo esc_html( yukishiro_chalet_t( 'issue2_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-row__v"} -->
<p class="yk-row__v"><?php echo esc_html( yukishiro_chalet_t( 'issue2_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-row  sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row  sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yk-row__k"} -->
<p class="yk-row__k"><?php echo esc_html( yukishiro_chalet_t( 'issue3_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-row__v"} -->
<p class="yk-row__v"><?php echo esc_html( yukishiro_chalet_t( 'issue3_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--ink yk-dark yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--ink yk-dark yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_snow-letter_1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_snow-letter_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_snow-letter_2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_snow-letter_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
