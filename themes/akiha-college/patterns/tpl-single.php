<?php
/**
 * Title: Journal entry
 * Slug: akiha-college/tpl-single
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Category label, serif title, date, the featured photograph in the framed window, the text and neighbouring entries.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"ak-sec ak-article","layout":{"type":"default"}} -->
<article class="wp-block-group alignfull ak-sec ak-article"><!-- wp:group {"className":"ak-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ak-pagehead"><!-- wp:post-terms {"term":"category","className":"ak-label"} /-->

<!-- wp:post-title {"level":1,"className":"ak-h1 ak-h1--page"} /-->

<!-- wp:post-date {"format":"j F Y","className":"ak-post__meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"2.42/1","className":"ak-window"} /-->

<!-- wp:post-content {"className":"ak-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"ak-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group ak-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"ak-tags"} /-->

<!-- wp:group {"className":"ak-post-nav","layout":{"type":"default"}} -->
<div class="wp-block-group ak-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( akiha_college_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( akiha_college_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->