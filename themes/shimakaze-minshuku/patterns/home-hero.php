<?php
/**
 * Title: Home: split hero with the rooms grid
 * Slug: shimakaze-minshuku/home-hero
 * Categories: shimakaze-minshuku
 * Keywords: island guesthouse, minshuku
 * Viewport Width: 1440
 * Description: A plum field with the title and the cut-out inn breaking over the split line, beside a grid of rooms and plans with prices.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sm-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull sm-hero"><!-- wp:group {"className": "sm-hero__field", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-hero__field"><!-- wp:paragraph {"className": "sm-eyebrow"} -->
<p class="sm-eyebrow">Kazeshima &#183; Seto Islands</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sm-hero__title"} -->
<h1 class="wp-block-heading sm-hero__title">Six rooms, one harbour, the sea wind at the door.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sm-hero__lead"} -->
<p class="sm-hero__lead">A family minshuku ten minutes on foot from the ferry pier. Tatami rooms, island fish at dinner and bicycles for the coast road.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sm-hero__cta"} -->
<div class="wp-block-buttons sm-hero__cta"><!-- wp:button {"className": "sm-book"} -->
<div class="wp-block-button sm-book"><a class="wp-block-button__link wp-element-button" href="/rooms/">See rooms and rates</a></div>
<!-- /wp:button -->

<!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/contact/">Getting here</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-hero__inn"} -->
<figure class="wp-block-image size-full sm-hero__inn"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-cutout.webp' ) ); ?>" alt="Woodblock illustration of the guesthouse: a tiled roof, a noren curtain over the door, a potted pine and a bicycle"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sm-hero__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-hero__grid"><!-- wp:group {"className": "sm-tile", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-tile__img"} -->
<figure class="wp-block-image size-full sm-tile__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-tatami.webp' ) ); ?>" alt="Woodblock illustration of a tatami room with a futon and the sea through open shoji"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sm-tile__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-tile__text"><!-- wp:heading {"level": 3, "className": "sm-tile__name"} -->
<h3 class="wp-block-heading sm-tile__name"><a href="/rooms/">Sea room</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sm-tile__price"} -->
<p class="sm-tile__price">From &#165;13,800 with meals</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sm-tile", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-tile__img"} -->
<figure class="wp-block-image size-full sm-tile__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sea-view.webp' ) ); ?>" alt="Woodblock illustration of the harbour at dawn with small fishing boats"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sm-tile__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-tile__text"><!-- wp:heading {"level": 3, "className": "sm-tile__name"} -->
<h3 class="wp-block-heading sm-tile__name"><a href="/rooms/">Harbour room</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sm-tile__price"} -->
<p class="sm-tile__price">From &#165;12,600 with meals</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sm-tile sm-tile--plum", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-tile sm-tile--plum"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-tile__img"} -->
<figure class="wp-block-image size-full sm-tile__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dinner-cutout.webp' ) ); ?>" alt="Woodblock illustration of a dinner tray with grilled fish, sashimi, rice and miso soup"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sm-tile__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-tile__text"><!-- wp:heading {"level": 3, "className": "sm-tile__name"} -->
<h3 class="wp-block-heading sm-tile__name"><a href="/rooms/">Island dinner</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sm-tile__price"} -->
<p class="sm-tile__price">Included in half board</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sm-tile", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-tile__img"} -->
<figure class="wp-block-image size-full sm-tile__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cycling-path.webp' ) ); ?>" alt="Woodblock illustration of a coastal cycling path with a lighthouse"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sm-tile__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sm-tile__text"><!-- wp:heading {"level": 3, "className": "sm-tile__name"} -->
<h3 class="wp-block-heading sm-tile__name"><a href="/island/">Cycle stay</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sm-tile__price"} -->
<p class="sm-tile__price">Bicycle &#165;1,500 a day</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
