<?php
/**
 * Title: Page not found
 * Slug: hitomi-vision/notfound
 * Categories: hitomi-vision
 * Inserter: no
 * Description: A dome-topped head saying the address is not a page, then two short sections pointing to the clinic pages.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hv-sec hv-pagehead hv-dome","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hv-sec hv-pagehead hv-dome"><!-- wp:heading {"level":1,"className":"hv-pagehead__title"} -->
<h1 class="wp-block-heading hv-pagehead__title"><?php echo esc_html( hitomi_vision_t( 'n_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hv-head__sub"} -->
<p class="hv-head__sub"><?php echo esc_html( hitomi_vision_t( 'n_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hv-pagehead__lede"} -->
<p class="hv-pagehead__lede"><?php echo esc_html( hitomi_vision_t( 'n_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hv-sec hv-sec--in hv-dome","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hv-sec hv-sec--in hv-dome"><!-- wp:heading {"className":"hv-head__title hv-head hv-head--tight"} -->
<h2 class="wp-block-heading hv-head__title hv-head hv-head--tight"><?php echo esc_html( hitomi_vision_t( 'n_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hv-method","layout":{"type":"default"}} -->
<div class="wp-block-group hv-method"><?php for ( $hv_n = 1; $hv_n <= 3; $hv_n++ ) : if ( '' === hitomi_vision_t( 'n_b1_' . $hv_n ) ) { continue; } ?><!-- wp:paragraph -->
<p><?php echo esc_html( hitomi_vision_t( 'n_b1_' . $hv_n ) ); ?></p>
<!-- /wp:paragraph -->
<?php endfor; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hv-sec hv-sec--in hv-dome","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hv-sec hv-sec--in hv-dome"><!-- wp:heading {"className":"hv-head__title hv-head hv-head--tight"} -->
<h2 class="wp-block-heading hv-head__title hv-head hv-head--tight"><?php echo esc_html( hitomi_vision_t( 'n_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hv-method","layout":{"type":"default"}} -->
<div class="wp-block-group hv-method"><?php for ( $hv_n = 1; $hv_n <= 3; $hv_n++ ) : if ( '' === hitomi_vision_t( 'n_b2_' . $hv_n ) ) { continue; } ?><!-- wp:paragraph -->
<p><?php echo esc_html( hitomi_vision_t( 'n_b2_' . $hv_n ) ); ?></p>
<!-- /wp:paragraph -->
<?php endfor; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
