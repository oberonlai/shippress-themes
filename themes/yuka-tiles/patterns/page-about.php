<?php
/**
 * Title: Page: The showroom
 * Slug: yuka-tiles/page-about
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: The showroom page: founding, a day at Saltgate Works, staff as list rows, flush photo ledger.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yt-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yt-ihead">
<!-- wp:group {"className":"yt-ihead__tri","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__tri">
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'daylight-window-wall.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_d1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
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
<!-- wp:html -->
<div class="yt-sun" aria-hidden="true"></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__text">
<!-- wp:paragraph {"className":"yt-ihead__label"} -->
<p class="yt-ihead__label"><?php echo esc_html( yuka_tiles_t( 'lbl_about' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-ihead__t"} -->
<h1 class="wp-block-heading yt-ihead__t"><?php echo esc_html( yuka_tiles_t( 'about_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-ihead__lede"} -->
<p class="yt-ihead__lede"><?php echo esc_html( yuka_tiles_t( 'about_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--copper"} -->
<div class="wp-block-buttons yt-pair yt-pair--copper">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( yuka_tiles_t( 'btn_plan' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( yuka_tiles_t( 'btn_contact' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"yt-sec yt-isecs","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-isecs">
<!-- wp:group {"className":"yt-wrap yt-wrap--c sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c sp-stagger">
<!-- wp:group {"className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'about_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'about_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'about_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'about_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"yt-sec yt-team","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-team">
<!-- wp:group {"className":"yt-wrap yt-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c">
<!-- wp:heading {"level":2,"className":"yt-h2"} -->
<h2 class="wp-block-heading yt-h2"><?php echo esc_html( yuka_tiles_t( 'about_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-prose"} -->
<p class="yt-prose"><?php echo esc_html( yuka_tiles_t( 'about_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"yt-stafflist sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yt-stafflist sp-stagger">
<!-- wp:group {"className":"yt-staff","layout":{"type":"default"}} -->
<div class="wp-block-group yt-staff">
<!-- wp:paragraph {"className":"yt-staff__n"} -->
<p class="yt-staff__n"><?php echo esc_html( yuka_tiles_t( 'ab_n1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__r"} -->
<p class="yt-staff__r"><?php echo esc_html( yuka_tiles_t( 'ab_r1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__l"} -->
<p class="yt-staff__l"><?php echo esc_html( yuka_tiles_t( 'ab_l1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-staff","layout":{"type":"default"}} -->
<div class="wp-block-group yt-staff">
<!-- wp:paragraph {"className":"yt-staff__n"} -->
<p class="yt-staff__n"><?php echo esc_html( yuka_tiles_t( 'ab_n2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__r"} -->
<p class="yt-staff__r"><?php echo esc_html( yuka_tiles_t( 'ab_r2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__l"} -->
<p class="yt-staff__l"><?php echo esc_html( yuka_tiles_t( 'ab_l2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-staff","layout":{"type":"default"}} -->
<div class="wp-block-group yt-staff">
<!-- wp:paragraph {"className":"yt-staff__n"} -->
<p class="yt-staff__n"><?php echo esc_html( yuka_tiles_t( 'ab_n3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__r"} -->
<p class="yt-staff__r"><?php echo esc_html( yuka_tiles_t( 'ab_r3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__l"} -->
<p class="yt-staff__l"><?php echo esc_html( yuka_tiles_t( 'ab_l3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-staff","layout":{"type":"default"}} -->
<div class="wp-block-group yt-staff">
<!-- wp:paragraph {"className":"yt-staff__n"} -->
<p class="yt-staff__n"><?php echo esc_html( yuka_tiles_t( 'ab_n4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__r"} -->
<p class="yt-staff__r"><?php echo esc_html( yuka_tiles_t( 'ab_r4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__l"} -->
<p class="yt-staff__l"><?php echo esc_html( yuka_tiles_t( 'ab_l4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-staff","layout":{"type":"default"}} -->
<div class="wp-block-group yt-staff">
<!-- wp:paragraph {"className":"yt-staff__n"} -->
<p class="yt-staff__n"><?php echo esc_html( yuka_tiles_t( 'ab_n5' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__r"} -->
<p class="yt-staff__r"><?php echo esc_html( yuka_tiles_t( 'ab_r5' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-staff__l"} -->
<p class="yt-staff__l"><?php echo esc_html( yuka_tiles_t( 'ab_l5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"yt-ledger yt-ledger--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yt-ledger yt-ledger--inner">
<!-- wp:group {"className":"yt-lrow yt-lrow--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-lrow yt-lrow--1 sp-reveal sp-reveal--up">
<!-- wp:group {"className":"yt-panel yt-panel--1","layout":{"type":"default"}} -->
<div class="wp-block-group yt-panel yt-panel--1">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-panel__img"} -->
<figure class="wp-block-image size-full yt-panel__img"><img src="<?php echo yuka_tiles_img( 'hero-glazed-corner.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_h3' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-plate","layout":{"type":"default"}} -->
<div class="wp-block-group yt-plate">
<!-- wp:heading {"level":3,"className":"yt-plate__t"} -->
<h3 class="wp-block-heading yt-plate__t"><?php echo esc_html( yuka_tiles_t( 'ab_t1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-plate__d"} -->
<p class="yt-plate__d"><?php echo esc_html( yuka_tiles_t( 'ab_d1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--light"} -->
<div class="wp-block-buttons yt-pair yt-pair--light">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( yuka_tiles_t( 'btn_plan' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( yuka_tiles_t( 'btn_contact' ) ); ?></a></div>
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
<!-- wp:group {"className":"yt-panel yt-panel--2","layout":{"type":"default"}} -->
<div class="wp-block-group yt-panel yt-panel--2">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-panel__img"} -->
<figure class="wp-block-image size-full yt-panel__img"><img src="<?php echo yuka_tiles_img( 'range-porcelain.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_r1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-plate","layout":{"type":"default"}} -->
<div class="wp-block-group yt-plate">
<!-- wp:heading {"level":3,"className":"yt-plate__t"} -->
<h3 class="wp-block-heading yt-plate__t"><?php echo esc_html( yuka_tiles_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-plate__d"} -->
<p class="yt-plate__d"><?php echo esc_html( yuka_tiles_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--light"} -->
<div class="wp-block-buttons yt-pair yt-pair--light">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/ranges/"><?php echo esc_html( yuka_tiles_t( 'btn_range' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/borrow/"><?php echo esc_html( yuka_tiles_t( 'btn_borrow' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-panel yt-panel--2","layout":{"type":"default"}} -->
<div class="wp-block-group yt-panel yt-panel--2">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-panel__img"} -->
<figure class="wp-block-image size-full yt-panel__img"><img src="<?php echo yuka_tiles_img( 'hero-bench-client.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_h2' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-plate","layout":{"type":"default"}} -->
<div class="wp-block-group yt-plate">
<!-- wp:heading {"level":3,"className":"yt-plate__t"} -->
<h3 class="wp-block-heading yt-plate__t"><?php echo esc_html( yuka_tiles_t( 'ab_t2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-plate__d"} -->
<p class="yt-plate__d"><?php echo esc_html( yuka_tiles_t( 'ab_d2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--light"} -->
<div class="wp-block-buttons yt-pair yt-pair--light">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( yuka_tiles_t( 'btn_journal' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/borrow/"><?php echo esc_html( yuka_tiles_t( 'btn_borrow' ) ); ?></a></div>
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
