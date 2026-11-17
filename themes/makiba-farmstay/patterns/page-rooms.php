<?php
/**
 * Title: Page: Rooms
 * Slug: makiba-farmstay/page-rooms
 * Categories: makiba-farmstay
 * Viewport Width: 1440
 * Description: Rooms page: hero photo, the four rooms as alternating photo and text pairs, shared amenities and the booking button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mf-pagehero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-pagehero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mf-pagehero__img"} -->
<figure class="wp-block-image size-full mf-pagehero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/farm-panorama.webp' ) ); ?>" alt="<?php echo esc_attr( makiba_farmstay_t( 'aa8bfbc6d' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mf-pagehero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group mf-pagehero__shade"></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-pagehero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group mf-pagehero__copy"><!-- wp:paragraph {"className":"mf-crumb"} -->
<p class="mf-crumb"><?php echo wp_kses_post( makiba_farmstay_t( 'k76978279' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"mf-h1"} -->
<h1 class="wp-block-heading mf-h1"><?php echo wp_kses_post( makiba_farmstay_t( 'kd9d403c2' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:html -->
<svg class="mf-pagehero__cut" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M0 60V34C120 14 260 6 400 14C560 24 700 52 880 42C1040 32 1160 8 1300 6C1360 6 1410 12 1440 20V60Z" fill="#F5F5F5"/></svg>
<!-- /wp:html --><!-- wp:html -->
<div class="mf-hero__ridge" role="group" aria-label="<?php echo esc_attr( makiba_farmstay_t( 'a8550d6d6' ) ); ?>"><svg class="mf-hero__ridgesvg" viewBox="0 0 1440 150" preserveAspectRatio="none" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="mf-gp-ph" width="160" height="160" patternUnits="userSpaceOnUse"><image href="<?php echo esc_url( get_theme_file_uri( 'assets/images/grain.png' ) ); ?>" width="160" height="160"/></pattern></defs><path d="M0 150V104C110 84 270 66 403 72C560 80 690 112 850 92C985 74 1052 14 1123 2C1220 -4 1340 20 1440 36V150Z" fill="#A1A46D"/><path d="M0 150V104C110 84 270 66 403 72C560 80 690 112 850 92C985 74 1052 14 1123 2C1220 -4 1340 20 1440 36V150Z" fill="url(#mf-gp-ph)"/><path d="M0 150V124C200 104 380 114 520 124C700 136 900 100 1080 80C1200 68 1330 76 1440 94V150Z" fill="#6B6F3A"/><path d="M0 150V124C200 104 380 114 520 124C700 136 900 100 1080 80C1200 68 1330 76 1440 94V150Z" fill="url(#mf-gp-ph)"/></svg><div class="mf-hero__times"><a href="/farm-day/#t-0530"><b>05:30</b></a><a href="/farm-day/#t-0700"><b>07:00</b></a><a href="/farm-day/#t-1000"><b>10:00</b></a><a href="/farm-day/#t-1300"><b>13:00</b></a><a href="/farm-day/#t-1830"><b>18:30</b></a></div></div>
<!-- /wp:html --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"mf-sec mf-grain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-sec mf-grain"><!-- wp:group {"className":"mf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mf-wrap"><!-- wp:group {"className":"mf-s1","layout":{"type":"default"}} -->
<div class="wp-block-group mf-s1"><!-- wp:heading {"level":2,"className":"mf-giant"} -->
<h2 class="wp-block-heading mf-giant"><?php echo wp_kses_post( makiba_farmstay_t( 'k76978279' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-sub"} -->
<p class="mf-sub"><?php echo wp_kses_post( makiba_farmstay_t( 'k055af7a0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mf-lead sp-reveal sp-reveal--up"} -->
<p class="mf-lead sp-reveal sp-reveal--up"><?php echo wp_kses_post( makiba_farmstay_t( 'kc5a43fbf' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-body mf-body--wide sp-reveal sp-reveal--up"} -->
<p class="mf-body mf-body--wide sp-reveal sp-reveal--up"><?php echo wp_kses_post( makiba_farmstay_t( 'k9bfc64b6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"mf-sec mf-sec--flush mf-grain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-sec mf-sec--flush mf-grain"><!-- wp:group {"className":"mf-roompair","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair"><!-- wp:group {"className":"mf-roompair__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair__photo sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mf-roompair__img"} -->
<figure class="wp-block-image size-full mf-roompair__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/orchard-room.webp' ) ); ?>" alt="<?php echo esc_attr( makiba_farmstay_t( 'a396875bd' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-roompair__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"mf-roompair__name"} -->
<h2 class="wp-block-heading mf-roompair__name"><?php echo wp_kses_post( makiba_farmstay_t( 'kbc47fc33' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-roompair__sleeps"} -->
<p class="mf-roompair__sleeps"><?php echo wp_kses_post( makiba_farmstay_t( 'ka8510428' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-body"} -->
<p class="mf-body"><?php echo wp_kses_post( makiba_farmstay_t( 'k6e663e03' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-roompair__price"} -->
<p class="mf-roompair__price"><?php echo wp_kses_post( makiba_farmstay_t( 'k71e1428b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-roompair mf-roompair--r","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair mf-roompair--r"><!-- wp:group {"className":"mf-roompair__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair__photo sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mf-roompair__img"} -->
<figure class="wp-block-image size-full mf-roompair__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/swallow-room.webp' ) ); ?>" alt="<?php echo esc_attr( makiba_farmstay_t( 'a44732fb3' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-roompair__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"mf-roompair__name"} -->
<h2 class="wp-block-heading mf-roompair__name"><?php echo wp_kses_post( makiba_farmstay_t( 'k37a3a31d' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-roompair__sleeps"} -->
<p class="mf-roompair__sleeps"><?php echo wp_kses_post( makiba_farmstay_t( 'k9734c1e3' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-body"} -->
<p class="mf-body"><?php echo wp_kses_post( makiba_farmstay_t( 'k81e96c54' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-roompair__price"} -->
<p class="mf-roompair__price"><?php echo wp_kses_post( makiba_farmstay_t( 'k5400e03e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-roompair","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair"><!-- wp:group {"className":"mf-roompair__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair__photo sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mf-roompair__img"} -->
<figure class="wp-block-image size-full mf-roompair__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hayloft-room.webp' ) ); ?>" alt="<?php echo esc_attr( makiba_farmstay_t( 'a61ae7974' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-roompair__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"mf-roompair__name"} -->
<h2 class="wp-block-heading mf-roompair__name"><?php echo wp_kses_post( makiba_farmstay_t( 'kd8addef2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-roompair__sleeps"} -->
<p class="mf-roompair__sleeps"><?php echo wp_kses_post( makiba_farmstay_t( 'ka7202c8c' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-body"} -->
<p class="mf-body"><?php echo wp_kses_post( makiba_farmstay_t( 'k3e35ae04' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-roompair__price"} -->
<p class="mf-roompair__price"><?php echo wp_kses_post( makiba_farmstay_t( 'kee4a4cd9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-roompair mf-roompair--r","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair mf-roompair--r"><!-- wp:group {"className":"mf-roompair__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair__photo sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mf-roompair__img"} -->
<figure class="wp-block-image size-full mf-roompair__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rafters-suite.webp' ) ); ?>" alt="<?php echo esc_attr( makiba_farmstay_t( 'a3c7cf8d9' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-roompair__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-roompair__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"mf-roompair__name"} -->
<h2 class="wp-block-heading mf-roompair__name"><?php echo wp_kses_post( makiba_farmstay_t( 'kcc465208' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-roompair__sleeps"} -->
<p class="mf-roompair__sleeps"><?php echo wp_kses_post( makiba_farmstay_t( 'kc880f619' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-body"} -->
<p class="mf-body"><?php echo wp_kses_post( makiba_farmstay_t( 'kdc660812' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-roompair__price"} -->
<p class="mf-roompair__price"><?php echo wp_kses_post( makiba_farmstay_t( 'kfe547db1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"mf-sec mf-grain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-sec mf-grain"><!-- wp:group {"className":"mf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mf-wrap"><!-- wp:group {"className":"mf-split sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-split sp-reveal sp-reveal--up"><!-- wp:group {"className":"mf-split__h","layout":{"type":"default"}} -->
<div class="wp-block-group mf-split__h"><!-- wp:heading {"level":2,"className":"mf-sub"} -->
<h2 class="wp-block-heading mf-sub"><?php echo wp_kses_post( makiba_farmstay_t( 'ka6c26ab6' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-split__b","layout":{"type":"default"}} -->
<div class="wp-block-group mf-split__b"><!-- wp:paragraph {"className":"mf-body"} -->
<p class="mf-body"><?php echo wp_kses_post( makiba_farmstay_t( 'k95ef7c3a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-endcta sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-endcta sp-reveal sp-reveal--up"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mf-pill"} -->
<div class="wp-block-button mf-pill"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo wp_kses_post( makiba_farmstay_t( 'k9883e394' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
