<?php
/**
 * Title: Template: single
 * Slug: budou-academy/tpl-single
 * Categories: budou-academy
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ba-main ba-main--front","layout":{"type":"constrained"}} -->
<main class="wp-block-group ba-main ba-main--front"><!-- wp:group {"tagName":"section","align":"full","className":"ba-ihead ba-ihead--plain ba-ihead--single","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ba-ihead ba-ihead--plain ba-ihead--single"><!-- wp:group {"className":"ba-ihead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ba-ihead__in"><!-- wp:group {"className":"ba-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group ba-ihead__text"><!-- wp:post-terms {"term":"category","className":"ba-dotlabel"} /-->

<!-- wp:post-title {"level":1,"className":"ba-ih1 ba-ih1--post"} /-->

<!-- wp:post-date {"className":"ba-ihead__intro"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ba-article","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ba-article"><!-- wp:post-featured-image {"aspectRatio":"3/2","className":"ba-article__img"} /-->

<!-- wp:post-content {"className":"ba-article__text","layout":{"type":"default"}} /-->

<!-- wp:buttons {"className":"ba-article__back","layout":{"type":"flex"}} -->
<div class="wp-block-buttons ba-article__back"><!-- wp:button {"className":"is-style-ba-pale"} -->
<div class="wp-block-button is-style-ba-pale"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( budou_academy_t( 'k67bfaf2f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->