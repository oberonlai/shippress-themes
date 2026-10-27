<?php
/**
 * Title: Template: archive
 * Slug: hibiki-speech/tpl-archive
 * Categories: hibiki-speech
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hs-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group hs-main"><!-- wp:group {"tagName":"section","align":"full","className":"hs-head hs-head--simple","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hs-head hs-head--simple"><!-- wp:heading {"level":1,"align":"wide","className":"hs-head__title"} -->
<h1 class="wp-block-heading alignwide hs-head__title"><?php echo wp_kses_post( hibiki_speech_t( 'kd1813ed1' ) ); ?></h1>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hs-section"><!-- wp:query {"queryId":3,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"hs-notes__list hs-notes__list--archive"} -->
<div class="wp-block-query alignwide hs-notes__list hs-notes__list--archive"><!-- wp:post-template -->
<!-- wp:group {"className":"hs-note-row","layout":{"type":"default"}} -->
<div class="wp-block-group hs-note-row"><!-- wp:post-date {"format":"<?php echo esc_attr( hibiki_speech_t( 'date_fmt' ) ); ?>","className":"hs-note-row__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hs-note-row__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24,"className":"hs-note-row__ex"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->