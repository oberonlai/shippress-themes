<?php
/**
 * Title: Home: price table
 * Slug: yuka-tiles/front-prices
 * Categories: yuka-tiles
 * Viewport Width: 1440
 * Description: Grey band with the six-row price table and a pair of outline boxes.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"prices","align":"full","className":"yt-sec yt-prices","layout":{"type":"default"}} -->
<section id="prices" class="wp-block-group alignfull yt-sec yt-prices">
<!-- wp:group {"className":"yt-wrap yt-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c">
<!-- wp:paragraph {"className":"yt-label"} -->
<p class="yt-label"><?php echo esc_html( yuka_tiles_t( 'pr_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"yt-h2"} -->
<h2 class="wp-block-heading yt-h2"><?php echo esc_html( yuka_tiles_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:table {"className":"yt-table yt-table--price","hasFixedLayout":false} -->
<figure class="wp-block-table yt-table yt-table--price"><table><thead><tr><th><?php echo esc_html( yuka_tiles_t( 'pr_h1' ) ); ?></th><th><?php echo esc_html( yuka_tiles_t( 'pr_h2' ) ); ?></th><th><?php echo esc_html( yuka_tiles_t( 'pr_h3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i1' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d1' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p1' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i2' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d2' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p2' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i3' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d3' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p3' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i4' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d4' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p4' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i5' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d5' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p5' ) ); ?></td></tr><tr><td><?php echo esc_html( yuka_tiles_t( 'pr_i6' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_d6' ) ); ?></td><td><?php echo esc_html( yuka_tiles_t( 'pr_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"yt-tnote"} -->
<p class="yt-tnote"><?php echo esc_html( yuka_tiles_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"yt-prices__cta","layout":{"type":"default"}} -->
<div class="wp-block-group yt-prices__cta">
<!-- wp:buttons {"className":"yt-pair yt-pair--copper"} -->
<div class="wp-block-buttons yt-pair yt-pair--copper">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/borrow/"><?php echo esc_html( yuka_tiles_t( 'btn_borrow2' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/prices/"><?php echo esc_html( yuka_tiles_t( 'btn_prices' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
