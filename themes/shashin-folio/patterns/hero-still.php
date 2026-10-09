<?php
/**
 * Title: Hero — full-bleed film still with title
 * Slug: shashin-folio/hero-still
 * Categories: shashin-folio, featured, banner
 * Keywords: hero, cover, photograph, cinematic, still, letterbox
 * Viewport Width: 1440
 * Description: A full-bleed, letterboxed photograph with a frame counter, a display title set low in the frame and a mono caption, like the opening still of a film.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/low-tide.svg' ) ); ?>","dimRatio":40,"overlayColor":"night","minHeight":92,"minHeightUnit":"vh","contentPosition":"bottom left","isDark":true,"align":"full","className":"sf-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left sf-hero" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);min-height:92vh"><span aria-hidden="true" class="wp-block-cover__background has-night-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="A lone figure on wet sand at low tide before sunrise" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/low-tide.svg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"sf-grid sf-hero__grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide sf-grid sf-hero__grid"><!-- wp:paragraph {"className":"is-style-caption-label sf-hero__kicker","style":{"layout":{"columnSpan":12}}} -->
<p class="is-style-caption-label sf-hero__kicker">Reel 01 — Selected photographs, 2014–2026</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sf-hero__title","style":{"layout":{"columnSpan":9}}} -->
<h1 class="wp-block-heading sf-hero__title">The quiet <em>between</em> things.</h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"sf-hero__aside","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group sf-hero__aside"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Ren Aoki is a Tokyo photographer working on film: long series about coasts, night trains and snow, and commissions for magazines, architects and hotels.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/work/">Enter the work</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"is-style-frame-number sf-hero__caption","style":{"layout":{"columnSpan":12}}} -->
<p class="is-style-frame-number sf-hero__caption"><span>Fr. 01 / 24</span><span>Low Tide — Yuigahama, Kamakura</span><span>05:12, March 2023</span><span>black-and-white 400, pushed one stop</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
