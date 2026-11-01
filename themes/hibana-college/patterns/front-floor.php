<?php
/**
 * Title: Home: floor band with parallax photograph and four figures
 * Slug: hibana-college/front-floor
 * Categories: hibana-college
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the empty booth aisle with four figures: 12 students, 2 instructors, 24 booths, 728 hours.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/f1.webp' ) ); ?>","dimRatio":40,"overlayColor":"base","isUserOverlayColor":true,"minHeight":640,"minHeightUnit":"px","contentPosition":"center center","align":"full","className":"hc-floor sp-parallax"} -->
<div class="wp-block-cover alignfull hc-floor sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hibana_college_t( 'alt_f1' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/f1.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:heading {"level":2,"className":"screen-reader-text"} -->
<h2 class="wp-block-heading screen-reader-text"><?php echo wp_kses_post( hibana_college_t( 'floor_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-figs","layout":{"type":"default"}} -->
<div class="wp-block-group hc-figs">
<!-- wp:group {"className":"hc-fig","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fig">
<!-- wp:paragraph {"className":"hc-fig__n"} -->
<p class="hc-fig__n"><?php echo wp_kses_post( hibana_college_t( 'fig1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fig__l"} -->
<p class="hc-fig__l"><?php echo wp_kses_post( hibana_college_t( 'fig1_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fig","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fig">
<!-- wp:paragraph {"className":"hc-fig__n"} -->
<p class="hc-fig__n"><?php echo wp_kses_post( hibana_college_t( 'fig2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fig__l"} -->
<p class="hc-fig__l"><?php echo wp_kses_post( hibana_college_t( 'fig2_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fig","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fig">
<!-- wp:paragraph {"className":"hc-fig__n"} -->
<p class="hc-fig__n"><?php echo wp_kses_post( hibana_college_t( 'fig3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fig__l"} -->
<p class="hc-fig__l"><?php echo wp_kses_post( hibana_college_t( 'fig3_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fig","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fig">
<!-- wp:paragraph {"className":"hc-fig__n"} -->
<p class="hc-fig__n"><?php echo wp_kses_post( hibana_college_t( 'fig4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fig__l"} -->
<p class="hc-fig__l"><?php echo wp_kses_post( hibana_college_t( 'fig4_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-floor__p"} -->
<p class="hc-floor__p"><?php echo wp_kses_post( hibana_college_t( 'floor_p' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
