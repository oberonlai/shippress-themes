<?php
/**
 * Title: Home: frosted statement
 * Slug: yukisaki-route/front-why
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: A blurred pale photograph as the ground, a centred title and narrative paragraph, and a translucent white panel with a wide display line, three statement lines and the CTA.
 */
?>
<!-- wp:group {"className":"yr-frost","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-frost">
<!-- wp:html -->
<div class="yr-frost__bg" aria-hidden="true"><img src="<?php echo yukisaki_route_img( 'p04-canopy.webp' ); ?>" alt="" loading="lazy" decoding="async"/></div>
<!-- /wp:html -->

<!-- wp:group {"className":"yr-frost__in","layout":{"type":"default"},"anchor":"why"} -->
<div class="wp-block-group yr-frost__in" id="why">
<!-- wp:group {"className":"yr-head yr-head--frost","layout":{"type":"default"}} -->
<div class="wp-block-group yr-head yr-head--frost">
<!-- wp:paragraph {"className":"yr-eyebrow"} -->
<p class="yr-eyebrow"><?php echo esc_html( yukisaki_route_t( 'why_eye' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( yukisaki_route_t( 'why_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yr-frost__lead"} -->
<p class="yr-frost__lead"><?php echo esc_html( yukisaki_route_t( 'why_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-frost__panel","layout":{"type":"default"}} -->
<div class="wp-block-group yr-frost__panel">
<!-- wp:group {"className":"yr-frost__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-frost__text">
<!-- wp:paragraph {"className":"yr-display"} -->
<p class="yr-display"><?php echo yukisaki_route_note( yukisaki_route_t( 'why_disp' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yr-frost__lines"} -->
<p class="yr-frost__lines"><?php echo yukisaki_route_lines( 'why_lines' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"yr-btns yr-frost__cta"} -->
<div class="wp-block-buttons yr-btns yr-frost__cta"><!-- wp:button {"className":"is-style-yr-tail"} -->
<div class="wp-block-button is-style-yr-tail"><a class="wp-block-button__link wp-element-button" href="/trial/#start"><?php echo esc_html( yukisaki_route_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yr-note-line"} -->
<p class="yr-note-line"><?php echo yukisaki_route_note( yukisaki_route_t( 'why_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
