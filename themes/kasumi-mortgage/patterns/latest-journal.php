<?php
/**
 * Title: Journal: latest three
 * Slug: kasumi-mortgage/latest-journal
 * Categories: kasumi-mortgage
 * Keywords: journal, posts, latest
 * Viewport Width: 1440
 * Description: The three latest journal posts with photographs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section"><!-- wp:group {"align":"wide","className":"km-row-head km-row-head--end","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-row-head km-row-head--end"><!-- wp:group {"className":"km-row-head__title","layout":{"type":"default"}} -->
<div class="wp-block-group km-row-head__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'latest_journal_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( kasumi_mortgage_t( 'latest_journal_02' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( kasumi_mortgage_t( 'latest_journal_03' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"km-posts"} -->
<div class="wp-block-query alignwide km-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"km-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group km-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( kasumi_mortgage_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"km-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
