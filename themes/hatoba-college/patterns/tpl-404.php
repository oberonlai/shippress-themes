<?php
/**
 * Title: 404
 * Slug: hatoba-college/tpl-404
 * Categories: hatoba-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Serif statement and a way back.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-sec hc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-sec hc-pagehead"><!-- wp:paragraph {"className":"hc-label"} -->
<p class="hc-label"><?php echo esc_html( hatoba_college_t( 'nf_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hc-h1 hc-h1--page"} -->
<h1 class="wp-block-heading hc-h1 hc-h1--page"><?php echo esc_html( hatoba_college_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-body"} -->
<p class="hc-body"><?php echo esc_html( hatoba_college_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-btns"} -->
<div class="wp-block-buttons hc-btns"><!-- wp:button {"className":"hc-btn"} -->
<div class="wp-block-button hc-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo hatoba_college_url( '/' ); ?>"><?php echo esc_html( hatoba_college_t( 'home_go' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->