<?php
/**
 * Title: Template: 404
 * Slug: mebuki-college/tpl-404
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Inserter: false
 * Description: Not-found message with a button home.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-pagehead mb-pagehead--404","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-pagehead mb-pagehead--404"><!-- wp:group {"className":"mb-wrap mb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap mb-pagehead__in"><!-- wp:paragraph {"className":"mb-eyebrow"} -->
<p class="mb-eyebrow"><?php echo esc_html( mebuki_college_t( 'nf_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"mb-pagehead__h"} -->
<h1 class="wp-block-heading mb-pagehead__h"><?php echo esc_html( mebuki_college_t( 'nf_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-secline mb-secline--left"} -->
<p class="mb-secline mb-secline--left"><?php echo esc_html( mebuki_college_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mb-btn"} -->
<div class="wp-block-button mb-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'nf_b' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
