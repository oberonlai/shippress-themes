<?php
/**
 * Title: Page: Rooms and bands
 * Slug: koori-coldstore/page-rooms
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Inserter: no
 * Description: Two-slide cross-fading head, three fused band cards with full text, the twelve-room register and the blast-freezing note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero kc-head kc-slider kc-slider--2 sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero kc-head kc-slider kc-slider--2 sp-parallax"><!-- wp:group {"className":"kc-slides sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kc-slides sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'chill-aisle.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_r1a' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="kc-slide kc-slide--2" aria-hidden="true"><img src="<?php echo koori_coldstore_img( 'frozen-racks.webp' ); ?>" alt="" decoding="async"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__inner"><!-- wp:group {"className":"kc-hero__lockup","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__lockup"><!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( koori_coldstore_t( 'rm_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-tilt"} -->
<p class="kc-tilt"><?php echo esc_html( koori_coldstore_t( 'rm_tilt' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kc-pager"><span class="kc-pager__dots" aria-hidden="true"><span class="kc-dot kc-dot--1"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span><span class="kc-dot kc-dot--2"><svg class="kc-ring" viewBox="0 0 33 33" width="33" height="33" focusable="false"><circle cx="16.5" cy="16.5" r="14.5"/></svg></span></span><button class="kc-pager__pause" type="button" aria-pressed="false" aria-label="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-pause="<?php echo esc_attr( koori_coldstore_t( 'pager_pause' ) ); ?>" data-play="<?php echo esc_attr( koori_coldstore_t( 'pager_play' ) ); ?>"><i class="kc-pager__bar"></i><i class="kc-pager__bar"></i><i class="kc-pager__tri"></i></button></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-fadeband kc-fadeband--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-fadeband kc-fadeband--inner"><!-- wp:group {"className":"kc-fadeband__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fadeband__in"><!-- wp:group {"className":"kc-title kc-title--white","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title kc-title--white"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'rm_band_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'rm_band_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-intro kc-lead kc-lead--white"} -->
<p class="kc-intro kc-lead kc-lead--white"><?php echo esc_html( koori_coldstore_t( 'rm_band_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cards sp-stagger"><!-- wp:group {"anchor":"chilled","className":"kc-card kc-card--long kc-slider kc-slider--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="chilled" class="wp-block-group kc-card kc-card--long kc-slider kc-slider--1 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__text"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo esc_html( koori_coldstore_t( 'rm_ch_t' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-card__p"} -->
<p class="kc-card__p"><?php echo esc_html( koori_coldstore_t( 'rm_ch_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-hrows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrows"><!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'rm_ch_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'rm_ch_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'rm_ch_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'rm_ch_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'rm_ch_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'rm_ch_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'chill-check.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_r1b' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"frozen","className":"kc-card kc-card--long kc-slider kc-slider--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="frozen" class="wp-block-group kc-card kc-card--long kc-slider kc-slider--1 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__text"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo esc_html( koori_coldstore_t( 'rm_fr_t' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-card__p"} -->
<p class="kc-card__p"><?php echo esc_html( koori_coldstore_t( 'rm_fr_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-hrows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrows"><!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'rm_fr_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'rm_fr_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'rm_fr_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'rm_fr_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'rm_fr_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'rm_fr_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'frozen-pallets.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_r2b' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"deep-frozen","className":"kc-card kc-card--long kc-slider kc-slider--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="deep-frozen" class="wp-block-group kc-card kc-card--long kc-slider kc-slider--1 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__text"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo esc_html( koori_coldstore_t( 'rm_dp_t' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-card__p"} -->
<p class="kc-card__p"><?php echo esc_html( koori_coldstore_t( 'rm_dp_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-hrows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrows"><!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'rm_dp_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'rm_dp_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'rm_dp_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'rm_dp_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'rm_dp_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'rm_dp_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'deep-boxes.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_r3a' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-log kc-log--reg","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-log kc-log--reg"><!-- wp:group {"className":"kc-log__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__grid"><!-- wp:group {"className":"kc-log__label","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__label"><!-- wp:paragraph {"className":"kc-log__title"} -->
<p class="kc-log__title"><?php echo esc_html( koori_coldstore_t( 'rm_reg_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__sub"} -->
<p class="kc-log__sub"><?php echo esc_html( koori_coldstore_t( 'rm_reg_lsub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__rows"><!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r1c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r1c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r1c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r1c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r2c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r2c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r2c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r2c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r3c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r3c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r3c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r3c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r4c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r4c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r4c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r4c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r5c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r5c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r5c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r5c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r6c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r6c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r6c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r6c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r7c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r7c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r7c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r7c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r8c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r8c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r8c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r8c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r9c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r9c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r9c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r9c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r10c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r10c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r10c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r10c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r11c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r11c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r11c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r11c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r12c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r12c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r12c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><?php echo esc_html( koori_coldstore_t( 'rm_reg_r12c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-pro"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'rm2_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'rm2_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cols","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cols"><!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'rm2_c1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'rm2_c1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'rm2_c2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'rm2_c2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo koori_coldstore_img( 'enquiry.webp' ); ?>","dimRatio":0,"className":"kc-dockband kc-enqband sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover kc-dockband kc-enqband sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_e01' ) ); ?>" src="<?php echo koori_coldstore_img( 'enquiry.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kc-dockband__box","layout":{"type":"default"}} -->
<div class="wp-block-group kc-dockband__box"><!-- wp:heading {"level":2,"className":"kc-giant kc-giant--white"} -->
<h2 class="wp-block-heading kc-giant kc-giant--white"><?php echo esc_html( koori_coldstore_t( 'enqb_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-linkrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-linkrow"><!-- wp:paragraph {"className":"kc-ulink"} -->
<p class="kc-ulink"><a href="<?php echo koori_coldstore_url( '/ask/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'cta_ask' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="kc-circle" href="<?php echo koori_coldstore_url( '/ask/' ); ?>" aria-label="<?php echo esc_attr( koori_coldstore_t( 'cta_ask' ) ); ?>"><svg viewBox="0 0 20 20" width="20" height="20" aria-hidden="true" focusable="false"><path d="M4 10h11M10.5 5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
