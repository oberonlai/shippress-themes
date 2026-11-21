<?php
/**
 * Title: Header: ribbon and centred two-row header
 * Slug: shimaya-villas/header-main
 * Categories: shimaya-villas
 * Viewport Width: 1440
 * Description: Promo ribbon, centred wordmark with place label, the one centred anchor menu and the Hold dates button; the ribbon scrolls away while the header stays.
 */
?>
<!-- wp:group {"className":"sv-ribbon","layout":{"type":"default"}} -->
<div class="wp-block-group sv-ribbon"><!-- wp:paragraph {"className":"sv-ribbon__t"} -->
<p class="sv-ribbon__t"><strong>Direct only:</strong> <span class="sv-r-l">the boat over, a stocked kitchen and check-out at 16:00. <a href="<?php echo esc_url( home_url( '/#included' ) ); ?>">What’s included</a></span><span class="sv-r-s">boat, kitchen, 16:00 check-out. <a href="<?php echo esc_url( home_url( '/#included' ) ); ?>">Included</a></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"sv-head","layout":{"type":"default"}} -->
<div class="wp-block-group sv-head"><!-- wp:group {"className":"sv-head__row","layout":{"type":"default"}} -->
<div class="wp-block-group sv-head__row"><!-- wp:paragraph {"className":"sv-lang"} -->
<p class="sv-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">EN</a></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"sv-brand","layout":{"type":"default"}} -->
<div class="wp-block-group sv-brand"><!-- wp:paragraph {"className":"sv-wordmark"} -->
<p class="sv-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Shimaya Villas</a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-place"} -->
<p class="sv-place">Lune Cay</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:navigation {"overlayMenu":"mobile","className":"sv-nav","layout":{"type":"flex","justifyContent":"center"}} /--><!-- wp:paragraph {"className":"sv-cta"} -->
<p class="sv-cta"><a href="<?php echo esc_url( home_url( '/#hold' ) ); ?>">Hold dates</a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-cta-short"} -->
<p class="sv-cta-short"><a href="<?php echo esc_url( home_url( '/#hold' ) ); ?>">Hold</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
