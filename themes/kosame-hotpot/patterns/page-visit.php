<?php
/**
 * Title: Page: Visit
 * Slug: kosame-hotpot/page-visit
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Inserter: no
 * Description: Photo stage with two photographs, the address table on a wash, getting here with a parallax photograph, opening hours and the booking frame.
 */
?>
<!-- wp:group {"className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split"><!-- wp:group {"className":"ks-stage ks-stage--n2","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage ks-stage--n2"><!-- wp:group {"className":"ks-stage__slides","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--1"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--1"><img src="<?php echo kosame_hotpot_img( 'storefront-rain.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ks-stage__more" aria-hidden="true"><figure class="ks-stage__slide ks-stage__slide--2"><img src="<?php echo kosame_hotpot_img( 'dining-room-service.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p13' ); ?>"/></figure></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ks-stage__scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:html -->
<div class="ks-stage__dots" aria-hidden="true"><span class="ks-dot ks-dot--1"></span><span class="ks-dot ks-dot--2"></span></div>
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
<p class="ks-pagehead__kicker"><?php echo esc_html( kosame_hotpot_t( 'visit_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-pagehead__h1"} -->
<h1 class="wp-block-heading ks-pagehead__h1"><?php echo esc_html( kosame_hotpot_t( 'visit_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-pagehead__lead"} -->
<p class="ks-pagehead__lead"><?php echo esc_html( kosame_hotpot_t( 'visit_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-wash","layout":{"type":"default"}} -->
<div class="wp-block-group ks-wash"><!-- wp:group {"anchor":"location","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="location" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_vl_location' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_vt_location' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-nameline sp-reveal sp-reveal--up"} -->
<p class="ks-nameline sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-tablewrap ks-tablewrap--info","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tablewrap ks-tablewrap--info"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:table {"className":"ks-info"} -->
<figure class="wp-block-table ks-info"><table><tbody><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_addr' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_addr_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_dinner' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_dinner_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_lunch' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_lunch_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_closed' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_closed_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_desk' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_desk_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_phone' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_phone_v' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_loc_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"getting-here","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="getting-here" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_vl_getting-here' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_vt_getting-here' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_here_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-photo sp-parallax sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-photo sp-parallax sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kosame_hotpot_img( 'before-doors.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"anchor":"hours","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="hours" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_vl_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_vt_hours' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_hours_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-rows ks-rows--spec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rows ks-rows--spec sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_dinner' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'visit_hr_0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_lunch' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'visit_hr_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_closed' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'visit_hr_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--spec"><!-- wp:paragraph {"className":"ks-row__k"} -->
<p class="ks-row__k"><?php echo esc_html( kosame_hotpot_t( 'spec_desk' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__sv"} -->
<p class="ks-row__sv"><?php echo esc_html( kosame_hotpot_t( 'visit_hr_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kosame-hotpot/book-frame"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
