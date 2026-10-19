<?php
/**
 * Title: Home: quality
 * Slug: tsutsumi-packaging/quality
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Description: Certifications and tests as a two-column table scrolling beside a sticky factory photograph.
 */
?>
<!-- wp:group {"tagName":"section","className":"tp-qa","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-qa">
<!-- wp:html -->
<figure class="tp-qa__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/factory.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_factory' ) ); ?>" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:group {"className":"tp-qa__body","layout":{"type":"default"}} -->
<div class="wp-block-group tp-qa__body"><!-- wp:paragraph {"className":"tp-label"} -->
<p class="tp-label"><?php echo esc_html( tsutsumi_packaging_t( 'qa_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tp-sec__title"} -->
<h2 class="wp-block-heading tp-sec__title"><?php echo esc_html( tsutsumi_packaging_t( 'qa_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tp-qa__lead"} -->
<p class="tp-qa__lead"><?php echo esc_html( tsutsumi_packaging_t( 'qa_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<table class="tp-qa__t"><thead><tr><th scope="col"><?php echo esc_html( tsutsumi_packaging_t( 'qa_h1' ) ); ?></th><th scope="col"><?php echo esc_html( tsutsumi_packaging_t( 'qa_h2' ) ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'qa1_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'qa1_p' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'qa2_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'qa2_p' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'qa3_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'qa3_p' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'qa4_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'qa4_p' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'qa5_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'qa5_p' ) ); ?></td></tr></tbody></table>
<!-- /wp:html --></div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
