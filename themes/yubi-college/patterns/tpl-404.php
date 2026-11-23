<?php
/**
 * Title: Template: 404
 * Slug: yubi-college/tpl-404
 * Categories: yubi-college
 * Viewport Width: 1440
 * Inserter: false
 * Description: Not-found message with a button home.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-pagehead yb-pagehead--404","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-pagehead yb-pagehead--404"><!-- wp:group {"className":"yb-wrap yb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-pagehead__in"><!-- wp:paragraph {"className":"yb-kicker"} -->
<p class="yb-kicker"><?php echo esc_html( yubi_college_t( 'nf_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yb-pagehead__h"} -->
<h1 class="wp-block-heading yb-pagehead__h"><?php echo esc_html( yubi_college_t( 'nf_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"yb-sec yb-sec--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-sec yb-sec--white"><!-- wp:group {"className":"yb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap"><!-- wp:paragraph {"className":"yb-secline yb-secline--left"} -->
<p class="yb-secline yb-secline--left"><?php echo esc_html( yubi_college_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"yb-pill"} -->
<div class="wp-block-button yb-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'nf_b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
