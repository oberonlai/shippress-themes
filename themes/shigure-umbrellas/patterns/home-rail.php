<?php
/**
 * Title: Home: the canopy rail (L4)
 * Slug: shigure-umbrellas/home-rail
 * Categories: shigure-umbrellas
 * Keywords: umbrellas, shop
 * Viewport Width: 1440
 * Description: A slow sideways scroll-snap rail of round canopy cells with rib counts: the shop’s products while WooCommerce is active, otherwise the same eight as static cells that link to Contact.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-section sg-section--rail","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sg-section sg-section--rail"><!-- wp:group {"align":"wide","className":"sg-head sg-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sg-head sg-head--row"><!-- wp:group {"className":"sg-stack","layout":{"type":"default"}} -->
<div class="wp-block-group sg-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The canopy rail</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Opened, <em>seen from above.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sg-quiet sg-head__aside"} -->
<p class="sg-quiet sg-head__aside">Eight umbrellas, each with its rib count and canopy width. Scroll sideways, or use the arrow keys once the rail has focus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":8,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"sg-rail","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide sg-rail"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"sg-canopy__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sg-canopy__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"sg-canopy__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-section sg-section--rail","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sg-section sg-section--rail"><!-- wp:group {"align":"wide","className":"sg-head sg-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sg-head sg-head--row"><!-- wp:group {"className":"sg-stack","layout":{"type":"default"}} -->
<div class="wp-block-group sg-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The canopy rail</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Opened, <em>seen from above.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sg-quiet sg-head__aside"} -->
<p class="sg-quiet sg-head__aside">Eight umbrellas, each with its rib count and canopy width. Scroll sideways, or use the arrow keys once the rail has focus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"sg-rail sg-rail--static","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sg-rail sg-rail--static"><!-- wp:group {"className":"sg-canopy","layout":{"type":"default"}} -->
<div class="wp-block-group sg-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sg-canopy__photo"} -->
<figure class="wp-block-image size-large sg-canopy__photo"><a href="/contact/"><img src="{{theme}}/assets/images/umbrella-01.jpg" alt="Hoshikawa Long: slate-blue oiled cotton on a bamboo frame"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"sg-canopy__name"} -->
<h3 class="wp-block-heading sg-canopy__name">Hoshikawa Long</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sg-canopy__ribs"} -->
<p class="sg-canopy__ribs">24 ribs · 104 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sg-canopy__price"} -->
<p class="sg-canopy__price">$168 · Traditional</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sg-canopy","layout":{"type":"default"}} -->
<div class="wp-block-group sg-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sg-canopy__photo"} -->
<figure class="wp-block-image size-large sg-canopy__photo"><a href="/contact/"><img src="{{theme}}/assets/images/umbrella-02.jpg" alt="Ame Fold: pale grey recycled polyester, three-fold steel frame"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"sg-canopy__name"} -->
<h3 class="wp-block-heading sg-canopy__name">Ame Fold</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sg-canopy__ribs"} -->
<p class="sg-canopy__ribs">8 ribs · 96 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sg-canopy__price"} -->
<p class="sg-canopy__price">$86 · Travel</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sg-canopy","layout":{"type":"default"}} -->
<div class="wp-block-group sg-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sg-canopy__photo"} -->
<figure class="wp-block-image size-large sg-canopy__photo"><a href="/contact/"><img src="{{theme}}/assets/images/umbrella-03.jpg" alt="Kasa Sixteen: mist-grey waxed cotton, black crook handle"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"sg-canopy__name"} -->
<h3 class="wp-block-heading sg-canopy__name">Kasa Sixteen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sg-canopy__ribs"} -->
<p class="sg-canopy__ribs">16 ribs · 110 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sg-canopy__price"} -->
<p class="sg-canopy__price">$148 · Everyday</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sg-canopy","layout":{"type":"default"}} -->
<div class="wp-block-group sg-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sg-canopy__photo"} -->
<figure class="wp-block-image size-large sg-canopy__photo"><a href="/contact/"><img src="{{theme}}/assets/images/umbrella-04.jpg" alt="Tsuyu Paper: deep slate oiled washi on thirty-six bamboo ribs"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"sg-canopy__name"} -->
<h3 class="wp-block-heading sg-canopy__name">Tsuyu Paper</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sg-canopy__ribs"} -->
<p class="sg-canopy__ribs">36 ribs · 104 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sg-canopy__price"} -->
<p class="sg-canopy__price">$184 · Traditional</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sg-canopy","layout":{"type":"default"}} -->
<div class="wp-block-group sg-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sg-canopy__photo"} -->
<figure class="wp-block-image size-large sg-canopy__photo"><a href="/contact/"><img src="{{theme}}/assets/images/umbrella-05.jpg" alt="Kiri Mini: fog-grey polyester, aluminium frame"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"sg-canopy__name"} -->
<h3 class="wp-block-heading sg-canopy__name">Kiri Mini</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sg-canopy__ribs"} -->
<p class="sg-canopy__ribs">6 ribs · 88 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sg-canopy__price"} -->
<p class="sg-canopy__price">$74 · Travel</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sg-canopy","layout":{"type":"default"}} -->
<div class="wp-block-group sg-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sg-canopy__photo"} -->
<figure class="wp-block-image size-large sg-canopy__photo"><a href="/contact/"><img src="{{theme}}/assets/images/umbrella-06.jpg" alt="Bangasa Twilight: persimmon-oiled washi paper on forty-eight bamboo ribs"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"sg-canopy__name"} -->
<h3 class="wp-block-heading sg-canopy__name">Bangasa Twilight</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sg-canopy__ribs"} -->
<p class="sg-canopy__ribs">48 ribs · 112 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sg-canopy__price"} -->
<p class="sg-canopy__price">$196 · Traditional</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sg-canopy","layout":{"type":"default"}} -->
<div class="wp-block-group sg-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sg-canopy__photo"} -->
<figure class="wp-block-image size-large sg-canopy__photo"><a href="/contact/"><img src="{{theme}}/assets/images/umbrella-07.jpg" alt="Ferrule Cane: storm-grey oiled cotton, chestnut shaft, brass ferrule"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"sg-canopy__name"} -->
<h3 class="wp-block-heading sg-canopy__name">Ferrule Cane</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sg-canopy__ribs"} -->
<p class="sg-canopy__ribs">8 ribs · 100 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sg-canopy__price"} -->
<p class="sg-canopy__price">$158 · Everyday</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sg-canopy","layout":{"type":"default"}} -->
<div class="wp-block-group sg-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"sg-canopy__photo"} -->
<figure class="wp-block-image size-large sg-canopy__photo"><a href="/contact/"><img src="{{theme}}/assets/images/umbrella-08.jpg" alt="Hoshi Child: pale blue cotton, rounded tips, short shaft"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"sg-canopy__name"} -->
<h3 class="wp-block-heading sg-canopy__name">Hoshi Child</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sg-canopy__ribs"} -->
<p class="sg-canopy__ribs">8 ribs · 78 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sg-canopy__price"} -->
<p class="sg-canopy__price">$64 · Everyday</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
	<?php
endif;
