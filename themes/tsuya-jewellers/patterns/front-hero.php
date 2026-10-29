<?php
/**
 * Title: Home: framed photograph and caption strip
 * Slug: tsuya-jewellers/front-hero
 * Categories: tsuya-jewellers
 * Keywords: jeweller, jewellery, store
 * Viewport Width: 1440
 * Description: A low-key photograph in a window of ground colour, an outlined monogram, and a flat strip below with a brass slogan and a 500 px paragraph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ts-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ts-hero"><!-- wp:group {"className":"ts-hero__frame sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ts-hero__frame sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-ring-tray.webp' ) ); ?>" alt="<?php echo esc_attr( tsuya_jewellers_t( 'ad03bfa2c' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<p class="ts-hero__mark"><a href="/" aria-label="<?php echo esc_attr( tsuya_jewellers_t( 'a2b7c4d59' ) ); ?>"><svg width="33" height="49" viewBox="0 0 33 49" fill="none" aria-hidden="true" focusable="false"><rect x="0.5" y="0.5" width="32" height="48" stroke="#C9A56B" stroke-width="1"/><path d="M9.5 17.5h14M16.5 17.5v15" stroke="#C9A56B" stroke-width="1"/></svg></a></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ts-hero__strip","layout":{"type":"default"}} -->
<div class="wp-block-group ts-hero__strip"><!-- wp:paragraph {"className": "ts-hero__slogan"} -->
<p class="ts-hero__slogan"><?php echo wp_kses_post( tsuya_jewellers_t( 'k4c3fd8ef' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ts-hero__text"} -->
<p class="ts-hero__text"><?php echo wp_kses_post( tsuya_jewellers_t( 'kb334b793' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
