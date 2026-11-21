<?php
/**
 * Title: Home: three captioned slides
 * Slug: enogu-supply/front-hero
 * Categories: enogu-supply
 * Viewport Width: 1440
 * Description: Product-grid first screen: three equal photo columns that crossfade slowly, each with a bottom-left caption and a flat tab; the headline sits below the photos, then a stats row.
 */
?>
<!-- wp:group {"className":"en-hero","tagName":"section","align":"full","anchor":"top","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull en-hero">
<!-- wp:group {"className":"en-hero-grid","layout":{"type":"default"}} -->
<div class="wp-block-group en-hero-grid">
<!-- wp:group {"className":"en-slide en-slide--1","layout":{"type":"default"}} -->
<div class="wp-block-group en-slide en-slide--1">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-slide__a"} -->
<figure class="wp-block-image size-full en-slide__a"><img src="<?php echo enogu_supply_img( 'hero-plan-chest.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_h1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-slide__b"} -->
<figure class="wp-block-image size-full en-slide__b"><img src="<?php echo enogu_supply_img( 'hero-paper-deckle.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_h1b' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"en-slide__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group en-slide__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cap","layout":{"type":"default"}} -->
<div class="wp-block-group en-cap">
<!-- wp:paragraph {"className":"en-cap__a"} -->
<p class="en-cap__a"><?php echo esc_html( enogu_supply_t( 'cap_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-cap__b"} -->
<p class="en-cap__b"><?php echo esc_html( enogu_supply_t( 'cap1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"en-cap__tab","layout":{"type":"flex"}} -->
<div class="wp-block-buttons en-cap__tab"><!-- wp:button {} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/paper/"><?php echo esc_html( enogu_supply_t( 'tab' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-slide en-slide--2","layout":{"type":"default"}} -->
<div class="wp-block-group en-slide en-slide--2">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-slide__a"} -->
<figure class="wp-block-image size-full en-slide__a"><img src="<?php echo enogu_supply_img( 'hero-brush-counter.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_h2' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-slide__b"} -->
<figure class="wp-block-image size-full en-slide__b"><img src="<?php echo enogu_supply_img( 'hero-brush-jar.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_h2b' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"en-slide__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group en-slide__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cap","layout":{"type":"default"}} -->
<div class="wp-block-group en-cap">
<!-- wp:paragraph {"className":"en-cap__a"} -->
<p class="en-cap__a"><?php echo esc_html( enogu_supply_t( 'cap_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-cap__b"} -->
<p class="en-cap__b"><?php echo esc_html( enogu_supply_t( 'cap2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"en-cap__tab","layout":{"type":"flex"}} -->
<div class="wp-block-buttons en-cap__tab"><!-- wp:button {} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/brushes/"><?php echo esc_html( enogu_supply_t( 'tab' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-slide en-slide--3","layout":{"type":"default"}} -->
<div class="wp-block-group en-slide en-slide--3">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-slide__a"} -->
<figure class="wp-block-image size-full en-slide__a"><img src="<?php echo enogu_supply_img( 'hero-pigment-jars.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_h3' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-slide__b"} -->
<figure class="wp-block-image size-full en-slide__b"><img src="<?php echo enogu_supply_img( 'hero-swatch.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_h3b' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"en-slide__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group en-slide__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cap","layout":{"type":"default"}} -->
<div class="wp-block-group en-cap">
<!-- wp:paragraph {"className":"en-cap__a"} -->
<p class="en-cap__a"><?php echo esc_html( enogu_supply_t( 'cap_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-cap__b"} -->
<p class="en-cap__b"><?php echo esc_html( enogu_supply_t( 'cap3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"en-cap__tab","layout":{"type":"flex"}} -->
<div class="wp-block-buttons en-cap__tab"><!-- wp:button {} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/pigment/"><?php echo esc_html( enogu_supply_t( 'tab' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-hero-note"} -->
<p class="en-hero-note"><?php echo esc_html( enogu_supply_t( 'cap_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"en-hero-text","layout":{"type":"default"}} -->
<div class="wp-block-group en-hero-text">
<!-- wp:group {"className":"en-hero-text__l","layout":{"type":"default"}} -->
<div class="wp-block-group en-hero-text__l">
<!-- wp:paragraph {"className":"en-eyebrow"} -->
<p class="en-eyebrow"><?php echo esc_html( enogu_supply_t( 'eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"en-h1"} -->
<h1 class="wp-block-heading en-h1"><?php echo esc_html( enogu_supply_t( 'h1' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-hero-text__r","layout":{"type":"default"}} -->
<div class="wp-block-group en-hero-text__r">
<!-- wp:paragraph {"className":"en-lede"} -->
<p class="en-lede"><?php echo esc_html( enogu_supply_t( 'lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"en-hero-btns","layout":{"type":"flex"}} -->
<div class="wp-block-buttons en-hero-btns"><!-- wp:button {} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( enogu_supply_t( 'btn_shop' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline en-link-btn"} -->
<div class="wp-block-button is-style-outline en-link-btn"><a class="wp-block-button__link wp-element-button" href="/mill-orders/"><?php echo esc_html( enogu_supply_t( 'link_mill' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-stats","layout":{"type":"default"}} -->
<div class="wp-block-group en-stats">
<!-- wp:group {"className":"en-stat","layout":{"type":"default"}} -->
<div class="wp-block-group en-stat">
<!-- wp:paragraph {"className":"en-stat__n"} -->
<p class="en-stat__n"><?php echo esc_html( enogu_supply_t( 'stat1n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-stat__l"} -->
<p class="en-stat__l"><?php echo esc_html( enogu_supply_t( 'stat1l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-stat","layout":{"type":"default"}} -->
<div class="wp-block-group en-stat">
<!-- wp:paragraph {"className":"en-stat__n"} -->
<p class="en-stat__n"><?php echo esc_html( enogu_supply_t( 'stat2n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-stat__l"} -->
<p class="en-stat__l"><?php echo esc_html( enogu_supply_t( 'stat2l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-stat","layout":{"type":"default"}} -->
<div class="wp-block-group en-stat">
<!-- wp:paragraph {"className":"en-stat__n"} -->
<p class="en-stat__n"><?php echo esc_html( enogu_supply_t( 'stat3n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-stat__l"} -->
<p class="en-stat__l"><?php echo esc_html( enogu_supply_t( 'stat3l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-stat","layout":{"type":"default"}} -->
<div class="wp-block-group en-stat">
<!-- wp:paragraph {"className":"en-stat__n"} -->
<p class="en-stat__n"><?php echo esc_html( enogu_supply_t( 'stat4n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-stat__l"} -->
<p class="en-stat__l"><?php echo esc_html( enogu_supply_t( 'stat4l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
