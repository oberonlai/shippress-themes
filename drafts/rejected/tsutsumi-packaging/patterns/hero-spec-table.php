<?php
/**
 * Title: Home: spec table first screen
 * Slug: tsutsumi-packaging/hero-spec-table
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Description: First screen: a one-line headline and a solid amber Request samples button over a full-bleed kraft-board texture, then a white spec table card with six product rows (cut-out product photograph, type, size range, board grade, minimum lot, lead time) straddling the amber field below.
 */
?>
<!-- wp:group {"tagName":"section","className":"tp-hst","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-hst">
<!-- wp:group {"className":"tp-hst__top","layout":{"type":"default"}} -->
<div class="wp-block-group tp-hst__top">
<!-- wp:heading {"level":1,"className":"tp-hst__title"} -->
<h1 class="wp-block-heading tp-hst__title"><?php echo esc_html( tsutsumi_packaging_t( 'hs_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tp-hst__sub"} -->
<p class="tp-hst__sub"><?php echo esc_html( tsutsumi_packaging_t( 'hs_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="tp-hst__btn" href="/contact/"><?php echo esc_html( tsutsumi_packaging_t( 'hs_btn' ) ); ?> <span aria-hidden="true">&rarr;</span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="tp-spec"><p class="tp-spec__cap"><?php echo esc_html( tsutsumi_packaging_t( 'hs_cap' ) ); ?></p><table><thead><tr><td></td><th scope="col"><?php echo esc_html( tsutsumi_packaging_t( 'hs_c_type' ) ); ?></th><th scope="col"><?php echo esc_html( tsutsumi_packaging_t( 'hs_c_size' ) ); ?></th><th scope="col"><?php echo esc_html( tsutsumi_packaging_t( 'hs_c_grade' ) ); ?></th><th scope="col"><?php echo esc_html( tsutsumi_packaging_t( 'hs_c_lot' ) ); ?></th><th scope="col"><?php echo esc_html( tsutsumi_packaging_t( 'hs_c_lead' ) ); ?></th></tr></thead><tbody><tr><td class="tp-spec__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/mailer-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_mailer' ) ); ?>" width="64" height="64" loading="eager"/></td><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'hs1_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'hs1_s' ) ); ?></td><td><span class="tp-spec__g"><?php echo esc_html( tsutsumi_packaging_t( 'hs1_g' ) ); ?></span></td><td><?php echo esc_html( tsutsumi_packaging_t( 'hs1_l' ) ); ?></td><td class="tp-spec__lead"><?php echo esc_html( tsutsumi_packaging_t( 'hs1_d' ) ); ?></td></tr><tr><td class="tp-spec__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/carton-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_carton' ) ); ?>" width="64" height="64" loading="eager"/></td><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'hs2_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'hs2_s' ) ); ?></td><td><span class="tp-spec__g"><?php echo esc_html( tsutsumi_packaging_t( 'hs2_g' ) ); ?></span></td><td><?php echo esc_html( tsutsumi_packaging_t( 'hs2_l' ) ); ?></td><td class="tp-spec__lead"><?php echo esc_html( tsutsumi_packaging_t( 'hs2_d' ) ); ?></td></tr><tr><td class="tp-spec__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/folding-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_folding' ) ); ?>" width="64" height="64" loading="eager"/></td><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'hs3_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'hs3_s' ) ); ?></td><td><span class="tp-spec__g"><?php echo esc_html( tsutsumi_packaging_t( 'hs3_g' ) ); ?></span></td><td><?php echo esc_html( tsutsumi_packaging_t( 'hs3_l' ) ); ?></td><td class="tp-spec__lead"><?php echo esc_html( tsutsumi_packaging_t( 'hs3_d' ) ); ?></td></tr><tr><td class="tp-spec__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tray-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_tray' ) ); ?>" width="64" height="64" loading="eager"/></td><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'hs4_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'hs4_s' ) ); ?></td><td><span class="tp-spec__g"><?php echo esc_html( tsutsumi_packaging_t( 'hs4_g' ) ); ?></span></td><td><?php echo esc_html( tsutsumi_packaging_t( 'hs4_l' ) ); ?></td><td class="tp-spec__lead"><?php echo esc_html( tsutsumi_packaging_t( 'hs4_d' ) ); ?></td></tr><tr><td class="tp-spec__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sleeve-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_sleeve' ) ); ?>" width="64" height="64" loading="eager"/></td><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'hs5_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'hs5_s' ) ); ?></td><td><span class="tp-spec__g"><?php echo esc_html( tsutsumi_packaging_t( 'hs5_g' ) ); ?></span></td><td><?php echo esc_html( tsutsumi_packaging_t( 'hs5_l' ) ); ?></td><td class="tp-spec__lead"><?php echo esc_html( tsutsumi_packaging_t( 'hs5_d' ) ); ?></td></tr><tr><td class="tp-spec__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/divider-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_divider' ) ); ?>" width="64" height="64" loading="eager"/></td><th scope="row"><?php echo esc_html( tsutsumi_packaging_t( 'hs6_t' ) ); ?></th><td><?php echo esc_html( tsutsumi_packaging_t( 'hs6_s' ) ); ?></td><td><span class="tp-spec__g"><?php echo esc_html( tsutsumi_packaging_t( 'hs6_g' ) ); ?></span></td><td><?php echo esc_html( tsutsumi_packaging_t( 'hs6_l' ) ); ?></td><td class="tp-spec__lead"><?php echo esc_html( tsutsumi_packaging_t( 'hs6_d' ) ); ?></td></tr></tbody></table></div>
<!-- /wp:html -->
</section>
<!-- /wp:group -->
