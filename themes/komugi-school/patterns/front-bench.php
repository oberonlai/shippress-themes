<?php
/**
 * Title: Home: chip bar and bench photograph
 * Slug: komugi-school/front-bench
 * Categories: komugi-school
 * Inserter: yes
 * Viewport Width: 1440
 * Description: First screen: a chip info bar over one top-down bench photograph that bleeds off the right edge, with a tilted schedule card on its lower-left corner.
 */
?>
<!-- wp:group {"className":"ks-bench","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group ks-bench"><!-- wp:group {"className":"ks-bar sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-bar sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-bar__in","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group ks-bar__in"><!-- wp:paragraph {"className":"is-style-chip-fill ks-chip"} -->
<p class="is-style-chip-fill ks-chip"><?php echo wp_kses_post( komugi_school_t( 'k72785c87' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-chip ks-chip"} -->
<p class="is-style-chip ks-chip"><?php echo wp_kses_post( komugi_school_t( 'k657e0bc7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-chip ks-chip"} -->
<p class="is-style-chip ks-chip"><?php echo wp_kses_post( komugi_school_t( 'k3310a56c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-chip ks-chip"} -->
<p class="is-style-chip ks-chip"><?php echo wp_kses_post( komugi_school_t( 'k32ed4a43' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bar__text"} -->
<p class="ks-bar__text"><?php echo wp_kses_post( komugi_school_t( 'k592a5222' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bar__date"} -->
<p class="ks-bar__date">2027.01.12</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bench__stage","layout":{"type":"default"}} -->
<div class="wp-block-group ks-bench__stage"><!-- wp:group {"className":"ks-bench__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ks-bench__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-bench__img"} -->
<figure class="wp-block-image size-full ks-bench__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-bench.webp' ) ); ?>" alt="<?php echo esc_attr( komugi_school_t( 'a494276ed' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bench__card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-bench__card sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-card","layout":{"type":"default"}} -->
<div class="wp-block-group ks-card"><!-- wp:heading {"level":1,"className":"ks-card__title"} -->
<h1 class="wp-block-heading ks-card__title"><?php echo wp_kses_post( komugi_school_t( 'k25ed83e9' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-card__body"} -->
<p class="ks-card__body"><?php echo wp_kses_post( komugi_school_t( 'k0fa8a8b6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-card__link"} -->
<p class="ks-card__link"><a href="<?php echo esc_url( home_url( '/training-day/' ) ); ?>"><?php echo wp_kses_post( komugi_school_t( 'k854e8c7e' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
