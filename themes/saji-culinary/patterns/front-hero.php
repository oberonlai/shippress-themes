<?php
/**
 * Title: Home: cover
 * Slug: saji-culinary/front-hero
 * Categories: saji-culinary
 * Keywords: culinary school, cooking, chef
 * Viewport Width: 1440
 * Description: Full-bleed photo of two students plating at the steel pass, the vertical headline on the right quarter and the timeline line along the bottom.
 */
?>
<!-- wp:cover {"url":"<?php echo saji_culinary_img( 'h1-pass.webp' ); ?>","dimRatio":20,"overlayColor":"ink","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.45},"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","isDark":true,"align":"full","className":"saji-hero sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left saji-hero sp-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( saji_culinary_t( 'alt_h1' ) ); ?>" src="<?php echo saji_culinary_img( 'h1-pass.webp' ); ?>" data-object-fit="cover" data-object-position="50% 45%" style="object-position:50% 45%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"saji-hero__title"} -->
<h1 class="wp-block-heading saji-hero__title"><?php echo saji_culinary_lines( 'h_title' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"saji-hero__apply"} -->
<div class="wp-block-buttons saji-hero__apply"><!-- wp:button {"className":"is-style-outline-pill"} -->
<div class="wp-block-button is-style-outline-pill"><a class="wp-block-button__link wp-element-button" href="/admissions/"><?php echo esc_html( saji_culinary_t( 'apply' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"saji-tl","layout":{"type":"default"}} -->
<div class="wp-block-group saji-tl"><!-- wp:group {"className":"saji-tl__i saji-tl__i--1","layout":{"type":"default"}} -->
<div class="wp-block-group saji-tl__i saji-tl__i--1"><!-- wp:paragraph {"className":"saji-tl__time"} -->
<p class="saji-tl__time">06:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-tl__label"} -->
<p class="saji-tl__label"><?php echo esc_html( saji_culinary_t( 'tl_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"saji-tl__i saji-tl__i--2","layout":{"type":"default"}} -->
<div class="wp-block-group saji-tl__i saji-tl__i--2"><!-- wp:paragraph {"className":"saji-tl__time"} -->
<p class="saji-tl__time">08:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-tl__label"} -->
<p class="saji-tl__label"><?php echo esc_html( saji_culinary_t( 'tl_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"saji-tl__i saji-tl__i--3","layout":{"type":"default"}} -->
<div class="wp-block-group saji-tl__i saji-tl__i--3"><!-- wp:paragraph {"className":"saji-tl__time"} -->
<p class="saji-tl__time">10:45</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-tl__label"} -->
<p class="saji-tl__label"><?php echo esc_html( saji_culinary_t( 'tl_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"saji-tl__i saji-tl__i--4","layout":{"type":"default"}} -->
<div class="wp-block-group saji-tl__i saji-tl__i--4"><!-- wp:paragraph {"className":"saji-tl__time"} -->
<p class="saji-tl__time">11:30</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-tl__label"} -->
<p class="saji-tl__label"><?php echo esc_html( saji_culinary_t( 'tl_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"saji-tl__i saji-tl__i--5","layout":{"type":"default"}} -->
<div class="wp-block-group saji-tl__i saji-tl__i--5"><!-- wp:paragraph {"className":"saji-tl__time"} -->
<p class="saji-tl__time">14:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"saji-tl__label"} -->
<p class="saji-tl__label"><?php echo esc_html( saji_culinary_t( 'tl_5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"saji-tl__i saji-tl__i--end","layout":{"type":"default"}} -->
<div class="wp-block-group saji-tl__i saji-tl__i--end"><!-- wp:paragraph {"className":"saji-tl__time"} -->
<p class="saji-tl__time"><?php echo esc_html( saji_culinary_t( 'tl_end' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:html -->
<div class="saji-sentinel" aria-hidden="true"></div>
<!-- /wp:html -->
