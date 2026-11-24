<?php
/**
 * Title: Home: hero
 * Slug: yuka-tiles/front-hero
 * Categories: yuka-tiles
 * Viewport Width: 1440
 * Description: Three equal flush photo columns with one hard sun-edge shadow wedge, the headline and a pair of outline boxes beside them, and a stats row.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"yt-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull yt-hero">
<!-- wp:group {"className":"yt-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group yt-hero__inner">
<!-- wp:group {"className":"yt-grid","layout":{"type":"default"}} -->
<div class="wp-block-group yt-grid">
<!-- wp:group {"className":"yt-grid__col sp-parallax yt-par-1","layout":{"type":"default"}} -->
<div class="wp-block-group yt-grid__col sp-parallax yt-par-1">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-grid__img"} -->
<figure class="wp-block-image size-full yt-grid__img"><img src="<?php echo yuka_tiles_img( 'hero-porcelain-sun.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_h1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-grid__col sp-parallax yt-par-2","layout":{"type":"default"}} -->
<div class="wp-block-group yt-grid__col sp-parallax yt-par-2">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-grid__img"} -->
<figure class="wp-block-image size-full yt-grid__img"><img src="<?php echo yuka_tiles_img( 'hero-bench-client.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_h2' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"yt-grid__cap"} -->
<p class="yt-grid__cap"><?php echo esc_html( yuka_tiles_t( 'hero_cap' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-grid__col sp-parallax yt-par-3","layout":{"type":"default"}} -->
<div class="wp-block-group yt-grid__col sp-parallax yt-par-3">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yt-grid__img"} -->
<figure class="wp-block-image size-full yt-grid__img"><img src="<?php echo yuka_tiles_img( 'hero-glazed-corner.webp' ); ?>" alt="<?php echo yuka_tiles_a( 'alt_h3' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="yt-sun" aria-hidden="true"></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group yt-hero__text">
<!-- wp:paragraph {"className":"yt-eyebrow"} -->
<p class="yt-eyebrow"><?php echo esc_html( yuka_tiles_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-hero__h1"} -->
<h1 class="wp-block-heading yt-hero__h1"><?php echo esc_html( yuka_tiles_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yt-hero__lead"} -->
<p class="yt-hero__lead"><?php echo esc_html( yuka_tiles_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yt-pair yt-pair--copper"} -->
<div class="wp-block-buttons yt-pair yt-pair--copper">
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/borrow/"><?php echo esc_html( yuka_tiles_t( 'btn_borrow' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"yt-box"} -->
<div class="wp-block-button yt-box"><a class="wp-block-button__link wp-element-button" href="/spec-sheets/"><?php echo esc_html( yuka_tiles_t( 'btn_spec' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"yt-statswrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yt-statswrap">
<!-- wp:group {"align":"wide","className":"yt-stats","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yt-stats">
<!-- wp:group {"className":"yt-stat","layout":{"type":"default"}} -->
<div class="wp-block-group yt-stat">
<!-- wp:paragraph {"className":"yt-stat__n sp-count"} -->
<p class="yt-stat__n sp-count">5</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-stat__l"} -->
<p class="yt-stat__l"><?php echo esc_html( yuka_tiles_t( 'stat1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-stat","layout":{"type":"default"}} -->
<div class="wp-block-group yt-stat">
<!-- wp:paragraph {"className":"yt-stat__n sp-count"} -->
<p class="yt-stat__n sp-count">640</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-stat__l"} -->
<p class="yt-stat__l"><?php echo esc_html( yuka_tiles_t( 'stat2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-stat","layout":{"type":"default"}} -->
<div class="wp-block-group yt-stat">
<!-- wp:paragraph {"className":"yt-stat__n sp-count"} -->
<p class="yt-stat__n sp-count">7</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-stat__l"} -->
<p class="yt-stat__l"><?php echo esc_html( yuka_tiles_t( 'stat3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yt-stat","layout":{"type":"default"}} -->
<div class="wp-block-group yt-stat">
<!-- wp:paragraph {"className":"yt-stat__n sp-count"} -->
<p class="yt-stat__n sp-count">48 h</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-stat__l"} -->
<p class="yt-stat__l"><?php echo esc_html( yuka_tiles_t( 'stat4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
