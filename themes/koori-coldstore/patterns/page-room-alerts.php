<?php
/**
 * Title: Page: Room alerts
 * Slug: koori-coldstore/page-room-alerts
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Inserter: no
 * Description: Alerts head, a dark form card with the newsletter block on the band, and what an alert is.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero kc-head kc-slider kc-slider--1 sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero kc-head kc-slider kc-slider--1 sp-parallax"><!-- wp:group {"className":"kc-slides sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kc-slides sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-slide kc-slide--1"} -->
<figure class="wp-block-image size-full kc-slide kc-slide--1"><img src="<?php echo koori_coldstore_img( 'frozen-pallets.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_r2b' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__inner"><!-- wp:group {"className":"kc-hero__lockup","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__lockup"><!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo esc_html( koori_coldstore_t( 'al_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-tilt"} -->
<p class="kc-tilt"><?php echo esc_html( koori_coldstore_t( 'al_tilt' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-fadeband kc-fadeband--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-fadeband kc-fadeband--inner"><!-- wp:group {"className":"kc-fadeband__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fadeband__in"><!-- wp:group {"className":"kc-title kc-title--white","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title kc-title--white"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'al_band_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'al_band_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cards sp-stagger"><!-- wp:group {"className":"kc-card kc-card--form kc-ink","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card kc-card--form kc-ink"><!-- wp:heading {"level":2,"className":"kc-card__title"} -->
<h2 class="wp-block-heading kc-card__title"><?php echo esc_html( koori_coldstore_t( 'al_card_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__p"} -->
<p class="kc-card__p"><?php echo esc_html( koori_coldstore_t( 'al_card_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-hrows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrows"><!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'al_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'al_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'al_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'al_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hrow"><!-- wp:paragraph {"className":"kc-hrow__k"} -->
<p class="kc-hrow__k"><?php echo esc_html( koori_coldstore_t( 'al_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hrow__v"} -->
<p class="kc-hrow__v"><?php echo esc_html( koori_coldstore_t( 'al_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-form-slot","layout":{"type":"default"}} -->
<div class="wp-block-group kc-form-slot"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'ask@koori-coldstore.example',
	'label'   => koori_coldstore_t( 'forms_email' ),
	'submit'  => koori_coldstore_t( 'forms_subscribe' ),
	'notice'  => koori_coldstore_t( 'forms_mail_notice' ),
	'subject' => koori_coldstore_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pro","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-pro"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"level":2,"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'al2_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'al2_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cols","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cols"><!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'al2_c1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'al2_c1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:heading {"level":3,"className":"kc-h3"} -->
<h3 class="wp-block-heading kc-h3"><?php echo esc_html( koori_coldstore_t( 'al2_c2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'al2_c2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
