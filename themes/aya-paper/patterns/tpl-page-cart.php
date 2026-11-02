<?php
/**
 * Title: Template: page-cart
 * Slug: aya-paper/tpl-page-cart
 * Categories: aya-paper
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:woocommerce/page-content-wrapper {"page":"cart"} -->
<!-- wp:group {"tagName":"main","className":"ap-main","layout":{"type":"default"}} -->
<main class="wp-block-group ap-main">
<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-store-page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-store-page">
<!-- wp:group {"className":"ap-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ap-pagehead">
<!-- wp:post-title {"level":1} /-->

<!-- wp:paragraph {"className":"ap-lead"} -->
<p class="ap-lead"><?php echo wp_kses_post( aya_paper_t( 'k11f855d3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:post-content {"className":"ap-store-page__content","layout":{"type":"default"}} /-->
</section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
<!-- /wp:woocommerce/page-content-wrapper -->