<?php
/**
 * Title: Page: Visit
 * Slug: yuka-tiles/visit
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: Visit page: triptych head, window appointments, directions, hours, parallax showroom band.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yt-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yt-ihead">
<!-- wp:group {"className":"yt-ihead__tri","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__tri">
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
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'range-stone.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_r2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'range-glazed.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_r3' ); ?>"/></figure>
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
<p class="yt-ihead__label"><?php echo esc_html( yuka_tiles_t( 'lbl_visit' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-ihead__t"} -->
<h1 class="wp-block-heading yt-ihead__t"><?php echo esc_html( yuka_tiles_t( 'visit_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-ihead__lede"} -->
<p class="yt-ihead__lede"><?php echo esc_html( yuka_tiles_t( 'visit_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--copper"} -->
<div class="wp-block-buttons yt-pair yt-pair--copper">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="#appointments"><?php echo esc_html( yuka_tiles_t( 'btn_appt' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="#directions"><?php echo esc_html( yuka_tiles_t( 'btn_dir' ) ); ?></a></div>
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
<!-- wp:group {"anchor":"appointments","className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="appointments" class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'visit_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'visit_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"directions","className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="directions" class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'visit_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'visit_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'visit_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'visit_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"yt-sec yt-hoursec","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-hoursec">
<!-- wp:group {"className":"yt-wrap yt-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c">
<!-- wp:heading {"level":2,"className":"yt-h2"} -->
<h2 class="wp-block-heading yt-h2"><?php echo esc_html( yuka_tiles_t( 'visit_hours_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"yt-hours yt-hours--page","layout":{"type":"default"}} -->
<div class="wp-block-group yt-hours yt-hours--page">
<!-- wp:group {"className":"yt-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group yt-hrow">
<!-- wp:paragraph {"className":"yt-hrow__d"} -->
<p class="yt-hrow__d"><?php echo esc_html( yuka_tiles_t( 'vh_d1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-hrow__t"} -->
<p class="yt-hrow__t"><?php echo esc_html( yuka_tiles_t( 'vh_t1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group yt-hrow">
<!-- wp:paragraph {"className":"yt-hrow__d"} -->
<p class="yt-hrow__d"><?php echo esc_html( yuka_tiles_t( 'vh_d2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-hrow__t"} -->
<p class="yt-hrow__t"><?php echo esc_html( yuka_tiles_t( 'vh_t2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group yt-hrow">
<!-- wp:paragraph {"className":"yt-hrow__d"} -->
<p class="yt-hrow__d"><?php echo esc_html( yuka_tiles_t( 'vh_d3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-hrow__t"} -->
<p class="yt-hrow__t"><?php echo esc_html( yuka_tiles_t( 'vh_t3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group yt-hrow">
<!-- wp:paragraph {"className":"yt-hrow__d"} -->
<p class="yt-hrow__d"><?php echo esc_html( yuka_tiles_t( 'vh_d4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-hrow__t"} -->
<p class="yt-hrow__t"><?php echo esc_html( yuka_tiles_t( 'vh_t4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"yt-more"} -->
<p class="yt-more"><a href="/borrow/#request"><?php echo esc_html( yuka_tiles_t( 'visit_req_link' ) ); ?></a> · <a href="mailto:hello@yuka-tiles.example"><?php echo esc_html( yuka_tiles_t( 'visit_mail_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"yt-band yt-band--inner sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yt-band yt-band--inner sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-band__img"} -->
<figure class="wp-block-image size-full yt-band__img"><img src="<?php echo yuka_tiles_img( 'showroom-band.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"yt-plate yt-plate--band","layout":{"type":"default"}} -->
<div class="wp-block-group yt-plate yt-plate--band">
<!-- wp:heading {"level":2,"className":"yt-plate__t"} -->
<h2 class="wp-block-heading yt-plate__t"><?php echo esc_html( yuka_tiles_t( 'vb_t' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-plate__d"} -->
<p class="yt-plate__d"><?php echo esc_html( yuka_tiles_t( 'vb_d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--light"} -->
<div class="wp-block-buttons yt-pair yt-pair--light">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="#appointments"><?php echo esc_html( yuka_tiles_t( 'btn_appt' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="#directions"><?php echo esc_html( yuka_tiles_t( 'btn_dir' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
