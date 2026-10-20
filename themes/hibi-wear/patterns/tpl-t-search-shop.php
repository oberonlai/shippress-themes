<?php
/**
 * Title: Search shop head
 * Slug: hibi-wear/tpl-t-search-shop
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Inserter: no
 * Description: 
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-pagehead hw-pagehead--plain","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-pagehead hw-pagehead--plain"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'sh_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h hw-h--page","level":1} -->
<h1 class="wp-block-heading hw-h hw-h--page"><?php echo hibi_wear_lines( 'sh_title' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
