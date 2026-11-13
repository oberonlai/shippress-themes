<?php
/**
 * Title: Home: boxed headline over a photo window
 * Slug: shoko-archives/front-hero
 * Categories: shoko-archives
 * Viewport Width: 1440
 * Description: A 600px full-bleed window that cross-fades three photographs (dock, aisle, desk) with a diagonal bottom edge; the headline and two sub-lines each sit in their own outlined white box; a square pause button; a quiet info bar below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"sa-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull sa-hero"><!-- wp:group {"className":"sa-hero__win","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero__win"><!-- wp:group {"className":"sa-hero__slides","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero__slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sa-slide sa-slide--1"} -->
<figure class="wp-block-image size-full sa-slide sa-slide--1"><img src="<?php echo shoko_archives_img( 'hero-dock' ); ?>" alt="<?php echo esc_attr( shoko_archives_t( 'alt_hero-dock' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="sa-slide sa-slide--2" aria-hidden="true"><img src="<?php echo shoko_archives_img( 'hero-aisle' ); ?>" alt="" decoding="async"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="sa-slide sa-slide--3" aria-hidden="true"><img src="<?php echo shoko_archives_img( 'hero-desk' ); ?>" alt="" decoding="async"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<button class="sa-pause" type="button" aria-pressed="false" aria-label="<?php echo esc_attr( shoko_archives_t( 'pause_a' ) ); ?>" data-pause="<?php echo esc_attr( shoko_archives_t( 'pause_a' ) ); ?>" data-play="<?php echo esc_attr( shoko_archives_t( 'play_a' ) ); ?>"><svg class="sa-pause__i sa-pause__i--pause" width="14" height="14" viewBox="0 0 14 14" aria-hidden="true" focusable="false"><path d="M3 1h3v12H3zM8 1h3v12H8z" fill="currentColor"/></svg><svg class="sa-pause__i sa-pause__i--play" width="14" height="14" viewBox="0 0 14 14" aria-hidden="true" focusable="false"><path d="M3 1l9 6-9 6z" fill="currentColor"/></svg></button>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero__copy"><!-- wp:heading {"level":1,"className":"sa-hero__h1"} -->
<h1 class="wp-block-heading sa-hero__h1"><?php echo esc_html( shoko_archives_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-sub"} -->
<p class="sa-sub"><?php echo esc_html( shoko_archives_t( 'hero_s1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-sub"} -->
<p class="sa-sub"><?php echo esc_html( shoko_archives_t( 'hero_s2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-infobar","layout":{"type":"default"}} -->
<div class="wp-block-group sa-infobar"><!-- wp:paragraph {"className":"sa-infobar__i"} -->
<p class="sa-infobar__i"><a href="/facility/"><?php echo esc_html( shoko_archives_t( 'bar_aisle' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-infobar__i"} -->
<p class="sa-infobar__i"><a href="#prices"><?php echo esc_html( shoko_archives_t( 'bar_hours' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-infobar__i"} -->
<p class="sa-infobar__i"><a href="#book"><?php echo esc_html( shoko_archives_t( 'bar_next' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
