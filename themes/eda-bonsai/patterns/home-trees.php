<?php
/**
 * Title: Home: featured trees
 * Slug: eda-bonsai/home-trees
 * Categories: eda-bonsai
 * Keywords: bonsai, shop
 * Viewport Width: 1440
 * Description: Four featured trees: the shop’s featured products while WooCommerce is active, otherwise four static cells that link to Contact.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-section eb-section--trees","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-section eb-section--trees"><!-- wp:group {"align":"wide","className":"eb-head eb-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide eb-head eb-head--row"><!-- wp:group {"className":"eb-stack","layout":{"type":"default"}} -->
<div class="wp-block-group eb-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">From the beds</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Trees ready <em>to go home.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"eb-quiet eb-head__aside"} -->
<p class="eb-quiet eb-head__aside">Each tree is labelled with its age, height and care level, and leaves the nursery with its own care sheet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"eb-products","collection":"woocommerce/product-collection/featured"} -->
<div class="wp-block-woocommerce-product-collection alignwide eb-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"eb-product__image"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"eb-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"eb-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:buttons {"className":"eb-links eb-links--end"} -->
<div class="wp-block-buttons eb-links eb-links--end"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">All trees, pots and tools</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-section eb-section--trees","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-section eb-section--trees"><!-- wp:group {"align":"wide","className":"eb-head eb-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide eb-head eb-head--row"><!-- wp:group {"className":"eb-stack","layout":{"type":"default"}} -->
<div class="wp-block-group eb-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">From the beds</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Trees ready <em>to go home.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"eb-quiet eb-head__aside"} -->
<p class="eb-quiet eb-head__aside">Each tree is labelled with its age, height and care level, and leaves the nursery with its own care sheet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"eb-cells","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide eb-cells"><!-- wp:group {"className":"eb-cell","layout":{"type":"default"}} -->
<div class="wp-block-group eb-cell"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"eb-cell__photo"} -->
<figure class="wp-block-image size-large eb-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p01-juniper.jpg" alt="A small shimpaku juniper with twisting deadwood in a shallow unglazed pot"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"eb-cell__title"} -->
<h3 class="wp-block-heading eb-cell__title"><a href="/contact/">Shimpaku Juniper</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-cell__price"} -->
<p class="eb-cell__price">$340</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="eb-growth"><span class="eb-growth__ring" aria-hidden="true"></span><span>18 years</span><span class="eb-growth__sep" aria-hidden="true"> · </span><span>32 cm</span><span class="eb-growth__sep" aria-hidden="true"> · </span><span>Moderate care</span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-cell","layout":{"type":"default"}} -->
<div class="wp-block-group eb-cell"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"eb-cell__photo"} -->
<figure class="wp-block-image size-large eb-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p02-maple.jpg" alt="A Japanese maple bonsai with fine branches and red autumn leaves in a round pot"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"eb-cell__title"} -->
<h3 class="wp-block-heading eb-cell__title"><a href="/contact/">Japanese Maple</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-cell__price"} -->
<p class="eb-cell__price">$260</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="eb-growth"><span class="eb-growth__ring" aria-hidden="true"></span><span>12 years</span><span class="eb-growth__sep" aria-hidden="true"> · </span><span>38 cm</span><span class="eb-growth__sep" aria-hidden="true"> · </span><span>Moderate care</span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-cell","layout":{"type":"default"}} -->
<div class="wp-block-group eb-cell"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"eb-cell__photo"} -->
<figure class="wp-block-image size-large eb-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p03-pine.jpg" alt="A Japanese black pine bonsai with dark candles of needles in a rectangular pot"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"eb-cell__title"} -->
<h3 class="wp-block-heading eb-cell__title"><a href="/contact/">Black Pine</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-cell__price"} -->
<p class="eb-cell__price">$420</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="eb-growth"><span class="eb-growth__ring" aria-hidden="true"></span><span>24 years</span><span class="eb-growth__sep" aria-hidden="true"> · </span><span>41 cm</span><span class="eb-growth__sep" aria-hidden="true"> · </span><span>Experienced care</span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-cell","layout":{"type":"default"}} -->
<div class="wp-block-group eb-cell"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"eb-cell__photo"} -->
<figure class="wp-block-image size-large eb-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p04-azalea.jpg" alt="A satsuki azalea bonsai covered in soft pink flowers"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"eb-cell__title"} -->
<h3 class="wp-block-heading eb-cell__title"><a href="/contact/">Satsuki Azalea</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-cell__price"} -->
<p class="eb-cell__price">$190</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="eb-growth"><span class="eb-growth__ring" aria-hidden="true"></span><span>10 years</span><span class="eb-growth__sep" aria-hidden="true"> · </span><span>26 cm</span><span class="eb-growth__sep" aria-hidden="true"> · </span><span>Moderate care</span></p>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"eb-links eb-links--end"} -->
<div class="wp-block-buttons eb-links eb-links--end"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/shop/">All trees, pots and tools</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
	<?php
endif;
