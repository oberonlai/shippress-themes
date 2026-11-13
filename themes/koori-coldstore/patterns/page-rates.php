<?php
/**
 * Title: Page: Rates
 * Slug: koori-coldstore/page-rates
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Inserter: no
 * Description: Rates head, the seven-item price table in a white card on the band, a terms strip and the rates and terms text.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero kc-head kc-slider kc-slider--1 sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero kc-head kc-slider kc-slider--1 sp-parallax"><!-- wp:group {"className":"kc-slides sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kc-slides sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'deep-logger.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_r3b' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__inner"><!-- wp:group {"className":"kc-hero__lockup","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__lockup"><!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( koori_coldstore_t( 'rt_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-tilt"} -->
<p class="kc-tilt"><?php echo esc_html( koori_coldstore_t( 'rt_tilt' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-fadeband kc-fadeband--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-fadeband kc-fadeband--inner"><!-- wp:group {"className":"kc-fadeband__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fadeband__in"><!-- wp:group {"className":"kc-title kc-title--white","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title kc-title--white"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'rt_band_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'rt_band_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-intro kc-lead kc-lead--white"} -->
<p class="kc-intro kc-lead kc-lead--white"><?php echo esc_html( koori_coldstore_t( 'rt_band_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cards sp-stagger"><!-- wp:group {"className":"kc-card kc-card--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card kc-card--plain"><!-- wp:table {"className":"kc-rates"} -->
<figure class="wp-block-table kc-rates"><table><thead><tr><th><?php echo esc_html( koori_coldstore_t( 'rates_h1' ) ); ?></th><th><?php echo esc_html( koori_coldstore_t( 'rates_h2' ) ); ?></th><th><?php echo esc_html( koori_coldstore_t( 'rates_h3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( koori_coldstore_t( 'rate1_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate1_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate2_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate2_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate3_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate3_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate4_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate4_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate5_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate5_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate6_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate6_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate6_p' ) ); ?></td></tr><tr><td><?php echo esc_html( koori_coldstore_t( 'rate7_s' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate7_n' ) ); ?></td><td><?php echo esc_html( koori_coldstore_t( 'rate7_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"kc-card__note"} -->
<p class="kc-card__note"><?php echo esc_html( koori_coldstore_t( 'rt_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-log kc-log--list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-log kc-log--list"><!-- wp:group {"className":"kc-log__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__grid"><!-- wp:group {"className":"kc-log__label","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__label"><!-- wp:paragraph {"className":"kc-log__title"} -->
<p class="kc-log__title"><?php echo esc_html( koori_coldstore_t( 'rt_terms_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__sub"} -->
<p class="kc-log__sub"><?php echo esc_html( koori_coldstore_t( 'rt_terms_lsub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__rows"><!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rt_terms_r1c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rt_terms_r1c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rt_terms_r2c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rt_terms_r2c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rt_terms_r3c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rt_terms_r3c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'rt_terms_r4c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'rt_terms_r4c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-pro"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'rt2_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'rt2_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cols","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cols"><!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'rt2_c1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'rt2_c1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'rt2_c2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'rt2_c2_b' ) ); ?></p>
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
