<?php
/**
 * Title: Home: request a quote
 * Slug: ugoki-animation/quote-window
 * Categories: ugoki-animation
 * Viewport Width: 1440
 * Description: Dark inset window with the single call to action.
 */
?>
<!-- wp:group {"tagName":"section","className":"ug-quote ug-sec","layout":{"type":"default"}} -->
<section class="wp-block-group ug-quote ug-sec"><!-- wp:group {"className":"ug-qwin","layout":{"type":"default"}} -->
<div class="wp-block-group ug-qwin"><!-- wp:group {"className":"ug-quote__text","layout":{"type":"default"}} -->
<div class="wp-block-group ug-quote__text"><!-- wp:heading {"level":2,"className":"ug-h2 ug-h2--on-dark"} -->
<h2 class="wp-block-heading ug-h2 ug-h2--on-dark"><?php echo esc_html( ugoki_animation_t( 'q_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ug-quote__p"} -->
<p class="ug-quote__p"><?php echo esc_html( ugoki_animation_t( 'q_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-quote__act","layout":{"type":"default"}} -->
<div class="wp-block-group ug-quote__act"><!-- wp:buttons {"className":"ug-quote__btns","layout":{"type":"flex"}} -->
<div class="wp-block-buttons ug-quote__btns"><!-- wp:button {"className":"ug-quote__btn"} -->
<div class="wp-block-button ug-quote__btn"><a class="wp-block-button__link wp-element-button" href="/quote/"><?php echo esc_html( ugoki_animation_t( 'q_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ug-quote__mono"} -->
<p class="ug-quote__mono"><?php echo esc_html( ugoki_animation_t( 'q_mono' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-hud","layout":{"type":"default"}} -->
<div class="wp-block-group ug-hud"><!-- wp:group {"className":"ug-hud__l","layout":{"type":"default"}} -->
<div class="wp-block-group ug-hud__l"><!-- wp:html -->
<span class="ug-dot" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ugoki_animation_t( 'q_hud' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ug-hud__c"} -->
<p class="ug-hud__c"><?php echo esc_html( ugoki_animation_t( 'q_hud2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="ug-hud__r"><svg class="ug-ticks" width="120" height="12" viewBox="0 0 120 12" fill="currentColor" aria-hidden="true" focusable="false"><rect x="0" y="0" width="1" height="12"/><rect x="5" y="0" width="1" height="8"/><rect x="10" y="0" width="1" height="8"/><rect x="15" y="0" width="1" height="8"/><rect x="20" y="0" width="1" height="8"/><rect x="25" y="0" width="1" height="8"/><rect x="30" y="0" width="1" height="12"/><rect x="35" y="0" width="1" height="8"/><rect x="40" y="0" width="1" height="8"/><rect x="45" y="0" width="1" height="8"/><rect x="50" y="0" width="1" height="8"/><rect x="55" y="0" width="1" height="8"/><rect x="60" y="0" width="1" height="12"/><rect x="65" y="0" width="1" height="8"/><rect x="70" y="0" width="1" height="8"/><rect x="75" y="0" width="1" height="8"/><rect x="80" y="0" width="1" height="8"/><rect x="85" y="0" width="1" height="8"/><rect x="90" y="0" width="1" height="12"/><rect x="95" y="0" width="1" height="8"/><rect x="100" y="0" width="1" height="8"/><rect x="105" y="0" width="1" height="8"/><rect x="110" y="0" width="1" height="8"/><rect x="115" y="0" width="1" height="8"/></svg> <span class="ug-hud__of">24 fps</span></p>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
