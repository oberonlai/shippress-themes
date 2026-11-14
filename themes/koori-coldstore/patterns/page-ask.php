<?php
/**
 * Title: Page: Ask about capacity
 * Slug: koori-coldstore/page-ask
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Inserter: no
 * Description: Enquiry head, a white form card on the band (shared form block with a mailto fallback), what to send and how a reply works.
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
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'enquiry.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_e01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__inner"><!-- wp:group {"className":"kc-hero__lockup","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__lockup"><!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( koori_coldstore_t( 'as_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-tilt"} -->
<p class="kc-tilt"><?php echo esc_html( koori_coldstore_t( 'as_tilt' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-fadeband kc-fadeband--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-fadeband kc-fadeband--inner"><!-- wp:group {"className":"kc-fadeband__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fadeband__in"><!-- wp:group {"className":"kc-title kc-title--white","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title kc-title--white"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'ask_band_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'ask_band_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cards sp-stagger"><!-- wp:group {"className":"kc-card kc-card--form","layout":{"type":"default"}} -->
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
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-log kc-log--list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-log kc-log--list"><!-- wp:group {"className":"kc-log__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__grid"><!-- wp:group {"className":"kc-log__label","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__label"><!-- wp:paragraph {"className":"kc-log__title"} -->
<p class="kc-log__title"><?php echo esc_html( koori_coldstore_t( 'as_send_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__sub"} -->
<p class="kc-log__sub"><?php echo esc_html( koori_coldstore_t( 'as_send_lsub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__rows"><!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'as_send_r1c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'as_send_r1c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'as_send_r2c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'as_send_r2c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'as_send_r3c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'as_send_r3c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'as_send_r4c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'as_send_r4c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-log__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-log__row"><!-- wp:paragraph {"className":"kc-log__time"} -->
<p class="kc-log__time"><?php echo esc_html( koori_coldstore_t( 'as_send_r5c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-log__room"} -->
<p class="kc-log__room"><?php echo esc_html( koori_coldstore_t( 'as_send_r5c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-pro"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'as2_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'as2_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cols","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cols"><!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'as2_c1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'as2_c1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'as2_c2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'as2_c2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
