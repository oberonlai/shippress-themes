<?php
/**
 * Title: Home: open morning
 * Slug: kesho-college/front-open
 * Categories: kesho-college
 * Keywords: hairdressing, beauty, college
 * Viewport Width: 1440
 * Description: Full-bleed salon photo with a parallax drift and a boxed call to action.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/k-13.webp' ) ); ?>","alt":"Sunlit training salon interior with rows of styling chairs facing mirrored stations.","dimRatio":0,"minHeight":640,"minHeightUnit":"px","contentPosition":"center center","anchor":"open","align":"full","className":"kc-open sp-parallax","layout":{"type":"constrained"}} -->
<div id="open" class="wp-block-cover alignfull kc-open sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kesho_college_t( 'ab1585860' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k-13.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kc-open__box sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-open__box sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kc-open__h"} -->
<h2 class="wp-block-heading kc-open__h"><?php echo wp_kses_post( kesho_college_t( 'k464d818e' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-open__date"} -->
<p class="kc-open__date"><?php echo wp_kses_post( kesho_college_t( 'kb7716cb3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-open__text"} -->
<p class="kc-open__text"><?php echo wp_kses_post( kesho_college_t( 'k63c5a4a6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kc-open__btn"} -->
<div class="wp-block-buttons kc-open__btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo wp_kses_post( kesho_college_t( 'kddb6f55c' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
