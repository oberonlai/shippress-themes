<?php
/**
 * Title: Home: wordmark hero with photo bottom half
 * Slug: satei-adjusters/front-hero
 * Categories: satei-adjusters
 * Inserter: yes
 * Viewport Width: 1440
 * Description: Top half: label, SATEI wordmark and lead; bottom half: low-key photograph bleeding right with a statement bottom-right and the desk address bottom-left.
 */
?>
<!-- wp:group {"className":"sa-hero","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero" id="top">
<!-- wp:group {"className":"sa-in","layout":{"type":"default"}} -->
<div class="wp-block-group sa-in">
<!-- wp:group {"className":"sa-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero__top">
<!-- wp:group {"className":"sa-hero__l","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero__l">
<!-- wp:paragraph {"className":"sa-lab sa-hero__kick"} -->
<p class="sa-lab sa-hero__kick"><?php echo wp_kses_post( satei_adjusters_t( 'kefca77e5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-wordmark"} -->
<p class="sa-wordmark"><?php echo wp_kses_post( satei_adjusters_t( 'k829c8068' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-hero__r","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero__r">
<!-- wp:paragraph {"className":"sa-lead"} -->
<p class="sa-lead"><?php echo wp_kses_post( satei_adjusters_t( 'k13840e81' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-pill sa-pill--line"} -->
<p class="sa-pill sa-pill--line"><a href="/waitlist/"><?php echo wp_kses_post( satei_adjusters_t( 'k85685883' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero__photo">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero-skirting.webp' ) ); ?>","dimRatio":0,"isDark":true,"className":"sa-hero__cover sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light sa-hero__cover sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( satei_adjusters_t( 'a73aaff35' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-hero-skirting.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"sa-hero__fg","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero__fg">
<!-- wp:paragraph {"className":"sa-hero__addr"} -->
<p class="sa-hero__addr"><?php echo wp_kses_post( satei_adjusters_t( 'kea15b386' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sa-hero__stmt","layout":{"type":"default"}} -->
<div class="wp-block-group sa-hero__stmt">
<!-- wp:heading {"level":1,"className":"sa-hero__title"} -->
<h1 class="wp-block-heading sa-hero__title"><?php echo wp_kses_post( satei_adjusters_t( 'k1121b70c' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-hero__sub"} -->
<p class="sa-hero__sub"><?php echo wp_kses_post( satei_adjusters_t( 'k98f9d2cb' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
