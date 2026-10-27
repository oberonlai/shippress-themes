<?php
/**
 * Title: Home: the hall
 * Slug: kyugo-training/home-centre
 * Categories: kyugo-training
 * Keywords: first aid, training, workplace
 * Viewport Width: 1440
 * Description: Text left, a 0.87:1 photograph right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-centre","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-centre"><!-- wp:group {"className":"kt-centre__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kt-centre__grid"><!-- wp:group {"className":"kt-centre__copy sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-centre__copy sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kt-label"} -->
<p class="kt-label"><?php echo esc_html( kyugo_training_t( 'centre_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kyugo_training_t( 'centre_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-lead"} -->
<p class="kt-lead"><?php echo esc_html( kyugo_training_t( 'centre_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-centre__text"} -->
<p class="kt-centre__text"><?php echo esc_html( kyugo_training_t( 'centre_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kt-cta kt-cta--fill","layout":{"type":"default"}} -->
<div class="wp-block-group kt-cta kt-cta--fill"><!-- wp:paragraph {"className":"kt-cta__label"} -->
<p class="kt-cta__label"><?php echo esc_html( kyugo_training_t( 'more' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-cta__link"} -->
<p class="kt-cta__link"><a href="/contact/"><?php echo esc_html( kyugo_training_t( 'centre_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-centre__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-centre__media sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-centre__photo"} -->
<figure class="wp-block-image size-full kt-centre__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08.webp' ) ); ?>" alt="<?php echo esc_attr( kyugo_training_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
