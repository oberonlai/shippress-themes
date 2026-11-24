<?php
/**
 * Title: Page: Prices
 * Slug: yuka-tiles/prices
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: Prices page: triptych head, full-width price table, worked examples and refund rules.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yt-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yt-ihead">
<!-- wp:group {"className":"yt-ihead__tri","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__tri">
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'borrow-sample-bag.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_b1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-ihead__col","layout":{"type":"default"}} -->
<div class="wp-block-group yt-ihead__col">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-ihead__img"} -->
<figure class="wp-block-image size-full yt-ihead__img"><img src="<?php echo yuka_tiles_img( 'spec-sheet-board.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_p1' ); ?>"/></figure>
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
<p class="yt-ihead__label"><?php echo esc_html( yuka_tiles_t( 'lbl_prices' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-ihead__t"} -->
<h1 class="wp-block-heading yt-ihead__t"><?php echo esc_html( yuka_tiles_t( 'prices_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-ihead__lede"} -->
<p class="yt-ihead__lede"><?php echo esc_html( yuka_tiles_t( 'prices_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--copper"} -->
<div class="wp-block-buttons yt-pair yt-pair--copper">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/borrow/"><?php echo esc_html( yuka_tiles_t( 'btn_borrow' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/terms/"><?php echo esc_html( yuka_tiles_t( 'btn_terms' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"yt-sec yt-prices","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-prices">
<!-- wp:group {"className":"yt-wrap yt-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c">
<!-- wp:heading {"level":2,"className":"yt-h2"} -->
<h2 class="wp-block-heading yt-h2"><?php echo esc_html( yuka_tiles_t( 'prices_t_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:table {"className":"yt-table yt-table--price","hasFixedLayout":false} -->
<figure class="wp-block-table yt-table yt-table--price"><table><thead><tr><th><?php echo esc_html( yuka_tiles_t( 'pr_h1' ) ); ?></th><th><?php echo esc_html( yuka_tiles_t( 'pr_h2' ) ); ?></th><th><?php echo esc_html( yuka_tiles_t( 'pr_h3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i1' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d1' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p1' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i2' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d2' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p2' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i3' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d3' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p3' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i4' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d4' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p4' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i5' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d5' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p5' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i6' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d6' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"yt-tnote"} -->
<p class="yt-tnote"><?php echo esc_html( yuka_tiles_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->
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
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'prices_s1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'prices_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'prices_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'prices_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yt-isec sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"yt-isec__h"} -->
<h2 class="wp-block-heading yt-isec__h"><?php echo esc_html( yuka_tiles_t( 'prices_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-isec__p"} -->
<p class="yt-isec__p"><?php echo esc_html( yuka_tiles_t( 'prices_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
