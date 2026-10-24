<?php
/**
 * Title: Footer
 * Slug: hayate-cycles/foot-main
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: Footer: wordmark, address and contacts, opening hours, and the page links, with a copyright bar.
 */
?>
<!-- wp:group {"align":"full","className":"hc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-footer">
<!-- wp:group {"className":"hc-foot","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot">
<!-- wp:group {"className":"hc-foot__a","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__a">
<!-- wp:paragraph {"className":"hc-foot__mark"} -->
<p class="hc-foot__mark"><?php echo esc_html( hayate_cycles_t( 'wordmark' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__line"} -->
<p class="hc-foot__line"><?php echo esc_html( hayate_cycles_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__line"} -->
<p class="hc-foot__line"><a href="tel:+3295550127"><?php echo esc_html( hayate_cycles_t( 'foot_phone' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__line"} -->
<p class="hc-foot__line"><a href="mailto:hello@hayate-cycles.example"><?php echo esc_html( hayate_cycles_t( 'foot_mail' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-foot__b","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__b">
<!-- wp:paragraph {"className":"hc-foot__open"} -->
<p class="hc-foot__open"><span class="hc-dot" aria-hidden="true"></span><?php echo esc_html( hayate_cycles_t( 'foot_open' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__line"} -->
<p class="hc-foot__line"><?php echo esc_html( hayate_cycles_t( 'foot_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__line"} -->
<p class="hc-foot__line"><?php echo esc_html( hayate_cycles_t( 'foot_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__line"} -->
<p class="hc-foot__line"><?php echo esc_html( hayate_cycles_t( 'foot_h3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__c">
<!-- wp:paragraph {"className":"hc-foot__link"} -->
<p class="hc-foot__link"><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'foot_l1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__link"} -->
<p class="hc-foot__link"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'foot_l2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__link"} -->
<p class="hc-foot__link"><a href="<?php echo esc_url( home_url( '/prices/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'foot_l3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__link"} -->
<p class="hc-foot__link"><a href="<?php echo esc_url( home_url( '/rides/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'foot_l4' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__link"} -->
<p class="hc-foot__link"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'foot_l5' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__link"} -->
<p class="hc-foot__link"><a href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'foot_l6' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-foot__link"} -->
<p class="hc-foot__link"><a href="<?php echo esc_url( home_url( '/stories/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'foot_l7' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-footbar","layout":{"type":"default"}} -->
<div class="wp-block-group hc-footbar">
<!-- wp:paragraph {"className":"hc-footbar__p"} -->
<p class="hc-footbar__p"><?php echo esc_html( hayate_cycles_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
