<?php
/**
 * Title: Template: single
 * Slug: getsuji-payroll/tpl-single
 * Categories: getsuji-payroll
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"gp-phead sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull gp-phead sp-parallax"><!-- wp:post-featured-image {"className":"gp-phead__photo"} /-->

<!-- wp:paragraph {"className":"gp-phead__label"} -->
<p class="gp-phead__label"><?php echo wp_kses_post( getsuji_payroll_t( 'k011e7681' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gp-phead__bar","layout":{"type":"default"}} -->
<div class="wp-block-group gp-phead__bar"><!-- wp:group {"className":"gp-note__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group gp-note__meta"><!-- wp:post-date {"format":"Y-m-d","className":"gp-note__date"} /-->

<!-- wp:post-terms {"term":"category","className":"gp-tag"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"gp-phead__h1 gp-phead__h1--post"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","className":"gp-main gp-article","layout":{"type":"default"}} -->
<main class="wp-block-group gp-main gp-article"><!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:buttons {"className":"gp-article__back"} -->
<div class="wp-block-buttons gp-article__back"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/notes/"><?php echo wp_kses_post( getsuji_payroll_t( 'k67bfaf2f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></main>
<!-- /wp:group -->