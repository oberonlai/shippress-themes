<?php
/**
 * Title: Notes: house notes
 * Slug: seseragi-house/notes
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: The latest three posts as hairline rows with a small 3:2 thumbnail.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"notes","className":"sese-sec sese-notes","layout":{"type":"default"}} -->
<section id="notes" class="wp-block-group sese-sec sese-notes">
<!-- wp:group {"className":"sese-col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sp-reveal sp-reveal--up">
<!-- wp:group {"className":"sese-notes__head","layout":{"type":"default"}} -->
<div class="wp-block-group sese-notes__head">
<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'notes_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-link"} -->
<p class="sese-link"><a href="/notes/"><?php echo esc_html( seseragi_house_t( 'notes_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":8,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"sese-notes__q"} -->
<div class="wp-block-query sese-notes__q"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"sese-note","layout":{"type":"default"}} -->
<div class="wp-block-group sese-note"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","width":"180px","height":"120px","className":"sese-note__img"} /--><!-- wp:group {"className":"sese-note__body","layout":{"type":"default"}} -->
<div class="wp-block-group sese-note__body"><!-- wp:post-date {"className":"sese-note__date"} /--><!-- wp:post-title {"level":3,"isLink":true,"className":"sese-note__title"} /--><!-- wp:post-excerpt {"excerptLength":16,"className":"sese-note__ex"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
