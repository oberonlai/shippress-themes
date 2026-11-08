<?php
/**
 * Title: Home: notes from the booth
 * Slug: koe-interpreters/front-notes
 * Categories: koe-interpreters
 * Keywords: interpreting, notes, posts
 * Viewport Width: 1440
 * Description: Heading with an all-notes link and a query loop of the two newest notes in two columns, with pale mint arcs at the top right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ko-notes","anchor":"notes","layout":{"type":"default"}} -->
<section id="notes" class="wp-block-group alignfull ko-notes"><!-- wp:group {"align":"wide","className":"ko-notes__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ko-notes__head"><!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up"><?php echo wp_kses_post( koe_interpreters_t( 'k4f2b15a6' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ko-textlink"} -->
<p class="ko-textlink"><a href="/notes/"><?php echo wp_kses_post( koe_interpreters_t( 'k363636a3' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:query {"queryId":2,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ko-notes__list"} -->
<div class="wp-block-query alignwide ko-notes__list"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"ko-note","layout":{"type":"default"}} -->
<div class="wp-block-group ko-note"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ko-note__img"} /-->

<!-- wp:post-terms {"term":"category","className":"ko-note__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ko-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":30,"className":"ko-note__excerpt"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
