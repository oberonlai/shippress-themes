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
<figure class="wp-block-image size-full kc-mosaic__bgimg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/canopy-blur.webp' ) ); ?>" alt="<?php echo esc_attr( komorebi_cabins_t( 'a62a1ec19' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-mosaic__frame","layout":{"type":"default"}} -->
<div class="wp-block-group kc-mosaic__frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-m kc-m--fern sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full kc-m kc-m--fern sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cabin-fern.webp' ) ); ?>" alt="<?php echo esc_attr( komorebi_cabins_t( 'af2b3fe72' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( komorebi_cabins_t( 'k65219972' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-m kc-m--beech sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full kc-m kc-m--beech sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cabin-beech.webp' ) ); ?>" alt="<?php echo esc_attr( komorebi_cabins_t( 'a5db96e5c' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( komorebi_cabins_t( 'ka76429d3' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-m kc-m--cedar sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full kc-m kc-m--cedar sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cabin-cedar.webp' ) ); ?>" alt="<?php echo esc_attr( komorebi_cabins_t( 'ad233f8c9' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( komorebi_cabins_t( 'k85293bdb' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-m kc-m--hollow sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full kc-m kc-m--hollow sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cabin-hollow.webp' ) ); ?>" alt="<?php echo esc_attr( komorebi_cabins_t( 'a617b7510' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( komorebi_cabins_t( 'ka1d40d66' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kc-mosaic__vtext"} -->
<p class="kc-mosaic__vtext"><span class="kc-vline"><?php echo wp_kses_post( komorebi_cabins_t( 'kbd67f344' ) ); ?></span><span class="kc-vline"><?php echo wp_kses_post( komorebi_cabins_t( 'k2a486898' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-mosaic__link"} -->
<p class="kc-mosaic__link"><a href="#compare"><?php echo wp_kses_post( komorebi_cabins_t( 'k835c9b8b' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
