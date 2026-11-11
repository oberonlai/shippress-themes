<?php
/**
 * Title: Template: single
 * Slug: nagisa-grill/tpl-single
 * Categories: nagisa-grill
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ng-main ng-main--plain","layout":{"type":"default"}} -->
<main class="wp-block-group ng-main ng-main--plain"><!-- wp:group {"className":"ng-article__head"} -->
<div class="wp-block-group ng-article__head"><!-- wp:pattern {"slug":"nagisa-grill/tide-mark"} /-->

<!-- wp:post-terms {"term":"category","className":"ng-label__t"} /-->

<!-- wp:post-title {"level":1,"className":"ng-article__title","fontSize":"x-large"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( nagisa_grill_t( 'date_fmt' ) ); ?>","className":"ng-card__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","scale":"cover","className":"ng-article__img"} /-->

<!-- wp:post-content {"className":"ng-prose ng-article","layout":{"type":"default"}} /-->

<!-- wp:group {"className":"ng-article__terms"} -->
<div class="wp-block-group ng-article__terms"><!-- wp:post-terms {"term":"post_tag","className":"ng-label__t"} /-->

<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"className":"ng-link"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->