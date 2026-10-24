<?php
/**
 * Title: Home: full-bleed photo hero with info bar
 * Slug: enishi-catering/front-hero
 * Categories: enishi-catering
 * Description: Full-bleed film-grain photograph with a centred serif title, an outlined translucent pill and an info bar on the photo's bottom edge. The photograph drifts slowly (sp-parallax).
 * Viewport Width: 1440
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-banquet-hall.webp' ) ); ?>","alt":"<?php echo esc_attr( enishi_catering_t( 'alt_p01' ) ); ?>","dimRatio":30,"overlayColor":"ink","minHeight":720,"minHeightUnit":"px","contentPosition":"center center","align":"full","className":"enc-hero sp-parallax"} -->
<div class="wp-block-cover alignfull enc-hero sp-parallax" style="min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( enishi_catering_t( 'alt_p01' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-banquet-hall.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"enc-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group enc-hero__in"><!-- wp:group {"className":"enc-hero__main","layout":{"type":"default"}} -->
<div class="wp-block-group enc-hero__main"><!-- wp:heading {"level":1,"className":"enc-hero__h"} -->
<h1 class="wp-block-heading enc-hero__h"><?php echo esc_html( enishi_catering_t( 'hero_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"enc-hero__sub"} -->
<p class="enc-hero__sub"><?php echo esc_html( enishi_catering_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-pill"} -->
<p class="enc-pill"><a href="#engagement"><?php echo esc_html( enishi_catering_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"enc-info","layout":{"type":"default"}} -->
<div class="wp-block-group enc-info"><!-- wp:paragraph {"className":"enc-info__f"} -->
<p class="enc-info__f"><span class="enc-info__l"><?php echo esc_html( enishi_catering_t( 'fact1_l' ) ); ?></span> <?php echo esc_html( enishi_catering_t( 'fact1_v' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-info__f"} -->
<p class="enc-info__f"><span class="enc-info__l"><?php echo esc_html( enishi_catering_t( 'fact2_l' ) ); ?></span> <?php echo esc_html( enishi_catering_t( 'fact2_v' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-info__f"} -->
<p class="enc-info__f"><span class="enc-info__l"><?php echo esc_html( enishi_catering_t( 'fact3_l' ) ); ?></span> <?php echo esc_html( enishi_catering_t( 'fact3_v' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-info__a"} -->
<p class="enc-info__a"><a href="/contact/"><?php echo esc_html( enishi_catering_t( 'hero_enq' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
