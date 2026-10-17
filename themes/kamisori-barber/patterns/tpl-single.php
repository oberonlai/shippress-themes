<?php
/**
 * Title: Journal note
 * Slug: kamisori-barber/tpl-single
 * Categories: kamisori-barber
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "kb-section kb-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull kb-section kb-article"><!-- wp:group {"className": "kb-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-article__head"><!-- wp:post-terms {"term":"category","className":"kb-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"kb-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"kb-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"kb-photo"} /-->

<!-- wp:post-content {"className":"kb-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "kb-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"kb-tags"} /-->

<!-- wp:group {"className": "kb-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( kamisori_barber_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( kamisori_barber_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
