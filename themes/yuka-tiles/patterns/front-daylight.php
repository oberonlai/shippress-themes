<?php
/**
 * Title: Home: why the window
 * Slug: yuka-tiles/front-daylight
 * Categories: yuka-tiles
 * Viewport Width: 1440
 * Description: Portrait photograph beside a label, a headline, three narrative paragraphs and a pull line.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"daylight","className":"yt-sec yt-daylight","layout":{"type":"default"}} -->
<section id="daylight" class="wp-block-group yt-sec yt-daylight">
<!-- wp:group {"align":"wide","className":"yt-wrap yt-split yt-split--photo","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yt-wrap yt-split yt-split--photo">
<!-- wp:group {"className":"yt-daylight__photo","layout":{"type":"default"}} -->
<div class="wp-block-group yt-daylight__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-daylight__img"} -->
<figure class="wp-block-image size-full yt-daylight__img"><img src="<?php echo yuka_tiles_img( 'daylight-window-wall.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_d1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-daylight__text","layout":{"type":"default"}} -->
<div class="wp-block-group yt-daylight__text">
<!-- wp:paragraph {"className":"yt-label"} -->
<p class="yt-label"><?php echo esc_html( yuka_tiles_t( 'day_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"yt-h2"} -->
<h2 class="wp-block-heading yt-h2"><?php echo esc_html( yuka_tiles_t( 'day_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-prose"} -->
<p class="yt-prose"><?php echo esc_html( yuka_tiles_t( 'day_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-prose"} -->
<p class="yt-prose"><?php echo esc_html( yuka_tiles_t( 'day_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-prose"} -->
<p class="yt-prose"><?php echo esc_html( yuka_tiles_t( 'day_p3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-pull"} -->
<p class="yt-pull"><?php echo esc_html( yuka_tiles_t( 'day_pull' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
