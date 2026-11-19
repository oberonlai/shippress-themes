<?php
/**
 * Title: Closing band: ridgeline-cut photograph
 * Slug: yuzuriha-retreat/ridge-close
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Pale band with a closing sentence on the left and a blue-hour photograph cut to a mountain ridge rising from the right edge; a white back-to-top tab sits on its lower edge.
 */
?>
<!-- wp:group {"className":"yr-ridgeband sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yr-ridgeband sp-parallax"><!-- wp:group {"className":"yr-ridge__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-ridge__text"><!-- wp:paragraph {"className":"yr-ridge__t"} -->
<p class="yr-ridge__t"><?php echo esc_html( yuzuriha_retreat_t( 'ridge_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-more yr-more--left"} -->
<p class="yr-more yr-more--left"><a href="<?php echo yuzuriha_retreat_url( '/calendar/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'ridge_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-ridge"} -->
<figure class="wp-block-image size-full yr-ridge"><img src="<?php echo yuzuriha_retreat_img( 'p12-lodge-blue-hour.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p12' ); ?>" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<a class="yr-totop" href="#top"><?php echo esc_html( yuzuriha_retreat_t( 'totop' ) ); ?> <?php echo yuzuriha_retreat_icon( 'up', 'yr-totop__i' ); ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->
