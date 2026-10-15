<?php
/**
 * Title: Home: the tabi
 * Slug: jika-tabi/home-rail
 * Categories: jika-tabi
 * Keywords: tabi, shop
 * Viewport Width: 1440
 * Description: Four pairs in a grid: the shop's products while WooCommerce is active, otherwise the same four as static cells that link to Contact.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"jt-section jt-section--rail","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull jt-section jt-section--rail"><!-- wp:group {"align": "wide", "className": "jt-head jt-head--row", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide jt-head jt-head--row"><!-- wp:group {"className": "jt-stack", "layout": {"type": "default"}} -->
<div class="wp-block-group jt-stack"><!-- wp:paragraph {"className": "is-style-label"} -->
<p class="is-style-label">The tabi</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">On the <em>bench now.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "jt-quiet jt-head__aside"} -->
<p class="jt-quiet jt-head__aside">Four pairs from this season. Each one carries its cloth and the number of brass clasps.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"jt-rail jt-rail--grid","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide jt-rail jt-rail--grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"jt-canopy__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"jt-canopy__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"jt-canopy__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "jt-section jt-section--rail", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull jt-section jt-section--rail"><!-- wp:group {"align": "wide", "className": "jt-head jt-head--row", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide jt-head jt-head--row"><!-- wp:group {"className": "jt-stack", "layout": {"type": "default"}} -->
<div class="wp-block-group jt-stack"><!-- wp:paragraph {"className": "is-style-label"} -->
<p class="is-style-label">The tabi</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">On the <em>bench now.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "jt-quiet jt-head__aside"} -->
<p class="jt-quiet jt-head__aside">Four pairs from this season. Each one carries its cloth and the number of brass clasps.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "jt-rail jt-rail--grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide jt-rail jt-rail--grid"><!-- wp:group {"className": "jt-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group jt-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"jt-canopy__photo"} -->
<figure class="wp-block-image size-large jt-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-classic.webp' ) ); ?>" alt="Navy split-toe jika-tabi boots"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "jt-canopy__name"} -->
<h3 class="wp-block-heading jt-canopy__name">Classic Jika-tabi</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "jt-canopy__ribs"} -->
<p class="jt-canopy__ribs">Indigo canvas &#183; 12 clasps</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "jt-canopy__price"} -->
<p class="jt-canopy__price">$96.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "jt-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group jt-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"jt-canopy__photo"} -->
<figure class="wp-block-image size-large jt-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-white.webp' ) ); ?>" alt="White split-toe tabi socks"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "jt-canopy__name"} -->
<h3 class="wp-block-heading jt-canopy__name">White Kohaze Tabi</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "jt-canopy__ribs"} -->
<p class="jt-canopy__ribs">Cotton &#183; 4 clasps</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "jt-canopy__price"} -->
<p class="jt-canopy__price">$28.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "jt-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group jt-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"jt-canopy__photo"} -->
<figure class="wp-block-image size-large jt-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-sole.webp' ) ); ?>" alt="Low split-toe tabi shoes with sashiko"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "jt-canopy__name"} -->
<h3 class="wp-block-heading jt-canopy__name">Sashiko Low Tabi</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "jt-canopy__ribs"} -->
<p class="jt-canopy__ribs">Sashiko canvas &#183; 3 clasps</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "jt-canopy__price"} -->
<p class="jt-canopy__price">$78.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "jt-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group jt-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"jt-canopy__photo"} -->
<figure class="wp-block-image size-large jt-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tabi-cutout.webp' ) ); ?>" alt="A single navy jika-tabi boot"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "jt-canopy__name"} -->
<h3 class="wp-block-heading jt-canopy__name">Single Boot, Sample</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "jt-canopy__ribs"} -->
<p class="jt-canopy__ribs">Indigo canvas &#183; 8 clasps</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "jt-canopy__price"} -->
<p class="jt-canopy__price">$84.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
	<?php
endif;
