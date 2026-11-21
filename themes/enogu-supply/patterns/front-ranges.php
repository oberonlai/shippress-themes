<?php
/**
 * Title: Home: the four ranges
 * Slug: enogu-supply/front-ranges
 * Categories: enogu-supply
 * Viewport Width: 1440
 * Description: Centred lede above one rounded band made of four abutting photo panels with one light title across the seam.
 */
?>
<!-- wp:group {"className":"en-sec en-ranges","tagName":"section","anchor":"ranges","layout":{"type":"default"}} -->
<section id="ranges" class="wp-block-group en-sec en-ranges">
<!-- wp:paragraph {"className":"en-lede en-lede--c"} -->
<p class="en-lede en-lede--c"><?php echo esc_html( enogu_supply_t( 'ranges_p' ) ); ?></p>
<!-- /wp:paragraph -->

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
<h2 class="wp-block-heading en-band__title"><?php echo esc_html( enogu_supply_t( 'ranges_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
