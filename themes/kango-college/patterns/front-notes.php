<?php
/**
 * Title: Home: latest notes as ruled rows
 * Slug: kango-college/front-notes
 * Categories: kango-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-notes"><!-- wp:group {"className":"kc-notes__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-notes__head sp-reveal sp-reveal--up"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( kango_college_t( 'k0b442126' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"kc-notes__q"} -->
<div class="wp-block-query kc-notes__q"><!-- wp:post-template {"className":"kc-notes__list"} -->
<!-- wp:group {"className":"kc-note sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-note sp-reveal sp-reveal--up"><!-- wp:post-date {"format":"j M Y","className":"kc-note__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kc-chip kc-note__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-note__title"} /-->

<!-- wp:read-more {"content":"Read","className":"kc-ring kc-note__go"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
