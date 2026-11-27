<?php
/**
 * Title: Journal list: title and post grid
 * Slug: sazanami-hotel/tpl-journal
 * Categories: sazanami-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts page, archive, category and tag: a large title and a three-column grid of posts.
 */
?>
<!-- wp:group {"tagName":"section","className":"sz-ch sz-ch--mist sz-inner","layout":{"type":"default"}} -->
<section class="wp-block-group sz-ch sz-ch--mist sz-inner"><!-- wp:group {"className":"sz-inner__head","layout":{"type":"default"}} -->
<div class="wp-block-group sz-inner__head"><!-- wp:html -->
<span class="sz-wave-wrap" aria-hidden="true"><?php echo sazanami_hotel_icon( 'wave', 'sz-wave' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":1,"className":"sz-h1 sz-h1--inner"} -->
<h1 class="wp-block-heading sz-h1 sz-h1--inner"><?php echo esc_html( sazanami_hotel_t( 'w_journal' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-verse"} -->
<p class="sz-verse"><?php echo esc_html( sazanami_hotel_t( 'journal_label' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":8,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"sz-posts sz-posts--list"} -->
<div class="wp-block-query sz-posts sz-posts--list"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sz-post__img"} /-->

<!-- wp:post-date {"className":"sz-post__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sz-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":24,"className":"sz-post__x"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

</section>
<!-- /wp:group -->

