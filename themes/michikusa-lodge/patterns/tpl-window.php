<?php
/**
 * Title: Template: title window
 * Slug: michikusa-lodge/tpl-window
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Inset double-exposure title window used above page and post titles.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ml-hero ml-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-hero ml-hero--inner"><!-- wp:group {"className":"ml-window-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-window-wrap"><!-- wp:group {"className":"ml-window ml-window--inner sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ml-window ml-window--inner sp-parallax"><!-- wp:group {"className":"sp-parallax__layer ml-layer ml-base","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer ml-layer ml-base"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-layer__img"} -->
<figure class="wp-block-image size-full ml-layer__img"><img src="<?php echo michikusa_lodge_img( 'p09-trunk-road.webp' ); ?>" alt="<?php echo michikusa_lodge_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"sp-parallax__layer ml-layer ml-exposure","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer ml-layer ml-exposure"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-layer__img"} -->
<figure class="wp-block-image size-full ml-layer__img"><img src="<?php echo michikusa_lodge_img( 'p03-night-clerk.webp' ); ?>" alt="<?php echo michikusa_lodge_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:html -->
<svg class="ml-grain" aria-hidden="true" focusable="false" width="100%" height="100%"><filter id="ml-noise"><feTurbulence type="fractalNoise" baseFrequency=".8" numOctaves="2" stitchTiles="stitch"/><feColorMatrix type="saturate" values="0"/></filter><rect width="100%" height="100%" filter="url(#ml-noise)"/></svg>
<!-- /wp:html --><!-- wp:group {"className":"ml-scrim","layout":{"type":"default"}} -->
<div class="wp-block-group ml-scrim"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
