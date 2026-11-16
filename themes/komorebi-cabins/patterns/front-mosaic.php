<?php
/**
 * Title: Home: four sizes mosaic
 * Slug: komorebi-cabins/front-mosaic
 * Categories: komorebi-cabins
 * Viewport Width: 1440
 * Description: Four overlapping photographs of the cabin sizes over a blurred beech canopy with a small vertical text column.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-mosaic sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-mosaic sp-parallax"><!-- wp:group {"className":"kc-mosaic__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kc-mosaic__bg sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-mosaic__bgimg"} -->
<figure class="wp-block-image size-full kc-mosaic__bgimg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/canopy-blur.webp' ) ); ?>" alt="Dense green beech canopy viewed from below with soft natural light filtering through leaves."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-mosaic__frame","layout":{"type":"default"}} -->
<div class="wp-block-group kc-mosaic__frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-m kc-m--fern sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full kc-m kc-m--fern sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cabin-fern.webp' ) ); ?>" alt="Interior of a small cabin with a double bed under a sloped timber ceiling."/><figcaption class="wp-element-caption">Fern · sleeps 2</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-m kc-m--beech sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full kc-m kc-m--beech sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cabin-beech.webp' ) ); ?>" alt="Timber cabin living area with a dining table, wooden staircase, and tall forest window."/><figcaption class="wp-element-caption">Beech · sleeps 4</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-m kc-m--cedar sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full kc-m kc-m--cedar sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cabin-cedar.webp' ) ); ?>" alt="Exterior of a timber cabin among cedar trees with chairs on the front porch."/><figcaption class="wp-element-caption">Cedar · sleeps 6</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-m kc-m--hollow sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full kc-m kc-m--hollow sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cabin-hollow.webp' ) ); ?>" alt="Double-height living room of the largest cabin with a long dining table and a tall window onto cedar trunks."/><figcaption class="wp-element-caption">Hollow · sleeps 8</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kc-mosaic__vtext"} -->
<p class="kc-mosaic__vtext"><span class="kc-vline">Four sizes,</span><span class="kc-vline">one way of staying.</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-mosaic__link"} -->
<p class="kc-mosaic__link"><a href="#compare">Compare the cabins →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
