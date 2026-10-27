<?php
/**
 * Title: Template: single post
 * Slug: kyugo-training/tpl-single
 * Categories: kyugo-training
 * Keywords: first aid, training, workplace
 * Viewport Width: 1440
 * Inserter: no
 * Description: A single note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-pagehead"><!-- wp:post-featured-image {"className":"kt-pagehead__img"} /-->

<!-- wp:group {"className":"kt-pagehead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-pagehead__text"><!-- wp:post-terms {"term":"category","className":"kt-pagehead__kicker"} /-->

<!-- wp:post-title {"level":1,"className":"kt-pagehead__title"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","align":"full","className":"kt-tpl kt-single","layout":{"type":"default"}} -->
<article class="wp-block-group alignfull kt-tpl kt-single"><!-- wp:post-date {"format":"M j, Y","className":"kt-note__date"} /-->

<!-- wp:post-content {"layout":{"type":"constrained","contentSize":"720px"}} /--></article>
<!-- /wp:group -->
