<?php
/**
 * Title: Header: split nav
 * Slug: sanroku-trail/header-main
 * Categories: sanroku-trail
 * Viewport Width: 1440
 * Description: Stacked wordmark left, one top menu and the sand enter button right; transparent over the home photo.
 */
?>
<!-- wp:group {"className":"st-head","layout":{"type":"default"}} -->
<div class="wp-block-group st-head"><!-- wp:paragraph {"className":"st-logo"} -->
<p class="st-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="st-logo__a"><?php echo esc_html( sanroku_trail_t( 'head_logo_1' ) ); ?></span><br><span class="st-logo__b"><?php echo esc_html( sanroku_trail_t( 'head_logo_2' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"band","overlayTextColor":"white","className":"st-nav","layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:buttons {"className":"st-head__cta","layout":{"type":"flex"}} -->
<div class="wp-block-buttons st-head__cta"><!-- wp:button {"className":"st-btn"} -->
<div class="wp-block-button st-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/enter/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'head_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
