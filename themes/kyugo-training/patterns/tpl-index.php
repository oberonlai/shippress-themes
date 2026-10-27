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
<!-- wp:group {"tagName":"section","align":"full","className":"kt-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-pagehead"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-pagehead__img"} -->
<figure class="wp-block-image size-full kt-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13.webp' ) ); ?>" alt="<?php echo esc_attr( kyugo_training_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kt-pagehead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-pagehead__text"><!-- wp:paragraph {"className":"kt-pagehead__kicker"} -->
<p class="kt-pagehead__kicker"><?php echo esc_html( kyugo_training_t( 'notes_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kt-pagehead__title"} -->
<h1 class="wp-block-heading kt-pagehead__title"><?php echo esc_html( is_search() ? sprintf( kyugo_training_t( 'search_for' ), get_search_query() ) : ( is_404() ? kyugo_training_t( 'nf' ) : kyugo_training_t( 'notes_h' ) ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-tpl kt-tpl--list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-tpl kt-tpl--list"><?php if ( ! is_search() && ! is_404() ) : ?><!-- wp:paragraph {"className":"kt-lead"} -->
<p class="kt-lead"><?php echo esc_html( kyugo_training_t( 'notes_intro' ) ); ?></p>
<!-- /wp:paragraph --><?php endif; ?>

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
