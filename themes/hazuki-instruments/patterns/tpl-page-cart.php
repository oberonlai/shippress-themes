<?php
/**
 * Title: Template: page-cart
 * Slug: hazuki-instruments/tpl-page-cart
 * Categories: hazuki-instruments
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:woocommerce/page-content-wrapper {"page":"cart"} -->
<!-- wp:group {"tagName":"main","className":"hz-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group hz-main" style="margin-top:0"><!-- wp:group {"tagName":"section","align":"full","className":"hz-section hz-store-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-store-page"><!-- wp:group {"align":"wide","className":"hz-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hz-head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hazuki_instruments_t( 'k9254cd9a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1} /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/store-notices {"align":"wide"} /-->

<!-- wp:post-content {"align":"wide","className":"hz-store-page__content","layout":{"type":"constrained"}} /--></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
<!-- /wp:woocommerce/page-content-wrapper -->