<?php
/**
 * Title: Home: trial
 * Slug: yukisaki-route/front-trial
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: One dossier card: square photograph, lockup, five ruled lines of what the 14 days include, an outline pill and the CTA.
 */
?>
<!-- wp:group {"className":"yr-sec yr-trial","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-sec yr-trial">
<!-- wp:group {"className":"yr-wrap yr-wrap--wide","layout":{"type":"default"},"anchor":"trial"} -->
<div class="wp-block-group yr-wrap yr-wrap--wide" id="trial">
<!-- wp:group {"className":"yr-head","layout":{"type":"default"}} -->
<div class="wp-block-group yr-head">
<!-- wp:paragraph {"className":"yr-eyebrow"} -->
<p class="yr-eyebrow"><?php echo esc_html( yukisaki_route_t( 'tr_eye' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( yukisaki_route_t( 'tr_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-dossier sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group yr-dossier sp-reveal sp-reveal--zoom">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-dossier__img"} -->
<figure class="wp-block-image size-full yr-dossier__img"><img src="<?php echo yukisaki_route_img( 'p09-hands-sheet.webp' ); ?>" alt="<?php echo esc_attr( yukisaki_route_t( 'alt_P09' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yr-dossier__body","layout":{"type":"default"}} -->
<div class="wp-block-group yr-dossier__body">
<!-- wp:heading {"level":3,"className":"yr-lockup"} -->
<h3 class="wp-block-heading yr-lockup"><?php echo esc_html( yukisaki_route_t( 'tr_l' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yr-sublabel"} -->
<p class="yr-sublabel"><?php echo esc_html( yukisaki_route_t( 'tr_s' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html( yukisaki_route_t( 'tr_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="yr-lines"><li><?php echo yukisaki_route_note( yukisaki_route_t( 'tr_b0' ) ); ?></li><li><?php echo yukisaki_route_note( yukisaki_route_t( 'tr_b1' ) ); ?></li><li><?php echo yukisaki_route_note( yukisaki_route_t( 'tr_b2' ) ); ?></li><li><?php echo yukisaki_route_note( yukisaki_route_t( 'tr_b3' ) ); ?></li><li><?php echo yukisaki_route_note( yukisaki_route_t( 'tr_b4' ) ); ?></li></ul>
<!-- /wp:html -->
<!-- wp:buttons {"className":"yr-btns"} -->
<div class="wp-block-buttons yr-btns"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/how-it-works/"><?php echo esc_html( yukisaki_route_t( 'tr_out' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-yr-tail"} -->
<div class="wp-block-button is-style-yr-tail"><a class="wp-block-button__link wp-element-button" href="/trial/#start"><?php echo esc_html( yukisaki_route_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yr-note-line"} -->
<p class="yr-note-line"><?php echo yukisaki_route_note( yukisaki_route_t( 'tr_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
