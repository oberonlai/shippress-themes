<?php
/**
 * Title: Home: new arrivals strip
 * Slug: hibiki-records/home-arrivals
 * Categories: hibiki-records
 * Keywords: records, shop
 * Viewport Width: 1440
 * Description: The four newest records: the newest products while WooCommerce is active, otherwise four static cells.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-section hb-section--arrivals","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-section hb-section--arrivals"><!-- wp:group {"align":"wide","className":"hb-head hb-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-head hb-head--row"><!-- wp:group {"className":"hb-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hb-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">New arrivals · this week</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Just <em>filed.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hb-quiet hb-head__aside"} -->
<p class="hb-quiet hb-head__aside">Cleaned, played through and graded this week. Most used records are one copy only.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"hb-products","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide hb-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"hb-product__image"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hb-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"hb-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:buttons {"className":"hb-links hb-links--end"} -->
<div class="wp-block-buttons hb-links hb-links--end"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/new-arrivals/">All new arrivals</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-section hb-section--arrivals","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-section hb-section--arrivals"><!-- wp:group {"align":"wide","className":"hb-head hb-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-head hb-head--row"><!-- wp:group {"className":"hb-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hb-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">New arrivals · this week</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Just <em>filed.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hb-quiet hb-head__aside"} -->
<p class="hb-quiet hb-head__aside">Cleaned, played through and graded this week. Most used records are one copy only.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hb-cells","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-cells"><!-- wp:group {"className":"hb-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hb-cell"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"hb-cell__photo"} -->
<figure class="wp-block-image size-large hb-cell__photo"><a href="/new-arrivals/"><img src="{{theme}}/assets/images/sleeve-01.jpg" alt="A record sleeve with soft grey-blue bands, Low Tide Hours by the Ren Aoyagi Quartet"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hb-catno"} -->
<p class="hb-catno">HBK-0412</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-cell__artist"} -->
<p class="hb-cell__artist">Ren Aoyagi Quartet</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hb-cell__title"} -->
<h3 class="wp-block-heading hb-cell__title"><a href="/new-arrivals/">Low Tide Hours</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hb-cell__price"} -->
<p class="hb-cell__price">$48</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="hb-spec"><span>12-inch LP, 33 rpm</span><span class="hb-spec__sep" aria-hidden="true"> · </span><span>Near Mint (NM)</span><span class="hb-spec__sep" aria-hidden="true"> · </span><span>1978 · first press</span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hb-cell"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"hb-cell__photo"} -->
<figure class="wp-block-image size-large hb-cell__photo"><a href="/new-arrivals/"><img src="{{theme}}/assets/images/sleeve-02.jpg" alt="A pale record sleeve with a soft gradient, Paper Lanterns, Slow Rain by Mio Sagara"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hb-catno"} -->
<p class="hb-catno">HBK-0427</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-cell__artist"} -->
<p class="hb-cell__artist">Mio Sagara</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hb-cell__title"} -->
<h3 class="wp-block-heading hb-cell__title"><a href="/new-arrivals/">Paper Lanterns, Slow Rain</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hb-cell__price"} -->
<p class="hb-cell__price">$34</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="hb-spec"><span>12-inch LP, 180 g</span><span class="hb-spec__sep" aria-hidden="true"> · </span><span>New, sealed (M)</span><span class="hb-spec__sep" aria-hidden="true"> · </span><span>2025 · reissue of 1989</span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hb-cell"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"hb-cell__photo"} -->
<figure class="wp-block-image size-large hb-cell__photo"><a href="/new-arrivals/"><img src="{{theme}}/assets/images/sleeve-03.jpg" alt="A record sleeve in muted teal and sand, Coastline Drive '83 by The Seaside Avenue Club"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hb-catno"} -->
<p class="hb-catno">HBK-0388</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-cell__artist"} -->
<p class="hb-cell__artist">The Seaside Avenue Club</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hb-cell__title"} -->
<h3 class="wp-block-heading hb-cell__title"><a href="/new-arrivals/">Coastline Drive '83</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hb-cell__price"} -->
<p class="hb-cell__price">$62</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="hb-spec"><span>12-inch LP, 33 rpm</span><span class="hb-spec__sep" aria-hidden="true"> · </span><span>Very Good Plus (VG+)</span><span class="hb-spec__sep" aria-hidden="true"> · </span><span>1983 · first press</span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hb-cell"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"hb-cell__photo"} -->
<figure class="wp-block-image size-large hb-cell__photo"><a href="/new-arrivals/"><img src="{{theme}}/assets/images/sleeve-04.jpg" alt="A record sleeve with a quiet field-green panel, Songs from the Upper Field by Haruka Tobe"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hb-catno"} -->
<p class="hb-catno">HBK-0351</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hb-cell__artist"} -->
<p class="hb-cell__artist">Haruka Tobe</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hb-cell__title"} -->
<h3 class="wp-block-heading hb-cell__title"><a href="/new-arrivals/">Songs from the Upper Field</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hb-cell__price"} -->
<p class="hb-cell__price">$38</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="hb-spec"><span>12-inch LP, 33 rpm</span><span class="hb-spec__sep" aria-hidden="true"> · </span><span>Very Good Plus (VG+)</span><span class="hb-spec__sep" aria-hidden="true"> · </span><span>1974 · first press</span></p>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"hb-links hb-links--end"} -->
<div class="wp-block-buttons hb-links hb-links--end"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/new-arrivals/">All new arrivals</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
	<?php
endif;
