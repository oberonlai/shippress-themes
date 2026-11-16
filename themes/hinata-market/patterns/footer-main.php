<?php
/**
 * Title: Footer: colophon
 * Slug: hinata-market/footer-main
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: Colophon inside the frame: wordmark and address, nine plain links and the copyright line.
 */
?>
<!-- wp:group {"className":"hm-footer","layout":{"type":"default"}} -->
<div class="wp-block-group hm-footer"><!-- wp:group {"className":"hm-footer__top","layout":{"type":"default"}} -->
<div class="wp-block-group hm-footer__top"><!-- wp:group {"className":"hm-footer__brand","layout":{"type":"default"}} -->
<div class="wp-block-group hm-footer__brand"><!-- wp:paragraph {"className":"hm-wordmark"} -->
<p class="hm-wordmark"><a href="<?php echo hinata_market_url( '/' ); ?>"><span class="hm-glyph hm-glyph--awning"></span><span class="hm-wordmark__name"><?php echo esc_html( hinata_market_t( 'wm_name' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-footer__addr"} -->
<p class="hm-footer__addr"><?php echo esc_html( hinata_market_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hm-footer__links"} -->
<p class="hm-footer__links"><a href="<?php echo hinata_market_url( '/about/' ); ?>"><?php echo esc_html( hinata_market_t( 'fl_about' ) ); ?></a> <a href="<?php echo hinata_market_url( '/notices/' ); ?>"><?php echo esc_html( hinata_market_t( 'fl_notices' ) ); ?></a> <a href="<?php echo hinata_market_url( '/stalls/' ); ?>"><?php echo esc_html( hinata_market_t( 'fl_stalls' ) ); ?></a> <a href="<?php echo hinata_market_url( '/visit/' ); ?>"><?php echo esc_html( hinata_market_t( 'fl_visit' ) ); ?></a> <a href="<?php echo hinata_market_url( '/apply/' ); ?>"><?php echo esc_html( hinata_market_t( 'fl_apply' ) ); ?></a> <a href="<?php echo hinata_market_url( '/fees/' ); ?>"><?php echo esc_html( hinata_market_t( 'fl_fees' ) ); ?></a> <a href="<?php echo hinata_market_url( '/weekly-list/' ); ?>"><?php echo esc_html( hinata_market_t( 'fl_weekly' ) ); ?></a> <a href="<?php echo hinata_market_url( '/contact/' ); ?>"><?php echo esc_html( hinata_market_t( 'fl_contact' ) ); ?></a> <a href="<?php echo hinata_market_url( '/privacy/' ); ?>"><?php echo esc_html( hinata_market_t( 'fl_privacy' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hm-footer__copy"} -->
<p class="hm-footer__copy"><?php echo esc_html( hinata_market_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
