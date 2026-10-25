<?php
/**
 * Title: Template: index
 * Slug: kiban-structural/tpl-index
 * Categories: kiban-structural
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<?php if ( is_home() ) : ?><?php endif; ?><!-- wp:group {"tagName":"main","className":"kb-in kb-main","layout":{"type":"default"}} -->
<main class="wp-block-group kb-in kb-main"><?php if ( ! is_home() ) : ?><!-- wp:query-title {"type":"archive","level":1,"className":"kb-pagetitle"} /--><?php else : ?><!-- wp:heading {"level":1,"className":"kb-pagetitle"} -->
<h1 class="wp-block-heading kb-pagetitle"><?php echo esc_html( kiban_structural_t( 'idx_h' ) ); ?></h1>
<!-- /wp:heading --><?php endif; ?><!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kb-posts"} -->
<div class="wp-block-query kb-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"kb-post","layout":{"type":"default"}} -->
<div class="wp-block-group kb-post"><!-- wp:post-featured-image {"isLink":true,"className":"kb-post__img"} /--><!-- wp:post-date {"format":"j M Y","className":"kb-meta"} /--><!-- wp:post-title {"level":2,"isLink":true,"className":"kb-post__t"} /--><!-- wp:post-excerpt {"excerptLength":28,"className":"kb-post__x"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --><!-- wp:query-pagination {"className":"kb-pager"} --><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-next /--><!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
