<?php
/**
 * Title: Shop — the catalogue (orders by email)
 * Slug: seiji-utsuwa/shop-catalogue
 * Categories: seiji-utsuwa, featured, gallery
 * Keywords: shop, catalogue, products, order
 * Viewport Width: 1440
 * Description: The shop page without an online store: a page head with how to order by email, then every piece on a plinth tile with its number, price, kiln and glaze. With WooCommerce active the shop page shows the store instead.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"su-section su-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull su-section su-page-head"><!-- wp:group {"align":"wide","className":"su-grid","layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide su-grid"><!-- wp:group {"className":"su-page-head__copy","style":{"layout":{"columnSpan":8}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-page-head__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The collection</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Objects for the <em>table</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Every piece on our shelf this season, each one made by hand and a little different from its neighbours. Write to us with what you would like: we reply with photos of the exact piece and the total.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-page-head__aside","style":{"layout":{"columnSpan":4}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"bottom"}} -->
<div class="wp-block-group su-page-head__aside"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Order by email</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-aside__link"} -->
<p class="su-aside__link"><a href="mailto:orders@mizuiro.example">orders@mizuiro.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-small"} -->
<p class="su-small">Free shipping in Japan over $150. Every piece wrapped in washi and sent with a care card.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"su-section su-shop-catalogue","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull su-section su-shop-catalogue"><!-- wp:group {"align":"wide","className":"su-grid su-gallery su-catalogue","layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide su-grid su-gallery su-catalogue"><!-- wp:group {"className":"su-object su-object--big","style":{"layout":{"columnSpan":6,"rowSpan":2}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--big"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-moon-pool-bowl.svg' ) ); ?>" alt="A deep celadon rice bowl with glaze pooling darker teal in the well and a bare clay foot" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price">$48</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">Moon Pool Rice Bowl</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Mizunoe Kiln · Celadon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-object su-object--sm","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-still-water-plate.svg' ) ); ?>" alt="A wide shallow celadon plate with a glassy pool of glaze in the centre and a faint crackle" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price">$62</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">Still Water Plate, 24 cm</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Mizunoe Kiln · Celadon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-object su-object--sm","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-ripple-teacup.svg' ) ); ?>" alt="A tall cylindrical pale celadon teacup with fine horizontal carved ripples" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price">$34</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">Ripple Teacup</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Shirokawa Kiln · Pale seiji</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-object su-object--sm","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-ash-glaze-bottle-vase.svg' ) ); ?>" alt="A tall stoneware bottle vase with green natural ash glaze running down from the shoulder" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 04</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price">$128</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">Ash Glaze Bottle Vase</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Ishizuchi Kiln · Natural wood ash</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-object su-object--sm","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-river-stone-sake-set.svg' ) ); ?>" alt="A stoneware sake flask and two small cups, dipped halfway in pale celadon glaze" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 05</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price"><s>$96</s> $84</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">River Stone Sake Set</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Ishizuchi Kiln · Pale celadon dip</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-object su-object--sm","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-dew-small-dishes.svg' ) ); ?>" alt="Five small round dishes in celadon, pale blue, iron black and bare clay arranged in a loose cluster" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 06</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price">$70</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">Dew Small Dishes, set of five</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Tsukiyama Kiln · Five glazes: celadon, pale, iron black, ash and bare clay</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-object su-object--sm","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-iron-rim-noodle-bowl.svg' ) ); ?>" alt="A wide deep bowl with a celadon interior and a dark iron-black rim" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 07</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price">$56</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">Iron Rim Noodle Bowl</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Tsukiyama Kiln · Celadon inside, iron-black rim</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-object su-object--sm","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-tide-oval-platter.svg' ) ); ?>" alt="A long oval celadon platter with glaze pooling in a carved, wave-like centre" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 08</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price">$110</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">Tide Oval Platter</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Mizunoe Kiln · Celadon</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-object su-object--sm","style":{"layout":{"columnSpan":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--sm"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-pebble-chopstick-rests.svg' ) ); ?>" alt="Four small pebble-shaped chopstick rests in different glazes, with wooden chopsticks resting on one" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 09</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price">$28</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">Pebble Chopstick Rests, set of four</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Shirokawa Kiln · Four porcelain glazes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-object su-object--big","style":{"layout":{"columnSpan":6,"rowSpan":2}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-object su-object--big"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-plinth su-object__image"} -->
<figure class="wp-block-image size-full is-style-plinth su-object__image"><a href="/shop/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/product-carved-lidded-jar.svg' ) ); ?>" alt="A round porcelain jar carved with vertical petals under pale celadon, with a small knob on its lid" style="aspect-ratio:4/5;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"su-object__line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group su-object__line"><!-- wp:paragraph {"className":"su-object__no"} -->
<p class="su-object__no">No. 10</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"su-object__price"} -->
<p class="su-object__price">$140</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"su-object__title"} -->
<h3 class="wp-block-heading su-object__title"><a href="/shop/">Carved Celadon Lidded Jar</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"su-object__meta"} -->
<p class="su-object__meta">Shirokawa Kiln · Pale seiji</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
