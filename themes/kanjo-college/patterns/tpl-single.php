<?php
/**
 * Title: Template: single
 * Slug: kanjo-college/tpl-single
 * Categories: kanjo-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main kc-page","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main kc-page"><!-- wp:group {"className":"kc-in kc-page__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-in kc-page__head"><!-- wp:post-terms {"term":"category","className":"kc-row__cat"} /-->

<!-- wp:post-title {"level":1,"className":"kc-h1 kc-h1--page"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( kanjo_college_t( 'date_fmt' ) ); ?>","className":"kc-row__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"kc-in kc-single__img"} /-->

<!-- wp:post-content {"className":"kc-in kc-prose","layout":{"type":"constrained"}} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"Tags: ","className":"kc-in kc-prose kc-tags"} /-->

<!-- wp:buttons {"className":"kc-in kc-single__back"} -->
<div class="wp-block-buttons kc-in kc-single__back"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/news/"><?php echo wp_kses_post( kanjo_college_t( 'kce9ad477' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></main>
<!-- /wp:group -->