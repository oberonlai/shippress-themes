<?php
/**
 * Title: Page not found
 * Slug: hinata-market/tpl-404
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: A short not-found page with a link back to the notices.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-sec","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-sec"><!-- wp:group {"className":"hm-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group hm-pagehead"><!-- wp:heading {"level":1,"className":"hm-h1"} -->
<h1 class="wp-block-heading hm-h1"><?php echo esc_html( hinata_market_t( 'nf_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-pill hm-pill--l"} -->
<p class="hm-pill hm-pill--l"><a href="<?php echo hinata_market_url( '/' ); ?>"><?php echo esc_html( hinata_market_t( 'nf_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
