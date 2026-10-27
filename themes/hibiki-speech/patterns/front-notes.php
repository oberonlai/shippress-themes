<?php
/**
 * Title: Home: notes from the clinic
 * Slug: hibiki-speech/front-notes
 * Categories: hibiki-speech
 * Keywords: clinic, speech therapy
 * Viewport Width: 1440
 * Description: Three latest notes as text rows, no images.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hs-notes","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hs-notes"><!-- wp:group {"className":"hs-wrap hs-notes__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hs-wrap hs-notes__grid"><!-- wp:heading {"level":2,"className":"hs-notes__h"} -->
<h2 class="wp-block-heading hs-notes__h"><?php echo wp_kses_post( hibiki_speech_t( 'kf4c6f851' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"hs-notes__list"} -->
<div class="wp-block-query hs-notes__list"><!-- wp:post-template -->
<!-- wp:group {"className":"hs-note-row","layout":{"type":"default"}} -->
<div class="wp-block-group hs-note-row"><!-- wp:post-date {"format":"<?php echo esc_attr( hibiki_speech_t( 'date_fmt' ) ); ?>","className":"hs-note-row__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hs-note-row__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"className":"hs-note-row__ex"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
