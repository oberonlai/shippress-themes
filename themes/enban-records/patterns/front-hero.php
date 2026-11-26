<?php
/**
 * Title: Home: hero (inset card, text beside, timeline)
 * Slug: enban-records/front-hero
 * Categories: enban-records
 * Keywords: record shop, hero, listening
 * Viewport Width: 1440
 * Description: Headline beside an inset photograph card with a peeking next photo, square arrow tabs and dots, and the shop day as a timeline band along the bottom.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull eb-hero"><!-- wp:group {"className":"eb-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group eb-hero__grid"><!-- wp:group {"className":"eb-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group eb-hero__text"><!-- wp:paragraph {"className":"eb-eyebrow"} -->
<p class="eb-eyebrow"><?php echo wp_kses_post( enban_records_t( 'ka28d9a0c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"eb-hero__title"} -->
<h1 class="wp-block-heading eb-hero__title"><?php echo wp_kses_post( enban_records_t( 'kdbf200d1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-lede"} -->
<p class="eb-lede"><?php echo wp_kses_post( enban_records_t( 'k9fd79f85' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"eb-hero__links","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group eb-hero__links"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-eb-box eb-box--240"} -->
<div class="wp-block-button is-style-eb-box eb-box--240"><a class="wp-block-button__link wp-element-button" href="/listening/"><?php echo wp_kses_post( enban_records_t( 'k63e94218' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"eb-textlink"} -->
<p class="eb-textlink"><a href="/crate/"><?php echo wp_kses_post( enban_records_t( 'k03c40a57' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group eb-hero__stage"><!-- wp:group {"className":"eb-hero__card sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group eb-hero__card sp-parallax"><!-- wp:group {"className":"sp-parallax__layer eb-hero__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer eb-hero__layer"><!-- wp:group {"className":"eb-slides","layout":{"type":"default"}} -->
<div class="wp-block-group eb-slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"eb-slide"} -->
<figure class="wp-block-image size-full eb-slide"><img src="<?php echo enban_records_img( 'desk-browser.webp' ); ?>" alt="<?php echo esc_attr( enban_records_t( 'a09a0440d' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( enban_records_t( 'k06d4e545' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"eb-slide"} -->
<figure class="wp-block-image size-full eb-slide"><img src="<?php echo enban_records_img( 'platter.webp' ); ?>" alt="<?php echo esc_attr( enban_records_t( 'a296cb5fa' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( enban_records_t( 'k5789fb2c' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"eb-slide"} -->
<figure class="wp-block-image size-full eb-slide"><img src="<?php echo enban_records_img( 'wall-sleeves.webp' ); ?>" alt="<?php echo esc_attr( enban_records_t( 'a24d1a1c8' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( enban_records_t( 'ka376e357' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="eb-hero__nav"><button type="button" class="eb-hero__prev" aria-label="<?php echo esc_attr( enban_records_t( 'ade8875ed' ) ); ?>"><?php echo enban_records_icon( 'prev' ); ?></button><button type="button" class="eb-hero__next" aria-label="<?php echo esc_attr( enban_records_t( 'a2fee4eb3' ) ); ?>"><?php echo enban_records_icon( 'next' ); ?></button></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="eb-dots"><button type="button" aria-label="<?php echo esc_attr( enban_records_t( 'a70ac40fe' ) ); ?>" aria-current="true"></button><button type="button" aria-label="<?php echo esc_attr( enban_records_t( 'ac3896737' ) ); ?>"></button><button type="button" aria-label="<?php echo esc_attr( enban_records_t( 'aaf3ed791' ) ); ?>"></button></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"eb-hero__caption"} -->
<p class="eb-hero__caption"><?php echo wp_kses_post( enban_records_t( 'k1fc326d9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"eb-hero__peek"} -->
<figure class="wp-block-image size-full eb-hero__peek"><img src="<?php echo enban_records_img( 'platter.webp' ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"eb-timeline","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull eb-timeline"><!-- wp:group {"className":"eb-timeline__in","layout":{"type":"default"}} -->
<div class="wp-block-group eb-timeline__in"><!-- wp:paragraph {"className":"eb-timeline__desklabel"} -->
<p class="eb-timeline__desklabel"><?php echo wp_kses_post( enban_records_t( 'k56b0835c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"eb-timeline__desk","layout":{"type":"default"}} -->
<div class="wp-block-group eb-timeline__desk"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-stop eb-stop--1","layout":{"type":"default"}} -->
<div class="wp-block-group eb-stop eb-stop--1"><!-- wp:paragraph {"className":"eb-stop__time"} -->
<p class="eb-stop__time">11:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-stop__label"} -->
<p class="eb-stop__label"><?php echo wp_kses_post( enban_records_t( 'k17e8c02f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-stop eb-stop--2","layout":{"type":"default"}} -->
<div class="wp-block-group eb-stop eb-stop--2"><!-- wp:paragraph {"className":"eb-stop__time"} -->
<p class="eb-stop__time">13:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-stop__label"} -->
<p class="eb-stop__label"><?php echo wp_kses_post( enban_records_t( 'k7b5d55a7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-stop eb-stop--3","layout":{"type":"default"}} -->
<div class="wp-block-group eb-stop eb-stop--3"><!-- wp:paragraph {"className":"eb-stop__time"} -->
<p class="eb-stop__time">17:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-stop__label"} -->
<p class="eb-stop__label"><?php echo wp_kses_post( enban_records_t( 'k289be75d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-stop eb-stop--4","layout":{"type":"default"}} -->
<div class="wp-block-group eb-stop eb-stop--4"><!-- wp:paragraph {"className":"eb-stop__time"} -->
<p class="eb-stop__time">19:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-stop__label"} -->
<p class="eb-stop__label"><?php echo wp_kses_post( enban_records_t( 'k33ad80bd' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
