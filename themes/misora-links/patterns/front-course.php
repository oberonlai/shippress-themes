<?php
/**
 * Title: Home: the course
 * Slug: misora-links/front-course
 * Categories: misora-links
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the course with four count-up figures.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-course-wide.webp' ) ); ?>","alt":"<?php echo esc_attr( misora_links_t( 'alt_p08' ) ); ?>","dimRatio":40,"customOverlayColor":"#201F1D","minHeight":80,"minHeightUnit":"vh","contentPosition":"bottom left","className":"ml-course sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left ml-course sp-parallax" style="min-height:80vh"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( misora_links_t( 'alt_p08' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-course-wide.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#201F1D"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ml-course__in","layout":{"type":"default"}} -->
<div class="wp-block-group ml-course__in"><!-- wp:paragraph {"className":"ml-label"} -->
<p class="ml-label"><?php echo esc_html( misora_links_t( 'course_a' ) ); ?> / <em><?php echo esc_html( misora_links_t( 'course_b' ) ); ?></em></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"ml-course__h2"} -->
<h2 class="wp-block-heading ml-course__h2"><?php echo esc_html( misora_links_t( 'course_h2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-course__text"} -->
<p class="ml-course__text"><?php echo esc_html( misora_links_t( 'course_body' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"ml-figs","layout":{"type":"default"}} -->
<div class="wp-block-group ml-figs"><!-- wp:group {"className":"ml-fig","layout":{"type":"default"}} -->
<div class="wp-block-group ml-fig"><!-- wp:paragraph {"className":"ml-fig__n sp-reveal sp-count"} -->
<p class="ml-fig__n sp-reveal sp-count">18</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-fig__l"} -->
<p class="ml-fig__l"><?php echo esc_html( misora_links_t( 'fg_holes' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-fig","layout":{"type":"default"}} -->
<div class="wp-block-group ml-fig"><!-- wp:paragraph {"className":"ml-fig__n sp-reveal sp-count"} -->
<p class="ml-fig__n sp-reveal sp-count">70</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-fig__l"} -->
<p class="ml-fig__l"><?php echo esc_html( misora_links_t( 'fg_par' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-fig","layout":{"type":"default"}} -->
<div class="wp-block-group ml-fig"><!-- wp:paragraph {"className":"ml-fig__n sp-reveal sp-count"} -->
<p class="ml-fig__n sp-reveal sp-count">5,980<small> m</small></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-fig__l"} -->
<p class="ml-fig__l"><?php echo esc_html( misora_links_t( 'fg_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-fig","layout":{"type":"default"}} -->
<div class="wp-block-group ml-fig"><!-- wp:paragraph {"className":"ml-fig__n sp-reveal sp-count"} -->
<p class="ml-fig__n sp-reveal sp-count">640</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-fig__l"} -->
<p class="ml-fig__l"><?php echo esc_html( misora_links_t( 'fg_mem' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"ml-textlink"} -->
<p class="ml-textlink"><a href="/course/"><?php echo esc_html( misora_links_t( 'course_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
