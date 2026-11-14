<?php
/**
 * Title: Page: How booking works
 * Slug: koori-coldstore/page-booking
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Inserter: no
 * Description: Booking head, the four steps in one fused card, what we ask for, and the sample room-log strip.
 */
?>
<?php ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kc-btn"} -->
<div class="wp-block-button kc-btn"><a class="wp-block-button__link wp-element-button" href="mailto:ask@koori-coldstore.example?subject=<?php echo rawurlencode( koori_coldstore_t( 'forms_contact_subject' ) ); ?>"><?php echo esc_html( koori_coldstore_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kc-form-note"} -->
<p class="kc-form-note"><?php echo esc_html( koori_coldstore_t( 'forms_contact_note' ) ); ?></p>
<!-- /wp:paragraph -->
<?php $kc_fallback = ob_get_clean(); ?>

<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero kc-head kc-slider kc-slider--1 sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero kc-head kc-slider kc-slider--1 sp-parallax"><!-- wp:group {"className":"kc-slides sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kc-slides sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'hero-door.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_k03' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__inner"><!-- wp:group {"className":"kc-hero__lockup","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__lockup"><!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( koori_coldstore_t( 'bk_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-tilt"} -->
<p class="kc-tilt"><?php echo esc_html( koori_coldstore_t( 'bk_tilt' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-pro"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'bk_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'bk_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-intro kc-lead"} -->
<p class="kc-intro kc-lead"><?php echo esc_html( koori_coldstore_t( 'bk_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-cols","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cols"><!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'bk_c1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'bk_c1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'bk_c2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'bk_c2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-fadeband kc-fadeband--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-fadeband kc-fadeband--inner"><!-- wp:group {"className":"kc-fadeband__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fadeband__in"><!-- wp:group {"className":"kc-title kc-title--white","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title kc-title--white"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'bk_band_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'bk_band_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cards sp-stagger"><!-- wp:group {"className":"kc-card kc-card--long kc-slider kc-slider--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card kc-card--long kc-slider kc-slider--1 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__text"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title"><?php echo esc_html( koori_coldstore_t( 'bk_steps_t' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrows"><!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'bk_steps_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'bk_steps_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'bk_steps_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'bk_steps_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'bk_steps_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'bk_steps_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'bk_steps_k4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'bk_steps_v4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'planner-board.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_y03' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"log","className":"kc-sec kc-pro","layout":{"type":"default"}} -->
<section id="log" class="wp-block-group alignfull kc-sec kc-pro"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'bk3_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'bk3_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cols","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cols"><!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'bk3_c1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'bk3_c1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-bookform","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-bookform"><!-- wp:group {"className":"kc-cards","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cards"><!-- wp:group {"className":"kc-card kc-card--form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card kc-card--form"><!-- wp:heading {"level":2,"className":"kc-card__title"} -->
<h2 class="wp-block-heading kc-card__title"><?php echo esc_html( koori_coldstore_t( 'ask_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__p"} -->
<p class="kc-card__p"><?php echo esc_html( koori_coldstore_t( 'ask_card_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-form-slot","layout":{"type":"default"}} -->
<div class="wp-block-group kc-form-slot"><?php echo shippress_form_slot( array(
	'kind'     => 'contact',
	'fallback' => $kc_fallback,
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-log kc-log--log","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-log kc-log--log"><!-- wp:group {"className":"kc-log__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__grid"><!-- wp:group {"className":"kc-log__label","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__label"><!-- wp:paragraph {"className":"kc-log__title"} -->
<p class="kc-log__title"><?php echo esc_html( koori_coldstore_t( 'bk_log_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__sub"} -->
<p class="kc-log__sub"><?php echo esc_html( koori_coldstore_t( 'bk_log_lsub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__rows"><!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'bk_log_r1c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'bk_log_r1c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'bk_log_r1c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><span class="kc-tick"></span><?php echo esc_html( koori_coldstore_t( 'bk_log_r1c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'bk_log_r2c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'bk_log_r2c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'bk_log_r2c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><span class="kc-tick"></span><?php echo esc_html( koori_coldstore_t( 'bk_log_r2c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'bk_log_r3c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'bk_log_r3c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'bk_log_r3c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><span class="kc-tick"></span><?php echo esc_html( koori_coldstore_t( 'bk_log_r3c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'bk_log_r4c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'bk_log_r4c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'bk_log_r4c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><span class="kc-tick"></span><?php echo esc_html( koori_coldstore_t( 'bk_log_r4c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'bk_log_r5c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'bk_log_r5c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'bk_log_r5c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><span class="kc-tick"></span><?php echo esc_html( koori_coldstore_t( 'bk_log_r5c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'bk_log_r6c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'bk_log_r6c2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__read"} -->
<p class="kc-log__read"><?php echo esc_html( koori_coldstore_t( 'bk_log_r6c3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__status"} -->
<p class="kc-log__status"><span class="kc-tick"></span><?php echo esc_html( koori_coldstore_t( 'bk_log_r6c4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
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
