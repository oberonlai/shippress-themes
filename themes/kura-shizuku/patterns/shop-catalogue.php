<?php
/**
 * Title: Shop — the cellar (orders by email)
 * Slug: kura-shizuku/shop-catalogue
 * Categories: kura-shizuku, featured, gallery
 * Keywords: shop, catalogue, products, order, sake
 * Viewport Width: 1440
 * Description: The shop page without an online store: a centred head with how to order by email, then every bottle and brewery good in a gilt label frame with its number, price and style. With WooCommerce active the shop page shows the store instead.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-page-head"><!-- wp:group {"align":"wide","className":"ks-page-head__inner ks-centre","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-page-head__inner ks-centre"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The cellar</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Bottles from the <em>storehouse</em></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-gilded"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-gilded"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Everything we have pressed and bottled this season, with a few things from the brewery. Write to us with what you would like: we reply with the total and the delivery date.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-page-head__aside","layout":{"type":"default"}} -->
<div class="wp-block-group ks-page-head__aside"><!-- wp:paragraph {"className":"ks-aside__link"} -->
<p class="ks-aside__link"><a href="mailto:cellar@amane-brewery.example">cellar@amane-brewery.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-small"} -->
<p class="ks-small">We sell sake only to customers of legal drinking age and check ID on delivery.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-shop-catalogue","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-shop-catalogue"><!-- wp:group {"align":"wide","className":"ks-grid ks-bottles ks-catalogue","layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ks-grid ks-bottles ks-catalogue"><!-- wp:group {"className":"ks-bottle ks-bottle--big","style":{"layout":{"columnSpan":6}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle ks-bottle--big"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-shizuku-daiginjo.svg' ) ); ?>" alt="A tall slim frosted-ivory sake bottle with a washi label, a fine gold border and a gold foil cap" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$78</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">Shizuku Junmai Daiginjo</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">Junmai Daiginjo · drip-pressed · rice polished to 40%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bottle ks-bottle--big","style":{"layout":{"columnSpan":6}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle ks-bottle--big"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-kimoto-aged.svg' ) ); ?>" alt="A squat dark amber bottle of aged sake with a kraft label and a gold wax seal" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$54</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">Kimoto Junmai, Three Winters</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">Kimoto Junmai · aged three winters</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bottle","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-ivory-ginjo.svg' ) ); ?>" alt="A pale amber sake bottle with an ivory label ruled in cedar brown" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$42</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">Ivory Junmai Ginjo</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">Junmai Ginjo · rice polished to 55%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bottle","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-cedar-taruzake.svg' ) ); ?>" alt="A dark green sake bottle beside a small cedar cask bound with two bands" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 04</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$36</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">Cedar Cask Taruzake</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">Junmai · rested in cedar · rice polished to 65%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bottle","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-first-snow-nigori.svg' ) ); ?>" alt="A clear bottle of cloudy white nigori sake with a pale grey-blue label" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 05</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$28</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">First Snow Nigori</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">Nigori · coarse-filtered · rice polished to 60%</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bottle","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-tasting-trio.svg' ) ); ?>" alt="Three small sake bottles in ivory, amber and green standing in an open paulownia-wood box" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 06</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$44</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">Tasting Trio Gift Box</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">Shizuku, Ivory and Three Winters · 3 × 180 ml</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bottle","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-hairline-sake-set.svg' ) ); ?>" alt="An ivory ceramic sake flask and two small cups with fine gold rims on a cedar tray" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 07</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$86</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">Hairline Sake Set, flask and two cups</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">Porcelain with a gold rim · made for the brewery</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bottle","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-cedar-masu-pair.svg' ) ); ?>" alt="Two square cedar masu cups, one holding a small glass" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 08</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$24</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">Cedar Masu Cups, pair</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">Hinoki and cedar · joined without nails</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bottle","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-sake-lees.svg' ) ); ?>" alt="A paper-wrapped package of sake lees tied with string beside a dish with a cream-coloured paste" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 09</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$12</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">Sake Lees (Sakekasu)</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">From the winter pressing · for cooking</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bottle","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group ks-bottle"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-label-frame ks-bottle__image"} -->
<figure class="wp-block-image size-full is-style-label-frame ks-bottle__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-linen-tasting-cloth.svg' ) ); ?>" alt="A folded natural linen cloth with a gold stitched drop and a small cup resting on it" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-bottle__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group ks-bottle__line"><!-- wp:paragraph {"className":"ks-bottle__no"} -->
<p class="ks-bottle__no">No. 10</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-bottle__price"} -->
<p class="ks-bottle__price">$32</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-bottle__title"} -->
<h3 class="wp-block-heading ks-bottle__title"><a href="/shop/">Linen Tasting Cloth</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-bottle__meta"} -->
<p class="ks-bottle__meta">Natural linen · gold stitched drop</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
