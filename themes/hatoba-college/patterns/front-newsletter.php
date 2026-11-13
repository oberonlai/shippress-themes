<?php
/**
 * Title: Home: newsletter
 * Slug: hatoba-college/front-newsletter
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Description: Navy band with a white section word, one sentence and the newsletter form slot (email and submit, mailto fallback without plugins).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"newsletter","className":"hc-sec hc-newsletter","layout":{"type":"default"}} -->
<section id="newsletter" class="wp-block-group alignfull hc-sec hc-newsletter"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap"><!-- wp:group {"className":"hc-title hc-title--dark","layout":{"type":"default"}} -->
<div class="wp-block-group hc-title hc-title--dark"><!-- wp:heading {"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><span class="hc-initial"><?php echo esc_html( hatoba_college_t( 'news_h_i' ) ); ?></span><?php echo esc_html( hatoba_college_t( 'news_h_r' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sublabel"} -->
<p class="hc-sublabel"><?php echo esc_html( hatoba_college_t( 'news_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-body hc-newsletter__p"} -->
<p class="hc-body hc-newsletter__p"><?php echo esc_html( hatoba_college_t( 'news_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-newsletter__form","layout":{"type":"default"}} -->
<div class="wp-block-group hc-newsletter__form"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'admissions@hatoba-college.example',
	'label'   => hatoba_college_t( 'forms_email' ),
	'submit'  => hatoba_college_t( 'forms_subscribe' ),
	'notice'  => hatoba_college_t( 'forms_mail_notice' ),
	'subject' => hatoba_college_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
