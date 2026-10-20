<?php
/**
 * Title: Store page head: thanks
 * Slug: hibi-wear/tpl-t-thanks
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Inserter: no
 * Description: T1 head for the store pages.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-pagehead hw-pagehead--plain hw-pagehead--small","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-pagehead hw-pagehead--plain hw-pagehead--small"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'th_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h hw-h--store","level":1} -->
<h1 class="wp-block-heading hw-h hw-h--store"><?php echo hibi_wear_lines( 'th_title' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
