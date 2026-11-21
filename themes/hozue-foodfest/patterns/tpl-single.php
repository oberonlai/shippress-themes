<?php
/**
 * Title: Template: single
 * Slug: hozue-foodfest/tpl-single
 * Categories: hozue-foodfest
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hf-main","layout":{"type":"default"}} -->
<main class="wp-block-group hf-main"><!-- wp:group {"tagName":"section","align":"full","className":"hf-sec hf-sec--ground hf-article","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hf-sec hf-sec--ground hf-article"><!-- wp:group {"className":"hf-wrap hf-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group hf-wrap hf-wrap--narrow"><!-- wp:post-terms {"term":"category","className":"hf-stamp"} /-->

<!-- wp:post-title {"level":1,"className":"hf-h2 hf-article__h"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( hozue_foodfest_t( 'date_fmt' ) ); ?>","className":"hf-stamp"} /-->

<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"hf-article__img"} /-->

<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"hf-tags"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->