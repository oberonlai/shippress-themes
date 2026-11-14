<?php
/**
 * Title: Journal: archive head and posts
 * Slug: koori-coldstore/tpl-journal
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Inserter: no
 * Description: Page head with the journal word and the list of posts as photo-and-text rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-pagehead"><!-- wp:heading {"level":1,"className":"kc-giant kc-giant--ink"} -->
<h1 class="wp-block-heading kc-giant kc-giant--ink"><?php echo esc_html( koori_coldstore_t( 'journal_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'j_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"koori-coldstore/tpl-archive-list"} /-->
