<?php
/**
 * Title: Home: the last train letter
 * Slug: hako-capsule/front-letter
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Description: Pale band with the letter heading and a short paragraph at the left and the newsletter form at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--letter","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--letter"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'let_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-letter","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-letter"><!-- wp:group {"className":"hk-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-letter__text"><!-- wp:heading {"level":3,"className":"hk-letter__h"} -->
<h3 class="wp-block-heading hk-letter__h"><?php echo esc_html( hako_capsule_t( 'let_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-letter__p"} -->
<p class="hk-letter__p"><?php echo esc_html( hako_capsule_t( 'let_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hako-capsule/letter-form"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
