<?php
/**
 * Title: Home: dark statement band
 * Slug: tsukuri-design/front-why
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Dark band with a wide-tracked label, a hairline and one light statement about foam models.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"dark","textColor":"base","className":"td-why","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-why has-base-color has-dark-background-color has-text-color has-background"><!-- wp:group {"className":"td-open td-open--l","layout":{"type":"default"}} -->
<div class="wp-block-group td-open td-open--l"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'l_why' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-why__in sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-why__in sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-why__h"} -->
<p class="td-why__h"><?php echo esc_html( tsukuri_design_t( 'why_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-why__sub"} -->
<p class="td-why__sub"><?php echo esc_html( tsukuri_design_t( 'why_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
