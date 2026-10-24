<?php
/**
 * Title: Home: look-up band
 * Slug: hozen-facilities/front-band
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Full-bleed look-up photograph of a white roof edge with the tagline and a vertical Scroll label; the photograph moves slightly as you scroll.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-roof-edge.webp' ) ); ?>","dimRatio":0,"minHeight":800,"minHeightUnit":"px","isDark":false,"align":"full","className":"hz-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light hz-band sp-parallax" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_h2' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-roof-edge.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"hz-band__tag"} -->
<p class="hz-band__tag"><?php echo esc_html( hozen_facilities_t( 'band_tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-band__scroll"} -->
<p class="hz-band__scroll"><span><?php echo esc_html( hozen_facilities_t( 'band_scroll' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
