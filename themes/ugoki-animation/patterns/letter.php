<?php
/**
 * Title: Home: newsletter
 * Slug: ugoki-animation/letter
 * Categories: ugoki-animation
 * Viewport Width: 1440
 * Description: The monthly letter with the shared newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","className":"ug-wrap ug-sec ug-letter","layout":{"type":"default"}} -->
<section class="wp-block-group ug-wrap ug-sec ug-letter"><!-- wp:group {"className":"ug-case__rail","layout":{"type":"default"}} -->
<div class="wp-block-group ug-case__rail"><!-- wp:paragraph {"className":"ug-label"} -->
<p class="ug-label"><?php echo esc_html( ugoki_animation_t( 'let_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-case__main","layout":{"type":"default"}} -->
<div class="wp-block-group ug-case__main"><!-- wp:heading {"level":2,"className":"ug-h2"} -->
<h2 class="wp-block-heading ug-h2"><?php echo esc_html( ugoki_animation_t( 'let_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ugoki_animation_t( 'let_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@ugoki-animation.example',
	'label'   => ugoki_animation_t( 'forms_email' ),
	'submit'  => ugoki_animation_t( 'forms_subscribe' ),
	'notice'  => ugoki_animation_t( 'forms_mail_notice' ),
	'subject' => ugoki_animation_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-case__credits","layout":{"type":"default"}} -->
<div class="wp-block-group ug-case__credits"></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
