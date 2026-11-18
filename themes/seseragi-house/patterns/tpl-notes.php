<?php
/**
 * Title: Template: notes list
 * Slug: seseragi-house/tpl-notes
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: Posts list used by the posts page and archive templates.
 */
?>
<!-- wp:group {"tagName":"section","className":"sese-sec sese-notes sese-notes--page","layout":{"type":"default"}} -->
<section class="wp-block-group sese-sec sese-notes sese-notes--page">
<!-- wp:group {"className":"sese-win sese-win--mist","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win sese-win--mist">
<!-- wp:group {"className":"sese-win__fg sese-win__fg--mist","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__fg sese-win__fg--mist">
<!-- wp:heading {"level":1,"className":"sese-h1 sese-h1--page"} -->
<h1 class="wp-block-heading sese-h1 sese-h1--page"><?php echo esc_html( seseragi_house_t( 'notes_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-lede"} -->
<p class="sese-lede"><?php echo esc_html( seseragi_house_t( 'notes_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-col","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col">
<!-- wp:query {"queryId":9,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"sese-notes__q"} -->
<div class="wp-block-query sese-notes__q"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"sese-note","layout":{"type":"default"}} -->
<div class="wp-block-group sese-note"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","width":"180px","height":"120px","className":"sese-note__img"} /--><!-- wp:group {"className":"sese-note__body","layout":{"type":"default"}} -->
<div class="wp-block-group sese-note__body"><!-- wp:post-date {"className":"sese-note__date"} /--><!-- wp:post-title {"level":3,"isLink":true,"className":"sese-note__title"} /--><!-- wp:post-excerpt {"excerptLength":22,"className":"sese-note__ex"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
