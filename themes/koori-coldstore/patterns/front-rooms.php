<?php
/**
 * Title: Home: rooms (fading band)
 * Slug: koori-coldstore/front-rooms
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: A patina band that fades into the page, a giant lowercase word and three white cards that fuse a text panel with a cross-fading photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"rooms","className":"kc-fadeband","layout":{"type":"default"}} -->
<section id="rooms" class="wp-block-group alignfull kc-fadeband"><!-- wp:group {"className":"kc-fadeband__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fadeband__in"><!-- wp:group {"className":"kc-title kc-title--white","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title kc-title--white"><!-- wp:heading {"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'rooms_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'rooms_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cards sp-stagger"><!-- wp:group {"className":"kc-card kc-slider kc-slider--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card kc-slider kc-slider--2 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__text"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:html -->
<svg class="kc-icon" viewBox="0 0 54 54" width="54" height="54" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="8" y="8" width="38" height="38" rx="4"/><path d="M27 14v26M14 27h26M17 17l20 20M37 17 17 37"/></svg>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo esc_html( koori_coldstore_t( 'card1_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="kc-circle" href="<?php echo koori_coldstore_url( '/rooms/#chilled' ); ?>" aria-label="<?php echo esc_attr( koori_coldstore_t( 'card1_title' ) ); ?>"><svg viewBox="0 0 20 20" width="20" height="20" aria-hidden="true" focusable="false"><path d="M4 10h11M10.5 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__rows"><!-- wp:paragraph {"className":"kc-rowlink"} -->
<p class="kc-rowlink"><a href="<?php echo koori_coldstore_url( '/rooms/#chilled' ); ?>"><?php echo esc_html( koori_coldstore_t( 'card1_a' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-rowlink"} -->
<p class="kc-rowlink"><a href="<?php echo koori_coldstore_url( '/cases/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'card1_b' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-rowlink"} -->
<p class="kc-rowlink"><a href="<?php echo koori_coldstore_url( '/rates/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'card1_c' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'chill-aisle.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_r1a' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="kc-slide kc-slide--2" aria-hidden="true"><img src="<?php echo koori_coldstore_img( 'chill-check.webp' ); ?>" alt="" decoding="async"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<div class="kc-pager"><span class="kc-pager__dots" aria-hidden="true"><span class="kc-dot kc-dot--1"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span><span class="kc-dot kc-dot--2"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span></span><button class="kc-pager__pause" type="button" aria-pressed="false" aria-label="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-pause="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-play="<?php echo esc_attr( koori_coldstore_t( 'pager_play' ) ); ?>"><i class="kc-pager__bar"></i><i class="kc-pager__bar"></i><i class="kc-pager__tri"></i></button></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card kc-slider kc-slider--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card kc-slider kc-slider--2 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__text"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:html -->
<svg class="kc-icon" viewBox="0 0 54 54" width="54" height="54" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M24 8a6 6 0 0 1 12 0v22a10 10 0 1 1-12 0z" transform="translate(-3 0)"/><path d="M30 20v18"/><circle cx="30" cy="40" r="3.4"/><path d="M42 12c3 5 5 8 0 13-5-5-3-8 0-13z"/></svg>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo esc_html( koori_coldstore_t( 'card2_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="kc-circle" href="<?php echo koori_coldstore_url( '/rooms/#frozen' ); ?>" aria-label="<?php echo esc_attr( koori_coldstore_t( 'card2_title' ) ); ?>"><svg viewBox="0 0 20 20" width="20" height="20" aria-hidden="true" focusable="false"><path d="M4 10h11M10.5 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__rows"><!-- wp:paragraph {"className":"kc-rowlink"} -->
<p class="kc-rowlink"><a href="<?php echo koori_coldstore_url( '/rooms/#frozen' ); ?>"><?php echo esc_html( koori_coldstore_t( 'card2_a' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-rowlink"} -->
<p class="kc-rowlink"><a href="<?php echo koori_coldstore_url( '/cases/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'card2_b' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-rowlink"} -->
<p class="kc-rowlink"><a href="<?php echo koori_coldstore_url( '/rates/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'card2_c' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'frozen-racks.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_r2a' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="kc-slide kc-slide--2" aria-hidden="true"><img src="<?php echo koori_coldstore_img( 'frozen-pallets.webp' ); ?>" alt="" decoding="async"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<div class="kc-pager"><span class="kc-pager__dots" aria-hidden="true"><span class="kc-dot kc-dot--1"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span><span class="kc-dot kc-dot--2"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span></span><button class="kc-pager__pause" type="button" aria-pressed="false" aria-label="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-pause="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-play="<?php echo esc_attr( koori_coldstore_t( 'pager_play' ) ); ?>"><i class="kc-pager__bar"></i><i class="kc-pager__bar"></i><i class="kc-pager__tri"></i></button></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card kc-slider kc-slider--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card kc-slider kc-slider--2 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__text"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:html -->
<svg class="kc-icon" viewBox="0 0 54 54" width="54" height="54" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M20 6v28M8 20h24M11 11l18 18M29 11 11 29"/><path d="M38 24v24M28 36h20M31 29l14 14M45 29 31 43"/></svg>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo esc_html( koori_coldstore_t( 'card3_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="kc-circle" href="<?php echo koori_coldstore_url( '/rooms/#deep-frozen' ); ?>" aria-label="<?php echo esc_attr( koori_coldstore_t( 'card3_title' ) ); ?>"><svg viewBox="0 0 20 20" width="20" height="20" aria-hidden="true" focusable="false"><path d="M4 10h11M10.5 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__rows"><!-- wp:paragraph {"className":"kc-rowlink"} -->
<p class="kc-rowlink"><a href="<?php echo koori_coldstore_url( '/rooms/#deep-frozen' ); ?>"><?php echo esc_html( koori_coldstore_t( 'card3_a' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-rowlink"} -->
<p class="kc-rowlink"><a href="<?php echo koori_coldstore_url( '/cases/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'card3_b' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-rowlink"} -->
<p class="kc-rowlink"><a href="<?php echo koori_coldstore_url( '/rates/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'card3_c' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'deep-boxes.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_r3a' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="kc-slide kc-slide--2" aria-hidden="true"><img src="<?php echo koori_coldstore_img( 'deep-logger.webp' ); ?>" alt="" decoding="async"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<div class="kc-pager"><span class="kc-pager__dots" aria-hidden="true"><span class="kc-dot kc-dot--1"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span><span class="kc-dot kc-dot--2"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span></span><button class="kc-pager__pause" type="button" aria-pressed="false" aria-label="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-pause="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-play="<?php echo esc_attr( koori_coldstore_t( 'pager_play' ) ); ?>"><i class="kc-pager__bar"></i><i class="kc-pager__bar"></i><i class="kc-pager__tri"></i></button></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
