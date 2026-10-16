<?php
/**
 * Title: Journal note
 * Slug: soroban-kaikei/tpl-single
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "sk-section sk-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull sk-section sk-article"><!-- wp:group {"className": "sk-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-article__head"><!-- wp:post-terms {"term":"category","className":"sk-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"sk-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"sk-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"sk-photo"} /-->

<!-- wp:post-content {"className":"sk-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "sk-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"sk-tags"} /-->

<!-- wp:group {"className": "sk-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( soroban_kaikei_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( soroban_kaikei_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
