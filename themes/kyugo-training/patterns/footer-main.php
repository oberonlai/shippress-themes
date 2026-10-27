<?php
/**
 * Title: Footer
 * Slug: kyugo-training/footer-main
 * Categories: kyugo-training
 * Keywords: first aid, training, workplace
 * Viewport Width: 1440
 * Inserter: no
 * Description: Dark footer: links, address and hours, two outline pills.
 */
?>
<!-- wp:group {"align":"full","className":"kt-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kt-foot"><!-- wp:html -->
<nav class="kt-foot__nav" aria-label="<?php echo esc_attr( kyugo_training_t( 'foot_nav' ) ); ?>"><a href="/about/"><?php echo esc_html( kyugo_training_t( 'fn1' ) ); ?></a> <a href="/courses/"><?php echo esc_html( kyugo_training_t( 'fn2' ) ); ?></a> <a href="/training-day/"><?php echo esc_html( kyugo_training_t( 'fn3' ) ); ?></a> <a href="/certificate/"><?php echo esc_html( kyugo_training_t( 'fn4' ) ); ?></a> <a href="/instructors/"><?php echo esc_html( kyugo_training_t( 'fn5' ) ); ?></a> <a href="/stories/"><?php echo esc_html( kyugo_training_t( 'fn6' ) ); ?></a> <a href="/faq/"><?php echo esc_html( kyugo_training_t( 'fn7' ) ); ?></a> <a href="/contact/"><?php echo esc_html( kyugo_training_t( 'fn8' ) ); ?></a></nav>
<!-- /wp:html -->

<!-- wp:separator {"className":"kt-foot__rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity kt-foot__rule"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"kt-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kt-foot__grid"><!-- wp:group {"className":"kt-foot__left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-foot__left"><!-- wp:group {"className":"kt-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group kt-foot__brand"><!-- wp:html -->
<span class="kt-mark kt-mark--foot"></span>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"isLink":false,"className":"kt-foot__name"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kt-foot__info"} -->
<p class="kt-foot__info"><?php echo esc_html( kyugo_training_t( 'foot_addr' ) ); ?><br><?php echo esc_html( kyugo_training_t( 'foot_hours' ) ); ?><br><?php echo esc_html( kyugo_training_t( 'foot_days' ) ); ?><br><?php echo esc_html( kyugo_training_t( 'foot_closed' ) ); ?><br><a href="tel:+31105550142">+31 10 555 0142</a> · <a href="mailto:hello@kyugotraining.example">hello@kyugotraining.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-foot__pills","layout":{"type":"default"}} -->
<div class="wp-block-group kt-foot__pills"><!-- wp:paragraph {"className":"kt-pill"} -->
<p class="kt-pill"><a href="/courses/"><?php echo esc_html( kyugo_training_t( 'foot_p1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-pill"} -->
<p class="kt-pill"><a href="/book-a-group/"><?php echo esc_html( kyugo_training_t( 'foot_p2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kt-foot__legal"} -->
<p class="kt-foot__legal"><?php echo esc_html( kyugo_training_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
