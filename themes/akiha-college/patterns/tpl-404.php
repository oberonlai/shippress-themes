<?php
/**
 * Title: 404
 * Slug: akiha-college/tpl-404
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Serif statement and a way back.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-pagehead"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 'nf_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ak-h1 ak-h1--page"} -->
<h1 class="wp-block-heading ak-h1 ak-h1--page"><?php echo esc_html( akiha_college_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ak-btns"} -->
<div class="wp-block-buttons ak-btns"><!-- wp:button {"className":"ak-btn"} -->
<div class="wp-block-button ak-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo akiha_college_url( '/' ); ?>"><?php echo esc_html( akiha_college_t( 'home_go' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->