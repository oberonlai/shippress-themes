<?php
/**
 * Title: Template: journal (posts page)
 * Slug: enkai-rooms/tpl-home
 * Categories: enkai-rooms
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"er-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull er-main"><!-- wp:group {"align":"full","className":"er-titleband","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-titleband"><!-- wp:heading {"level":1,"className":"er-titleband__h"} -->
<h1 class="wp-block-heading er-titleband__h"><?php echo esc_html( enkai_rooms_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"er-titleband__sub"} -->
<p class="er-titleband__sub"><?php echo esc_html( enkai_rooms_t( 'journal_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"er-season","layout":{"type":"default"}} -->
<div class="wp-block-group er-season"><!-- wp:paragraph {"className":"er-season__a"} -->
<p class="er-season__a"><?php echo wp_kses_post( enkai_rooms_t( 'season_journal_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-season__b"} -->
<p class="er-season__b"><?php echo wp_kses_post( enkai_rooms_t( 'season_journal_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"er-list"} -->
<div class="wp-block-query er-list"><!-- wp:post-template -->
<!-- wp:group {"className":"er-listrow","layout":{"type":"default"}} -->
<div class="wp-block-group er-listrow"><!-- wp:post-date {"format":"<?php echo esc_attr( enkai_rooms_t( 'date_fmt' ) ); ?>","className":"er-listrow__d"} /-->

<!-- wp:post-terms {"term":"category","className":"er-listrow__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"er-listrow__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
