<?php
/**
 * Title: Page: Fees
 * Slug: tayori-nursing/page-fees
 * Categories: tayori-nursing
 * Keywords: nursing, home visit
 * Viewport Width: 1440
 * Inserter: no
 * Description: Fees page: pebble head, full-width fee table card, sticky heading with notes cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-phead"><!-- wp:group {"className":"tn-phead__field","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__field"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--a tn-ph1 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--a tn-ph1 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14-oncall.webp' ) ); ?>" alt="<?php echo esc_attr( tayori_nursing_t( 'a60c95a2b' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--b tn-ph2 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--b tn-ph2 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-kitchen.webp' ) ); ?>" alt="<?php echo esc_attr( tayori_nursing_t( 'a6b259d05' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-doodle tn-phd"} -->
<figure class="wp-block-image size-full tn-doodle tn-phd"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/d1-nurse.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-phead__inner tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__inner tn-wrap"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'k006300ef' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tn-phead__title"} -->
<h1 class="wp-block-heading tn-phead__title"><?php echo wp_kses_post( tayori_nursing_t( 'k09ac1c74' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tn-phead__lead"} -->
<p class="tn-phead__lead"><?php echo wp_kses_post( tayori_nursing_t( 'k79ee4582' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<svg class="tn-phead__wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0 72C200 30 440 10 700 44S1120 108 1440 26V120H0Z"/></svg>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tn-sec tn-fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-sec tn-fees"><!-- wp:group {"align":"wide","className":"tn-fees__card tn-fees__card--stack tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-fees__card tn-fees__card--stack tn-wrap"><!-- wp:group {"className":"tn-fees__head","layout":{"type":"default"}} -->
<div class="wp-block-group tn-fees__head"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'k006300ef' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tn-h2"} -->
<h2 class="wp-block-heading tn-h2"><?php echo wp_kses_post( tayori_nursing_t( 'k2e058084' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'k290d190f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-fees__body","layout":{"type":"default"}} -->
<div class="wp-block-group tn-fees__body"><!-- wp:table {"className":"tn-fees-table"} -->
<figure class="wp-block-table tn-fees-table"><table class="has-fixed-layout"><tbody><tr><td><?php echo wp_kses_post( tayori_nursing_t( 'k2b2a0429' ) ); ?></td><td class="has-text-align-right" data-align="right">$60</td></tr><tr><td><?php echo wp_kses_post( tayori_nursing_t( 'kc09a141e' ) ); ?></td><td class="has-text-align-right" data-align="right">$48</td></tr><tr><td><?php echo wp_kses_post( tayori_nursing_t( 'k321cb271' ) ); ?></td><td class="has-text-align-right" data-align="right">$85</td></tr><tr><td><?php echo wp_kses_post( tayori_nursing_t( 'kfd20f8bf' ) ); ?></td><td class="has-text-align-right" data-align="right">$70</td></tr><tr><td><?php echo wp_kses_post( tayori_nursing_t( 'kbfcd136a' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo wp_kses_post( tayori_nursing_t( 'k53002f7a' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( tayori_nursing_t( 'k631267cc' ) ); ?></td><td class="has-text-align-right" data-align="right">$30</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"tn-fees__note"} -->
<p class="tn-fees__note"><?php echo wp_kses_post( tayori_nursing_t( 'kbe87a368' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tn-sec tn-t2sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-sec tn-t2sec"><!-- wp:group {"align":"wide","className":"tn-sticky tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-sticky tn-wrap"><!-- wp:group {"className":"tn-sticky__col","layout":{"type":"default"}} -->
<div class="wp-block-group tn-sticky__col"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'k7dadd2a4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tn-h2"} -->
<h2 class="wp-block-heading tn-h2"><?php echo wp_kses_post( tayori_nursing_t( 'k828ccc62' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tn-pills"} -->
<p class="tn-pills"><a class="tn-pill tn-pill--1" href="#note-01"><?php echo wp_kses_post( tayori_nursing_t( 'ke9f4d208' ) ); ?></a><a class="tn-pill tn-pill--2" href="#note-02"><?php echo wp_kses_post( tayori_nursing_t( 'k590e66dd' ) ); ?></a><a class="tn-pill tn-pill--3" href="#note-03"><?php echo wp_kses_post( tayori_nursing_t( 'k38d61860' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"tn-btns"} -->
<div class="wp-block-buttons tn-btns"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( tayori_nursing_t( 'k0b5abf9c' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-sticky__cards","layout":{"type":"default"}} -->
<div class="wp-block-group tn-sticky__cards"><!-- wp:group {"anchor":"note-01","className":"tn-card","layout":{"type":"default"}} -->
<div id="note-01" class="wp-block-group tn-card"><!-- wp:group {"className":"tn-card__head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group tn-card__head"><!-- wp:paragraph {"className":"tn-card__no"} -->
<p class="tn-card__no">01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-card__label"} -->
<p class="tn-card__label"><?php echo wp_kses_post( tayori_nursing_t( 'keaff1bdf' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"tn-card__h"} -->
<h2 class="wp-block-heading tn-card__h"><?php echo wp_kses_post( tayori_nursing_t( 'kdde905dc' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'k74c39624' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"note-02","className":"tn-card","layout":{"type":"default"}} -->
<div id="note-02" class="wp-block-group tn-card"><!-- wp:group {"className":"tn-card__head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group tn-card__head"><!-- wp:paragraph {"className":"tn-card__no"} -->
<p class="tn-card__no">02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-card__label"} -->
<p class="tn-card__label"><?php echo wp_kses_post( tayori_nursing_t( 'k3ae3f4b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"tn-card__h"} -->
<h2 class="wp-block-heading tn-card__h"><?php echo wp_kses_post( tayori_nursing_t( 'k44d626b1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'kbd045575' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-card__price"} -->
<p class="tn-card__price"><?php echo wp_kses_post( tayori_nursing_t( 'k83519d29' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"note-03","className":"tn-card","layout":{"type":"default"}} -->
<div id="note-03" class="wp-block-group tn-card"><!-- wp:group {"className":"tn-card__head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group tn-card__head"><!-- wp:paragraph {"className":"tn-card__no"} -->
<p class="tn-card__no">03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-card__label"} -->
<p class="tn-card__label"><?php echo wp_kses_post( tayori_nursing_t( 'k6ce3bdc3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"tn-card__h"} -->
<h2 class="wp-block-heading tn-card__h"><?php echo wp_kses_post( tayori_nursing_t( 'k180c5d30' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tn-qa","layout":{"type":"default"}} -->
<div class="wp-block-group tn-qa"><!-- wp:heading {"level":3,"className":"tn-qa__q"} -->
<h3 class="wp-block-heading tn-qa__q"><?php echo wp_kses_post( tayori_nursing_t( 'k8e3a7452' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'kc1562892' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-qa","layout":{"type":"default"}} -->
<div class="wp-block-group tn-qa"><!-- wp:heading {"level":3,"className":"tn-qa__q"} -->
<h3 class="wp-block-heading tn-qa__q"><?php echo wp_kses_post( tayori_nursing_t( 'kc5165e5f' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'k0faed072' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tayori-nursing/front-call"} /-->
