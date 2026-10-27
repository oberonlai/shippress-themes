<?php
/**
 * Title: Template: post list
 * Slug: kyugo-training/tpl-index
 * Categories: kyugo-training
 * Keywords: first aid, training, workplace
 * Viewport Width: 1440
 * Inserter: no
 * Description: List of notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-tpl","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-tpl"><!-- wp:heading {"level":1,"className":"kt-h2 kt-tpl__title"} -->
<h1 class="wp-block-heading kt-h2 kt-tpl__title"><?php echo esc_html( is_search() ? sprintf( kyugo_training_t( 'search_for' ), get_search_query() ) : ( is_404() ? kyugo_training_t( 'nf' ) : kyugo_training_t( 'notes_h' ) ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kt-notes__list"} -->
<div class="wp-block-query kt-notes__list"><!-- wp:post-template -->
<!-- wp:group {"className":"kt-note","layout":{"type":"default"}} -->
<div class="wp-block-group kt-note"><!-- wp:group {"className":"kt-note__meta","layout":{"type":"default"}} -->
<div class="wp-block-group kt-note__meta"><!-- wp:post-date {"format":"M j, Y","className":"kt-note__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kt-note__cat"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kt-note__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
