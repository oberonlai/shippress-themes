<?php
/**
 * Title: Home: first screen, photo left, notice card, day line
 * Slug: kango-college/front-hero
 * Categories: kango-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero"><!-- wp:group {"className":"kc-hero__photo sp-parallax","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h1-lab-reading.webp' ) ); ?>" alt="<?php echo esc_attr( kango_college_t( 'af8271a5a' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><?php echo wp_kses_post( kango_college_t( 'ke9a29590' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-hero__h1"} -->
<h1 class="wp-block-heading kc-hero__h1"><?php echo wp_kses_post( kango_college_t( 'k71eda64a' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-hero__lead"} -->
<p class="kc-hero__lead"><?php echo wp_kses_post( kango_college_t( 'keb33eb80' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-link"} -->
<p class="kc-link"><a href="<?php echo esc_url( home_url( '/teaching-day/' ) ); ?>"><?php echo wp_kses_post( kango_college_t( 'k4f37e98e' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:paragraph {"className":"kc-card__kicker"} -->
<p class="kc-card__kicker"><?php echo wp_kses_post( kango_college_t( 'k942c547e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-card__title"} -->
<p class="kc-card__title"><?php echo wp_kses_post( kango_college_t( 'kb00f513b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card__tagrow","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group kc-card__tagrow"><!-- wp:paragraph {"className":"kc-card__tag"} -->
<p class="kc-card__tag"><?php echo wp_kses_post( kango_college_t( 'k1ddf333c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-card__year"} -->
<p class="kc-card__year">2027</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-card__dates"} -->
<p class="kc-card__dates">2.15<sup><?php echo wp_kses_post( kango_college_t( 'kfd29458a' ) ); ?></sup> <span class="kc-arr">▸</span> 3.31<sup><?php echo wp_kses_post( kango_college_t( 'k510c292b' ) ); ?></sup></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-card__open"} -->
<p class="kc-card__open"><?php echo wp_kses_post( kango_college_t( 'k221fae2d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-card__close"} -->
<p class="kc-card__close"><?php echo wp_kses_post( kango_college_t( 'kd9058695' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-card__cta"} -->
<p class="kc-card__cta"><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>"><?php echo wp_kses_post( kango_college_t( 'kd1a9a1e1' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"kc-dayline"} -->
<ul class="wp-block-list kc-dayline"><!-- wp:list-item -->
<li><span>08:00</span> <?php echo wp_kses_post( kango_college_t( 'k857926ac' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>08:30</span> <?php echo wp_kses_post( kango_college_t( 'k39fb924f' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>10:30</span> <?php echo wp_kses_post( kango_college_t( 'kc29f8002' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>12:30</span> <?php echo wp_kses_post( kango_college_t( 'kf1e8a2ee' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>13:30</span> <?php echo wp_kses_post( kango_college_t( 'kc5420a7a' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>15:30</span> <?php echo wp_kses_post( kango_college_t( 'kcf8c224d' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></section>
<!-- /wp:group -->
