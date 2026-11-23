<?php
/**
 * Title: Footer: closing pre-order band
 * Slug: zaseki-panel/footer-main
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Half-field closing band: russet field with the pre-order call and link columns on the left, wide diagonal stripes and a big wordmark on the right.
 */
?>
<!-- wp:group {"align":"full","className":"zp-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull zp-footer">
<!-- wp:group {"className":"zp-footer__left","layout":{"type":"default"}} -->
<div class="wp-block-group zp-footer__left">
<!-- wp:heading {"level":2,"className":"zp-close-h"} -->
<h2 class="wp-block-heading zp-close-h"><?php echo esc_html( zaseki_panel_t( 'close_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-close-p"} -->
<p class="zp-close-p"><?php echo esc_html( zaseki_panel_t( 'close_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"zp-cta zp-cta--inv"} -->
<div class="wp-block-buttons zp-cta zp-cta--inv"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/pre-order/"><?php echo esc_html( zaseki_panel_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:group {"className":"zp-fcols","layout":{"type":"default"}} -->
<div class="wp-block-group zp-fcols">
<!-- wp:group {"className":"zp-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group zp-fcol">
<!-- wp:heading {"level":3,"className":"zp-fh"} -->
<h3 class="wp-block-heading zp-fh"><?php echo esc_html( zaseki_panel_t( 'f_h1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/pre-order/"><?php echo esc_html( zaseki_panel_t( 'f_l_pre' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/newsletter/"><?php echo esc_html( zaseki_panel_t( 'f_l_wait' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/contact/"><?php echo esc_html( zaseki_panel_t( 'f_l_contact' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group zp-fcol">
<!-- wp:heading {"level":3,"className":"zp-fh"} -->
<h3 class="wp-block-heading zp-fh"><?php echo esc_html( zaseki_panel_t( 'f_h2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/panel/"><?php echo esc_html( zaseki_panel_t( 'f_l_panel' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/install/"><?php echo esc_html( zaseki_panel_t( 'f_l_install' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/pricing/"><?php echo esc_html( zaseki_panel_t( 'f_l_pricing' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group zp-fcol">
<!-- wp:heading {"level":3,"className":"zp-fh"} -->
<h3 class="wp-block-heading zp-fh"><?php echo esc_html( zaseki_panel_t( 'f_h3' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/about/"><?php echo esc_html( zaseki_panel_t( 'f_l_about' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/pilots/"><?php echo esc_html( zaseki_panel_t( 'f_l_pilots' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/questions/"><?php echo esc_html( zaseki_panel_t( 'f_l_q' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-fl"} -->
<p class="zp-fl"><a href="/journal/"><?php echo esc_html( zaseki_panel_t( 'f_l_journal' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"zp-legal"} -->
<p class="zp-legal"><a href="/privacy/"><?php echo esc_html( zaseki_panel_t( 'l_priv' ) ); ?></a> · <a href="/terms/"><?php echo esc_html( zaseki_panel_t( 'l_terms' ) ); ?></a> · <a href="/contact/"><?php echo esc_html( zaseki_panel_t( 'f_l_contact' ) ); ?></a> · <a href="/newsletter/"><?php echo esc_html( zaseki_panel_t( 'l_wait' ) ); ?></a><br><?php echo esc_html( zaseki_panel_t( 'copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-footer__right","layout":{"type":"default"}} -->
<div class="wp-block-group zp-footer__right">
<!-- wp:group {"className":"zp-footer__sign","layout":{"type":"default"}} -->
<div class="wp-block-group zp-footer__sign">
<!-- wp:paragraph {"className":"zp-slogan-big"} -->
<p class="zp-slogan-big"><?php echo esc_html( zaseki_panel_t( 'f_slogan' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-wordmark-big"} -->
<p class="zp-wordmark-big"><?php echo esc_html( zaseki_panel_t( 'wordmark_big' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
