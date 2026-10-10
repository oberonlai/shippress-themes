<?php
/**
 * Title: Home: the card mosaic (title, looks, numbers, a client quote, menu and stylists)
 * Slug: kami-salon/home-mosaic
 * Categories: kami-salon
 * Keywords: home, hero, mosaic, masonry, cards, looks, gallery
 * Viewport Width: 1440
 * Description: The opening of the home page as a mosaic of cards: the big title with the booking buttons, photographs of looks cut on a diagonal, a magenta number card, a client quote, a menu card and a stylists card.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-hero"><!-- wp:group {"align":"wide","className":"ks-mosaic","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-mosaic"><!-- wp:group {"className":"ks-tile ks-tile--title ks-w7 ks-h2","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--title ks-w7 ks-h2"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Hair salon · Kirimachi, Tokyo</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-display"} -->
<h1 class="wp-block-heading ks-display">Cut sharp.<br>Colour <em>loud.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">A six-chair salon for precise cuts, bold colour and hair that looks like you did it on purpose.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/booking/">Book a chair</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/menu/">See the menu</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--photo ks-w5 ks-h3","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--photo ks-w5 ks-h3"><!-- wp:image {"sizeSlug":"large","className":"ks-cut-a"} -->
<figure class="wp-block-image size-large ks-cut-a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="A sharp black bob with a long side cut, tied back with a magenta ribbon"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ks-tile__tag"} -->
<p class="ks-tile__tag">Look 01 · The blade bob</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--magenta ks-w3 ks-h1","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--magenta ks-w3 ks-h1"><!-- wp:paragraph {"className":"is-style-numeral"} -->
<p class="is-style-numeral">06</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>chairs, and one stylist who stays with you from the first question to the last look in the mirror.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--photo ks-w4 ks-h1","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--photo ks-w4 ks-h1"><!-- wp:image {"sizeSlug":"large","className":"ks-cut-b"} -->
<figure class="wp-block-image size-large ks-cut-b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cut-detail.jpg' ) ); ?>" alt="The back of a black bob with a geometric undercut and one magenta line"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ks-tile__tag"} -->
<p class="ks-tile__tag">Look 02 · Grid undercut</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--photo ks-w4 ks-h2","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--photo ks-w4 ks-h2"><!-- wp:image {"sizeSlug":"large","className":"ks-cut-c"} -->
<figure class="wp-block-image size-large ks-cut-c"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/look-line.jpg' ) ); ?>" alt="Long straight black hair with a single magenta streak at the front"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ks-tile__tag"} -->
<p class="ks-tile__tag">Look 03 · One magenta line</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--chalk ks-w4 ks-h1","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--chalk ks-w4 ks-h1"><!-- wp:paragraph {"className":"ks-quote"} -->
<p class="ks-quote">“I asked for a trim and left with the best haircut of my life. I have been back every six weeks since.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-quote__by"} -->
<p class="ks-quote__by">Aya, a client since 2021</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--photo ks-w4 ks-h2","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--photo ks-w4 ks-h2"><!-- wp:image {"sizeSlug":"large","className":"ks-cut-a"} -->
<figure class="wp-block-image size-large ks-cut-a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/colour.jpg' ) ); ?>" alt="Gloved hands lifting a brush of magenta colour from a black bowl"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ks-tile__tag"} -->
<p class="ks-tile__tag">Colour lab · Neon gloss</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--line ks-w4 ks-h1","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--line ks-w4 ks-h1"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Menu</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-tile__title"} -->
<h2 class="wp-block-heading ks-tile__title">Cut. Colour. Care.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Every service and every price on one page, tax included.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/menu/">See the menu &amp; prices</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--photo ks-w6 ks-h2","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--photo ks-w6 ks-h2"><!-- wp:image {"sizeSlug":"large","className":"ks-cut-b"} -->
<figure class="wp-block-image size-large ks-cut-b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/salon.jpg' ) ); ?>" alt="The salon: a row of black chairs facing round mirrors along a magenta wall"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ks-tile__tag"} -->
<p class="ks-tile__tag">The room · third floor</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--graphite ks-w3 ks-h2","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--graphite ks-w3 ks-h2"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Stylists</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-tile__title"} -->
<h2 class="wp-block-heading ks-tile__title">Three pairs of hands</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Mika cuts lines. Ren cuts short. Noa paints colour. Book any of them, or let us match you.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/stylists/">Meet the stylists</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-tile ks-tile--photo ks-w3 ks-h2","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tile ks-tile--photo ks-w3 ks-h2"><!-- wp:image {"sizeSlug":"large","className":"ks-cut-c"} -->
<figure class="wp-block-image size-large ks-cut-c"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/look-curl.jpg' ) ); ?>" alt="Profile of short dark curls with a magenta earring"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ks-tile__tag"} -->
<p class="ks-tile__tag">Look 04 · Dry-cut curls</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
