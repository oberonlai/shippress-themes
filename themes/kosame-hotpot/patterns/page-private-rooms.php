<?php
/**
 * Title: Page: Private rooms
 * Slug: kosame-hotpot/page-private-rooms
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Inserter: no
 * Description: Photo stage with three photographs, three room sections with ruled spec rows, the room rules, two photographs, three anchor link boxes and the booking frame.
 */
?>
<!-- wp:group {"className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split"><!-- wp:group {"className":"ks-stage ks-stage--n3","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage ks-stage--n3"><!-- wp:group {"className":"ks-stage__slides","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--1"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--1"><img src="<?php echo kosame_hotpot_img( 'room-long-table.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ks-stage__more" aria-hidden="true"><figure class="ks-stage__slide ks-stage__slide--2"><img src="<?php echo kosame_hotpot_img( 'room-four.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p05' ); ?>"/></figure><figure class="ks-stage__slide ks-stage__slide--3"><img src="<?php echo kosame_hotpot_img( 'dining-room-service.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p13' ); ?>"/></figure></div>
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
<p class="ks-pagehead__kicker"><?php echo esc_html( kosame_hotpot_t( 'rooms_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-pagehead__h1"} -->
<h1 class="wp-block-heading ks-pagehead__h1"><?php echo esc_html( kosame_hotpot_t( 'rooms_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-pagehead__lead"} -->
<p class="ks-pagehead__lead"><?php echo esc_html( kosame_hotpot_t( 'rooms_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"room-one","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="room-one" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_vl_room-one' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_vt_room-one' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_p_0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-rows ks-rows--spec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rows ks-rows--spec sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_guests' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_0_0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_pots' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_0_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_fee' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_0_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_notice' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_0_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"anchor":"room-two","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="room-two" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_vl_room-two' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_vt_room-two' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_p_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-rows ks-rows--spec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rows ks-rows--spec sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_guests' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_1_0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_pots' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_1_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_fee' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_1_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_notice' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_1_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-photo sp-parallax sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-photo sp-parallax sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kosame_hotpot_img( 'room-celebration.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"anchor":"room-three","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="room-three" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_vl_room-three' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_vt_room-three' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_p_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-rows ks-rows--spec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rows ks-rows--spec sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_guests' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_2_0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_pots' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_2_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_fee' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_2_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_notice' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_sp_2_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"anchor":"how-to-book-a-room","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="how-to-book-a-room" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_vl_how-to-book-a-room' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_vt_how-to-book-a-room' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'rooms_how_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-rows ks-rows--spec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rows ks-rows--spec sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_request' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_rules_0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_seats' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_rules_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_fee2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_rules_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_cancel' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'rooms_rules_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-photo sp-parallax sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-photo sp-parallax sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kosame_hotpot_img( 'before-doors.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-linkbox sp-reveal sp-reveal--up"} -->
<p class="ks-linkbox sp-reveal sp-reveal--up"><a href="<?php echo kosame_hotpot_url( '/private-rooms/#room-one' ); ?>"><?php echo kosame_hotpot_lines( 'lb_room1' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-linkbox sp-reveal sp-reveal--up"} -->
<p class="ks-linkbox sp-reveal sp-reveal--up"><a href="<?php echo kosame_hotpot_url( '/private-rooms/#room-two' ); ?>"><?php echo kosame_hotpot_lines( 'lb_room2' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-linkbox sp-reveal sp-reveal--up"} -->
<p class="ks-linkbox sp-reveal sp-reveal--up"><a href="<?php echo kosame_hotpot_url( '/private-rooms/#room-three' ); ?>"><?php echo kosame_hotpot_lines( 'lb_room3' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kosame-hotpot/book-frame"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
