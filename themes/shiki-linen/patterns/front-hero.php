<?php
/**
 * Title: Home: hero
 * Slug: shiki-linen/front-hero
 * Categories: shiki-linen
 * Keywords: linen, bedding, shop
 * Viewport Width: 1440
 * Description: Three equal framed photographs under the header, a quiet statement and one running stitch.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sl-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sl-hero">
<!-- wp:group {"className":"sl-hero__panels","layout":{"type":"default"}} -->
<div class="wp-block-group sl-hero__panels">
<!-- wp:group {"className":"sl-panel sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sl-panel sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-folding.webp' ) ); ?>" alt="<?php echo esc_attr( shiki_linen_t( 'ae5250c85' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sl-panel sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sl-panel sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h2-pinch.webp' ) ); ?>" alt="<?php echo esc_attr( shiki_linen_t( 'acd85bb3d' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sl-panel sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sl-panel sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":""} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3-shelf.webp' ) ); ?>" alt="<?php echo esc_attr( shiki_linen_t( 'a8970bbba' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sl-stitch sl-stitch--a" aria-hidden="true"><div></div></div>
<!-- /wp:html -->

<!-- wp:group {"className":"sl-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group sl-hero__text">
<!-- wp:heading {"level":1,"className":"sl-hero__title"} -->
<h1 class="wp-block-heading sl-hero__title"><?php echo wp_kses_post( shiki_linen_t( 'kc39dcaf0' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sl-lead"} -->
<p class="sl-lead"><?php echo wp_kses_post( shiki_linen_t( 'kae6b135c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
