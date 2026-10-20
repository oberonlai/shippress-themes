<?php
/**
 * Title: Home: head office and contact
 * Slug: tsumugi-trading/latest-journal
 * Categories: tsumugi-trading
 * Keywords: news, posts, latest
 * Viewport Width: 1440
 * Description: A photograph of the harbour pier beside the head office address, the Pier 9 warehouse and the enquiry button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tt-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tt-section"><!-- wp:group {"align":"wide","className":"tt-row-head tt-row-head--end","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tt-row-head tt-row-head--end"><!-- wp:group {"className":"tt-row-head__title","layout":{"type":"default"}} -->
<div class="wp-block-group tt-row-head__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( tsumugi_trading_t( 'latest_journal_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( tsumugi_trading_t( 'latest_journal_02' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/news/"><?php echo wp_kses_post( tsumugi_trading_t( 'latest_journal_03' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"tt-posts"} -->
<div class="wp-block-query alignwide tt-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"tt-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group tt-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( tsumugi_trading_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tt-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
