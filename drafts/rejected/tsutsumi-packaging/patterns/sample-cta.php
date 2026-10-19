<?php
/**
 * Title: Home: sample request band
 * Slug: tsutsumi-packaging/sample-cta
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Description: A sample request band on the amber field with an ink button; a cut-out stack of boxes breaks over the band's top edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"tp-sc","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-sc">
<!-- wp:html -->
<img class="tp-sc__obj" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stack-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_stack' ) ); ?>" loading="lazy"/>
<!-- /wp:html -->

<!-- wp:group {"className":"tp-sc__text","layout":{"type":"default"}} -->
<div class="wp-block-group tp-sc__text"><!-- wp:paragraph {"className":"tp-label"} -->
<p class="tp-label"><?php echo esc_html( tsutsumi_packaging_t( 'sc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tp-sc__title"} -->
<h2 class="wp-block-heading tp-sc__title"><?php echo esc_html( tsutsumi_packaging_t( 'sc_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tp-sc__p"} -->
<p class="tp-sc__p"><?php echo esc_html( tsutsumi_packaging_t( 'sc_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="tp-sc__acts"><a class="tp-sc__btn" href="/contact/"><?php echo esc_html( tsutsumi_packaging_t( 'sc_btn' ) ); ?> <span aria-hidden="true">&rarr;</span></a><a class="tp-sc__l2" href="/contact/"><?php echo esc_html( tsutsumi_packaging_t( 'sc_l2' ) ); ?></a></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
