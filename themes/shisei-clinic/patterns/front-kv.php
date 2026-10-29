<?php
/**
 * Title: Home: key visual
 * Slug: shisei-clinic/front-kv
 * Categories: shisei-clinic
 * Keywords: chiropractic, clinic, arch, hero
 * Viewport Width: 1440
 * Description: Tall arch photograph on the left with a white wordmark across its lower edge, an oval photo with two blurred echoes, and a two-line headline.
 */
?>
<!-- wp:group {"className":"ss-kv","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-kv"><!-- wp:group {"className":"ss-kv__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ss-kv__photo"><!-- wp:group {"className":"ss-kv__arch sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ss-kv__arch sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01.webp' ) ); ?>" alt="<?php echo esc_attr( shisei_clinic_t( 'acf6a06ec' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-kv__oval","layout":{"type":"default"}} -->
<div class="wp-block-group ss-kv__oval"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02.webp' ) ); ?>" alt="<?php echo esc_attr( shisei_clinic_t( 'a6e9bf1aa' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ss-ghost ss-ghost--a" aria-hidden="true"></div><div class="ss-ghost ss-ghost--b" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ss-kv__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ss-kv__copy"><!-- wp:heading {"level":1,"className":"ss-kv__h1"} -->
<h1 class="wp-block-heading ss-kv__h1"><span><?php echo wp_kses_post( shisei_clinic_t( 'kc6738c23' ) ); ?></span> <span><?php echo wp_kses_post( shisei_clinic_t( 'k49077e8e' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-kv__lead"} -->
<p class="ss-kv__lead"><?php echo wp_kses_post( shisei_clinic_t( 'k66b9017c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-more"} -->
<p class="ss-more"><a href="/first-visit/"><?php echo wp_kses_post( shisei_clinic_t( 'ke7b8a5d6' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="ss-kv__mark" aria-hidden="true"><?php echo wp_kses_post( shisei_clinic_t( 'k6002d762' ) ); ?></p>
<!-- /wp:html --></section>
<!-- /wp:group -->
