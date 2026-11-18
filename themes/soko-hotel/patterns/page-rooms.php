<?php
/**
 * Title: Page: Rooms and rates
 * Slug: soko-hotel/page-rooms
 * Categories: soko-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Letterbox opener, four alternating room sections, a black band with the six-row rates table and the house notes.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-open","layout":{"type":"default"}} -->
<section class="wp-block-group sk-open"><!-- wp:group {"className":"sk-open__frame sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sk-open__frame sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-open__fig"} -->
<figure class="wp-block-image size-full sk-open__fig"><img src="<?php echo soko_hotel_img( 'corridor-night.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-titlebar","layout":{"type":"default"}} -->
<div class="wp-block-group sk-titlebar"><!-- wp:paragraph {"className":"sk-kicker"} -->
<p class="sk-kicker"><?php echo esc_html( soko_hotel_t( 'rp_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sk-titlebar__h"} -->
<h1 class="wp-block-heading sk-titlebar__h"><?php echo esc_html( soko_hotel_t( 'rp_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-intro","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-intro"><!-- wp:paragraph {"className":"sk-intro__p"} -->
<p class="sk-intro__p"><?php echo esc_html( soko_hotel_t( 'rp_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-roomlist","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-roomlist"><!-- wp:group {"className":"sk-roomrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-roomrow sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-roomrow__fig"} -->
<figure class="wp-block-image size-full sk-roomrow__fig"><img src="<?php echo soko_hotel_img( 'room-harbour.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sk-roomrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group sk-roomrow__text"><!-- wp:group {"className":"sk-room__row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-room__row"><!-- wp:heading {"level":2,"className":"sk-roomrow__name"} -->
<h2 class="wp-block-heading sk-roomrow__name"><?php echo esc_html( soko_hotel_t( 'room1_name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-room__price"} -->
<p class="sk-room__price"><?php echo esc_html( soko_hotel_t( 'room1_price' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-room__spec"} -->
<p class="sk-room__spec"><?php echo esc_html( soko_hotel_t( 'rp1_spec' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-room__p"} -->
<p class="sk-room__p"><?php echo esc_html( soko_hotel_t( 'rp1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"sk-amen"} -->
<ul class="wp-block-list sk-amen"><!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp1_a1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp1_a2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp1_a3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp1_a4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-roomrow sp-reveal sp-reveal--up sk-roomrow--flip","layout":{"type":"default"}} -->
<div class="wp-block-group sk-roomrow sp-reveal sp-reveal--up sk-roomrow--flip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-roomrow__fig"} -->
<figure class="wp-block-image size-full sk-roomrow__fig"><img src="<?php echo soko_hotel_img( 'room-quay.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sk-roomrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group sk-roomrow__text"><!-- wp:group {"className":"sk-room__row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-room__row"><!-- wp:heading {"level":2,"className":"sk-roomrow__name"} -->
<h2 class="wp-block-heading sk-roomrow__name"><?php echo esc_html( soko_hotel_t( 'room2_name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-room__price"} -->
<p class="sk-room__price"><?php echo esc_html( soko_hotel_t( 'room2_price' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-room__spec"} -->
<p class="sk-room__spec"><?php echo esc_html( soko_hotel_t( 'rp2_spec' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-room__p"} -->
<p class="sk-room__p"><?php echo esc_html( soko_hotel_t( 'rp2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"sk-amen"} -->
<ul class="wp-block-list sk-amen"><!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp2_a1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp2_a2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp2_a3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp2_a4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-roomrow sp-reveal sp-reveal--up","anchor":"suites","layout":{"type":"default"}} -->
<div id="suites" class="wp-block-group sk-roomrow sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-roomrow__fig"} -->
<figure class="wp-block-image size-full sk-roomrow__fig"><img src="<?php echo soko_hotel_img( 'room-loft.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sk-roomrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group sk-roomrow__text"><!-- wp:group {"className":"sk-room__row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-room__row"><!-- wp:heading {"level":2,"className":"sk-roomrow__name"} -->
<h2 class="wp-block-heading sk-roomrow__name"><?php echo esc_html( soko_hotel_t( 'room3_name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-room__price"} -->
<p class="sk-room__price"><?php echo esc_html( soko_hotel_t( 'room3_price' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-room__spec"} -->
<p class="sk-room__spec"><?php echo esc_html( soko_hotel_t( 'rp3_spec' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-room__p"} -->
<p class="sk-room__p"><?php echo esc_html( soko_hotel_t( 'rp3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"sk-amen"} -->
<ul class="wp-block-list sk-amen"><!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp3_a1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp3_a2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp3_a3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp3_a4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-roomrow sp-reveal sp-reveal--up sk-roomrow--flip","layout":{"type":"default"}} -->
<div class="wp-block-group sk-roomrow sp-reveal sp-reveal--up sk-roomrow--flip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-roomrow__fig"} -->
<figure class="wp-block-image size-full sk-roomrow__fig"><img src="<?php echo soko_hotel_img( 'room-crane.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sk-roomrow__text","layout":{"type":"default"}} -->
<div class="wp-block-group sk-roomrow__text"><!-- wp:group {"className":"sk-room__row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-room__row"><!-- wp:heading {"level":2,"className":"sk-roomrow__name"} -->
<h2 class="wp-block-heading sk-roomrow__name"><?php echo esc_html( soko_hotel_t( 'room4_name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-room__price"} -->
<p class="sk-room__price"><?php echo esc_html( soko_hotel_t( 'room4_price' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-room__spec"} -->
<p class="sk-room__spec"><?php echo esc_html( soko_hotel_t( 'rp4_spec' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-room__p"} -->
<p class="sk-room__p"><?php echo esc_html( soko_hotel_t( 'rp4_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"sk-amen"} -->
<ul class="wp-block-list sk-amen"><!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp4_a1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp4_a2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp4_a3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soko_hotel_t( 'rp4_a4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-rates-band","anchor":"rates","layout":{"type":"default"}} -->
<section id="rates" class="wp-block-group sk-rates-band"><!-- wp:heading {"level":2,"className":"sk-h2 sk-h2--light"} -->
<h2 class="wp-block-heading sk-h2 sk-h2--light"><?php echo esc_html( soko_hotel_t( 'rates_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-lede sk-lede--light"} -->
<p class="sk-lede sk-lede--light"><?php echo esc_html( soko_hotel_t( 'rates_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"sk-rates"} -->
<figure class="wp-block-table sk-rates"><table><thead><tr><th><?php echo esc_html( soko_hotel_t( 'rates_c1' ) ); ?></th><th><?php echo esc_html( soko_hotel_t( 'rates_c2' ) ); ?></th><th><?php echo esc_html( soko_hotel_t( 'rates_c3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( soko_hotel_t( 'rate1_i' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate1_d' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( soko_hotel_t( 'rate2_i' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate2_d' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( soko_hotel_t( 'rate3_i' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate3_d' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( soko_hotel_t( 'rate4_i' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate4_d' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( soko_hotel_t( 'rate5_i' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate5_d' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( soko_hotel_t( 'rate6_i' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate6_d' ) ); ?></td><td><?php echo esc_html( soko_hotel_t( 'rate6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-rowsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-rowsec"><!-- wp:heading {"level":2,"className":"sk-h2"} -->
<h2 class="wp-block-heading sk-h2"><?php echo esc_html( soko_hotel_t( 'hn_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sk-rows","layout":{"type":"default"}} -->
<div class="wp-block-group sk-rows"><!-- wp:group {"className":"sk-row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'hn_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'hn_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'hn_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'hn_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'hn_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'hn_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-endlink","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-endlink"><!-- wp:paragraph {"className":"sk-more"} -->
<p class="sk-more"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'rp_more' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
