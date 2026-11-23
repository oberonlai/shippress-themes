<?php
/**
 * Title: Home: the panel in use
 * Slug: zaseki-panel/front-band
 * Categories: zaseki-panel
 * Viewport Width: 1440
 * Description: Full-width photograph with a slow parallax drift and a solid caption panel bottom left.
 */
?>
<!-- wp:group {"align":"full","className":"zp-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull zp-band sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-band__img"} -->
<figure class="wp-block-image size-full zp-band__img"><img src="<?php echo zaseki_panel_img( 'floor-in-use.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_b1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"zp-band__card","layout":{"type":"default"}} -->
<div class="wp-block-group zp-band__card">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'band_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-band__p"} -->
<p class="zp-band__p"><?php echo esc_html( zaseki_panel_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
