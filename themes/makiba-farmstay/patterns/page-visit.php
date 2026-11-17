<?php
/**
 * Title: Page: Visit
 * Slug: makiba-farmstay/page-visit
 * Categories: makiba-farmstay
 * Viewport Width: 1440
 * Description: Visit page: hero photo, address and how to arrive, a season and hours table that stacks on mobile, and eight questions as dotted ruled rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mf-pagehero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-pagehero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mf-pagehero__img"} -->
<figure class="wp-block-image size-full mf-pagehero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/country-lane.webp' ) ); ?>" alt="<?php echo esc_attr( makiba_farmstay_t( 'a5d00b759' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mf-pagehero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group mf-pagehero__shade"></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-pagehero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group mf-pagehero__copy"><!-- wp:paragraph {"className":"mf-crumb"} -->
<p class="mf-crumb"><?php echo wp_kses_post( makiba_farmstay_t( 'k5e706a9b' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"mf-h1"} -->
<h1 class="wp-block-heading mf-h1"><?php echo wp_kses_post( makiba_farmstay_t( 'k5a6d707a' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:html -->
<svg class="mf-pagehero__cut" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M0 60V34C120 14 260 6 400 14C560 24 700 52 880 42C1040 32 1160 8 1300 6C1360 6 1410 12 1440 20V60Z" fill="#F5F5F5"/></svg>
<!-- /wp:html --><!-- wp:html -->
<div class="mf-hero__ridge" role="group" aria-label="<?php echo esc_attr( makiba_farmstay_t( 'a8550d6d6' ) ); ?>"><svg class="mf-hero__ridgesvg" viewBox="0 0 1440 150" preserveAspectRatio="none" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="mf-gp-ph" width="160" height="160" patternUnits="userSpaceOnUse"><image href="<?php echo esc_url( get_theme_file_uri( 'assets/images/grain.png' ) ); ?>" width="160" height="160"/></pattern></defs><path d="M0 150V104C110 84 270 66 403 72C560 80 690 112 850 92C985 74 1052 14 1123 2C1220 -4 1340 20 1440 36V150Z" fill="#A1A46D"/><path d="M0 150V104C110 84 270 66 403 72C560 80 690 112 850 92C985 74 1052 14 1123 2C1220 -4 1340 20 1440 36V150Z" fill="url(#mf-gp-ph)"/><path d="M0 150V124C200 104 380 114 520 124C700 136 900 100 1080 80C1200 68 1330 76 1440 94V150Z" fill="#6B6F3A"/><path d="M0 150V124C200 104 380 114 520 124C700 136 900 100 1080 80C1200 68 1330 76 1440 94V150Z" fill="url(#mf-gp-ph)"/></svg><div class="mf-hero__times"><a href="/farm-day/#t-0530"><b>05:30</b></a><a href="/farm-day/#t-0700"><b>07:00</b></a><a href="/farm-day/#t-1000"><b>10:00</b></a><a href="/farm-day/#t-1300"><b>13:00</b></a><a href="/farm-day/#t-1830"><b>18:30</b></a></div></div>
<!-- /wp:html --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"mf-sec mf-grain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-sec mf-grain"><!-- wp:group {"className":"mf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mf-wrap"><!-- wp:paragraph {"className":"mf-lead sp-reveal sp-reveal--up"} -->
<p class="mf-lead sp-reveal sp-reveal--up"><?php echo wp_kses_post( makiba_farmstay_t( 'kb4c3ae8f' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"mf-addr","layout":{"type":"default"}} -->
<div class="wp-block-group mf-addr"><!-- wp:group {"className":"mf-addr__a sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-addr__a sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"mf-sub"} -->
<h2 class="wp-block-heading mf-sub"><?php echo wp_kses_post( makiba_farmstay_t( 'k1f4668d0' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-addr__l"} -->
<p class="mf-addr__l"><?php echo wp_kses_post( makiba_farmstay_t( 'k607ab068' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-body"} -->
<p class="mf-body"><?php echo wp_kses_post( makiba_farmstay_t( 'k8fd44351' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"mf-body"} -->
<p class="mf-body"><?php echo wp_kses_post( makiba_farmstay_t( 'k247413cd' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-addr__b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-addr__b sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"mf-sub"} -->
<h2 class="wp-block-heading mf-sub"><?php echo wp_kses_post( makiba_farmstay_t( 'k0ece1714' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:table {"className":"mf-rates mf-rates--hours"} -->
<figure class="wp-block-table mf-rates mf-rates--hours"><table><tbody><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'k9ecd0fe6' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'k69f20328' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'k2b3134ac' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'kfe9cb39b' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'kec86d6e0' ) ); ?></td><td>15:00–18:00</td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'ka8a4a073' ) ); ?></td><td>17:00</td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'kedfd56b3' ) ); ?></td><td>11:00</td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'k077c9a5f' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'k365d9ff5' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( makiba_farmstay_t( 'k1c3b4b16' ) ); ?></td><td><?php echo wp_kses_post( makiba_farmstay_t( 'k0bcab51c' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"mf-sec mf-sec--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-sec mf-sec--white"><!-- wp:group {"className":"mf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mf-wrap"><!-- wp:heading {"level":2,"className":"mf-label"} -->
<h2 class="wp-block-heading mf-label"><?php echo wp_kses_post( makiba_farmstay_t( 'k090e133b' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"mf-faq","layout":{"type":"default"}} -->
<div class="wp-block-group mf-faq"><!-- wp:details {"className":"mf-faq__item"} -->
<details class="wp-block-details mf-faq__item"><summary><?php echo wp_kses_post( makiba_farmstay_t( 'kb834218b' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( makiba_farmstay_t( 'k6ce03118' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --><!-- wp:details {"className":"mf-faq__item"} -->
<details class="wp-block-details mf-faq__item"><summary><?php echo wp_kses_post( makiba_farmstay_t( 'k9acada61' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( makiba_farmstay_t( 'k9e833aaa' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --><!-- wp:details {"className":"mf-faq__item"} -->
<details class="wp-block-details mf-faq__item"><summary><?php echo wp_kses_post( makiba_farmstay_t( 'kab5b9eeb' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( makiba_farmstay_t( 'k758885d3' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --><!-- wp:details {"className":"mf-faq__item"} -->
<details class="wp-block-details mf-faq__item"><summary><?php echo wp_kses_post( makiba_farmstay_t( 'k60177174' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( makiba_farmstay_t( 'kfacc67eb' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --><!-- wp:details {"className":"mf-faq__item"} -->
<details class="wp-block-details mf-faq__item"><summary><?php echo wp_kses_post( makiba_farmstay_t( 'ke89974a5' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( makiba_farmstay_t( 'kba6580e6' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --><!-- wp:details {"className":"mf-faq__item"} -->
<details class="wp-block-details mf-faq__item"><summary><?php echo wp_kses_post( makiba_farmstay_t( 'k5136da45' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( makiba_farmstay_t( 'k9a0415ce' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --><!-- wp:details {"className":"mf-faq__item"} -->
<details class="wp-block-details mf-faq__item"><summary><?php echo wp_kses_post( makiba_farmstay_t( 'kc7e4d509' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( makiba_farmstay_t( 'k8eba0a14' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --><!-- wp:details {"className":"mf-faq__item"} -->
<details class="wp-block-details mf-faq__item"><summary><?php echo wp_kses_post( makiba_farmstay_t( 'k9cb0517e' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( makiba_farmstay_t( 'kc89d2d66' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --><!-- wp:group {"className":"mf-endcta sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mf-endcta sp-reveal sp-reveal--up"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mf-pill"} -->
<div class="wp-block-button mf-pill"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo wp_kses_post( makiba_farmstay_t( 'k9883e394' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
