<?php
/**
 * Title: Header: logo tab and plum menu bar
 * Slug: kaigi-centre/header-main
 * Inserter: no
 * Categories: kaigi-centre
 * Keywords: conference, header-main
 * Viewport Width: 1440
 * Description: Notched logo tab over the stage, plum menu bar on the right (split nav).
 */
?>
<!-- wp:group {"align":"full","className":"kc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-header">
<!-- wp:group {"className":"kc-tab","layout":{"type":"default"}} -->
<div class="wp-block-group kc-tab">
<!-- wp:paragraph {"className":"kc-tab__name"} -->
<p class="kc-tab__name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-navbar","layout":{"type":"default"}} -->
<div class="wp-block-group kc-navbar">
<!-- wp:navigation {"overlayMenu":"mobile","className":"kc-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
