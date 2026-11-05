<?php
/**
 * Title: Header bar
 * Slug: waku-exhibits/head-bar
 * Categories: waku-exhibits
 * Keywords: exhibition, stand, quote, landing
 * Viewport Width: 1440
 * Description: Wordmark left, caps anchors with the orange-dot quote link, the circle menu and the right rail.
 */
?>
<!-- wp:group {"className":"wk-header__bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group wk-header__bar"><!-- wp:site-title {"level":0,"className":"wk-brand"} /-->

<!-- wp:list {"className":"wk-anchors"} -->
<ul class="wp-block-list wk-anchors"><!-- wp:list-item -->
<li><a href="/#halls"><?php echo esc_html( wk_t( 'nav_halls' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/#planning-hour"><?php echo esc_html( wk_t( 'nav_hour' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/#prices"><?php echo esc_html( wk_t( 'nav_prices' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/#stories"><?php echo esc_html( wk_t( 'nav_stories' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a class="wk-anchors__cta" href="/contact/#request"><span class="wk-cta__dot" aria-hidden="true">•</span> <?php echo esc_html( wk_t( 'nav_cta' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:navigation {"overlayMenu":"always","icon":"handle","className":"wk-circle","layout":{"type":"flex","orientation":"horizontal"}} /--></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="wk-rail" aria-hidden="true"><span class="wk-rail__line"></span><span class="wk-rail__dot"></span></div>
<!-- /wp:html -->
