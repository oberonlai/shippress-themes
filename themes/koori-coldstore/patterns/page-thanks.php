<?php
/**
 * Title: Page: Thank you
 * Slug: koori-coldstore/page-thanks
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Inserter: no
 * Description: A pale head and the short thank-you text with a link back to the rooms.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero kc-head kc-head--pale","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero kc-head kc-head--pale"><!-- wp:group {"className":"kc-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__inner"><!-- wp:group {"className":"kc-hero__lockup","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__lockup"><!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( koori_coldstore_t( 'th_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-tilt"} -->
<p class="kc-tilt"><?php echo esc_html( koori_coldstore_t( 'th_tilt' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-pro"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'th_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'th_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-intro kc-lead"} -->
<p class="kc-intro kc-lead"><?php echo esc_html( koori_coldstore_t( 'th_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-cols","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cols"><!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'th_c1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'th_c1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'th_c2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'th_c2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-after","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-after"><!-- wp:paragraph {"className":"kc-more"} -->
<p class="kc-more"><a href="<?php echo koori_coldstore_url( '/#rooms' ); ?>"><?php echo esc_html( koori_coldstore_t( 'th_more' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
