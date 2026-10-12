<?php
/**
 * Title: Home: filter-first directory (L14)
 * Slug: nameshi-leather/home-directory
 * Categories: nameshi-leather
 * Keywords: leather, shop
 * Viewport Width: 1440
 * Description: Item and leather pills over stitched cells of every piece: the shop’s products while WooCommerce is active, otherwise the same eight as static cells that link to Contact.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","anchor":"bench","align":"full","className":"nm-section nm-section--dir","layout":{"type":"constrained"}} -->
<section id="bench" class="wp-block-group alignfull nm-section nm-section--dir"><!-- wp:group {"align":"wide","className":"nm-head nm-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide nm-head nm-head--row"><!-- wp:group {"className":"nm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group nm-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The bench</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Choose by item <em>and by leather.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nm-quiet nm-head__aside"} -->
<p class="nm-quiet nm-head__aside">Every piece is in stock and sent within three days. Prices include the first year of conditioning at the workshop.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"nm-dir","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide nm-dir"><!-- wp:group {"className":"nm-dir__bar","layout":{"type":"default"}} -->
<div class="wp-block-group nm-dir__bar"><!-- wp:group {"className":"nm-filters","layout":{"type":"default"}} -->
<div class="wp-block-group nm-filters"><!-- wp:paragraph {"className":"nm-pills"} -->
<p class="nm-pills"><span class="nm-pills__key">Item</span><a href="#all-item">All</a><a href="#i-wallets">Wallets</a><a href="#i-bags">Bags</a><a href="#i-belts">Belts</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-pills"} -->
<p class="nm-pills"><span class="nm-pills__key">Leather</span><a href="#all-leather">All</a><a href="#l-natural">Natural</a><a href="#l-black">Black</a><a href="#l-indigo">Indigo</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nm-dir__count"} -->
<p class="nm-dir__count">8 pieces · all in stock</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":8,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"nm-products","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide nm-products"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"nm-product__image"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"nm-product__title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"nm-product__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:group {"tagName":"section","anchor":"bench","align":"full","className":"nm-section nm-section--dir","layout":{"type":"constrained"}} -->
<section id="bench" class="wp-block-group alignfull nm-section nm-section--dir"><!-- wp:group {"align":"wide","className":"nm-head nm-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide nm-head nm-head--row"><!-- wp:group {"className":"nm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group nm-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The bench</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Choose by item <em>and by leather.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nm-quiet nm-head__aside"} -->
<p class="nm-quiet nm-head__aside">Every piece is in stock and sent within three days. Prices include the first year of conditioning at the workshop.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"nm-dir","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide nm-dir"><!-- wp:group {"className":"nm-dir__bar","layout":{"type":"default"}} -->
<div class="wp-block-group nm-dir__bar"><!-- wp:group {"className":"nm-filters","layout":{"type":"default"}} -->
<div class="wp-block-group nm-filters"><!-- wp:paragraph {"className":"nm-pills"} -->
<p class="nm-pills"><span class="nm-pills__key">Item</span><a href="#all-item">All</a><a href="#i-wallets">Wallets</a><a href="#i-bags">Bags</a><a href="#i-belts">Belts</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-pills"} -->
<p class="nm-pills"><span class="nm-pills__key">Leather</span><a href="#all-leather">All</a><a href="#l-natural">Natural</a><a href="#l-black">Black</a><a href="#l-indigo">Indigo</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nm-dir__count"} -->
<p class="nm-dir__count">8 pieces · order by email</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-cells","layout":{"type":"default"}} -->
<div class="wp-block-group nm-cells"><!-- wp:group {"className":"nm-cell nm-i-wallets nm-l-natural","layout":{"type":"default"}} -->
<div class="wp-block-group nm-cell nm-i-wallets nm-l-natural"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"nm-cell__photo"} -->
<figure class="wp-block-image size-large nm-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p01-bifold.jpg" alt="Kawabe Bifold in natural leather"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"nm-cell__title"} -->
<h3 class="wp-block-heading nm-cell__title"><a href="/contact/">Kawabe Bifold</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-cell__note"} -->
<p class="nm-cell__note">Natural vegetable-tanned cowhide, 2 mm, saddle-stitched</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-cell__price"} -->
<p class="nm-cell__price">$148</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="nm-patina nm-patina--natural"><span class="nm-patina__step"><span class="nm-patina__when">New</span><span class="screen-reader-text">: Pale honey</span></span><span class="nm-patina__step"><span class="nm-patina__when">1 yr</span><span class="screen-reader-text">: Warm honey</span></span><span class="nm-patina__step"><span class="nm-patina__when">5 yr</span><span class="screen-reader-text">: Deep chestnut</span></span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-cell nm-i-wallets nm-l-black","layout":{"type":"default"}} -->
<div class="wp-block-group nm-cell nm-i-wallets nm-l-black"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"nm-cell__photo"} -->
<figure class="wp-block-image size-large nm-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p02-cardcase.jpg" alt="Slim Card Case in black leather"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"nm-cell__title"} -->
<h3 class="wp-block-heading nm-cell__title"><a href="/contact/">Slim Card Case</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-cell__note"} -->
<p class="nm-cell__note">Black vegetable-tanned cowhide, 1.6 mm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-cell__price"} -->
<p class="nm-cell__price">$68</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="nm-patina nm-patina--black"><span class="nm-patina__step"><span class="nm-patina__when">New</span><span class="screen-reader-text">: Matt black</span></span><span class="nm-patina__step"><span class="nm-patina__when">1 yr</span><span class="screen-reader-text">: Soft sheen</span></span><span class="nm-patina__step"><span class="nm-patina__when">5 yr</span><span class="screen-reader-text">: Deep gloss</span></span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-cell nm-i-wallets nm-l-indigo","layout":{"type":"default"}} -->
<div class="wp-block-group nm-cell nm-i-wallets nm-l-indigo"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"nm-cell__photo"} -->
<figure class="wp-block-image size-large nm-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p03-longwallet.jpg" alt="River Long Wallet in indigo leather"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"nm-cell__title"} -->
<h3 class="wp-block-heading nm-cell__title"><a href="/contact/">River Long Wallet</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-cell__note"} -->
<p class="nm-cell__note">Indigo-dyed vegetable-tanned leather, 1.8 mm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-cell__price"} -->
<p class="nm-cell__price">$186</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="nm-patina nm-patina--indigo"><span class="nm-patina__step"><span class="nm-patina__when">New</span><span class="screen-reader-text">: Ink indigo</span></span><span class="nm-patina__step"><span class="nm-patina__when">1 yr</span><span class="screen-reader-text">: Softened indigo</span></span><span class="nm-patina__step"><span class="nm-patina__when">5 yr</span><span class="screen-reader-text">: Worn denim blue</span></span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-cell nm-i-bags nm-l-natural","layout":{"type":"default"}} -->
<div class="wp-block-group nm-cell nm-i-bags nm-l-natural"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"nm-cell__photo"} -->
<figure class="wp-block-image size-large nm-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p04-tote.jpg" alt="Market Tote in natural leather"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"nm-cell__title"} -->
<h3 class="wp-block-heading nm-cell__title"><a href="/contact/">Market Tote</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-cell__note"} -->
<p class="nm-cell__note">Natural vegetable-tanned cowhide, 2.4 mm, unlined</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-cell__price"} -->
<p class="nm-cell__price">$320</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="nm-patina nm-patina--natural"><span class="nm-patina__step"><span class="nm-patina__when">New</span><span class="screen-reader-text">: Pale honey</span></span><span class="nm-patina__step"><span class="nm-patina__when">1 yr</span><span class="screen-reader-text">: Warm honey</span></span><span class="nm-patina__step"><span class="nm-patina__when">5 yr</span><span class="screen-reader-text">: Deep chestnut</span></span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-cell nm-i-bags nm-l-black","layout":{"type":"default"}} -->
<div class="wp-block-group nm-cell nm-i-bags nm-l-black"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"nm-cell__photo"} -->
<figure class="wp-block-image size-large nm-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p05-shoulder.jpg" alt="Small Shoulder Bag in black leather"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"nm-cell__title"} -->
<h3 class="wp-block-heading nm-cell__title"><a href="/contact/">Small Shoulder Bag</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-cell__note"} -->
<p class="nm-cell__note">Black vegetable-tanned cowhide, 2 mm, cotton lined</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-cell__price"} -->
<p class="nm-cell__price">$280</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="nm-patina nm-patina--black"><span class="nm-patina__step"><span class="nm-patina__when">New</span><span class="screen-reader-text">: Matt black</span></span><span class="nm-patina__step"><span class="nm-patina__when">1 yr</span><span class="screen-reader-text">: Soft sheen</span></span><span class="nm-patina__step"><span class="nm-patina__when">5 yr</span><span class="screen-reader-text">: Deep gloss</span></span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-cell nm-i-belts nm-l-natural","layout":{"type":"default"}} -->
<div class="wp-block-group nm-cell nm-i-belts nm-l-natural"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"nm-cell__photo"} -->
<figure class="wp-block-image size-large nm-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p06-belt.jpg" alt="Saddle Belt in natural leather"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"nm-cell__title"} -->
<h3 class="wp-block-heading nm-cell__title"><a href="/contact/">Saddle Belt</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-cell__note"} -->
<p class="nm-cell__note">Natural bridle-weight leather, 4 mm, 30 mm wide</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-cell__price"} -->
<p class="nm-cell__price">$96</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="nm-patina nm-patina--natural"><span class="nm-patina__step"><span class="nm-patina__when">New</span><span class="screen-reader-text">: Pale honey</span></span><span class="nm-patina__step"><span class="nm-patina__when">1 yr</span><span class="screen-reader-text">: Warm honey</span></span><span class="nm-patina__step"><span class="nm-patina__when">5 yr</span><span class="screen-reader-text">: Deep chestnut</span></span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-cell nm-i-wallets nm-l-black","layout":{"type":"default"}} -->
<div class="wp-block-group nm-cell nm-i-wallets nm-l-black"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"nm-cell__photo"} -->
<figure class="wp-block-image size-large nm-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p07-keycase.jpg" alt="Key Case in black leather"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"nm-cell__title"} -->
<h3 class="wp-block-heading nm-cell__title"><a href="/contact/">Key Case</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-cell__note"} -->
<p class="nm-cell__note">Black vegetable-tanned cowhide, 1.6 mm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-cell__price"} -->
<p class="nm-cell__price">$58</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="nm-patina nm-patina--black"><span class="nm-patina__step"><span class="nm-patina__when">New</span><span class="screen-reader-text">: Matt black</span></span><span class="nm-patina__step"><span class="nm-patina__when">1 yr</span><span class="screen-reader-text">: Soft sheen</span></span><span class="nm-patina__step"><span class="nm-patina__when">5 yr</span><span class="screen-reader-text">: Deep gloss</span></span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nm-cell nm-i-wallets nm-l-natural","layout":{"type":"default"}} -->
<div class="wp-block-group nm-cell nm-i-wallets nm-l-natural"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"nm-cell__photo"} -->
<figure class="wp-block-image size-large nm-cell__photo"><a href="/contact/"><img src="{{theme}}/assets/images/p08-notebook.jpg" alt="Notebook Cover in natural leather"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"nm-cell__title"} -->
<h3 class="wp-block-heading nm-cell__title"><a href="/contact/">Notebook Cover</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nm-cell__note"} -->
<p class="nm-cell__note">Natural vegetable-tanned cowhide, 1.4 mm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nm-cell__price"} -->
<p class="nm-cell__price">$88</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="nm-patina nm-patina--natural"><span class="nm-patina__step"><span class="nm-patina__when">New</span><span class="screen-reader-text">: Pale honey</span></span><span class="nm-patina__step"><span class="nm-patina__when">1 yr</span><span class="screen-reader-text">: Warm honey</span></span><span class="nm-patina__step"><span class="nm-patina__when">5 yr</span><span class="screen-reader-text">: Deep chestnut</span></span></p>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
	<?php
endif;
