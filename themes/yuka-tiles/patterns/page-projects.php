<?php
/**
 * Title: Page: Projects
 * Slug: yuka-tiles/projects
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: Projects page: triptych head, flush project ledger with plates, three project stories.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yt-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yt-ihead">
<!-- wp:group {"className":"yt-ihead__tri","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__tri">
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'showroom-band.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'visit-entrance.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_v1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'daylight-window-wall.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_d1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="yt-sun" aria-hidden="true"></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__text">
<!-- wp:paragraph {"className":"yt-ihead__label"} -->
<p class="yt-ihead__label"><?php echo esc_html( yuka_tiles_t( 'lbl_projects' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-ihead__t"} -->
<h1 class="wp-block-heading yt-ihead__t"><?php echo esc_html( yuka_tiles_t( 'projects_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-ihead__lede"} -->
<p class="yt-ihead__lede"><?php echo esc_html( yuka_tiles_t( 'projects_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--copper"} -->
<div class="wp-block-buttons yt-pair yt-pair--copper">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/borrow/"><?php echo esc_html( yuka_tiles_t( 'btn_borrow' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/ranges/"><?php echo esc_html( yuka_tiles_t( 'btn_ranges' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"yt-ledger yt-ledger--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yt-ledger yt-ledger--inner">
<!-- wp:group {"className":"yt-lrow yt-lrow--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-lrow yt-lrow--1 sp-reveal sp-reveal--up">
<!-- wp:group {"anchor":"kitchen","className":"yt-panel yt-panel--1","layout":{"type":"default"}} -->
<div id="kitchen" class="wp-block-group yt-panel yt-panel--1">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-panel__img"} -->
<figure class="wp-block-image size-full yt-panel__img"><img src="<?php echo yuka_tiles_img( 'project-kitchen.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_c1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-plate","layout":{"type":"default"}} -->
<div class="wp-block-group yt-plate">
<!-- wp:heading {"level":3,"className":"yt-plate__t"} -->
<h3 class="wp-block-heading yt-plate__t"><?php echo esc_html( yuka_tiles_t( 'pj_t1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-plate__d"} -->
<p class="yt-plate__d"><?php echo esc_html( yuka_tiles_t( 'pj_m1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--light"} -->
<div class="wp-block-buttons yt-pair yt-pair--light">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="#story-kitchen"><?php echo esc_html( yuka_tiles_t( 'btn_read' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/ranges/"><?php echo esc_html( yuka_tiles_t( 'btn_range' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-lrow yt-lrow--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-lrow yt-lrow--2 sp-reveal sp-reveal--up">
<!-- wp:group {"anchor":"stair","className":"yt-panel yt-panel--2","layout":{"type":"default"}} -->
<div id="stair" class="wp-block-group yt-panel yt-panel--2">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-panel__img"} -->
<figure class="wp-block-image size-full yt-panel__img"><img src="<?php echo yuka_tiles_img( 'project-stair.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_c2' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-plate","layout":{"type":"default"}} -->
<div class="wp-block-group yt-plate">
<!-- wp:heading {"level":3,"className":"yt-plate__t"} -->
<h3 class="wp-block-heading yt-plate__t"><?php echo esc_html( yuka_tiles_t( 'pj_t2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-plate__d"} -->
<p class="yt-plate__d"><?php echo esc_html( yuka_tiles_t( 'pj_m2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--light"} -->
<div class="wp-block-buttons yt-pair yt-pair--light">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="#story-stair"><?php echo esc_html( yuka_tiles_t( 'btn_read' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/ranges/"><?php echo esc_html( yuka_tiles_t( 'btn_range' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"bakery","className":"yt-panel yt-panel--2","layout":{"type":"default"}} -->
<div id="bakery" class="wp-block-group yt-panel yt-panel--2">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-panel__img"} -->
<figure class="wp-block-image size-full yt-panel__img"><img src="<?php echo yuka_tiles_img( 'project-bakery.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_c3' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-plate","layout":{"type":"default"}} -->
<div class="wp-block-group yt-plate">
<!-- wp:heading {"level":3,"className":"yt-plate__t"} -->
<h3 class="wp-block-heading yt-plate__t"><?php echo esc_html( yuka_tiles_t( 'pj_t3' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-plate__d"} -->
<p class="yt-plate__d"><?php echo esc_html( yuka_tiles_t( 'pj_m3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--light"} -->
<div class="wp-block-buttons yt-pair yt-pair--light">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="#story-bakery"><?php echo esc_html( yuka_tiles_t( 'btn_read' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/ranges/"><?php echo esc_html( yuka_tiles_t( 'btn_range' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"yt-sec yt-isecs","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-isecs">
<!-- wp:group {"className":"yt-wrap yt-wrap--c sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c sp-stagger">
<!-- wp:group {"anchor":"story-kitchen","className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="story-kitchen" class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'projects_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'projects_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"story-stair","className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="story-stair" class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'projects_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'projects_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"story-bakery","className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="story-bakery" class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'projects_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'projects_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
