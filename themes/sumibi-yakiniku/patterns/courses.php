<?php
/**
 * Title: Courses: tab strip over three cards with price plates
 * Slug: sumibi-yakiniku/courses
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: The course heading on blush, the tab strip, then a white area with three square photographs, each carrying a docked white price plate, a small name line above and outline pill tags below.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-courses","layout":{"type":"default"}} -->
<section class="wp-block-group sy-courses" id="courses"><!-- wp:paragraph {"className":"sy-label sy-label--r sp-reveal sp-reveal--up"} -->
<p class="sy-label sy-label--r sp-reveal sp-reveal--up"><?php echo esc_html( sumibi_yakiniku_t( 'courses_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-courses__head","layout":{"type":"default"}} -->
<div class="wp-block-group sy-courses__head"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'courses_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-lede"} -->
<p class="sy-lede"><?php echo esc_html( sumibi_yakiniku_t( 'courses_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"sumibi-yakiniku/tab-strip"} /-->

<!-- wp:group {"className":"sy-courses__area","layout":{"type":"default"}} -->
<div class="wp-block-group sy-courses__area"><!-- wp:group {"className":"sy-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cards sp-stagger"><!-- wp:group {"className":"sy-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sy-card__meta"} -->
<p class="sy-card__meta"><?php echo esc_html( sumibi_yakiniku_t( 'c1_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sy-card__name"} -->
<h3 class="wp-block-heading sy-card__name"><?php echo esc_html( sumibi_yakiniku_t( 'c1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sy-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-card__img"} -->
<figure class="wp-block-image size-full sy-card__img"><img src="<?php echo sumibi_yakiniku_img( 'p07-evening-course.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--card","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--card"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'c1_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_per' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'c1_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'c1_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-card__p"} -->
<p class="sy-card__p"><?php echo esc_html( sumibi_yakiniku_t( 'c1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sy-card__meta"} -->
<p class="sy-card__meta"><?php echo esc_html( sumibi_yakiniku_t( 'c2_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sy-card__name"} -->
<h3 class="wp-block-heading sy-card__name"><?php echo esc_html( sumibi_yakiniku_t( 'c2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sy-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-card__img"} -->
<figure class="wp-block-image size-full sy-card__img"><img src="<?php echo sumibi_yakiniku_img( 'p08-butcher-cuts.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--card","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--card"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'c2_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_per' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'c2_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'c2_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-card__p"} -->
<p class="sy-card__p"><?php echo esc_html( sumibi_yakiniku_t( 'c2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sy-card__meta"} -->
<p class="sy-card__meta"><?php echo esc_html( sumibi_yakiniku_t( 'c3_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sy-card__name"} -->
<h3 class="wp-block-heading sy-card__name"><?php echo esc_html( sumibi_yakiniku_t( 'c3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sy-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-card__img"} -->
<figure class="wp-block-image size-full sy-card__img"><img src="<?php echo sumibi_yakiniku_img( 'p09-ribeye-coals.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--card","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--card"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'c3_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_per' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'c3_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'c3_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-card__p"} -->
<p class="sy-card__p"><?php echo esc_html( sumibi_yakiniku_t( 'c3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-more"} -->
<p class="sy-more"><a href="<?php echo esc_url( home_url( '/groups/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'courses_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
