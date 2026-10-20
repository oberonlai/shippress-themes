<?php
/**
 * Title: Article: one journal post
 * Slug: hatsumei-patent/tpl-single
 * Categories: hatsumei-patent
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal post: category, date, title, the photograph, the text, tags and older and newer links.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"hp-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull hp-article"><!-- wp:group {"className":"hp-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group hp-article__head"><!-- wp:group {"className":"hp-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hp-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( hatsumei_patent_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"hp-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hp-article__picture hp-cover__media","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-article__picture hp-cover__media"><!-- wp:post-featured-image {"aspectRatio":"16/9","className":"hp-cut hp-cut--a"} /-->

<!-- wp:paragraph {"className":"hp-num-cap"} -->
<p class="hp-num-cap"><span>(001)</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-content {"className":"hp-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"hp-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hp-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( hatsumei_patent_t( 'tpl_single_01' ) ); ?>,"className":"hp-tags"} /-->

<!-- wp:group {"className":"hp-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group hp-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hatsumei_patent_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( hatsumei_patent_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hatsumei-patent/call-cta"} /-->
