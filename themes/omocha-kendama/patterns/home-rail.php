<?php
/**
 * Title: Home: the toy shelf
 * Slug: omocha-kendama/home-rail
 * Categories: omocha-kendama
 * Keywords: wooden toys, shop
 * Viewport Width: 1440
 * Description: Four toys in a grid: the shop's products while WooCommerce is active, otherwise the same four as static cells that link to Contact.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"ok-section ok-section--rail","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ok-section ok-section--rail"><!-- wp:group {"align": "wide", "className": "ok-head ok-head--row", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ok-head ok-head--row"><!-- wp:group {"className": "ok-stack", "layout": {"type": "default"}} -->
<div class="wp-block-group ok-stack"><!-- wp:paragraph {"className": "is-style-label"} -->
<p class="is-style-label">The toy shelf</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">New on <em>the shelf.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "ok-quiet ok-head__aside"} -->
<p class="ok-quiet ok-head__aside">Four from this season&#8217;s eight. Each one carries the name of the wood and the age it suits.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"ok-rail ok-rail--grid","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide ok-rail ok-rail--grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"ok-canopy__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ok-canopy__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"ok-canopy__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ok-section ok-section--rail", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ok-section ok-section--rail"><!-- wp:group {"align": "wide", "className": "ok-head ok-head--row", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ok-head ok-head--row"><!-- wp:group {"className": "ok-stack", "layout": {"type": "default"}} -->
<div class="wp-block-group ok-stack"><!-- wp:paragraph {"className": "is-style-label"} -->
<p class="is-style-label">The toy shelf</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">New on <em>the shelf.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "ok-quiet ok-head__aside"} -->
<p class="ok-quiet ok-head__aside">Four from this season&#8217;s eight. Each one carries the name of the wood and the age it suits.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "ok-rail ok-rail--grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ok-rail ok-rail--grid"><!-- wp:group {"className": "ok-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group ok-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"ok-canopy__photo"} -->
<figure class="wp-block-image size-large ok-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-kendama.webp' ) ); ?>" alt="A beech kendama with a red ball"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ok-canopy__name"} -->
<h3 class="wp-block-heading ok-canopy__name">Classic Beech Kendama</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ok-canopy__ribs"} -->
<p class="ok-canopy__ribs">Beech &#183; ages 6+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ok-canopy__price"} -->
<p class="ok-canopy__price">$38.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ok-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group ok-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"ok-canopy__photo"} -->
<figure class="wp-block-image size-large ok-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-koma.webp' ) ); ?>" alt="Three turned spinning tops"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ok-canopy__name"} -->
<h3 class="wp-block-heading ok-canopy__name">Spinning Top Trio</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ok-canopy__ribs"} -->
<p class="ok-canopy__ribs">Cherry &#183; ages 4+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ok-canopy__price"} -->
<p class="ok-canopy__price">$26.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ok-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group ok-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"ok-canopy__photo"} -->
<figure class="wp-block-image size-large ok-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-daruma.webp' ) ); ?>" alt="A daruma otoshi stack"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ok-canopy__name"} -->
<h3 class="wp-block-heading ok-canopy__name">Daruma Otoshi</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ok-canopy__ribs"} -->
<p class="ok-canopy__ribs">Maple &#183; ages 3+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ok-canopy__price"} -->
<p class="ok-canopy__price">$32.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ok-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group ok-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"ok-canopy__photo"} -->
<figure class="wp-block-image size-large ok-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-train.webp' ) ); ?>" alt="A wooden pull-along train"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ok-canopy__name"} -->
<h3 class="wp-block-heading ok-canopy__name">Pull-along Train</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ok-canopy__ribs"} -->
<p class="ok-canopy__ribs">Beech &#183; ages 1+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ok-canopy__price"} -->
<p class="ok-canopy__price">$54.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
	<?php
endif;
