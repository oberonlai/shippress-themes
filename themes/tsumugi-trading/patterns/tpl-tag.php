<?php
/**
 * Title: Tag: head and posts
 * Slug: tsumugi-trading/tpl-tag
 * Categories: tsumugi-trading
 * Keywords: news, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The news template: head, lead and its posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-head"><!-- wp:group {"align":"wide","className":"tt-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-head__grid"><!-- wp:group {"className":"tt-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group tt-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'tpl_tag_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"tt-head__title","showPrefix":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group tt-head__side"><!-- wp:term-description {"className":"is-style-lead"} /-->

<!-- wp:paragraph {"className":"tt-chips"} -->
<p class="tt-chips"><?php echo wp_kses_post( tsumugi_trading_t( 'tpl_archive_01' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tt-section tt-section--flush tt-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-section--flush tt-section--last"><!-- wp:query {"queryId":7,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"tt-posts"} -->
<div class="wp-block-query alignwide tt-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"tt-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group tt-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( tsumugi_trading_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"tt-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"tt-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( tsumugi_trading_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( tsumugi_trading_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( tsumugi_trading_t( 'tpl_archive_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
