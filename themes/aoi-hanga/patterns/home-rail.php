<?php
/**
 * Title: Home: this season's editions
 * Slug: aoi-hanga/home-rail
 * Categories: aoi-hanga
 * Keywords: woodblock prints, shop
 * Viewport Width: 1440
 * Description: Four editions in a grid: the shop's products while WooCommerce is active, otherwise the same four as static cells that link to Contact.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"ah-section ah-section--rail","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ah-section ah-section--rail"><!-- wp:group {"align": "wide", "className": "ah-head ah-head--row", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ah-head ah-head--row"><!-- wp:group {"className": "ah-stack", "layout": {"type": "default"}} -->
<div class="wp-block-group ah-stack"><!-- wp:paragraph {"className": "is-style-label"} -->
<p class="is-style-label">From the press</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">This season&#8217;s <em>editions.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "ah-quiet ah-head__aside"} -->
<p class="ah-quiet ah-head__aside">Four prints and one class. Each sheet is signed and numbered; the block stays in the studio.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"ah-rail ah-rail--grid","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide ah-rail ah-rail--grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"ah-canopy__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ah-canopy__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"ah-canopy__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ah-section ah-section--rail", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ah-section ah-section--rail"><!-- wp:group {"align": "wide", "className": "ah-head ah-head--row", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ah-head ah-head--row"><!-- wp:group {"className": "ah-stack", "layout": {"type": "default"}} -->
<div class="wp-block-group ah-stack"><!-- wp:paragraph {"className": "is-style-label"} -->
<p class="is-style-label">From the press</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">This season&#8217;s <em>editions.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "ah-quiet ah-head__aside"} -->
<p class="ah-quiet ah-head__aside">Four prints and one class. Each sheet is signed and numbered; the block stays in the studio.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "ah-rail ah-rail--grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ah-rail ah-rail--grid"><!-- wp:group {"className": "ah-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group ah-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"ah-canopy__photo"} -->
<figure class="wp-block-image size-large ah-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' ) ); ?>print-heron.webp" alt="A grey heron in shallow reeds"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ah-canopy__name"} -->
<h3 class="wp-block-heading ah-canopy__name">Heron in Reeds</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ah-canopy__ribs"} -->
<p class="ah-canopy__ribs">Edition of 30 &#183; 32 &#215; 45 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ah-canopy__price"} -->
<p class="ah-canopy__price">$280.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ah-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group ah-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"ah-canopy__photo"} -->
<figure class="wp-block-image size-large ah-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' ) ); ?>print-mountain.webp" alt="Misty mountains with a lone pine"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ah-canopy__name"} -->
<h3 class="wp-block-heading ah-canopy__name">Pine Ridge</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ah-canopy__ribs"} -->
<p class="ah-canopy__ribs">Edition of 25 &#183; 45 &#215; 32 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ah-canopy__price"} -->
<p class="ah-canopy__price">$320.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ah-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group ah-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"ah-canopy__photo"} -->
<figure class="wp-block-image size-large ah-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' ) ); ?>print-wave.webp" alt="A curling wave with a small boat"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ah-canopy__name"} -->
<h3 class="wp-block-heading ah-canopy__name">Spring Wave</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ah-canopy__ribs"} -->
<p class="ah-canopy__ribs">Edition of 30 &#183; 45 &#215; 32 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ah-canopy__price"} -->
<p class="ah-canopy__price">$300.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ah-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group ah-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"ah-canopy__photo"} -->
<figure class="wp-block-image size-large ah-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' ) ); ?>process.webp" alt="Hands pressing a baren on an inked block"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ah-canopy__name"} -->
<h3 class="wp-block-heading ah-canopy__name">Saturday class</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ah-canopy__ribs"} -->
<p class="ah-canopy__ribs">One morning &#183; tools and paper included</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ah-canopy__price"} -->
<p class="ah-canopy__price">$95.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
	<?php
endif;
