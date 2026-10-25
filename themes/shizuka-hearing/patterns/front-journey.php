<?php
/**
 * Title: Journey: sticky stacked cards
 * Slug: shizuka-hearing/front-journey
 * Categories: shizuka-hearing
 * Viewport Width: 1440
 * Description: Blue-gray band with a sticky title column and three stacked cards: the missed sentence, the fitting, the review visit.
 */
?>
<!-- wp:group {"align":"full","className":"sh-journey","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-journey">
<!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow"><?php echo wp_kses_post( shizuka_hearing_t( 'kffc9ef46' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub"><?php echo wp_kses_post( shizuka_hearing_t( 'kd9ef37fa' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-journey__row","layout":{"type":"default"}} -->
<div class="wp-block-group sh-journey__row"><!-- wp:group {"className":"sh-journey__side","layout":{"type":"default"}} -->
<div class="wp-block-group sh-journey__side"><!-- wp:html -->
<svg class="sh-circles" viewBox="0 0 250 250" width="250" height="250" aria-hidden="true" focusable="false"><circle cx="125" cy="125" r="124" fill="none" stroke="currentColor" stroke-width="1"/><circle cx="125" cy="125" r="74" fill="none" stroke="currentColor" stroke-width="1"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sh-journey__lead"} -->
<p class="sh-journey__lead"><?php echo wp_kses_post( shizuka_hearing_t( 'kad6a0dab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-journey__word","ariaHidden":true} -->
<p class="sh-journey__word" aria-hidden="true"><?php echo wp_kses_post( shizuka_hearing_t( 'kc1f9314a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-cards","layout":{"type":"default"}} -->
<div class="wp-block-group sh-cards">
<!-- wp:group {"className":"sh-card sh-card--1","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card sh-card--1"><!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo wp_kses_post( shizuka_hearing_t( 'kf88d3379' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-card__sub"} -->
<p class="sh-card__sub"><?php echo wp_kses_post( shizuka_hearing_t( 'kbb36f886' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sh-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card__body"><?php echo shizuka_hearing_img( 'h12', 'sh-card__img' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'k43a9cac6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sh-pill "} -->
<div class="wp-block-button sh-pill "><a class="wp-block-button__link wp-element-button" href="/hearing-check/"><?php echo wp_kses_post( shizuka_hearing_t( 'ke784b333' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


<!-- wp:group {"className":"sh-card sh-card--2","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card sh-card--2"><!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo wp_kses_post( shizuka_hearing_t( 'k411532a4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-card__sub"} -->
<p class="sh-card__sub"><?php echo wp_kses_post( shizuka_hearing_t( 'kc6e429b1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sh-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card__body"><?php echo shizuka_hearing_img( 'h11', 'sh-card__img' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'k09ade260' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sh-pill "} -->
<div class="wp-block-button sh-pill "><a class="wp-block-button__link wp-element-button" href="/fitting-method/"><?php echo wp_kses_post( shizuka_hearing_t( 'kf3e02b6a' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


<!-- wp:group {"className":"sh-card sh-card--3","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card sh-card--3"><!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo wp_kses_post( shizuka_hearing_t( 'k409dfb8e' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-card__sub"} -->
<p class="sh-card__sub"><?php echo wp_kses_post( shizuka_hearing_t( 'k3aa4bf27' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sh-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group sh-card__body"><?php echo shizuka_hearing_img( 'h13', 'sh-card__img' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'kf0ae585b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sh-pill "} -->
<div class="wp-block-button sh-pill "><a class="wp-block-button__link wp-element-button" href="/aftercare/"><?php echo wp_kses_post( shizuka_hearing_t( 'kc510b33a' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
