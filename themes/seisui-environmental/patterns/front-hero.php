<?php
/**
 * Title: Home: photograph cropped by the right edge, headline bottom right
 * Slug: seisui-environmental/front-hero
 * Categories: seisui-environmental
 * Keywords: home
 * Viewport Width: 1440
 * Description: First screen: a wide film-grain river photograph that starts at a third of the width and runs off the right edge, a small eyebrow at its left and, below it, the lead with two buttons and a right-aligned two-line headline.
 */
$ss = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"className":"ss-hero","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-hero"><!-- wp:group {"className":"ss-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group ss-hero__top"><!-- wp:group {"className":"ss-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group ss-hero__side"><!-- wp:paragraph {"className":"ss-eyebrow"} -->
<p class="ss-eyebrow"><?php echo wp_kses_post( seisui_environmental_t( 'k0e400e56' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-hero__photo"} -->
<figure class="wp-block-image size-full ss-hero__photo"><img src="<?php echo esc_url( $ss . 'p01.webp' ); ?>" alt="<?php echo esc_attr( seisui_environmental_t( 'a2d4cea3e' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-hero__bottom","align":"wide","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignwide ss-hero__bottom"><!-- wp:group {"className":"ss-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group ss-hero__text"><!-- wp:paragraph {"className":"ss-lead"} -->
<p class="ss-lead"><?php echo wp_kses_post( seisui_environmental_t( 'k376d299a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ss-hero__btns"} -->
<div class="wp-block-buttons ss-hero__btns"><!-- wp:button {} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php echo wp_kses_post( seisui_environmental_t( 'k7e281dce' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="#process"><?php echo wp_kses_post( seisui_environmental_t( 'kac3ba60f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-hero__head"><!-- wp:heading {"level":1,"className":"ss-hero__title","align":"right"} -->
<h1 class="wp-block-heading has-text-align-right ss-hero__title"><?php echo wp_kses_post( seisui_environmental_t( 'k92077f8d' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
