<?php
/**
 * Title: Page: Courses
 * Slug: kosame-hotpot/page-courses
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Inserter: no
 * Description: Photo stage with three photographs, the seven-row price table, five plate rows, the sauce bar, the finish, two link boxes and the booking frame.
 */
?>
<!-- wp:group {"className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split"><!-- wp:group {"className":"ks-stage ks-stage--n3","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage ks-stage--n3"><!-- wp:group {"className":"ks-stage__slides","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--1"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--1"><img src="<?php echo kosame_hotpot_img( 'set-course.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ks-stage__more" aria-hidden="true"><figure class="ks-stage__slide ks-stage__slide--2"><img src="<?php echo kosame_hotpot_img( 'beef-plate.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p02' ); ?>"/></figure><figure class="ks-stage__slide ks-stage__slide--3"><img src="<?php echo kosame_hotpot_img( 'vegetable-platter.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p04' ); ?>"/></figure></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ks-stage__scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:html -->
<div class="ks-stage__dots" aria-hidden="true"><span class="ks-dot ks-dot--1"></span><span class="ks-dot ks-dot--2"></span><span class="ks-dot ks-dot--3"></span></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--a"} -->
<p class="ks-stage__phrase ks-stage__phrase--a"><?php echo esc_html( kosame_hotpot_t( 'phrase_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--b"} -->
<p class="ks-stage__phrase ks-stage__phrase--b"><?php echo esc_html( kosame_hotpot_t( 'phrase_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-col ks-col--inner","layout":{"type":"default"}} -->
<div class="wp-block-group ks-col ks-col--inner"><!-- wp:group {"anchor":"top","className":"ks-pagehead","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group ks-pagehead"><!-- wp:paragraph {"className":"ks-pagehead__kicker"} -->
<p class="ks-pagehead__kicker"><?php echo esc_html( kosame_hotpot_t( 'courses_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-pagehead__h1"} -->
<h1 class="wp-block-heading ks-pagehead__h1"><?php echo esc_html( kosame_hotpot_t( 'courses_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-pagehead__lead"} -->
<p class="ks-pagehead__lead"><?php echo esc_html( kosame_hotpot_t( 'courses_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"sets","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="sets" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_vl_sets' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_vt_sets' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-tablewrap","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tablewrap"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:table {"className":"ks-prices"} -->
<figure class="wp-block-table ks-prices"><table><tbody><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_garden' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_garden_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_garden_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_pork' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_pork_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_pork_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_beef' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_beef_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_beef_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_seafood' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_seafood_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_seafood_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_marbled' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_marbled_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_marbled_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_extra' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_extra_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_extra_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'pr_finish' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_finish_d' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'pr_finish_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-small"} -->
<p class="ks-small"><?php echo esc_html( kosame_hotpot_t( 'courses_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"anchor":"plates","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="plates" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_vl_plates' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_vt_plates' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_plates_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-rows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rows sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--plate","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--plate"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'pr_garden' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__d"} -->
<p class="ks-row__d"><?php echo esc_html( kosame_hotpot_t( 'courses_plate_0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--plate","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--plate"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'pr_pork' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__d"} -->
<p class="ks-row__d"><?php echo esc_html( kosame_hotpot_t( 'courses_plate_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--plate","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--plate"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'pr_beef' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__d"} -->
<p class="ks-row__d"><?php echo esc_html( kosame_hotpot_t( 'courses_plate_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--plate","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--plate"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'pr_seafood' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__d"} -->
<p class="ks-row__d"><?php echo esc_html( kosame_hotpot_t( 'courses_plate_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--plate","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--plate"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'pr_marbled' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__d"} -->
<p class="ks-row__d"><?php echo esc_html( kosame_hotpot_t( 'courses_plate_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-photo sp-parallax sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-photo sp-parallax sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kosame_hotpot_img( 'sauce-bar.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_sauce_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"anchor":"finish","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="finish" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_vl_finish' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_vt_finish' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:group {"className":"ks-photo sp-parallax sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-photo sp-parallax sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kosame_hotpot_img( 'the-finish.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'courses_finish_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-linkbox sp-reveal sp-reveal--up"} -->
<p class="ks-linkbox sp-reveal sp-reveal--up"><a href="<?php echo kosame_hotpot_url( '/private-rooms/' ); ?>"><?php echo kosame_hotpot_lines( 'lb_rooms' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-linkbox sp-reveal sp-reveal--up"} -->
<p class="ks-linkbox sp-reveal sp-reveal--up"><a href="<?php echo kosame_hotpot_url( '/visit/' ); ?>"><?php echo kosame_hotpot_lines( 'lb_visit' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kosame-hotpot/book-frame"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
