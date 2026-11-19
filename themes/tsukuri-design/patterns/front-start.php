<?php
/**
 * Title: Home: start a project
 * Slug: tsukuri-design/front-start
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: The single way in: a discovery workshop, with a short facts list and one square button, on the strip colour.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-start","anchor":"start","layout":{"type":"default"}} -->
<section id="start" class="wp-block-group alignfull td-start"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'l_start' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-start__cols","layout":{"type":"default"}} -->
<div class="wp-block-group td-start__cols"><!-- wp:paragraph {"className":"td-start__p"} -->
<p class="td-start__p"><?php echo esc_html( tsukuri_design_t( 'st_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"td-start__side","layout":{"type":"default"}} -->
<div class="wp-block-group td-start__side"><!-- wp:paragraph {"className":"td-facts td-facts--list"} -->
<p class="td-facts td-facts--list"><?php echo esc_html( tsukuri_design_t( 'st_f1' ) ); ?><br><?php echo esc_html( tsukuri_design_t( 'st_f2' ) ); ?><br><a href="tel:+00315550172"><?php echo esc_html( tsukuri_design_t( 'st_f3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"td-btns"} -->
<div class="wp-block-buttons td-btns"><!-- wp:button {"className":"td-btn"} -->
<div class="wp-block-button td-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/start/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
