<?php
/**
 * Title: Home: the letter
 * Slug: yukiki-shoes/front-letter
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Ink band: heading and two lines on the left, the dynamic newsletter form on the right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"letter","align":"full","className":"ys-sec ys-sec--ink","layout":{"type":"default"}} -->
<section id="letter" class="wp-block-group alignfull ys-sec ys-sec--ink">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:group {"className":"ys-letter","layout":{"type":"default"}} -->
<div class="wp-block-group ys-letter">
<!-- wp:group {"className":"ys-letter__l","layout":{"type":"default"}} -->
<div class="wp-block-group ys-letter__l">
<!-- wp:heading {"level":2,"className":"ys-h2 ys-h2--light"} -->
<h2 class="wp-block-heading ys-h2 ys-h2--light"><?php echo esc_html( yukiki_shoes_t( 'let_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-body ys-body--light"} -->
<p class="ys-body ys-body--light"><?php echo esc_html( yukiki_shoes_t( 'let_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-letter__r","layout":{"type":"default"}} -->
<div class="wp-block-group ys-letter__r">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@yukikishoes.example', 'label' => yukiki_shoes_t( 'forms_email' ), 'submit' => yukiki_shoes_t( 'forms_subscribe' ), 'notice' => yukiki_shoes_t( 'forms_mail_notice' ), 'subject' => yukiki_shoes_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->