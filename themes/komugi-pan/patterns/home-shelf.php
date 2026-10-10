<?php
/**
 * Title: Home: today's shelf (products first)
 * Slug: komugi-pan/home-shelf
 * Categories: komugi-pan, featured
 * Keywords: shop, products, bread, shelf, prices, hero
 * Viewport Width: 1440
 * Description: The opening of the home page: a short greeting and then the bread itself, eight cards with loaf-topped photographs and round price stickers, set in a gentle zig-zag like a cooling rack.
 */

$komugi_pan_breads = array(
	array( 'product-shokupan', 'Milk Shokupan', 'Loaf', 'Tall, soft and milky. The bread for thick toast.', '$9.50', 'A sliced loaf of Japanese milk bread on a board' ),
	array( 'product-country-sourdough', 'Country Sourdough', 'Loaf', 'A three-day levain, a dark crust, an open crumb.', '$11', 'Two round sourdough loaves on a cooling rack' ),
	array( 'product-butter-croissant', 'Butter Croissant', 'Pastry', 'Cultured butter folded into twenty-seven layers.', '$4.20', 'Three golden croissants on linen' ),
	array( 'product-melon-pan', 'Melon Pan', 'Sweet bun', 'A crackled cookie top over a soft milk bun.', '$3.20', 'Melon pan buns with a crisscross sugar crust' ),
	array( 'product-morning-baguette', 'Morning Baguette', 'Loaf', 'Thin, crackling crust. Baked twice a day.', '$4.50', 'Baguettes cooling on a wooden rack' ),
	array( 'product-cinnamon-roll', 'Cinnamon Roll', 'Pastry', 'Cardamom dough, glazed while it is still warm.', '$4.80', 'A glazed cinnamon roll on a ceramic plate' ),
	array( 'product-sesame-anpan', 'Sesame Anpan', 'Sweet bun', 'Smooth red-bean paste under toasted sesame.', '$3', 'Glazed sweet buns topped with sesame seeds' ),
	array( 'product-stone-oven-batard', 'Stone-oven Batard', 'Loaf', 'Rye and spelt, baked straight on the stone.', '$8.50', 'A batard lifted from a brick oven on a peel' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kp-section kp-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kp-section kp-section--flush-top"><!-- wp:group {"align":"wide","className":"kp-shelf-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kp-shelf-head"><!-- wp:group {"className":"kp-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kp-stack"><!-- wp:paragraph {"className":"is-style-tag"} -->
<p class="is-style-tag">A neighbourhood bakery in Kichijoji</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Warm bread, <em>all morning long</em></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-shelf-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group kp-shelf-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Loaves, pastries and sweet buns from one stone oven. Reserve a loaf the day before and collect it still a little warm.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/">Shop today's bread</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/bake-schedule/">See the bake board</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kp-shelf","layout":{"type":"default"}} -->
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
<h3 class="wp-block-heading kp-card__title"><a href="/shop/"><?php echo esc_html( $komugi_pan_b[1] ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-card__text"} -->
<p class="kp-card__text"><?php echo esc_html( $komugi_pan_b[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
