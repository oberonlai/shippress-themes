<?php
/**
 * Title: Home: the Saturday list
 * Slug: shio-butchers/front-list
 * Categories: shio-butchers
 * Keywords: butcher, shop, home
 * Viewport Width: 1440
 * Description: Newsletter band with the shared form slot (email field and submit, no plugin needed).
 */
?>
<!-- wp:group {"tagName":"section","className":"sb-list","layout":{"type":"constrained"},"align":"full","anchor":"list"} -->
<section id="list" class="wp-block-group alignfull sb-list"><!-- wp:group {"className":"sb-two sb-two--list","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide sb-two sb-two--list"><!-- wp:group {"className":"sb-list__text","layout":{"type":"default"}} -->
<div class="wp-block-group sb-list__text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( shio_butchers_t( 'ka12c7c1f' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shio_butchers_t( 'ka76e72ab' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-list__form","layout":{"type":"default"}} -->
<div class="wp-block-group sb-list__form"><!-- wp:html -->
<?php
echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'orders@shio-butchers.example',
	'label'   => shio_butchers_t( 'forms_email' ),
	'submit'  => shio_butchers_t( 'forms_subscribe' ),
	'notice'  => shio_butchers_t( 'forms_mail_notice' ),
	'subject' => shio_butchers_t( 'forms_mail_subject' ),
) );
?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
