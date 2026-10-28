<?php
/**
 * Title: Home: featured pans masonry
 * Slug: kama-cookware/home-featured
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Description: Two offset columns of product cards and a text card.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--feat","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--feat"><!-- wp:group {"className":"km-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap"><!-- wp:group {"className":"km-feat__head","layout":{"type":"default"}} -->
<div class="wp-block-group km-feat__head"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'ft_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-h2"} -->
<h2 class="wp-block-heading km-h2"><?php echo esc_html( kama_cookware_t( 'ft_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"km-pill-wrap"} -->
<div class="wp-block-buttons km-pill-wrap"><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'ft_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-masonry","layout":{"type":"default"}} -->
<div class="wp-block-group km-masonry"><!-- wp:group {"className":"km-col km-col--a sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group km-col km-col--a sp-stagger"><!-- wp:group {"className":"km-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="km-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P10.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p10' ) ); ?>" width="1000" height="1000" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:group {"className":"km-card__meta","layout":{"type":"default"}} -->
<div class="wp-block-group km-card__meta"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'f01_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'f01_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price"} -->
<p class="km-price"><?php echo esc_html( kama_cookware_t( 'f01_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-card__p"} -->
<p class="km-card__p"><?php echo esc_html( kama_cookware_t( 'f01_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="km-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P13.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p13' ) ); ?>" width="1000" height="1000" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:group {"className":"km-card__meta","layout":{"type":"default"}} -->
<div class="wp-block-group km-card__meta"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'f03_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'f03_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price"} -->
<p class="km-price"><?php echo esc_html( kama_cookware_t( 'f03_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-card__p"} -->
<p class="km-card__p"><?php echo esc_html( kama_cookware_t( 'f03_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-col km-col--b sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group km-col km-col--b sp-stagger"><!-- wp:group {"className":"km-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="km-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P12.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p12' ) ); ?>" width="1000" height="1000" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:group {"className":"km-card__meta","layout":{"type":"default"}} -->
<div class="wp-block-group km-card__meta"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'f02_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'f02_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price"} -->
<p class="km-price"><?php echo esc_html( kama_cookware_t( 'f02_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-card__p"} -->
<p class="km-card__p"><?php echo esc_html( kama_cookware_t( 'f02_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-card km-card--text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-card km-card--text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'f04_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'f04_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-card__p"} -->
<p class="km-card__p"><?php echo esc_html( kama_cookware_t( 'f04_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"km-pills"} -->
<div class="wp-block-buttons km-pills"><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/repair-service/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'f04_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
