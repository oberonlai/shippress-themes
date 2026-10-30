<?php
/**
 * Title: Notes list
 * Slug: kumoi-lodge/notes-list
 * Categories: kumoi-lodge
 * Keywords: lodge, notes, posts
 * Viewport Width: 1440
 * Description: Journal posts as hairline split rows: a 1.85:1 rounded photograph, then date and title on the left, a 1 px rule, the excerpt on the right.
 */
?>
<!-- wp:group {"className":"km-sec km-g-lichen","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull km-sec km-g-lichen"><!-- wp:group {"className":"km-col","layout":{"type":"default"}} -->
<div class="wp-block-group km-col"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","inherit":true},"className":"km-posts"} -->
<div class="wp-block-query km-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"km-room","layout":{"type":"default"}} -->
<div class="wp-block-group km-room"><!-- wp:post-featured-image {"isLink":true,"className":"km-photo km-photo--wide"} /-->
<!-- wp:group {"className":"km-split","layout":{"type":"default"}} -->
<div class="wp-block-group km-split"><!-- wp:group {"className":"km-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__l"><!-- wp:post-date {"className":"km-meta km-meta--head"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"km-card-title"} /--></div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="km-split__rule" aria-hidden="true"></span>
<!-- /wp:html -->
<!-- wp:group {"className":"km-split__r","layout":{"type":"default"}} -->
<div class="wp-block-group km-split__r"><!-- wp:post-excerpt {"moreText":"<?php echo esc_attr( kumoi_lodge_t( 'notes_read' ) ); ?> →","excerptLength":40,"className":"km-lead"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"km-pager","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kumoi_lodge_t( 'notes_none' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
