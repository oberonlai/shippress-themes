<?php
/**
 * Title: Home: hero
 * Slug: ibuki-cardiology/front-hero
 * Categories: ibuki-cardiology
 * Viewport Width: 1440
 * Description: White head band with a two-line headline, a full-bleed photograph and an ink info bar fused to its foot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ib-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ib-hero"><!-- wp:group {"className":"ib-hero__band","layout":{"type":"default"}} -->
<div class="wp-block-group ib-hero__band"><!-- wp:heading {"level":1,"className":"ib-hero__h1"} -->
<h1 class="wp-block-heading ib-hero__h1"><span class="ib-line"><?php echo wp_kses_post( ibuki_cardiology_t( 'kfedd1a9a' ) ); ?></span> <span class="ib-line"><?php echo wp_kses_post( ibuki_cardiology_t( 'kc997a5ef' ) ); ?></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p01-echo-room.webp' ) ); ?>","dimRatio":0,"alt":"Sonographer placing an ultrasound probe on a patient's chest beside a reviewing cardiologist.","focalPoint":{"x":0.5,"y":0.4},"isDark":false,"className":"ib-hero__photo sp-parallax"} -->
<div class="wp-block-cover is-light ib-hero__photo sp-parallax"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( ibuki_cardiology_t( 'a905fa7fa' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p01-echo-room.webp' ) ); ?>" style="object-position:50% 40%" data-object-fit="cover" data-object-position="50% 40%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"ib-hero__bar","layout":{"type":"default"}} -->
<div class="wp-block-group ib-hero__bar"><!-- wp:paragraph {"className":"ib-bar__i"} -->
<p class="ib-bar__i"><span class="ib-dot"></span><?php echo wp_kses_post( ibuki_cardiology_t( 'k9e518b72' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ib-bar__i"} -->
<p class="ib-bar__i"><?php echo wp_kses_post( ibuki_cardiology_t( 'k284eb431' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ib-bar__i"} -->
<p class="ib-bar__i"><?php echo wp_kses_post( ibuki_cardiology_t( 'k12f137f9' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ib-bar__i ib-bar__more"} -->
<p class="ib-bar__i ib-bar__more"><a href="/clinics/"><?php echo wp_kses_post( ibuki_cardiology_t( 'k173f6243' ) ); ?><span class="ib-arr">↗</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
