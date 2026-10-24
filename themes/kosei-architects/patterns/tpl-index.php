<?php
/**
 * Title: Template: index
 * Slug: kosei-architects/tpl-index
 * Categories: kosei-architects
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<?php if ( is_home() ) : ?><?php endif; ?><!-- wp:group {"tagName":"main","className":"ks-in ks-main","layout":{"type":"default"}} -->
<main class="wp-block-group ks-in ks-main"><?php if ( ! is_home() ) : ?><!-- wp:query-title {"type":"archive","level":1,"className":"ks-pagetitle"} /--><?php else : ?><!-- wp:heading {"level":1,"className":"ks-pagetitle"} -->
<h1 class="wp-block-heading ks-pagetitle"><?php echo esc_html( kosei_architects_t( 'idx_h' ) ); ?></h1>
<!-- /wp:heading --><?php endif; ?><!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ks-posts"} -->
<div class="wp-block-query ks-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"ks-post","layout":{"type":"default"}} -->
<div class="wp-block-group ks-post"><!-- wp:post-featured-image {"isLink":true,"className":"ks-post__img"} /--><!-- wp:post-date {"format":"j M Y","className":"ks-meta"} /--><!-- wp:post-title {"level":2,"isLink":true,"className":"ks-post__t"} /--><!-- wp:post-excerpt {"excerptLength":28,"className":"ks-post__x"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --><!-- wp:query-pagination {"className":"ks-pager"} --><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-next /--><!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
