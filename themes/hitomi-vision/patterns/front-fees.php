<?php
/**
 * Title: Home: fees
 * Slug: hitomi-vision/front-fees
 * Categories: hitomi-vision
 * Keywords: optometry, prices, fees
 * Viewport Width: 1440
 * Description: A dome-topped section head and a full-width list of six exams with their duration on the left and the price on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"hv-sec hv-sec--tall hv-dome","layout":{"type":"constrained"}} -->
<section id="fees" class="wp-block-group alignfull hv-sec hv-sec--tall hv-dome"><!-- wp:group {"className":"hv-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hv-head sp-reveal sp-reveal--up"><!-- wp:heading {"className":"hv-head__title"} -->
<h2 class="wp-block-heading hv-head__title"><?php echo esc_html( hitomi_vision_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hv-head__sub"} -->
<p class="hv-head__sub"><?php echo esc_html( hitomi_vision_t( 'f_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hv-prices","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hv-prices"><?php for ( $hv_n = 1; $hv_n <= 6; $hv_n++ ) : ?><!-- wp:group {"className":"hv-price","layout":{"type":"default"}} -->
<div class="wp-block-group hv-price"><!-- wp:group {"className":"hv-price__lead","layout":{"type":"default"}} -->
<div class="wp-block-group hv-price__lead"><!-- wp:paragraph {"className":"hv-price__name"} -->
<p class="hv-price__name"><?php echo esc_html( hitomi_vision_t( 'f_' . $hv_n ) ); ?></p>
<!-- /wp:paragraph --><?php if ( '' !== hitomi_vision_t( 'f_' . $hv_n . 'd' ) ) : ?>

<!-- wp:paragraph {"className":"hv-price__dur"} -->
<p class="hv-price__dur"><?php echo esc_html( hitomi_vision_t( 'f_' . $hv_n . 'd' ) ); ?></p>
<!-- /wp:paragraph --><?php endif; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hv-price__price"} -->
<p class="hv-price__price"><?php echo esc_html( hitomi_vision_t( 'f_' . $hv_n . 'p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php if ( $hv_n < 6 ) : ?>

<?php endif; ?><?php endfor; ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hv-fees__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hv-fees__foot"><!-- wp:paragraph {"className":"hv-fees__note"} -->
<p class="hv-fees__note"><?php echo esc_html( hitomi_vision_t( 'f_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hv-btns"} -->
<div class="wp-block-buttons hv-btns"><!-- wp:button {"className":"hv-btn"} -->
<div class="wp-block-button hv-btn"><a class="wp-block-button__link wp-element-button" href="#fees"><?php echo esc_html( hitomi_vision_t( 'f_link' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
