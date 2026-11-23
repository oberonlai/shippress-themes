<?php
/**
 * Title: Template: archive
 * Slug: otonoha-acoustics/tpl-archive
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Inserter: false
 * Description: Archive page head and a dated hairline list on the white sheet.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull oto-pagehead"><!-- wp:group {"className":"oto-pagehead__band","layout":{"type":"default"}} -->
<div class="wp-block-group oto-pagehead__band"><!-- wp:query-title {"type":"archive","level":1,"className":"oto-pagehead__h"} /--><!-- wp:paragraph {"className":"oto-ghost"} -->
<p class="oto-ghost" aria-hidden="true"><?php echo esc_html( otonoha_acoustics_t( 'ghost_default' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"className":"oto-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group oto-sheet"><!-- wp:query {"queryId":13,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query oto-loop"><!-- wp:post-template -->
<!-- wp:group {"className":"oto-post","layout":{"type":"default"}} -->
<div class="wp-block-group oto-post"><!-- wp:post-date {"format":"d.m.Y","className":"oto-post__d"} /--><!-- wp:post-title {"level":2,"isLink":true,"className":"oto-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
