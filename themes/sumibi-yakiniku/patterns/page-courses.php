<?php
/**
 * Title: Page: Courses
 * Slug: sumibi-yakiniku/page-courses
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Courses inner page: dark opener band, the tab strip, four course cards with price plates, the price table and course details.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-open","layout":{"type":"default"}} -->
<section class="wp-block-group sy-open"><!-- wp:paragraph {"className":"sy-label sy-label--l"} -->
<p class="sy-label sy-label--l"><?php echo esc_html( sumibi_yakiniku_t( 'co_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo sumibi_yakiniku_img( 'p09-ribeye-coals.webp' ); ?>","dimRatio":50,"overlayColor":"charcoal","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.55},"contentPosition":"center left","className":"sy-band sy-band--page sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left sy-band sy-band--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sumibi_yakiniku_a( 'alt_p09' ); ?>" src="<?php echo sumibi_yakiniku_img( 'p09-ribeye-coals.webp' ); ?>" style="object-position:50% 55%" data-object-fit="cover" data-object-position="50% 55%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"className":"sy-open__h","level":1} -->
<h1 class="wp-block-heading sy-open__h"><?php echo esc_html( sumibi_yakiniku_t( 'co_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-open__k"} -->
<p class="sy-open__k"><?php echo esc_html( sumibi_yakiniku_t( 'co_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","className":"sy-tabs","layout":{"type":"default"}} -->
<nav class="wp-block-group sy-tabs" aria-label="<?php echo sumibi_yakiniku_a( 'tabs_label' ); ?>"><!-- wp:paragraph {"className":"sy-tab sy-tab--on"} -->
<p class="sy-tab sy-tab--on"><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_courses' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/cuts-and-drinks/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_cuts' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/groups/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_groups' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_reserve' ) ); ?></a></p>
<!-- /wp:paragraph --></nav>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-courses__area","layout":{"type":"default"}} -->
<div class="wp-block-group sy-courses__area"><!-- wp:paragraph {"className":"sy-lede"} -->
<p class="sy-lede"><?php echo esc_html( sumibi_yakiniku_t( 'co_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-cards sy-cards--four sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cards sy-cards--four sp-stagger"><!-- wp:group {"className":"sy-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sy-card__meta"} -->
<p class="sy-card__meta"><?php echo esc_html( sumibi_yakiniku_t( 'c1_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sy-card__name","level":3} -->
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

<!-- wp:heading {"className":"sy-card__name","level":3} -->
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

<!-- wp:heading {"className":"sy-card__name","level":3} -->
<h3 class="wp-block-heading sy-card__name"><?php echo esc_html( sumibi_yakiniku_t( 'c3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sy-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-card__img"} -->
<figure class="wp-block-image size-full sy-card__img"><img src="<?php echo sumibi_yakiniku_img( 'p02-tongs-turn.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p02' ); ?>"/></figure>
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
<!-- /wp:group -->

<!-- wp:group {"className":"sy-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sy-card__meta"} -->
<p class="sy-card__meta"><?php echo esc_html( sumibi_yakiniku_t( 'c4_meta' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sy-card__name","level":3} -->
<h3 class="wp-block-heading sy-card__name"><?php echo esc_html( sumibi_yakiniku_t( 'c4_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"sy-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-card__img"} -->
<figure class="wp-block-image size-full sy-card__img"><img src="<?php echo sumibi_yakiniku_img( 'p03-group-toast.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--card","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--card"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'c4_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_per' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'c4_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'c4_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-card__p"} -->
<p class="sy-card__p"><?php echo esc_html( sumibi_yakiniku_t( 'c4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg"><!-- wp:group {"className":"sy-pg__in sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__in sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'co_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'co_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"sumibi-yakiniku/prices"} /-->

<!-- wp:group {"tagName":"section","className":"sy-pg","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg"><!-- wp:group {"className":"sy-pg__in sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__in sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'co_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'co_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-more"} -->
<p class="sy-more"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'more_reserve' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
