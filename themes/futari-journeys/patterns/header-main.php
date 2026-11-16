<?php
/**
 * Title: Header: wordmark, menu and two cells
 * Slug: futari-journeys/header-main
 * Categories: futari-journeys
 * Inserter: no
 * Viewport Width: 1440
 * Description: Wordmark left, the one top menu, a white and a deep-moss cell right; overlays the hero photo on the home page.
 */
?>
<!-- wp:group {"className":"fj-header","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull fj-header"><!-- wp:group {"className":"fj-header__in","layout":{"type":"default"}} -->
<div class="wp-block-group fj-header__in"><!-- wp:paragraph {"className":"fj-wordmark"} -->
<p class="fj-wordmark"><a href="/">futari journeys</a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"paper","overlayTextColor":"ink","className":"fj-nav","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"fj-cells"} -->
<div class="wp-block-buttons fj-cells"><!-- wp:button {"className":"fj-cell fj-cell--white"} -->
<div class="wp-block-button fj-cell fj-cell--white"><a class="wp-block-button__link wp-element-button" href="/questions/">The questions</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"fj-cell fj-cell--moss"} -->
<div class="wp-block-button fj-cell fj-cell--moss"><a class="wp-block-button__link wp-element-button" href="/planning-call/">Book a planning call</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
