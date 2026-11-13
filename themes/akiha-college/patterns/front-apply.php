<?php
/**
 * Title: Home: apply band and newsletter
 * Slug: akiha-college/front-apply
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: Open board invitation with the Apply button, then a newsletter strip with the shared form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-apply","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-apply"><!-- wp:group {"className":"ak-apply__col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-apply__col"><!-- wp:heading {"level":2,"className":"ak-h2 ak-h2--xl sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ak-h2 ak-h2--xl sp-reveal sp-reveal--up"><?php echo esc_html( akiha_college_t( 'apply_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'apply_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ak-apply__btns","layout":{"type":"default"}} -->
<div class="wp-block-group ak-apply__btns"><!-- wp:buttons {"className":"ak-btns"} -->
<div class="wp-block-buttons ak-btns"><!-- wp:button {"className":"ak-btn"} -->
<div class="wp-block-button ak-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo akiha_college_url( '/contact/' ); ?>"><?php echo esc_html( akiha_college_t( 'apply' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ak-textlink"} -->
<p class="ak-textlink"><a href="<?php echo akiha_college_url( '/open-board/' ); ?>"><?php echo esc_html( akiha_college_t( 'book_board' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-newsletter","layout":{"type":"default"}} -->
<div class="wp-block-group ak-newsletter"><!-- wp:group {"className":"ak-newsletter__text","layout":{"type":"default"}} -->
<div class="wp-block-group ak-newsletter__text"><!-- wp:heading {"level":3,"className":"ak-newsletter__t"} -->
<h3 class="wp-block-heading ak-newsletter__t"><?php echo esc_html( akiha_college_t( 'news_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-newsletter__d"} -->
<p class="ak-newsletter__d"><?php echo esc_html( akiha_college_t( 'news_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ak-newsletter__form","layout":{"type":"default"}} -->
<div class="wp-block-group ak-newsletter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@akiha-college.example',
	'label'   => akiha_college_t( 'forms_email' ),
	'submit'  => akiha_college_t( 'forms_subscribe' ),
	'notice'  => akiha_college_t( 'forms_mail_notice' ),
	'subject' => akiha_college_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->