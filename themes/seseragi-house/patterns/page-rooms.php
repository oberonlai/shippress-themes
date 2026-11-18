<?php
/**
 * Title: Page: Rooms
 * Slug: seseragi-house/page-rooms
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: Rooms: the four rooms as a vertical run with their details and prices, a slow strip of detail photographs and the rates table.
 */
?>
<!-- wp:group {"tagName":"section","className":"sese-hero sese-hero--in","layout":{"type":"default"}} -->
<section class="wp-block-group sese-hero sese-hero--in">
<!-- wp:group {"className":"sese-win sese-win--in sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win sese-win--in sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-win__img"} -->
<figure class="wp-block-image size-full sese-win__img"><img src="<?php echo esc_url( seseragi_house_img( 'room-weir.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sese-win__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-win__fg","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__fg">
<!-- wp:heading {"level":1,"className":"sese-h1 sese-h1--page"} -->
<h1 class="wp-block-heading sese-h1 sese-h1--page"><?php echo seseragi_house_lines( 'rooms_h1' ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-sheet sese-sheet--in","layout":{"type":"default"}} -->
<div class="wp-block-group sese-sheet sese-sheet--in">
<!-- wp:paragraph {"className":"sese-sheet__text"} -->
<p class="sese-sheet__text"><?php echo esc_html( seseragi_house_t( 'rooms_sheet' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sese-sec sese-in sese-in--first sese-rooms","layout":{"type":"default"}} -->
<section class="wp-block-group sese-sec sese-in sese-in--first sese-rooms">
<!-- wp:group {"className":"sese-col sese-col--lede","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sese-col--lede">
<!-- wp:paragraph {"className":"sese-crumb"} -->
<p class="sese-crumb"><a href="/"><?php echo esc_html( seseragi_house_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( seseragi_house_t( 'crumb_rooms' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-lede"} -->
<p class="sese-lede"><?php echo esc_html( seseragi_house_t( 'rooms_intro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-col sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sp-reveal sp-reveal--up ">
<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'rooms_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'rooms_s1_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sese-vt sese-vt--rooms"} -->
<p class="sese-vt sese-vt--rooms"><?php echo esc_html( seseragi_house_t( 'rooms_vt' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sese-rooms__run sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sese-rooms__run sp-stagger">
<!-- wp:group {"className":"sese-room sese-room--a sp-reveal sp-reveal--up sese-room--np","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room sese-room--a sp-reveal sp-reveal--up sese-room--np">
<!-- wp:group {"className":"sese-room__row","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room__row">
<!-- wp:group {"className":"sese-room__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room__txt">
<!-- wp:heading {"level":3,"className":"sese-room__name"} -->
<h3 class="wp-block-heading sese-room__name"><?php echo esc_html( seseragi_house_t( 'room1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-room__d"} -->
<p class="sese-room__d"><?php echo esc_html( seseragi_house_t( 'room1_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sese-room__price"} -->
<p class="sese-room__price"><span class="sese-room__amt"><?php echo esc_html( seseragi_house_t( 'room1_p' ) ); ?></span> <span class="sese-room__night"><?php echo esc_html( seseragi_house_t( 'room_night' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-room sese-room--b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room sese-room--b sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-ph sese-room__img"} -->
<figure class="wp-block-image size-full sese-ph sese-room__img"><img src="<?php echo esc_url( seseragi_house_img( 'room-willow.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sese-room__row","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room__row">
<!-- wp:group {"className":"sese-room__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room__txt">
<!-- wp:heading {"level":3,"className":"sese-room__name"} -->
<h3 class="wp-block-heading sese-room__name"><?php echo esc_html( seseragi_house_t( 'room2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-room__d"} -->
<p class="sese-room__d"><?php echo esc_html( seseragi_house_t( 'room2_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sese-room__price"} -->
<p class="sese-room__price"><span class="sese-room__amt"><?php echo esc_html( seseragi_house_t( 'room2_p' ) ); ?></span> <span class="sese-room__night"><?php echo esc_html( seseragi_house_t( 'room_night' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-col sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sp-reveal sp-reveal--up ">
<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'rooms_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'rooms_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-rooms__run sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sese-rooms__run sp-stagger">
<!-- wp:group {"className":"sese-room sese-room--a sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room sese-room--a sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-ph sese-room__img"} -->
<figure class="wp-block-image size-full sese-ph sese-room__img"><img src="<?php echo esc_url( seseragi_house_img( 'room-loft.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p15' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sese-room__row","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room__row">
<!-- wp:group {"className":"sese-room__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room__txt">
<!-- wp:heading {"level":3,"className":"sese-room__name"} -->
<h3 class="wp-block-heading sese-room__name"><?php echo esc_html( seseragi_house_t( 'room3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-room__d"} -->
<p class="sese-room__d"><?php echo esc_html( seseragi_house_t( 'room3_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sese-room__price"} -->
<p class="sese-room__price"><span class="sese-room__amt"><?php echo esc_html( seseragi_house_t( 'room3_p' ) ); ?></span> <span class="sese-room__night"><?php echo esc_html( seseragi_house_t( 'room_night' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-room sese-room--b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room sese-room--b sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-ph sese-room__img"} -->
<figure class="wp-block-image size-full sese-ph sese-room__img"><img src="<?php echo esc_url( seseragi_house_img( 'room-boathouse.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p16' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sese-room__row","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room__row">
<!-- wp:group {"className":"sese-room__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sese-room__txt">
<!-- wp:heading {"level":3,"className":"sese-room__name"} -->
<h3 class="wp-block-heading sese-room__name"><?php echo esc_html( seseragi_house_t( 'room4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-room__d"} -->
<p class="sese-room__d"><?php echo esc_html( seseragi_house_t( 'room4_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sese-room__price"} -->
<p class="sese-room__price"><span class="sese-room__amt"><?php echo esc_html( seseragi_house_t( 'room4_p' ) ); ?></span> <span class="sese-room__night"><?php echo esc_html( seseragi_house_t( 'room_night' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-strip sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group sese-strip sp-marquee">
<!-- wp:group {"className":"sese-strip__set","layout":{"type":"default"}} -->
<div class="wp-block-group sese-strip__set">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-strip__f"} -->
<figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-coffee-sill.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-strip__f"} -->
<figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-jam-jars.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-strip__f"} -->
<figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'post-rowing-boat.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p18' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-strip__f"} -->
<figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'arrival-tea-terrace.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sese-strip__set" aria-hidden="true"><figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-coffee-sill.webp' ) ); ?>" alt=""/></figure><figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'tray-jam-jars.webp' ) ); ?>" alt=""/></figure><figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'post-rowing-boat.webp' ) ); ?>" alt=""/></figure><figure class="wp-block-image size-full sese-strip__f"><img src="<?php echo esc_url( seseragi_house_img( 'arrival-tea-terrace.webp' ) ); ?>" alt=""/></figure></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sese-sec sese-in","layout":{"type":"default"}} -->
<section class="wp-block-group sese-sec sese-in">
<!-- wp:group {"className":"sese-col sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sp-reveal sp-reveal--up ">
<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'rooms_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-wide","layout":{"type":"default"}} -->
<div class="wp-block-group sese-wide">
<!-- wp:table {"className":"sese-rates"} -->
<figure class="wp-block-table sese-rates"><table><thead><tr><th><?php echo esc_html( seseragi_house_t( 'rates_h_item' ) ); ?></th><th><?php echo esc_html( seseragi_house_t( 'rates_h_detail' ) ); ?></th><th class="sese-rates__p"><?php echo esc_html( seseragi_house_t( 'rates_h_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( seseragi_house_t( 'room2' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'room2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'room3' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'room3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'room1' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'room1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'room4' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'room4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'rate_i5' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d5' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_p5' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'rate_i6' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d6' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sese-rates__note"} -->
<p class="sese-rates__note"><?php echo esc_html( seseragi_house_t( 'rates_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-col","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col">
<!-- wp:buttons {"className":"sese-btn-wrap"} -->
<div class="wp-block-buttons sese-btn-wrap"><!-- wp:button {"className":"sese-btn"} -->
<div class="wp-block-button sese-btn"><a class="wp-block-button__link wp-element-button" href="/ask/"><?php echo esc_html( seseragi_house_t( 'rooms_ask' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
