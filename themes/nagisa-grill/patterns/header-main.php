<?php
/**
 * Title: Header: tide menu, lockup and book pill
 * Slug: nagisa-grill/header-main
 * Categories: nagisa-grill
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"ng-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ng-header"><!-- wp:group {"className":"ng-header__bar"} -->
<div class="wp-block-group ng-header__bar"><!-- wp:navigation {"overlayMenu":"always","hasIcon":false,"overlayBackgroundColor":"band","overlayTextColor":"white","className":"ng-nav","layout":{"type":"flex","orientation":"vertical"}} /-->

<!-- wp:group {"className":"ng-logo"} -->
<div class="wp-block-group ng-logo"><!-- wp:paragraph {"className":"ng-logo__name"} -->
<p class="ng-logo__name"><a href="/">Nagisa Grill</a></p>
<!-- /wp:paragraph -->

<?php echo nagisa_grill_tide( 'ng-tide--logo' ); ?>

<!-- wp:paragraph {"className":"ng-logo__sub"} -->
<p class="ng-logo__sub">One boat · One service</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ng-header__r"} -->
<div class="wp-block-group ng-header__r"><!-- wp:paragraph {"className":"ng-header__visit"} -->
<p class="ng-header__visit"><a href="/visit/">Visit</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ng-header__cta"} -->
<div class="wp-block-buttons ng-header__cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/tables/">Book a table</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
