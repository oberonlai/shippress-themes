<?php
/**
 * Title: Home: visit and hours
 * Slug: kama-cookware/home-visit
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Description: Text left, hours and address right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--visit"><!-- wp:group {"className":"km-wrap km-visit","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap km-visit"><!-- wp:group {"className":"km-visit__l","layout":{"type":"default"}} -->
<div class="wp-block-group km-visit__l"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'vi_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-h2"} -->
<h2 class="wp-block-heading km-h2"><?php echo esc_html( kama_cookware_t( 'vi_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kama_cookware_t( 'vi_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"km-pill-wrap"} -->
<div class="wp-block-buttons km-pill-wrap"><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'vi_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-visit__r sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-visit__r sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-visit__big"} -->
<p class="km-visit__big"><?php echo esc_html( kama_cookware_t( 'vi_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-visit__t"} -->
<p class="km-visit__t"><?php echo esc_html( kama_cookware_t( 'vi_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-visit__t"} -->
<p class="km-visit__t"><?php echo esc_html( kama_cookware_t( 'vi_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-visit__t"} -->
<p class="km-visit__t"><?php echo esc_html( kama_cookware_t( 'vi_h3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
