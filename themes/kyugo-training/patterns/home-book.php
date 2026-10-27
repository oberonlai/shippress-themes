<?php
/**
 * Title: Home: booking a group
 * Slug: kyugo-training/home-book
 * Categories: kyugo-training
 * Keywords: first aid, training, workplace
 * Viewport Width: 1440
 * Description: Heading and price on the left, four booking steps on a horizontal line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-book","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-book"><!-- wp:group {"className":"kt-book__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kt-book__grid"><!-- wp:group {"className":"kt-book__copy sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-book__copy sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kt-label"} -->
<p class="kt-label"><?php echo esc_html( kyugo_training_t( 'book_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kyugo_training_t( 'book_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-book__text"} -->
<p class="kt-book__text"><?php echo esc_html( kyugo_training_t( 'book_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-book__price"} -->
<p class="kt-book__price"><?php echo esc_html( kyugo_training_t( 'book_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-book__note"} -->
<p class="kt-book__note"><?php echo esc_html( kyugo_training_t( 'book_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-book__steps","layout":{"type":"default"}} -->
<div class="wp-block-group kt-book__steps"><!-- wp:group {"className":"kt-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kt-steps sp-stagger"><!-- wp:group {"className":"kt-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kt-step__n"} -->
<p class="kt-step__n">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kt-step__t"} -->
<h3 class="wp-block-heading kt-step__t"><?php echo esc_html( kyugo_training_t( 'step1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-step__x"} -->
<p class="kt-step__x"><?php echo esc_html( kyugo_training_t( 'step1_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kt-step__n"} -->
<p class="kt-step__n">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kt-step__t"} -->
<h3 class="wp-block-heading kt-step__t"><?php echo esc_html( kyugo_training_t( 'step2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-step__x"} -->
<p class="kt-step__x"><?php echo esc_html( kyugo_training_t( 'step2_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kt-step__n"} -->
<p class="kt-step__n">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kt-step__t"} -->
<h3 class="wp-block-heading kt-step__t"><?php echo esc_html( kyugo_training_t( 'step3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-step__x"} -->
<p class="kt-step__x"><?php echo esc_html( kyugo_training_t( 'step3_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kt-step__n"} -->
<p class="kt-step__n">04</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kt-step__t"} -->
<h3 class="wp-block-heading kt-step__t"><?php echo esc_html( kyugo_training_t( 'step4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-step__x"} -->
<p class="kt-step__x"><?php echo esc_html( kyugo_training_t( 'step4_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-cta kt-cta--fill","layout":{"type":"default"}} -->
<div class="wp-block-group kt-cta kt-cta--fill"><!-- wp:paragraph {"className":"kt-cta__label"} -->
<p class="kt-cta__label"><?php echo esc_html( kyugo_training_t( 'more' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-cta__link"} -->
<p class="kt-cta__link"><a href="/book-a-group/"><?php echo esc_html( kyugo_training_t( 'book_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
