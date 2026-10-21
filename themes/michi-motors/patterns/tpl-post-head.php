<?php
/**
 * Title: Post head
 * Slug: michi-motors/tpl-post-head
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Inserter: no
 * Description: Photo band head for a journal entry.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mm-band mm-pagehead mm-pagehead--photo mm-pagehead--post","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mm-band mm-pagehead mm-pagehead--photo mm-pagehead--post"><!-- wp:post-featured-image {"sizeSlug":"full","className":"mm-band__img"} /-->

<!-- wp:group {"className":"mm-band__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__grid"><!-- wp:post-title {"level":1,"className":"mm-t1 mm-t1--title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-band__foot","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__foot"><!-- wp:group {"className":"mm-note__meta mm-note__meta--light","layout":{"type":"default"}} -->
<div class="wp-block-group mm-note__meta mm-note__meta--light"><!-- wp:post-terms {"term":"category","className":"mm-note__cat"} /-->

<!-- wp:post-date {"format":"F j, Y","className":"mm-note__date"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-ringlink mm-ringlink--corner"} -->
<p class="mm-ringlink mm-ringlink--corner"><a href="/journal/" aria-label="<?php echo esc_attr( michi_motors_t( 'tpl_post_head_1' ) ); ?>"></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
