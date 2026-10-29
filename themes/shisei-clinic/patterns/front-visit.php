<?php
/**
 * Title: Home: hours and location card
 * Slug: shisei-clinic/front-visit
 * Categories: shisei-clinic
 * Keywords: hours, address, phone, visit
 * Viewport Width: 1440
 * Description: A rounded card: reception photo with the address on the left, a slate panel with the hours grid and phone on the right.
 */
?>
<!-- wp:group {"className":"ss-sec ss-visit","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-sec ss-visit" id="hours"><!-- wp:group {"className":"ss-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ss-wrap"><!-- wp:group {"className":"ss-card sp-reveal sp-reveal--mask","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card sp-reveal sp-reveal--mask"><!-- wp:group {"className":"ss-card__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13.webp' ) ); ?>" alt="<?php echo esc_attr( shisei_clinic_t( 'aab28790e' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ss-card__addr","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card__addr"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shisei_clinic_t( 'k28f0246b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ss-card__panel"><!-- wp:paragraph {"className":"ss-card__label"} -->
<p class="ss-card__label"><?php echo wp_kses_post( shisei_clinic_t( 'kce6f9693' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<table class="ss-hours"><thead><tr><th><span class="screen-reader-text"><?php echo wp_kses_post( shisei_clinic_t( 'ka76d4ef5' ) ); ?></span></th><th><?php echo wp_kses_post( shisei_clinic_t( 'kfd29458a' ) ); ?></th><th><?php echo wp_kses_post( shisei_clinic_t( 'k2ddecde8' ) ); ?></th><th><?php echo wp_kses_post( shisei_clinic_t( 'k510c292b' ) ); ?></th><th><?php echo wp_kses_post( shisei_clinic_t( 'ked5e8353' ) ); ?></th><th><?php echo wp_kses_post( shisei_clinic_t( 'kac616f84' ) ); ?></th><th><?php echo wp_kses_post( shisei_clinic_t( 'k13c7d2d7' ) ); ?></th><th><?php echo wp_kses_post( shisei_clinic_t( 'kef6572e4' ) ); ?></th></tr></thead><tbody><tr><th><?php echo wp_kses_post( shisei_clinic_t( 'kb311a3fe' ) ); ?></th><td>●</td><td>●</td><td>●</td><td>●</td><td>●</td><td>●</td><td>–</td></tr><tr><th><?php echo wp_kses_post( shisei_clinic_t( 'k31d0ff0a' ) ); ?></th><td>●</td><td>●</td><td>●</td><td>●</td><td>●</td><td>–</td><td>–</td></tr></tbody></table>
<ul class="ss-hours-lines"><li><?php echo wp_kses_post( shisei_clinic_t( 'k5f25a222' ) ); ?> <span>8:00–13:00 · 14:00–19:30</span></li><li><?php echo wp_kses_post( shisei_clinic_t( 'k13c7d2d7' ) ); ?> <span>9:00–13:00</span></li><li><?php echo wp_kses_post( shisei_clinic_t( 'k52dc400e' ) ); ?> <span><?php echo wp_kses_post( shisei_clinic_t( 'k349e6863' ) ); ?></span></li></ul>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ss-card__note"} -->
<p class="ss-card__note"><?php echo wp_kses_post( shisei_clinic_t( 'k58eb55ad' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__tel"} -->
<p class="ss-card__tel"><a href="tel:+16045550142">+1 604 555 0142</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-card__note"} -->
<p class="ss-card__note"><?php echo wp_kses_post( shisei_clinic_t( 'k63d261f4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
