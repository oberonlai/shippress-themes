<?php
/**
 * Title: Template: archive
 * Slug: akane-house/tpl-archive
 * Categories: akane-house
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"ak-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull ak-main"><!-- wp:group {"align":"full","className":"ak-chapter ak-archive","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ak-chapter ak-archive"><!-- wp:group {"className":"ak-chapter__head","layout":{"type":"default"}} -->
<div class="wp-block-group ak-chapter__head"><!-- wp:paragraph {"className":"ak-chapter__n"} -->
<p class="ak-chapter__n">10/</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-chapter__t"} -->
<p class="ak-chapter__t"><?php echo wp_kses_post( akane_house_t( 'k53bb9736' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ak-journal__list"} -->
<div class="wp-block-query ak-journal__list"><!-- wp:post-template -->
<!-- wp:group {"className":"ak-row","layout":{"type":"default"}} -->
<div class="wp-block-group ak-row"><!-- wp:post-date {"format":"<?php echo esc_attr( akane_house_t( 'date_fmt' ) ); ?>","className":"ak-row__d"} /-->

<!-- wp:post-terms {"term":"category","className":"ak-row__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ak-row__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"akane-house/front-reserve"} /--></main>
<!-- /wp:group -->