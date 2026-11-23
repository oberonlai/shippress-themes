<?php
/**
 * Title: Template: page head with ghost word
 * Slug: otonoha-acoustics/tpl-pagehead
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Inserter: false
 * Description: Pale page-head band holding the title, with a very pale caps word behind it that the white content sheet clips.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull oto-pagehead"><!-- wp:group {"className":"oto-pagehead__band","layout":{"type":"default"}} -->
<div class="wp-block-group oto-pagehead__band"><!-- wp:post-title {"level":1,"className":"oto-pagehead__h"} /--><!-- wp:paragraph {"className":"oto-ghost"} -->
<p class="oto-ghost" aria-hidden="true"><?php echo esc_html( otonoha_acoustics_t( 'ghost_default' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
