<?php
/**
 * Title: Home: seam desk hero
 * Slug: yukishiro-chalet/hero
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Full-bleed high-key photograph with a centred caps headline, five glyphs, a concave white arc and a white three-cell desk that docks to the top.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( yukishiro_chalet_img( 'kv-bindings-door.webp' ) ); ?>","dimRatio":0,"minHeight":900,"minHeightUnit":"px","contentPosition":"center center","isDark":true,"className":"yk-hero sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light yk-hero sp-parallax" style="min-height:900px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p01' ) ); ?>" src="<?php echo esc_url( yukishiro_chalet_img( 'kv-bindings-door.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"yk-h1"} -->
<h1 class="wp-block-heading yk-h1"><?php echo esc_html( yukishiro_chalet_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<p class="yk-glyphs" aria-hidden="true"><svg viewBox="0 0 14 14" width="14" height="14" fill="none" stroke="#C9A25F" stroke-width="1.2" stroke-linecap="round"><path d="M7 1v12M1.8 4l10.4 6M12.2 4 1.8 10"/></svg><svg viewBox="0 0 14 14" width="14" height="14" fill="none" stroke="#C9A25F" stroke-width="1.2" stroke-linecap="round"><path d="M7 1v12M1.8 4l10.4 6M12.2 4 1.8 10"/></svg><svg viewBox="0 0 14 14" width="14" height="14" fill="none" stroke="#C9A25F" stroke-width="1.2" stroke-linecap="round"><path d="M7 1v12M1.8 4l10.4 6M12.2 4 1.8 10"/></svg><svg viewBox="0 0 14 14" width="14" height="14" fill="none" stroke="#C9A25F" stroke-width="1.2" stroke-linecap="round"><path d="M7 1v12M1.8 4l10.4 6M12.2 4 1.8 10"/></svg><svg viewBox="0 0 14 14" width="14" height="14" fill="none" stroke="#C9A25F" stroke-width="1.2" stroke-linecap="round"><path d="M7 1v12M1.8 4l10.4 6M12.2 4 1.8 10"/></svg></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yk-hero__line"} -->
<p class="yk-hero__line"><?php echo esc_html( yukishiro_chalet_t( 'hero_line' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:html -->
<svg class="yk-seam" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0,40 C360,120 1080,120 1440,40 L1440,120 L0,120 Z" fill="#FFFFFF"/></svg>
<!-- /wp:html -->

<!-- wp:group {"className":"yk-desk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-desk-wrap"><!-- wp:group {"className":"yk-desk","layout":{"type":"default"}} -->
<div class="wp-block-group yk-desk"><!-- wp:group {"className":"yk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group yk-cell"><!-- wp:paragraph {"className":"yk-cell__k"} -->
<p class="yk-cell__k"><?php echo esc_html( yukishiro_chalet_t( 'desk_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-cell__v"} -->
<p class="yk-cell__v"><?php echo esc_html( yukishiro_chalet_t( 'desk_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group yk-cell"><!-- wp:paragraph {"className":"yk-cell__k"} -->
<p class="yk-cell__k"><?php echo esc_html( yukishiro_chalet_t( 'desk_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-cell__v"} -->
<p class="yk-cell__v"><?php echo esc_html( yukishiro_chalet_t( 'desk_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group yk-cell"><!-- wp:paragraph {"className":"yk-cell__k"} -->
<p class="yk-cell__k"><?php echo esc_html( yukishiro_chalet_t( 'desk_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-cell__v"} -->
<p class="yk-cell__v"><?php echo esc_html( yukishiro_chalet_t( 'desk_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"yk-desk__btn"} -->
<div class="wp-block-buttons yk-desk__btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
