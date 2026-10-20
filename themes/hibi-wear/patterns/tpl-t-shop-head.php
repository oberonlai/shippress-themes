<?php
/**
 * Title: Shop archive head
 * Slug: hibi-wear/tpl-t-shop-head
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Inserter: no
 * Description: T1 head for product archives.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-pagehead hw-pagehead--plain hw-shophead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-pagehead hw-pagehead--plain hw-shophead"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:woocommerce/breadcrumbs {"className":"hw-crumbs"} /-->

<!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'sh_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"hw-h hw-h--page"} /-->

<!-- wp:term-description {"className":"hw-lead"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
