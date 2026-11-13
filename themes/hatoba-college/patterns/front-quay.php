<?php
/**
 * Title: Home: quay band
 * Slug: hatoba-college/front-quay
 * Categories: hatoba-college
 * Keywords: college, maritime, training, harbour
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the quay with a white panel counting twelve weeks, eighteen cadets and three intakes.
 */
?>
<!-- wp:cover {"url":"<?php echo hatoba_college_img( 'p06-quay-morning.webp' ); ?>","dimRatio":40,"customOverlayColor":"#172028","minHeight":560,"minHeightUnit":"px","contentPosition":"center left","isDark":true,"align":"full","className":"hc-quay sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left hc-quay sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#172028"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hatoba_college_t( 'alt_p06' ) ); ?>" src="<?php echo hatoba_college_img( 'p06-quay-morning.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"hc-quay__panel","layout":{"type":"default"}} -->
<div class="wp-block-group hc-quay__panel"><!-- wp:group {"className":"hc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group hc-stat"><!-- wp:paragraph {"className":"hc-stat__n sp-count"} -->
<p class="hc-stat__n sp-count">12</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-stat__l"} -->
<p class="hc-stat__l"><?php echo esc_html( hatoba_college_t( 'q1_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group hc-stat"><!-- wp:paragraph {"className":"hc-stat__n sp-count"} -->
<p class="hc-stat__n sp-count">18</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-stat__l"} -->
<p class="hc-stat__l"><?php echo esc_html( hatoba_college_t( 'q2_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-stat","layout":{"type":"default"}} -->
<div class="wp-block-group hc-stat"><!-- wp:paragraph {"className":"hc-stat__n sp-count"} -->
<p class="hc-stat__n sp-count">3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-stat__l"} -->
<p class="hc-stat__l"><?php echo esc_html( hatoba_college_t( 'q3_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-stat__note"} -->
<p class="hc-stat__note"><?php echo esc_html( hatoba_college_t( 'q_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
