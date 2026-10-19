<?php
/**
 * Title: Home: material swatches
 * Slug: tsutsumi-packaging/materials
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Description: Five board swatches with grade codes and recycled content beside a photograph of the board edges.
 */
?>
<!-- wp:group {"tagName":"section","className":"tp-mat","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-mat">
<!-- wp:group {"className":"tp-mat__head","layout":{"type":"default"}} -->
<div class="wp-block-group tp-mat__head"><!-- wp:paragraph {"className":"tp-label"} -->
<p class="tp-label"><?php echo esc_html( tsutsumi_packaging_t( 'mt_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tp-sec__title"} -->
<h2 class="wp-block-heading tp-sec__title"><?php echo esc_html( tsutsumi_packaging_t( 'mt_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tp-mat__lead"} -->
<p class="tp-mat__lead"><?php echo esc_html( tsutsumi_packaging_t( 'mt_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<img class="tp-mat__ph" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/boards.webp' ) ); ?>" alt="<?php echo esc_attr( tsutsumi_packaging_t( 'alt_boards' ) ); ?>" loading="lazy"/>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<ol class="tp-mat__list"><li class="tp-mat__i tp-mat__i--1"><span class="tp-mat__sw" aria-hidden="true"></span><strong class="tp-mat__n"><?php echo esc_html( tsutsumi_packaging_t( 'mt1_n' ) ); ?></strong><span class="tp-mat__g"><?php echo esc_html( tsutsumi_packaging_t( 'mt1_g' ) ); ?></span><span class="tp-mat__r"><em><?php echo esc_html( tsutsumi_packaging_t( 'mt_rec' ) ); ?></em><?php echo esc_html( tsutsumi_packaging_t( 'mt1_r' ) ); ?></span></li><li class="tp-mat__i tp-mat__i--2"><span class="tp-mat__sw" aria-hidden="true"></span><strong class="tp-mat__n"><?php echo esc_html( tsutsumi_packaging_t( 'mt2_n' ) ); ?></strong><span class="tp-mat__g"><?php echo esc_html( tsutsumi_packaging_t( 'mt2_g' ) ); ?></span><span class="tp-mat__r"><em><?php echo esc_html( tsutsumi_packaging_t( 'mt_rec' ) ); ?></em><?php echo esc_html( tsutsumi_packaging_t( 'mt2_r' ) ); ?></span></li><li class="tp-mat__i tp-mat__i--3"><span class="tp-mat__sw" aria-hidden="true"></span><strong class="tp-mat__n"><?php echo esc_html( tsutsumi_packaging_t( 'mt3_n' ) ); ?></strong><span class="tp-mat__g"><?php echo esc_html( tsutsumi_packaging_t( 'mt3_g' ) ); ?></span><span class="tp-mat__r"><em><?php echo esc_html( tsutsumi_packaging_t( 'mt_rec' ) ); ?></em><?php echo esc_html( tsutsumi_packaging_t( 'mt3_r' ) ); ?></span></li><li class="tp-mat__i tp-mat__i--4"><span class="tp-mat__sw" aria-hidden="true"></span><strong class="tp-mat__n"><?php echo esc_html( tsutsumi_packaging_t( 'mt4_n' ) ); ?></strong><span class="tp-mat__g"><?php echo esc_html( tsutsumi_packaging_t( 'mt4_g' ) ); ?></span><span class="tp-mat__r"><em><?php echo esc_html( tsutsumi_packaging_t( 'mt_rec' ) ); ?></em><?php echo esc_html( tsutsumi_packaging_t( 'mt4_r' ) ); ?></span></li><li class="tp-mat__i tp-mat__i--5"><span class="tp-mat__sw" aria-hidden="true"></span><strong class="tp-mat__n"><?php echo esc_html( tsutsumi_packaging_t( 'mt5_n' ) ); ?></strong><span class="tp-mat__g"><?php echo esc_html( tsutsumi_packaging_t( 'mt5_g' ) ); ?></span><span class="tp-mat__r"><em><?php echo esc_html( tsutsumi_packaging_t( 'mt_rec' ) ); ?></em><?php echo esc_html( tsutsumi_packaging_t( 'mt5_r' ) ); ?></span></li></ol>
<!-- /wp:html --></section>
<!-- /wp:group -->
