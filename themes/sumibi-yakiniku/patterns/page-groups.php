<?php
/**
 * Title: Page: Groups and Rooms
 * Slug: sumibi-yakiniku/page-groups
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Groups & Rooms inner page: opener band, tab strip, a sticky photograph with a headcount plate beside three rooms, the group rules.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-open","layout":{"type":"default"}} -->
<section class="wp-block-group sy-open"><!-- wp:paragraph {"className":"sy-label sy-label--l"} -->
<p class="sy-label sy-label--l"><?php echo esc_html( sumibi_yakiniku_t( 'gr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo sumibi_yakiniku_img( 'p10-long-room.webp' ); ?>","dimRatio":50,"overlayColor":"charcoal","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.55},"contentPosition":"center left","className":"sy-band sy-band--page sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left sy-band sy-band--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sumibi_yakiniku_a( 'alt_p10' ); ?>" src="<?php echo sumibi_yakiniku_img( 'p10-long-room.webp' ); ?>" style="object-position:50% 55%" data-object-fit="cover" data-object-position="50% 55%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"className":"sy-open__h","level":1} -->
<h1 class="wp-block-heading sy-open__h"><?php echo esc_html( sumibi_yakiniku_t( 'gr_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-open__k"} -->
<p class="sy-open__k"><?php echo esc_html( sumibi_yakiniku_t( 'gr_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","className":"sy-tabs","layout":{"type":"default"}} -->
<nav class="wp-block-group sy-tabs" aria-label="<?php echo sumibi_yakiniku_a( 'tabs_label' ); ?>"><!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_courses' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/cuts-and-drinks/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_cuts' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab sy-tab--on"} -->
<p class="sy-tab sy-tab--on"><a href="<?php echo esc_url( home_url( '/groups/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_groups' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_reserve' ) ); ?></a></p>
<!-- /wp:paragraph --></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg"><!-- wp:group {"className":"sy-groups__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sy-groups__grid"><!-- wp:group {"className":"sy-groups__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-groups__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-groups__img"} -->
<figure class="wp-block-image size-full sy-groups__img"><img src="<?php echo sumibi_yakiniku_img( 'demo/p13-long-table.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--groups","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--groups"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'gr_plate_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_guests' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-groups__text","layout":{"type":"default"}} -->
<div class="wp-block-group sy-groups__text"><!-- wp:paragraph {"className":"sy-lede"} -->
<p class="sy-lede"><?php echo esc_html( sumibi_yakiniku_t( 'gr_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-rooms sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sy-rooms sp-stagger"><!-- wp:group {"className":"sy-room sy-room--ph sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-room sy-room--ph sp-reveal sp-reveal--up"><!-- wp:group {"className":"sy-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-card__img"} -->
<figure class="wp-block-image size-full sy-card__img"><img src="<?php echo sumibi_yakiniku_img( 'p14-hearth-room.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--card","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--card"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_guests' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"sy-room__name","level":3} -->
<h3 class="wp-block-heading sy-room__name"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-room__p"} -->
<p class="sy-room__p"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm1_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-room sy-room--ph sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-room sy-room--ph sp-reveal sp-reveal--up"><!-- wp:group {"className":"sy-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-card__img"} -->
<figure class="wp-block-image size-full sy-card__img"><img src="<?php echo sumibi_yakiniku_img( 'p03-group-toast.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--card","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--card"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_guests' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"sy-room__name","level":3} -->
<h3 class="wp-block-heading sy-room__name"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-room__p"} -->
<p class="sy-room__p"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm2_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-room sy-room--ph sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-room sy-room--ph sp-reveal sp-reveal--up"><!-- wp:group {"className":"sy-card__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sy-card__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-card__img"} -->
<figure class="wp-block-image size-full sy-card__img"><img src="<?php echo sumibi_yakiniku_img( 'p17-grill-counter.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sy-plate sy-plate--card","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--card"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'plate_guests' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"sy-room__name","level":3} -->
<h3 class="wp-block-heading sy-room__name"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-room__p"} -->
<p class="sy-room__p"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-pills","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pills"><!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_pill1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-pill"} -->
<p class="sy-pill"><?php echo esc_html( sumibi_yakiniku_t( 'rm3_pill2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-note"} -->
<p class="sy-note"><?php echo esc_html( sumibi_yakiniku_t( 'groups_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg sy-pg--white","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg sy-pg--white"><!-- wp:group {"className":"sy-cols2","layout":{"type":"default"}} -->
<div class="wp-block-group sy-cols2"><!-- wp:group {"className":"sy-pg__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__col sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h3"} -->
<h2 class="wp-block-heading sy-h3"><?php echo esc_html( sumibi_yakiniku_t( 'gr_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'gr_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-pg__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__col sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h3"} -->
<h2 class="wp-block-heading sy-h3"><?php echo esc_html( sumibi_yakiniku_t( 'gr_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 'gr_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-more"} -->
<p class="sy-more"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'more_reserve' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
