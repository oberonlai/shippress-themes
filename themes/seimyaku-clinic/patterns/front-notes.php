<?php
/**
 * Title: Home: notes (three dated cards)
 * Slug: seimyaku-clinic/front-notes
 * Categories: seimyaku-clinic
 * Keywords: news
 * Viewport Width: 1440
 * Description: A chip and a heading, three white dated cards with arrow squares and a text link to all notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"notes","className":"sz-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-notes" id="notes"><!-- wp:group {"className":"sz-notes__head","layout":{"type":"default"}} -->
<div class="wp-block-group sz-notes__head"><!-- wp:paragraph {"className":"is-style-sz-chip"} -->
<p class="is-style-sz-chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'kaecb448b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'k526e5b67' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"sz-posts"} -->
<div class="wp-block-query sz-posts"><!-- wp:post-template {"className":"sz-newslist","layout":{"type":"default"}} -->
<!-- wp:group {"className":"sz-note-card","layout":{"type":"default"}} -->
<div class="wp-block-group sz-note-card"><!-- wp:post-date {"format":"j M Y","className":"sz-note-card__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sz-note-card__title"} /-->

<!-- wp:post-terms {"term":"category","className":"sz-card__chip"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"sz-textlink sz-textlink--right"} -->
<p class="sz-textlink sz-textlink--right"><a href="/news/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k67bfaf2f' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
