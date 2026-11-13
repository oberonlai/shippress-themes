<?php
/**
 * Title: Search results
 * Slug: akiha-college/tpl-search
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Search head and ruled results.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-pagehead"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akiha_college_t( 's_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","className":"ak-h1 ak-h1--page"} /-->

<!-- wp:search {"label":<?php echo wp_json_encode( akiha_college_t( 's_label' ) ); ?>,"showLabel":false,"buttonText":<?php echo wp_json_encode( akiha_college_t( 's_btn' ) ); ?>,"className":"ak-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-list"><!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ak-posts"} -->
<div class="wp-block-query ak-posts"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ak-post__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( akiha_college_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->