<?php
/**
 * Title: Home: the Morning Sheet
 * Slug: yoake-patisserie/front-sheet
 * Categories: yoake-patisserie
 * Viewport Width: 1440
 * Description: Newsletter panel with the email field and submit (works without plugins).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yk-section yk-sheet","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yk-section yk-sheet"><!-- wp:group {"className":"yk-sheet__panel","layout":{"type":"default"}} -->
<div class="wp-block-group yk-sheet__panel"><!-- wp:paragraph {"className":"yk-kicker"} -->
<p class="yk-kicker"><?php echo wp_kses_post( yoake_patisserie_t( 'kc4488715' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-dash"} -->
<p class="yk-dash" aria-hidden="true">—</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yk-lines"} -->
<h2 class="wp-block-heading yk-lines"><?php echo wp_kses_post( yoake_patisserie_t( 'kaf335fdf' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yoake_patisserie_t( 'k3af16680' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yk-sheet__form","layout":{"type":"default"}} -->
<div class="wp-block-group yk-sheet__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@yoake-patisserie.example', 'label' => yoake_patisserie_t( 'forms_email' ), 'submit' => yoake_patisserie_t( 'forms_subscribe' ), 'notice' => yoake_patisserie_t( 'forms_mail_notice' ), 'subject' => yoake_patisserie_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
