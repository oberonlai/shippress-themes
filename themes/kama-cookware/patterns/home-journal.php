<?php
/**
 * Title: Home: journal rows
 * Slug: kama-cookware/home-journal
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Description: Three hairline journal rows with numerals.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--journal"><!-- wp:group {"className":"km-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap"><!-- wp:group {"className":"km-people__head","layout":{"type":"default"}} -->
<div class="wp-block-group km-people__head"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'jo_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-h2"} -->
<h2 class="wp-block-heading km-h2"><?php echo esc_html( kama_cookware_t( 'jo_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-rows","layout":{"type":"default"}} -->
<div class="wp-block-group km-rows"><!-- wp:group {"className":"km-row km-row--j sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-row km-row--j sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'jo1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><a href="<?php echo esc_url( home_url( '/a-40-year-old-skillet-re-seasoned/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'jo1_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-row__p"} -->
<p class="km-row__p"><?php echo esc_html( kama_cookware_t( 'jo1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-row km-row--j sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-row km-row--j sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'jo2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><a href="<?php echo esc_url( home_url( '/servicing-a-cafes-six-carbon-pans/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'jo2_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-row__p"} -->
<p class="km-row__p"><?php echo esc_html( kama_cookware_t( 'jo2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-row km-row--j sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-row km-row--j sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'jo3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><a href="<?php echo esc_url( home_url( '/re-tinning-copper-for-a-wedding-gift/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'jo3_t' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-row__p"} -->
<p class="km-row__p"><?php echo esc_html( kama_cookware_t( 'jo3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"km-pill-wrap"} -->
<div class="wp-block-buttons km-pill-wrap"><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'jo_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
