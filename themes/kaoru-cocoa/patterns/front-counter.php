<?php
/**
 * Title: Home: outline card wall
 * Slug: kaoru-cocoa/front-counter
 * Categories: kaoru-cocoa
 * Keywords: cards, menu, prices, wall
 * Viewport Width: 1440
 * Description: The counter menu as a staggered three-column wall of one-pixel outline cards, each with a tag line above, a ruled price row and an inset photo.
 */
?>
<!-- wp:group {"align":"full","anchor":"counter","className":"kc-counter","layout":{"type":"default"}} -->
<div id="counter" class="wp-block-group alignfull kc-counter"><!-- wp:group {"className":"kc-counter__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-counter__head"><!-- wp:heading {"level":2,"className":"kc-word"} -->
<h2 class="wp-block-heading kc-word">Counter</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-counter__intro","layout":{"type":"default"}} -->
<div class="wp-block-group kc-counter__intro"><!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body">Everything on our counter is made in the workshop behind the glass screen. Drop in for today’s drinking cocoa, taste fresh squares from the morning batch, or take home wrapped bars and boxed bonbons.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-link"} -->
<p class="kc-link"><a href="/prices/">All prices →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-wall sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wall sp-stagger"><!-- wp:group {"className":"kc-wall__col kc-wall__col--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wall__col kc-wall__col--1 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip">Eat in</span><em>Cocoa</em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title">Drinking cocoa</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub">Today's origin, whole milk or oat</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><span class="kc-price__lab">EAT IN</span> <b>EUR 4.80</b></span> <span class="kc-price__item"><span class="kc-price__lab">TO GO</span> <b>EUR 4.40</b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--45"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-cocoa.webp' ) ); ?>" alt="A cup of warm drinking cocoa on a white saucer resting upon pale marble."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip">To go</span><em>Bars</em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title">Single-origin bar</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub">70 g, one of the five seasonal origins</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><b>EUR 7.50</b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--sq"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--sq"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-bar.webp' ) ); ?>" alt="Dark chocolate bar snapped in half beside a plain folded kraft paper wrapper."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-wall__col kc-wall__col--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wall__col kc-wall__col--2 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip">Eat in</span><em>Tasting</em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title">Tasting flight</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub">Three 10 g squares from today’s batch plus a small cocoa, at the counter</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><b>EUR 9.00</b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--sq"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--sq"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-flight.webp' ) ); ?>" alt="Three squares of dark chocolate in a row beside a small cocoa cup."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip">To go</span><em>Bonbons</em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title">Bonbon box</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub">Nine fresh bonbons, chosen at the counter</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><b>EUR 18.00</b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--45"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-bonbons.webp' ) ); ?>" alt="Open white gift box containing nine glossy chocolate bonbons arranged in a grid."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-wall__col kc-wall__col--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wall__col kc-wall__col--3 sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip">Eat in</span><em>Cake</em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title">Cake slice</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub">The day’s cake, served fresh</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><span class="kc-price__lab">EAT IN</span> <b>EUR 6.20</b></span> <span class="kc-price__item"><span class="kc-price__lab">TO GO</span> <b>EUR 5.80</b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--45"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--45"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-slice.webp' ) ); ?>" alt="A slice of dark chocolate and pear cake on a white ceramic plate."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cardwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cardwrap"><!-- wp:paragraph {"className":"kc-tagline"} -->
<p class="kc-tagline"><span class="kc-chip">Order</span><em>To order</em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:group {"className":"kc-card__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card__head"><!-- wp:heading {"level":3,"className":"kc-card__title"} -->
<h3 class="wp-block-heading kc-card__title">Whole cake</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-card__sub"} -->
<p class="kc-card__sub">Dark ganache 70%, Hazelnut praline or Cocoa and pear; order three days ahead</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-price"} -->
<p class="kc-price"><span class="kc-price__item"><span class="kc-price__lab">18 CM</span> <b>EUR 42.00</b></span> <span class="kc-price__item"><span class="kc-price__lab">22 CM</span> <b>EUR 58.00</b></span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-card__img kc-card__img--sq"} -->
<figure class="wp-block-image size-full kc-card__img kc-card__img--sq"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/card-cake.webp' ) ); ?>" alt="Whole round dark ganache cake with glossy glaze and cocoa nibs on a stand."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
