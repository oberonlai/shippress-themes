<?php
/**
 * Title: Shop: head
 * Slug: enogu-supply/shop-head
 * Categories: enogu-supply
 * Inserter: no
 * Viewport Width: 1440
 * Description: Shop title lockup and the four-panel range band.
 */
?>
<!-- wp:group {"className":"en-sec en-page en-inner","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group en-sec en-page en-inner">
<!-- wp:group {"className":"en-head__title en-head__title--solo","layout":{"type":"default"}} -->
<div class="wp-block-group en-head__title en-head__title--solo">
<!-- wp:heading {"level":1,"className":"en-h1 en-h1--inner"} -->
<h1 class="wp-block-heading en-h1 en-h1--inner"><?php echo esc_html( enogu_supply_t( 'pg_shop_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"en-head__lede"} -->
<p class="en-head__lede"><?php echo esc_html( enogu_supply_t( 'pg_shop_i' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-wide en-block","layout":{"type":"default"}} -->
<div class="wp-block-group en-wide en-block">
<!-- wp:group {"className":"en-band sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group en-band sp-reveal sp-reveal--zoom">
<!-- wp:group {"className":"en-band__panels","layout":{"type":"default"}} -->
<div class="wp-block-group en-band__panels">
<!-- wp:group {"className":"en-panel","layout":{"type":"default"}} -->
<div class="wp-block-group en-panel">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"en-panel__img","href":"/paper/"} -->
<figure class="wp-block-image size-full en-panel__img"><a href="/paper/"><img src="<?php echo enogu_supply_img( 'range-paper.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_p1' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"en-panel__label"} -->
<p class="en-panel__label"><a href="/paper/"><?php echo esc_html( enogu_supply_t( 'r1' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-panel","layout":{"type":"default"}} -->
<div class="wp-block-group en-panel">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"en-panel__img","href":"/pigment/"} -->
<figure class="wp-block-image size-full en-panel__img"><a href="/pigment/"><img src="<?php echo enogu_supply_img( 'range-pigment.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_p2' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"en-panel__label"} -->
<p class="en-panel__label"><a href="/pigment/"><?php echo esc_html( enogu_supply_t( 'r2' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-panel","layout":{"type":"default"}} -->
<div class="wp-block-group en-panel">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"en-panel__img","href":"/brushes/"} -->
<figure class="wp-block-image size-full en-panel__img"><a href="/brushes/"><img src="<?php echo enogu_supply_img( 'range-brushes.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_p3' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"en-panel__label"} -->
<p class="en-panel__label"><a href="/brushes/"><?php echo esc_html( enogu_supply_t( 'r3' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-panel","layout":{"type":"default"}} -->
<div class="wp-block-group en-panel">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"en-panel__img","href":"/studio-tools/"} -->
<figure class="wp-block-image size-full en-panel__img"><a href="/studio-tools/"><img src="<?php echo enogu_supply_img( 'range-tools.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_p4' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"en-panel__label"} -->
<p class="en-panel__label"><a href="/studio-tools/"><?php echo esc_html( enogu_supply_t( 'r4' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"en-band__title"} -->
<h2 class="wp-block-heading en-band__title"><?php echo esc_html( enogu_supply_t( 'shop_band_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-col en-block","layout":{"type":"default"}} -->
<div class="wp-block-group en-col en-block">
<!-- wp:group {"className":"en-title-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'pg_shop_1h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-body"} -->
<p class="en-body"><?php echo esc_html( enogu_supply_t( 'pg_shop_1b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
