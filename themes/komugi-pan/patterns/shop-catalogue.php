<?php
/**
 * Title: Shop: the bread list (orders by phone or email)
 * Slug: komugi-pan/shop-catalogue
 * Categories: komugi-pan, featured
 * Keywords: shop, products, catalogue, order, prices
 * Viewport Width: 1440
 * Description: The shop page without an online store: a page head with how to reserve, then every loaf, pastry and sweet bun with a photograph and price. With WooCommerce active the shop page shows the store instead.
 */

$komugi_pan_breads = array(
	array( 'product-shokupan', 'Milk Shokupan', 'Loaf', 'Tall, soft and milky, baked in a lidded tin. The bread for thick toast.', '$9.50', 'A sliced loaf of Japanese milk bread on a board' ),
	array( 'product-country-sourdough', 'Country Sourdough', 'Loaf', 'A three-day levain, a dark blistered crust and an open, tangy crumb.', '$11', 'Two round sourdough loaves on a cooling rack' ),
	array( 'product-morning-baguette', 'Morning Baguette', 'Loaf', 'A thin, crackling crust over a creamy crumb. Baked twice a day.', '$4.50', 'Baguettes cooling on a wooden rack' ),
	array( 'product-stone-oven-batard', 'Stone-oven Batard', 'Loaf', 'Rye and spelt with a little honey, baked straight on the oven stone.', '$8.50', 'A batard lifted from a brick oven on a peel' ),
	array( 'product-butter-croissant', 'Butter Croissant', 'Pastry', 'Cultured butter folded into twenty-seven layers, shattering at the edges.', '$4.20', 'Three golden croissants on linen' ),
	array( 'product-cinnamon-roll', 'Cinnamon Roll', 'Pastry', 'Cardamom dough rolled with cinnamon sugar, glazed while still warm.', '$4.80', 'A glazed cinnamon roll on a ceramic plate' ),
	array( 'product-melon-pan', 'Melon Pan', 'Sweet bun', 'A crackled cookie crust over a soft milk bun. No melon, only joy.', '$3.20', 'Melon pan buns with a crisscross sugar crust' ),
	array( 'product-sesame-anpan', 'Sesame Anpan', 'Sweet bun', 'Smooth red-bean paste in a soft bun under toasted sesame.', '$3', 'Glazed sweet buns topped with sesame seeds' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kp-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kp-page-head"><!-- wp:group {"align":"wide","className":"kp-shelf-head","style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kp-shelf-head" style="padding-top:0"><!-- wp:group {"className":"kp-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kp-stack"><!-- wp:paragraph {"className":"is-style-tag"} -->
<p class="is-style-tag">Loaves, pastries &amp; sweet buns</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The bread <em>shelf</em></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-shelf-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group kp-shelf-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Call or write with what you would like and the day you will come by. We set it aside on the shelf behind the counter.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">How to reserve</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kp-section kp-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kp-section kp-section--flush-top"><!-- wp:group {"align":"wide","className":"kp-shelf","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kp-shelf"><?php foreach ( $komugi_pan_breads as $komugi_pan_i => $komugi_pan_b ) : ?><?php echo $komugi_pan_i ? "\n\n" : ''; ?><!-- wp:group {"className":"kp-card","layout":{"type":"default"}} -->
<div class="wp-block-group kp-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kp-card__picture"} -->
<figure class="wp-block-image size-full kp-card__picture"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $komugi_pan_b[0] . '.jpg' ) ); ?>" alt="<?php echo esc_attr( $komugi_pan_b[5] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kp-price-sticker"} -->
<p class="kp-price-sticker"><?php echo esc_html( $komugi_pan_b[4] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-card__kind"} -->
<p class="kp-card__kind"><?php echo esc_html( $komugi_pan_b[2] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kp-card__title"} -->
<h3 class="wp-block-heading kp-card__title"><?php echo esc_html( $komugi_pan_b[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-card__text"} -->
<p class="kp-card__text"><?php echo esc_html( $komugi_pan_b[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kp-section kp-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kp-section kp-section--flush-top"><!-- wp:group {"align":"wide","className":"kp-panel","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kp-panel"><!-- wp:heading {"level":2,"className":"kp-board__title"} -->
<h2 class="wp-block-heading kp-board__title">Reserve by phone or email</h2>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"komugi-pan/visit-info"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
