<?php
/**
 * Title: Home: journal and contact
 * Slug: nami-staffing/latest-journal
 * Categories: nami-staffing
 * Keywords: journal, posts, latest
 * Viewport Width: 1440
 * Description: The latest journal heading and link, with the office details and the enquiry button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ns-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-section"><!-- wp:group {"align":"wide","className":"ns-row-head ns-row-head--end","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-row-head ns-row-head--end"><!-- wp:group {"className":"ns-row-head__title","layout":{"type":"default"}} -->
<div class="wp-block-group ns-row-head__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( nami_staffing_t( 'latest_journal_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( nami_staffing_t( 'latest_journal_02' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( nami_staffing_t( 'latest_journal_03' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ns-posts"} -->
<div class="wp-block-query alignwide ns-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"ns-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ns-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( nami_staffing_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ns-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
