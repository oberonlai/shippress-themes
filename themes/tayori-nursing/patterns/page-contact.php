<?php
/**
 * Title: Page: Contact
 * Slug: tayori-nursing/page-contact
 * Categories: tayori-nursing
 * Keywords: nursing, home visit
 * Viewport Width: 1440
 * Inserter: no
 * Description: Contact page: pebble head, office details, a plain form and short answers.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-phead"><!-- wp:group {"className":"tn-phead__field","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__field"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--a tn-ph1 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--a tn-ph1 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p15-office.webp' ) ); ?>" alt="<?php echo esc_attr( tayori_nursing_t( 'a2b36b476' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--b tn-ph2 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--b tn-ph2 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-door.webp' ) ); ?>" alt="<?php echo esc_attr( tayori_nursing_t( 'afc951968' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-doodle tn-phd"} -->
<figure class="wp-block-image size-full tn-doodle tn-phd"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/d1-nurse.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-phead__inner tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__inner tn-wrap"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'kbbaff128' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"tn-phead__title"} -->
<h1 class="wp-block-heading tn-phead__title"><?php echo wp_kses_post( tayori_nursing_t( 'k538a5137' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tn-phead__lead"} -->
<p class="tn-phead__lead"><?php echo wp_kses_post( tayori_nursing_t( 'k8b806868' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<svg class="tn-phead__wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0 72C200 30 440 10 700 44S1120 108 1440 26V120H0Z"/></svg>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tn-sec tn-contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-sec tn-contact"><!-- wp:group {"align":"wide","className":"tn-contact__grid tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-contact__grid tn-wrap"><!-- wp:group {"className":"tn-contact__info","layout":{"type":"default"}} -->
<div class="wp-block-group tn-contact__info"><!-- wp:group {"className":"tn-info","layout":{"type":"default"}} -->
<div class="wp-block-group tn-info"><!-- wp:heading {"className":"tn-info__h"} -->
<h2 class="wp-block-heading tn-info__h"><?php echo wp_kses_post( tayori_nursing_t( 'k1a40657a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'kd761d399' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-info","layout":{"type":"default"}} -->
<div class="wp-block-group tn-info"><!-- wp:heading {"className":"tn-info__h"} -->
<h2 class="wp-block-heading tn-info__h"><?php echo wp_kses_post( tayori_nursing_t( 'k54f540fe' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'k1257e265' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-info","layout":{"type":"default"}} -->
<div class="wp-block-group tn-info"><!-- wp:heading {"className":"tn-info__h"} -->
<h2 class="wp-block-heading tn-info__h"><?php echo wp_kses_post( tayori_nursing_t( 'kfb342093' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'ka6d5e94d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tn-info__line"} -->
<p class="tn-info__line"><?php echo wp_kses_post( tayori_nursing_t( 'kf35678a2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group tn-contact__form"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'k786e3cc6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tn-h2"} -->
<h2 class="wp-block-heading tn-h2"><?php echo wp_kses_post( tayori_nursing_t( 'k69d9a05e' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="tn-form" action="mailto:hello@tayori-nursing.example" method="post" enctype="text/plain">
<p class="tn-form__row"><label for="tn-f-name"><?php echo wp_kses_post( tayori_nursing_t( 'k221e705c' ) ); ?></label><input id="tn-f-name" name="name" type="text" autocomplete="name" required></p>
<p class="tn-form__row"><label for="tn-f-mail"><?php echo wp_kses_post( tayori_nursing_t( 'kce8ae9da' ) ); ?></label><input id="tn-f-mail" name="email" type="email" autocomplete="email" required></p>
<p class="tn-form__row"><label for="tn-f-tel"><?php echo wp_kses_post( tayori_nursing_t( 'k02c9347a' ) ); ?></label><input id="tn-f-tel" name="phone" type="tel" autocomplete="tel"></p>
<p class="tn-form__row"><label for="tn-f-msg"><?php echo wp_kses_post( tayori_nursing_t( 'k8307fac5' ) ); ?></label><textarea id="tn-f-msg" name="message" rows="5"></textarea></p>
<div class="wp-block-button"><button type="submit" class="wp-block-button__link wp-element-button"><?php echo wp_kses_post( tayori_nursing_t( 'k747c6a35' ) ); ?></button></div>
<p class="tn-form__note"><?php echo wp_kses_post( tayori_nursing_t( 'kd5bc1529' ) ); ?></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tn-sec tn-fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-sec tn-fees"><!-- wp:group {"align":"wide","className":"tn-fees__card tn-fees__card--stack tn-qa-card tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-fees__card tn-fees__card--stack tn-qa-card tn-wrap"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label"><?php echo wp_kses_post( tayori_nursing_t( 'k8b79ed76' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tn-h2"} -->
<h2 class="wp-block-heading tn-h2"><?php echo wp_kses_post( tayori_nursing_t( 'kf1d62ef6' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tn-qa","layout":{"type":"default"}} -->
<div class="wp-block-group tn-qa"><!-- wp:heading {"level":3,"className":"tn-qa__q"} -->
<h3 class="wp-block-heading tn-qa__q"><?php echo wp_kses_post( tayori_nursing_t( 'kdd10db4b' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'ke072db9c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-qa","layout":{"type":"default"}} -->
<div class="wp-block-group tn-qa"><!-- wp:heading {"level":3,"className":"tn-qa__q"} -->
<h3 class="wp-block-heading tn-qa__q"><?php echo wp_kses_post( tayori_nursing_t( 'kbbe880e0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'k58a2f229' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
