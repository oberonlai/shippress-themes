<?php
/**
 * Title: Page: Care plan
 * Slug: tayori-nursing/page-care-plan
 * Categories: tayori-nursing
 * Keywords: nursing, home visit
 * Viewport Width: 1440
 * Inserter: no
 * Description: Care plan page: pebble head, sticky heading with four white step cards, what the plan contains.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-phead"><!-- wp:group {"className":"tn-phead__field","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__field"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--a tn-ph1 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--a tn-ph1 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-plan.webp' ) ); ?>" alt="<?php echo esc_attr( tayori_nursing_t( 'aed14fd05' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--b tn-ph2 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--b tn-ph2 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03-pills.webp' ) ); ?>" alt="<?php echo esc_attr( tayori_nursing_t( 'afa0d46df' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-doodle tn-phd"} -->
<figure class="wp-block-image size-full tn-doodle tn-phd"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/d2-armchair.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-phead__inner tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__inner tn-wrap"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'k974ecb9b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tn-phead__title"} -->
<h1 class="wp-block-heading tn-phead__title"><?php echo wp_kses_post( tayori_nursing_t( 'k567b8949' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tn-phead__lead"} -->
<p class="tn-phead__lead"><?php echo wp_kses_post( tayori_nursing_t( 'k496eb563' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<svg class="tn-phead__wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0 72C200 30 440 10 700 44S1120 108 1440 26V120H0Z"/></svg>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tn-sec tn-t2sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-sec tn-t2sec"><!-- wp:group {"align":"wide","className":"tn-sticky tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-sticky tn-wrap"><!-- wp:group {"className":"tn-sticky__col","layout":{"type":"default"}} -->
<div class="wp-block-group tn-sticky__col"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'ke8be0a43' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tn-h2"} -->
<h2 class="wp-block-heading tn-h2"><?php echo wp_kses_post( tayori_nursing_t( 'ke7d709b1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tn-pills"} -->
<p class="tn-pills"><a class="tn-pill tn-pill--1" href="#step-01">01</a><a class="tn-pill tn-pill--2" href="#step-02">02</a><a class="tn-pill tn-pill--3" href="#step-03">03</a><a class="tn-pill tn-pill--4" href="#step-04">04</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-sticky__cards","layout":{"type":"default"}} -->
<div class="wp-block-group tn-sticky__cards"><!-- wp:group {"anchor":"step-01","className":"tn-card","layout":{"type":"default"}} -->
<div id="step-01" class="wp-block-group tn-card"><!-- wp:group {"className":"tn-card__head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group tn-card__head"><!-- wp:paragraph {"className":"tn-card__no"} -->
<p class="tn-card__no">01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-card__label"} -->
<p class="tn-card__label"><?php echo wp_kses_post( tayori_nursing_t( 'k9ecb3765' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-card__lead"} -->
<p class="tn-card__lead"><?php echo wp_kses_post( tayori_nursing_t( 'k0a729eaf' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tn-card__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tn-card__cols"><!-- wp:group {"className":"tn-card__key","layout":{"type":"default"}} -->
<div class="wp-block-group tn-card__key"><!-- wp:paragraph {"className":"tn-key"} -->
<p class="tn-key"><?php echo wp_kses_post( tayori_nursing_t( 'kc3755e61' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"tn-bullets"} -->
<ul class="wp-block-list tn-bullets"><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k52d5ca4c' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'kb4862b8b' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k4e000d51' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-card__price"} -->
<p class="tn-card__price"><?php echo wp_kses_post( tayori_nursing_t( 'kb75e23ef' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"step-02","className":"tn-card","layout":{"type":"default"}} -->
<div id="step-02" class="wp-block-group tn-card"><!-- wp:group {"className":"tn-card__head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group tn-card__head"><!-- wp:paragraph {"className":"tn-card__no"} -->
<p class="tn-card__no">02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-card__label"} -->
<p class="tn-card__label"><?php echo wp_kses_post( tayori_nursing_t( 'kf7cb6428' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-card__lead"} -->
<p class="tn-card__lead"><?php echo wp_kses_post( tayori_nursing_t( 'kd9199295' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tn-card__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tn-card__cols"><!-- wp:group {"className":"tn-card__key","layout":{"type":"default"}} -->
<div class="wp-block-group tn-card__key"><!-- wp:paragraph {"className":"tn-key"} -->
<p class="tn-key"><?php echo wp_kses_post( tayori_nursing_t( 'kd7663fa4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"tn-bullets"} -->
<ul class="wp-block-list tn-bullets"><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'kafe3db63' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k977c4278' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k97d19c72' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-card__price"} -->
<p class="tn-card__price"><?php echo wp_kses_post( tayori_nursing_t( 'k26ecbf17' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"step-03","className":"tn-card","layout":{"type":"default"}} -->
<div id="step-03" class="wp-block-group tn-card"><!-- wp:group {"className":"tn-card__head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group tn-card__head"><!-- wp:paragraph {"className":"tn-card__no"} -->
<p class="tn-card__no">03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-card__label"} -->
<p class="tn-card__label"><?php echo wp_kses_post( tayori_nursing_t( 'kf6e759ed' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-card__lead"} -->
<p class="tn-card__lead"><?php echo wp_kses_post( tayori_nursing_t( 'ka83806ec' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tn-card__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tn-card__cols"><!-- wp:group {"className":"tn-card__key","layout":{"type":"default"}} -->
<div class="wp-block-group tn-card__key"><!-- wp:paragraph {"className":"tn-key"} -->
<p class="tn-key"><?php echo wp_kses_post( tayori_nursing_t( 'k1f4a3ca1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"tn-bullets"} -->
<ul class="wp-block-list tn-bullets"><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'kb26905a5' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k48becd09' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'kf4ca0402' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-card__price"} -->
<p class="tn-card__price"><?php echo wp_kses_post( tayori_nursing_t( 'k8856623d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"step-04","className":"tn-card","layout":{"type":"default"}} -->
<div id="step-04" class="wp-block-group tn-card"><!-- wp:group {"className":"tn-card__head","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group tn-card__head"><!-- wp:paragraph {"className":"tn-card__no"} -->
<p class="tn-card__no">04</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-card__label"} -->
<p class="tn-card__label"><?php echo wp_kses_post( tayori_nursing_t( 'k9416147a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-card__lead"} -->
<p class="tn-card__lead"><?php echo wp_kses_post( tayori_nursing_t( 'k84e715c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tn-card__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tn-card__cols"><!-- wp:group {"className":"tn-card__key","layout":{"type":"default"}} -->
<div class="wp-block-group tn-card__key"><!-- wp:paragraph {"className":"tn-key"} -->
<p class="tn-key"><?php echo wp_kses_post( tayori_nursing_t( 'k457dd551' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"tn-bullets"} -->
<ul class="wp-block-list tn-bullets"><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k84f6a3a5' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k6efdd251' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k9c0f6f86' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-card__price"} -->
<p class="tn-card__price"><?php echo wp_kses_post( tayori_nursing_t( 'k3a677010' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tn-sec tn-values","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-sec tn-values"><!-- wp:group {"align":"wide","className":"tn-values__grid tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-values__grid tn-wrap"><!-- wp:group {"className":"tn-values__text tn-values__text--plain","layout":{"type":"default"}} -->
<div class="wp-block-group tn-values__text tn-values__text--plain"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'k122cebab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tn-h2"} -->
<h2 class="wp-block-heading tn-h2"><?php echo wp_kses_post( tayori_nursing_t( 'k09921572' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'k0f75b138' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"tn-bullets"} -->
<ul class="wp-block-list tn-bullets"><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'kaaa02811' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k9d4e75ac' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k2b63e5c3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k78110dbc' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k08db40cc' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k639e722b' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'kbfe9f0dd' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( tayori_nursing_t( 'k58303d2b' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-pwrap tn-pwrap--values","layout":{"type":"default"}} -->
<div class="wp-block-group tn-pwrap tn-pwrap--values"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--c tn-values__photo sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--c tn-values__photo sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-kitchen.webp' ) ); ?>" alt="<?php echo esc_attr( tayori_nursing_t( 'a6b259d05' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tayori-nursing/front-call"} /-->
