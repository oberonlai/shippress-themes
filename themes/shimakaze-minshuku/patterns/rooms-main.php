<?php
/**
 * Title: Rooms: the rooms grid and rates
 * Slug: shimakaze-minshuku/rooms-main
 * Categories: shimakaze-minshuku
 * Keywords: island guesthouse, minshuku
 * Viewport Width: 1440
 * Description: A grid of rooms and plans with prices, then the synced rates card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sm-section sm-rooms", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sm-section sm-rooms"><!-- wp:group {"align": "wide", "className": "sm-grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sm-grid"><!-- wp:group {"className": "sm-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-room"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-room__img"} -->
<figure class="wp-block-image size-full sm-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-tatami.webp' ) ); ?>" alt="Woodblock illustration of a tatami room facing the sea"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sm-room__name"} -->
<h3 class="wp-block-heading sm-room__name">Sea room</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Eight tatami mats, a low table and the harbour through the shoji. Sleeps three.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sm-room__price"} -->
<p class="sm-room__price">From &#165;13,800 with meals</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sm-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-room"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-room__img"} -->
<figure class="wp-block-image size-full sm-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sea-view.webp' ) ); ?>" alt="Woodblock illustration of the harbour at dawn"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sm-room__name"} -->
<h3 class="wp-block-heading sm-room__name">Harbour room</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Corner room over the pier; you hear the first boats at five. Sleeps two.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sm-room__price"} -->
<p class="sm-room__price">From &#165;12,600 with meals</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sm-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-room"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-room__img"} -->
<figure class="wp-block-image size-full sm-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cycling-path.webp' ) ); ?>" alt="Woodblock illustration of the coast road and lighthouse"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sm-room__name"} -->
<h3 class="wp-block-heading sm-room__name">Garden room</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Faces the stone garden and the hill path. The quietest room. Sleeps four.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sm-room__price"} -->
<p class="sm-room__price">From &#165;11,900 with meals</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "sm-split sm-split--inner", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sm-split sm-split--inner"><!-- wp:group {"className": "sm-split__side", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-split__side"><!-- wp:paragraph {"className": "sm-eyebrow"} -->
<p class="sm-eyebrow">Rates</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sm-sec__title"} -->
<h2 class="wp-block-heading sm-sec__title">Per adult, per night.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sm-split__main", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-split__main"><!-- wp:pattern {"slug":"shimakaze-minshuku/prices"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
