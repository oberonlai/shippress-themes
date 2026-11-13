<?php
/**
 * Title: Search results
 * Slug: hatoba-college/tpl-search
 * Categories: hatoba-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Search head and ruled results.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-sec hc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-sec hc-pagehead"><!-- wp:paragraph {"className":"hc-label"} -->
<p class="hc-label"><?php echo esc_html( hatoba_college_t( 's_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","className":"hc-h1 hc-h1--page"} /-->

<!-- wp:search {"label":<?php echo wp_json_encode( hatoba_college_t( 's_label' ) ); ?>,"showLabel":false,"buttonText":<?php echo wp_json_encode( hatoba_college_t( 's_btn' ) ); ?>,"className":"hc-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hc-sec hc-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-sec hc-list"><!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"hc-posts"} -->
<div class="wp-block-query hc-posts"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true,"className":"hc-post__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hatoba_college_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->