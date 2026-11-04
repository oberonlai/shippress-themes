<?php
/**
 * Title: Template: search
 * Slug: kanjo-college/tpl-search
 * Categories: kanjo-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main kc-page","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main kc-page"><!-- wp:group {"className":"kc-in kc-page__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-in kc-page__head"><!-- wp:query-title {"type":"search","level":1,"className":"kc-h1 kc-h1--page"} /-->

<!-- wp:search {"label":"<?php echo esc_attr( kanjo_college_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( kanjo_college_t( 'a13348442' ) ); ?>"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kc-in kc-rows"} -->
<div class="wp-block-query kc-in kc-rows"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-row__title"} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kanjo_college_t( 'k54c84466' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->