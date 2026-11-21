<?php
/**
 * Title: Home: picks this month
 * Slug: enogu-supply/front-picks
 * Categories: enogu-supply
 * Viewport Width: 1440
 * Description: Four product tiles on pale grey with name, spec line and price, then a flat View more tab.
 */
?>
<!-- wp:group {"className":"en-sec en-picks-sec","tagName":"section","anchor":"picks","layout":{"type":"default"}} -->
<section id="picks" class="wp-block-group en-sec en-picks-sec">
<!-- wp:group {"className":"en-title-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'picks_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-picks sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group en-picks sp-stagger">
<!-- wp:group {"className":"en-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-tile sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"en-tile__img","href":"/product/cotton-watercolour-sheet/"} -->
<figure class="wp-block-image size-full en-tile__img"><a href="/product/cotton-watercolour-sheet/"><img src="<?php echo enogu_supply_img( 'product-cotton-sheet.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_k1' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"en-tile__n"} -->
<p class="en-tile__n"><a href="/product/cotton-watercolour-sheet/"><?php echo esc_html( enogu_supply_t( 'k1n' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-tile__s"} -->
<p class="en-tile__s"><?php echo esc_html( enogu_supply_t( 'k1s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-tile__p"} -->
<p class="en-tile__p"><?php echo esc_html( enogu_supply_t( 'k1p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-tile sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"en-tile__img","href":"/product/artists-watercolour-tube/"} -->
<figure class="wp-block-image size-full en-tile__img"><a href="/product/artists-watercolour-tube/"><img src="<?php echo enogu_supply_img( 'product-tube.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_k2' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"en-tile__n"} -->
<p class="en-tile__n"><a href="/product/artists-watercolour-tube/"><?php echo esc_html( enogu_supply_t( 'k2n' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-tile__s"} -->
<p class="en-tile__s"><?php echo esc_html( enogu_supply_t( 'k2s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-tile__p"} -->
<p class="en-tile__p"><?php echo esc_html( enogu_supply_t( 'k2p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-tile sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"en-tile__img","href":"/product/round-brush/"} -->
<figure class="wp-block-image size-full en-tile__img"><a href="/product/round-brush/"><img src="<?php echo enogu_supply_img( 'product-round-brush.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_k3' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"en-tile__n"} -->
<p class="en-tile__n"><a href="/product/round-brush/"><?php echo esc_html( enogu_supply_t( 'k3n' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-tile__s"} -->
<p class="en-tile__s"><?php echo esc_html( enogu_supply_t( 'k3s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-tile__p"} -->
<p class="en-tile__p"><?php echo esc_html( enogu_supply_t( 'k3p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-tile sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-tile sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"en-tile__img","href":"/product/palette-knife-and-brass-sharpener-set/"} -->
<figure class="wp-block-image size-full en-tile__img"><a href="/product/palette-knife-and-brass-sharpener-set/"><img src="<?php echo enogu_supply_img( 'product-tool-set.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_k4' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"en-tile__n"} -->
<p class="en-tile__n"><a href="/product/palette-knife-and-brass-sharpener-set/"><?php echo esc_html( enogu_supply_t( 'k4n' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-tile__s"} -->
<p class="en-tile__s"><?php echo esc_html( enogu_supply_t( 'k4s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-tile__p"} -->
<p class="en-tile__p"><?php echo esc_html( enogu_supply_t( 'k4p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"en-more","layout":{"type":"flex"}} -->
<div class="wp-block-buttons en-more"><!-- wp:button {"className":"en-tab"} -->
<div class="wp-block-button en-tab"><a class="wp-block-button__link wp-element-button" href="/shop/"><?php echo esc_html( enogu_supply_t( 'view_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
