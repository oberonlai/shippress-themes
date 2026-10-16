<?php
/**
 * Title: Home: the kokeshi
 * Slug: kokeshi-kobo/home-rail
 * Categories: kokeshi-kobo
 * Keywords: kokeshi, shop
 * Viewport Width: 1440
 * Description: Four dolls in a grid: the shop's products while WooCommerce is active, otherwise the same four as static cells that link to Contact.
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:group {"tagName":"section","align":"full","className":"kk-section kk-section--rail","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kk-section kk-section--rail"><!-- wp:group {"align": "wide", "className": "kk-head kk-head--row", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kk-head kk-head--row"><!-- wp:group {"className": "kk-stack", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-stack"><!-- wp:paragraph {"className": "is-style-label"} -->
<p class="is-style-label">The kokeshi</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">On the <em>shelf now.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "kk-quiet kk-head__aside"} -->
<p class="kk-quiet kk-head__aside">Four dolls from this season. Each one carries its wood and its height.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"align":"wide","className":"kk-rail kk-rail--grid","collection":"woocommerce/product-collection/product-catalog"} -->
<div class="wp-block-woocommerce-product-collection alignwide kk-rail kk-rail--grid"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"single","isDescendentOfQueryLoop":true,"aspectRatio":"1","className":"kk-canopy__photo"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kk-canopy__name","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"className":"kk-canopy__price"} /-->
<!-- /wp:woocommerce/product-template -->
</div>
<!-- /wp:woocommerce/product-collection --></section>
<!-- /wp:group -->
	<?php
else :
	?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kk-section kk-section--rail", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kk-section kk-section--rail"><!-- wp:group {"align": "wide", "className": "kk-head kk-head--row", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kk-head kk-head--row"><!-- wp:group {"className": "kk-stack", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-stack"><!-- wp:paragraph {"className": "is-style-label"} -->
<p class="is-style-label">The kokeshi</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">On the <em>shelf now.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "kk-quiet kk-head__aside"} -->
<p class="kk-quiet kk-head__aside">Four dolls from this season. Each one carries its wood and its height.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "kk-rail kk-rail--grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kk-rail kk-rail--grid"><!-- wp:group {"className": "kk-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"kk-canopy__photo"} -->
<figure class="wp-block-image size-large kk-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-naruko.webp' ) ); ?>" alt="A squat naruko kokeshi with red flowers"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kk-canopy__name"} -->
<h3 class="wp-block-heading kk-canopy__name">Naruko Kokeshi, Red Flowers</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kk-canopy__ribs"} -->
<p class="kk-canopy__ribs">Mizuki &#183; 15 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kk-canopy__price"} -->
<p class="kk-canopy__price">$68.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kk-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"kk-canopy__photo"} -->
<figure class="wp-block-image size-large kk-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-togatta.webp' ) ); ?>" alt="A pair of slender striped togatta kokeshi"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kk-canopy__name"} -->
<h3 class="wp-block-heading kk-canopy__name">Togatta Pair, Striped</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kk-canopy__ribs"} -->
<p class="kk-canopy__ribs">Cherry &#183; 24 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kk-canopy__price"} -->
<p class="kk-canopy__price">$112.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kk-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"kk-canopy__photo"} -->
<figure class="wp-block-image size-large kk-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p-blank.webp' ) ); ?>" alt="Three unpainted kokeshi blanks and a brush"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kk-canopy__name"} -->
<h3 class="wp-block-heading kk-canopy__name">Blank Set for Painting</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kk-canopy__ribs"} -->
<p class="kk-canopy__ribs">Mizuki &#183; 9-18 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kk-canopy__price"} -->
<p class="kk-canopy__price">$42.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kk-canopy", "layout": {"type": "default"}} -->
<div class="wp-block-group kk-canopy"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"kk-canopy__photo"} -->
<figure class="wp-block-image size-large kk-canopy__photo"><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kokeshi-cutout.webp' ) ); ?>" alt="A tall kokeshi painted with red chrysanthemums"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kk-canopy__name"} -->
<h3 class="wp-block-heading kk-canopy__name">Tall Chrysanthemum Kokeshi</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kk-canopy__ribs"} -->
<p class="kk-canopy__ribs">Mizuki &#183; 30 cm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kk-canopy__price"} -->
<p class="kk-canopy__price">$145.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
	<?php
endif;
