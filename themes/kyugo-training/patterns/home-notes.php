<?php
/**
 * Title: Home: dates and notes
 * Slug: kyugo-training/home-notes
 * Categories: kyugo-training
 * Keywords: first aid, training, workplace
 * Viewport Width: 1440
 * Description: Label, heading and the three newest posts as dated rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-notes"><!-- wp:group {"className":"kt-notes__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kt-notes__grid"><!-- wp:group {"className":"kt-notes__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-notes__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kt-label"} -->
<p class="kt-label"><?php echo esc_html( kyugo_training_t( 'notes_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kyugo_training_t( 'notes_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="/notes/"><?php echo esc_html( kyugo_training_t( 'notes_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"kt-notes__list sp-reveal sp-reveal--up"} -->
<div class="wp-block-query kt-notes__list sp-reveal sp-reveal--up"><!-- wp:post-template -->
<!-- wp:group {"className":"kt-note","layout":{"type":"default"}} -->
<div class="wp-block-group kt-note"><!-- wp:group {"className":"kt-note__meta","layout":{"type":"default"}} -->
<div class="wp-block-group kt-note__meta"><!-- wp:post-date {"format":"M j, Y","className":"kt-note__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kt-note__cat"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kt-note__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
