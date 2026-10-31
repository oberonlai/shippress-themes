<?php
/**
 * Title: Home: floor band
 * Slug: mahora-foods/front-floor
 * Categories: mahora-foods
 * Keywords: staff cafeteria, lunchroom, contract catering
 * Viewport Width: 1440
 * Description: Full-bleed parallax photo of a dining room with a white card of three counting figures.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/m13.webp' ) ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","align":"full","contentPosition":"center right","isDark":false,"className":"mf-floor sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-center-right mf-floor sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m13' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m13.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className": "mf-countcard", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-countcard"><!-- wp:group {"className": "mf-counts", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-counts"><!-- wp:group {"className": "mf-count", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-count"><!-- wp:paragraph {"className": "mf-count__n sp-reveal sp-count"} -->
<p class="mf-count__n sp-reveal sp-count">38</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-count__l"} -->
<p class="mf-count__l"><?php echo esc_html( mahora_foods_t( 'c1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-count", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-count"><!-- wp:paragraph {"className": "mf-count__n sp-reveal sp-count"} -->
<p class="mf-count__n sp-reveal sp-count">4</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-count__l"} -->
<p class="mf-count__l"><?php echo esc_html( mahora_foods_t( 'c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-count", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-count"><!-- wp:paragraph {"className": "mf-count__n sp-reveal sp-count"} -->
<p class="mf-count__n sp-reveal sp-count">2009</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-count__l"} -->
<p class="mf-count__l"><?php echo esc_html( mahora_foods_t( 'c3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "mf-countcard__note"} -->
<p class="mf-countcard__note"><?php echo esc_html( mahora_foods_t( 'c_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
