<?php
/**
 * Title: Page not found
 * Slug: hako-capsule/tpl-404
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: A short not-found page with a link back to the home page.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--404","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--404"><!-- wp:group {"className":"hk-title","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'nf_h1' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group hk-narrow"><!-- wp:paragraph {"className":"hk-body"} -->
<p class="hk-body"><?php echo esc_html( hako_capsule_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-pill hk-pill--line"} -->
<p class="hk-pill hk-pill--line"><a href="<?php echo hako_capsule_url( '/' ); ?>"><?php echo esc_html( hako_capsule_t( 'nf_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
