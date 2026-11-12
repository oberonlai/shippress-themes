<?php
/**
 * Title: Home: full-bleed dock parallax band
 * Slug: meguri-waste/front-dock
 * Categories: meguri-waste
 * Viewport Width: 1440
 * Description: Full-width watercolour truck-at-the-dock band with a parallax background and a white caption panel.
 */
?>
<!-- wp:cover {"url":"<?php echo meguri_waste_img( 'p04' ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","contentPosition":"bottom left","align":"full","className":"mw-dock sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left mw-dock sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p04' ) ); ?>" src="<?php echo meguri_waste_img( 'p04' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"mw-wrap mw-dock__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap mw-dock__wrap"><!-- wp:group {"className":"mw-dock__panel sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-dock__panel sp-reveal sp-reveal--down"><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'dock_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'dock_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
