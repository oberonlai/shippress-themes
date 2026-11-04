<?php
/**
 * Title: Template: news (posts page)
 * Slug: kanjo-college/tpl-home
 * Categories: kanjo-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main kc-inner","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main kc-inner"><?php echo kanjo_college_head( array( 'chip' => kanjo_college_t( 'news_chip' ), 'title' => kanjo_college_t( 'news_title' ), 'lead' => kanjo_college_t( 'news_lead' ), 'photo' => 18, 'alt' => kanjo_college_t( 'news_alt' ), 'cap' => kanjo_college_t( 'news_cap' ), 'idx' => '09' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:query {"queryId":9,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kc-in kc-rows"} -->
<div class="wp-block-query kc-in kc-rows"><!-- wp:post-template -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row"><!-- wp:post-date {"format":"j M Y","className":"kc-row__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kc-row__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-row__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kanjo_college_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->