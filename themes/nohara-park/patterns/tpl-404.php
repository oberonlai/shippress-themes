<?php
/**
 * Title: Template: page not found
 * Slug: nohara-park/tpl-404
 * Categories: nohara-park
 * Inserter: no
 * Viewport Width: 1440
 * Description: Page not found.
 */
?>
<!-- wp:group {"align":"full","className":"np-sec np-sec--page","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull np-sec np-sec--page"><!-- wp:group {"className":"np-wrap np-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--read"><!-- wp:heading {"className":"np-h1","level":1} -->
<h1 class="wp-block-heading np-h1"><?php echo esc_html( nohara_park_t( 'tpl_404_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'tpl_404_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
