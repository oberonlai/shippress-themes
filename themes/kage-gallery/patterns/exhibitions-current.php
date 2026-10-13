<?php
/**
 * Title: Exhibitions: now on view
 * Slug: kage-gallery/exhibitions-current
 * Categories: kage-gallery
 * Keywords: gallery, exhibition, current
 * Viewport Width: 1440
 * Description: The current exhibition (synced) with an installation view and two works with wall labels.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kgl-section kgl-section--current","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kgl-section kgl-section--current"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:pattern {"slug":"kage-gallery/current"} /-->

<!-- wp:group {"className":"kgl-views","layout":{"type":"default"}} -->
<div class="wp-block-group kgl-views"><!-- wp:image {"sizeSlug":"large","className":"is-style-hung kgl-install"} -->
<figure class="wp-block-image size-large is-style-hung kgl-install"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gallery-interior.jpg' ) ); ?>" alt="A long white gallery room with large pale paintings on both walls, a low black bench in the middle and daylight from high windows"/><figcaption class="wp-element-caption">Installation view, <em>The Weight of Pale Light</em>, Room one</figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kgl-pair","layout":{"type":"default"}} -->
<div class="wp-block-group kgl-pair"><!-- wp:group {"className":"kgl-work","layout":{"type":"default"}} -->
<div class="wp-block-group kgl-work"><!-- wp:image {"sizeSlug":"large","className":"is-style-hung"} -->
<figure class="wp-block-image size-large is-style-hung"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/artwork-01.jpg' ) ); ?>" alt="A tall pale painting in two stacked grey fields, hung alone on a white wall"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-wall-label"} -->
<p class="is-style-wall-label">Daichi Morimoto &#183; <em>Two Rooms of Light</em> &#183; 2025 &#183; Oil on linen &#183; 162 &#215; 112 cm</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kgl-work","layout":{"type":"default"}} -->
<div class="wp-block-group kgl-work"><!-- wp:image {"sizeSlug":"large","className":"is-style-hung"} -->
<figure class="wp-block-image size-large is-style-hung"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/artwork-03.jpg' ) ); ?>" alt="A square painting of overlapping pale grey planes crossed by one fine diagonal line"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-wall-label"} -->
<p class="is-style-wall-label">Daichi Morimoto &#183; <em>Fold, Grey</em> &#183; 2026 &#183; Oil and graphite on linen &#183; 130 &#215; 130 cm</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
