<?php
/**
 * Title: Home: window, strip and HUD
 * Slug: ugoki-animation/hero
 * Categories: ugoki-animation
 * Viewport Width: 1440
 * Description: Dark inset window with the tracked statement and a film-grain photograph, a cyan strip of key-drawing frames and a mono HUD line.
 */
?>
<!-- wp:group {"tagName":"section","className":"ug-hero","layout":{"type":"default"}} -->
<section class="wp-block-group ug-hero"><!-- wp:group {"className":"ug-window","layout":{"type":"default"}} -->
<div class="wp-block-group ug-window"><!-- wp:group {"className":"ug-window__text","layout":{"type":"default"}} -->
<div class="wp-block-group ug-window__text"><!-- wp:heading {"level":1,"className":"ug-h1"} -->
<h1 class="wp-block-heading ug-h1"><span class="ug-l"><?php echo esc_html( ugoki_animation_t( 'hero_l1' ) ); ?></span><span class="ug-l"><?php echo esc_html( ugoki_animation_t( 'hero_l2' ) ); ?></span><span class="ug-l"><?php echo esc_html( ugoki_animation_t( 'hero_l3' ) ); ?></span><span class="ug-l"><?php echo esc_html( ugoki_animation_t( 'hero_l4' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ug-window__meta"} -->
<p class="ug-window__meta"><?php echo esc_html( ugoki_animation_t( 'hero_meta' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-window__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ug-window__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ug-window__img"} -->
<figure class="wp-block-image size-full ug-window__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kv-light-table.webp' ) ); ?>" alt="<?php echo esc_attr( ugoki_animation_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ug-window__shade" aria-hidden="true"></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-strip sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group ug-strip sp-marquee"><!-- wp:group {"className":"ug-strip__set","layout":{"type":"default"}} -->
<div class="wp-block-group ug-strip__set"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ug-frame"} -->
<figure class="wp-block-image size-full ug-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/strip-walk-sheet.webp' ) ); ?>" alt="<?php echo esc_attr( ugoki_animation_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ug-frame"} -->
<figure class="wp-block-image size-full ug-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/strip-peg-bar.webp' ) ); ?>" alt="<?php echo esc_attr( ugoki_animation_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ug-frame"} -->
<figure class="wp-block-image size-full ug-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/strip-flip.webp' ) ); ?>" alt="<?php echo esc_attr( ugoki_animation_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ug-frame"} -->
<figure class="wp-block-image size-full ug-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/strip-line-test.webp' ) ); ?>" alt="<?php echo esc_attr( ugoki_animation_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ug-strip__set" aria-hidden="true"><figure class="wp-block-image size-full ug-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/strip-walk-sheet.webp' ) ); ?>" alt="" loading="lazy"/></figure><figure class="wp-block-image size-full ug-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/strip-peg-bar.webp' ) ); ?>" alt="" loading="lazy"/></figure><figure class="wp-block-image size-full ug-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/strip-flip.webp' ) ); ?>" alt="" loading="lazy"/></figure><figure class="wp-block-image size-full ug-frame"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/strip-line-test.webp' ) ); ?>" alt="" loading="lazy"/></figure></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-hud","layout":{"type":"default"}} -->
<div class="wp-block-group ug-hud"><!-- wp:group {"className":"ug-hud__l","layout":{"type":"default"}} -->
<div class="wp-block-group ug-hud__l"><!-- wp:html -->
<span class="ug-dot" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ugoki_animation_t( 'hud_caption' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ug-hud__c"} -->
<p class="ug-hud__c"><?php echo esc_html( ugoki_animation_t( 'hud_scroll' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="ug-hud__r"><svg class="ug-ticks" width="120" height="12" viewBox="0 0 120 12" fill="currentColor" aria-hidden="true" focusable="false"><rect x="0" y="0" width="1" height="12"/><rect x="5" y="0" width="1" height="8"/><rect x="10" y="0" width="1" height="8"/><rect x="15" y="0" width="1" height="8"/><rect x="20" y="0" width="1" height="8"/><rect x="25" y="0" width="1" height="8"/><rect x="30" y="0" width="1" height="12"/><rect x="35" y="0" width="1" height="8"/><rect x="40" y="0" width="1" height="8"/><rect x="45" y="0" width="1" height="8"/><rect x="50" y="0" width="1" height="8"/><rect x="55" y="0" width="1" height="8"/><rect x="60" y="0" width="1" height="12"/><rect x="65" y="0" width="1" height="8"/><rect x="70" y="0" width="1" height="8"/><rect x="75" y="0" width="1" height="8"/><rect x="80" y="0" width="1" height="8"/><rect x="85" y="0" width="1" height="8"/><rect x="90" y="0" width="1" height="12"/><rect x="95" y="0" width="1" height="8"/><rect x="100" y="0" width="1" height="8"/><rect x="105" y="0" width="1" height="8"/><rect x="110" y="0" width="1" height="8"/><rect x="115" y="0" width="1" height="8"/></svg><span class="ug-hud__frame"><span class="screen-reader-text">07</span><span class="ug-hud__roll" aria-hidden="true"><i>01</i><i>02</i><i>03</i><i>04</i><i>05</i><i>06</i><i>07</i></span></span> <span class="ug-hud__of">/ 24</span></p>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
