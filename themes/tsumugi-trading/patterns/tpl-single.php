<?php
/**
 * Title: Article: one news post
 * Slug: tsumugi-trading/tpl-single
 * Categories: tsumugi-trading
 * Keywords: news, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One news post: category, date, title, the photograph, the text, tags and older and newer links.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"tt-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull tt-article"><!-- wp:group {"className":"tt-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group tt-article__head"><!-- wp:group {"className":"tt-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group tt-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( tsumugi_trading_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"tt-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"tt-article__picture"} /-->

<!-- wp:post-content {"className":"tt-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"tt-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group tt-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( tsumugi_trading_t( 'tpl_single_01' ) ); ?>,"className":"tt-tags"} /-->

<!-- wp:group {"className":"tt-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group tt-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( tsumugi_trading_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( tsumugi_trading_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tsumugi-trading/call-cta"} /-->
