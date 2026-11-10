<?php
/**
 * Title: Template: search
 * Slug: toso-paints/tpl-search
 * Categories: toso-paints
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"tp-main","layout":{"type":"default"}} -->
<main class="wp-block-group tp-main"><!-- wp:group {"align":"full","className":"tp-sec tp-journal tp-archive","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull tp-sec tp-journal tp-archive"><!-- wp:query-title {"type":"search","level":1,"className":"tp-page__title"} /-->

<!-- wp:search {"label":"<?php echo esc_attr( toso_paints_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( toso_paints_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"tp-rows"} -->
<div class="wp-block-query tp-rows"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true,"className":"tp-row__title"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( toso_paints_t( 'ke8e18f4a' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->