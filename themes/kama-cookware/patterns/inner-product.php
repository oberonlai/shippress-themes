<?php
/**
 * Title: Inner: product page
 * Slug: kama-cookware/inner-product
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Description: Product page: square gallery left, price, specifications and care text right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--product","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--product"><!-- wp:group {"className":"km-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap"><!-- wp:group {"className":"km-prod","layout":{"type":"default"}} -->
<div class="wp-block-group km-prod"><!-- wp:html -->
<div class="km-gal"><figure class="km-gal__main"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P10.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p10' ) ); ?>" width="1000" height="1000" loading="eager"/></figure><div class="km-gal__thumbs"><figure><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P14.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p14' ) ); ?>" width="900" height="1200" loading="lazy"/></figure><figure><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P17.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p17' ) ); ?>" width="900" height="1200" loading="lazy"/></figure></div></div>
<!-- /wp:html -->

<!-- wp:group {"className":"km-prod__t","layout":{"type":"default"}} -->
<div class="wp-block-group km-prod__t"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'prd_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-h2 km-h2--s km-h1"} -->
<h1 class="wp-block-heading km-h2 km-h2--s km-h1"><?php echo esc_html( kama_cookware_t( 'prd_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-price km-price--l"} -->
<p class="km-price km-price--l"><?php echo esc_html( kama_cookware_t( 'prd_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kama_cookware_t( 'prd_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"km-kvs","layout":{"type":"default"}} -->
<div class="wp-block-group km-kvs"><!-- wp:paragraph {"className":"km-kv"} -->
<p class="km-kv"><span><?php echo esc_html( kama_cookware_t( 'prd_k1l' ) ); ?></span><span><?php echo esc_html( kama_cookware_t( 'prd_k1v' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-kv"} -->
<p class="km-kv"><span><?php echo esc_html( kama_cookware_t( 'prd_k2l' ) ); ?></span><span><?php echo esc_html( kama_cookware_t( 'prd_k2v' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-kv"} -->
<p class="km-kv"><span><?php echo esc_html( kama_cookware_t( 'prd_k3l' ) ); ?></span><span><?php echo esc_html( kama_cookware_t( 'prd_k3v' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-kv"} -->
<p class="km-kv"><span><?php echo esc_html( kama_cookware_t( 'prd_k4l' ) ); ?></span><span><?php echo esc_html( kama_cookware_t( 'prd_k4v' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"km-pills"} -->
<div class="wp-block-buttons km-pills"><!-- wp:button {"className":"km-pill km-pill--solid"} -->
<div class="wp-block-button km-pill km-pill--solid"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/seasoning-care/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'prd_cta1' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'prd_cta2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--steps","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--steps"><!-- wp:group {"className":"km-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap"><!-- wp:group {"className":"km-rows","layout":{"type":"default"}} -->
<div class="wp-block-group km-rows"><!-- wp:group {"className":"km-row km-row--j sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-row km-row--j sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'prd_s1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'prd_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-row__p"} -->
<p class="km-row__p"><?php echo esc_html( kama_cookware_t( 'prd_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-row km-row--j sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-row km-row--j sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'prd_s2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'prd_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-row__p"} -->
<p class="km-row__p"><?php echo esc_html( kama_cookware_t( 'prd_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
