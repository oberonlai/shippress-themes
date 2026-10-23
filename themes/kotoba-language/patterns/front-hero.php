<?php
/**
 * Title: Home: split hero
 * Slug: kotoba-language/front-hero
 * Categories: kotoba-language
 * Description: Photograph left, text right in the top half; cropped Kotoba. wordmark and intake pill in the bottom half.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kl-hero","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-hero"><!-- wp:group {"className":"kl-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group kl-hero__top"><!-- wp:group {"className":"kl-hero__photo sp-parallax","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group kl-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-hero__img"} -->
<figure class="wp-block-image size-full kl-hero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s1.webp' ) ); ?>" alt="<?php echo esc_attr( kotoba_language_t( 'alt_s1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kl-hero__text"><!-- wp:paragraph {"className":"kl-label"} -->
<p class="kl-label"><?php echo esc_html( kotoba_language_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kl-hero__h"} -->
<h1 class="wp-block-heading kl-hero__h"><?php echo esc_html( kotoba_language_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-hero__p"} -->
<p class="kl-hero__p"><?php echo esc_html( kotoba_language_t( 'hero_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-textlink"} -->
<p class="kl-textlink"><a href="#paths"><?php echo esc_html( kotoba_language_t( 'hero_cta' ) ); ?> ↓</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-hero__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group kl-hero__bottom"><!-- wp:html -->
<div class="kl-word kl-word--bottom" aria-hidden="true"><p class="kl-word__t">Kotoba.</p></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kl-pill","layout":{"type":"default"}} -->
<div class="wp-block-group kl-pill"><!-- wp:paragraph {"className":"kl-pill__l"} -->
<p class="kl-pill__l"><?php echo esc_html( kotoba_language_t( 'pill_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-pill__d"} -->
<p class="kl-pill__d"><a href="/fees-intake/"><?php echo esc_html( kotoba_language_t( 'pill_d1' ) ); ?></a><a href="/fees-intake/"><?php echo esc_html( kotoba_language_t( 'pill_d2' ) ); ?></a><a href="/fees-intake/"><?php echo esc_html( kotoba_language_t( 'pill_d3' ) ); ?></a><a href="/fees-intake/"><?php echo esc_html( kotoba_language_t( 'pill_d4' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->