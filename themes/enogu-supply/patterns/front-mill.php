<?php
/**
 * Title: Home: mill orders band
 * Slug: enogu-supply/front-mill
 * Categories: enogu-supply
 * Viewport Width: 1440
 * Description: Full-width photograph with a slow parallax drift and a white card with the four prose steps of a mill order.
 */
?>
<!-- wp:group {"className":"en-mill sp-parallax","tagName":"section","align":"full","anchor":"mill","layout":{"type":"default"}} -->
<section id="mill" class="wp-block-group alignfull en-mill sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-mill__bg sp-parallax__layer"} -->
<figure class="wp-block-image size-full en-mill__bg sp-parallax__layer"><img src="<?php echo enogu_supply_img( 'mill-packing.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_b1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"en-mill__card","layout":{"type":"default"}} -->
<div class="wp-block-group en-mill__card">
<!-- wp:group {"className":"en-title-wrap en-title-wrap--l","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap en-title-wrap--l">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'mill_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-mill__intro"} -->
<p class="en-mill__intro"><?php echo esc_html( enogu_supply_t( 'mill_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"en-steps","layout":{"type":"default"}} -->
<div class="wp-block-group en-steps">
<!-- wp:group {"className":"en-step","layout":{"type":"default"}} -->
<div class="wp-block-group en-step">
<!-- wp:paragraph {"className":"en-step__n"} -->
<p class="en-step__n">01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-step__t"} -->
<p class="en-step__t"><?php echo esc_html( enogu_supply_t( 'mill1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-step","layout":{"type":"default"}} -->
<div class="wp-block-group en-step">
<!-- wp:paragraph {"className":"en-step__n"} -->
<p class="en-step__n">02</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-step__t"} -->
<p class="en-step__t"><?php echo esc_html( enogu_supply_t( 'mill2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-step","layout":{"type":"default"}} -->
<div class="wp-block-group en-step">
<!-- wp:paragraph {"className":"en-step__n"} -->
<p class="en-step__n">03</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-step__t"} -->
<p class="en-step__t"><?php echo esc_html( enogu_supply_t( 'mill3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-step","layout":{"type":"default"}} -->
<div class="wp-block-group en-step">
<!-- wp:paragraph {"className":"en-step__n"} -->
<p class="en-step__n">04</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-step__t"} -->
<p class="en-step__t"><?php echo esc_html( enogu_supply_t( 'mill4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"en-mill__btn","layout":{"type":"flex"}} -->
<div class="wp-block-buttons en-mill__btn"><!-- wp:button {} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/mill-orders/"><?php echo esc_html( enogu_supply_t( 'mill_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
