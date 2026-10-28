<?php
/**
 * Title: Inner: shop
 * Slug: kama-cookware/inner-shop
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Description: Shop: a wide product slab on the pale stage, material pills and a 3-column product grid.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--phead"><!-- wp:group {"className":"km-wrap km-phead km-phead--slab","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap km-phead km-phead--slab"><!-- wp:group {"className":"km-phead__t","layout":{"type":"default"}} -->
<div class="wp-block-group km-phead__t"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'shop_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-h2 km-h1"} -->
<h1 class="wp-block-heading km-h2 km-h1"><?php echo esc_html( kama_cookware_t( 'shop_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kama_cookware_t( 'shop_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<img class="km-phead__slab" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P01.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p01' ) ); ?>" width="1400" height="667" loading="eager"/>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--shop","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--shop"><!-- wp:group {"className":"km-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap"><!-- wp:group {"className":"km-shop__intro","layout":{"type":"default"}} -->
<div class="wp-block-group km-shop__intro"><!-- wp:heading {"className":"km-h2 km-h2--s"} -->
<h2 class="wp-block-heading km-h2 km-h2--s"><?php echo esc_html( kama_cookware_t( 'shop_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kama_cookware_t( 'shop_s1a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kama_cookware_t( 'shop_s1b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'shop_filter' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"km-pills km-filter"} -->
<div class="wp-block-buttons km-pills km-filter"><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="#m-carbon"><?php echo esc_html( kama_cookware_t( 'shop_m1' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="#m-iron"><?php echo esc_html( kama_cookware_t( 'shop_m2' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="#m-copper"><?php echo esc_html( kama_cookware_t( 'shop_m3' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="#m-enamel"><?php echo esc_html( kama_cookware_t( 'shop_m4' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"km-grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group km-grid sp-stagger"><!-- wp:group {"className":"km-card sp-reveal sp-reveal--up","anchor":"m-carbon"} -->
<div id="m-carbon" class="wp-block-group km-card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="km-card__img"><a href="<?php echo esc_url( home_url( '/carbon-steel-frying-pan/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P10.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p10' ) ); ?>" width="1000" height="1000" loading="lazy"/></a></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'shp1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><a href="<?php echo esc_url( home_url( '/carbon-steel-frying-pan/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'shp1_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price"} -->
<p class="km-price"><?php echo esc_html( kama_cookware_t( 'shp1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-card sp-reveal sp-reveal--up","anchor":"m-iron"} -->
<div id="m-iron" class="wp-block-group km-card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="km-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P02.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p02' ) ); ?>" width="1000" height="1000" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'shp2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'shp2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price"} -->
<p class="km-price"><?php echo esc_html( kama_cookware_t( 'shp2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-card sp-reveal sp-reveal--up","anchor":"m-copper"} -->
<div id="m-copper" class="wp-block-group km-card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="km-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P12.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p12' ) ); ?>" width="1000" height="1000" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'shp3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'shp3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price"} -->
<p class="km-price"><?php echo esc_html( kama_cookware_t( 'shp3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-card sp-reveal sp-reveal--up","anchor":"m-enamel"} -->
<div id="m-enamel" class="wp-block-group km-card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="km-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P04.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p04' ) ); ?>" width="1000" height="1000" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'shp4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'shp4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price"} -->
<p class="km-price"><?php echo esc_html( kama_cookware_t( 'shp4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-card sp-reveal sp-reveal--up"} -->
<div class="wp-block-group km-card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="km-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P05.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p05' ) ); ?>" width="1000" height="1000" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'shp5_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'shp5_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price"} -->
<p class="km-price"><?php echo esc_html( kama_cookware_t( 'shp5_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-card sp-reveal sp-reveal--up"} -->
<div class="wp-block-group km-card sp-reveal sp-reveal--up"><!-- wp:html -->
<figure class="km-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P06.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p06' ) ); ?>" width="1000" height="1000" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'shp6_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'shp6_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price"} -->
<p class="km-price"><?php echo esc_html( kama_cookware_t( 'shp6_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-shop__note","layout":{"type":"default"}} -->
<div class="wp-block-group km-shop__note"><!-- wp:heading {"className":"km-h2 km-h2--s"} -->
<h2 class="wp-block-heading km-h2 km-h2--s"><?php echo esc_html( kama_cookware_t( 'shop_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kama_cookware_t( 'shop_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"km-pills"} -->
<div class="wp-block-buttons km-pills"><!-- wp:button {"className":"km-pill km-pill--solid"} -->
<div class="wp-block-button km-pill km-pill--solid"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/repair-service/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'shop_cta1' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/which-pan/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'shop_cta2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
