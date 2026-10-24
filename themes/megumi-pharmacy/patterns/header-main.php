<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: megumi-pharmacy/header-main
 * Categories: megumi-pharmacy
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"mp-header","layout":{"type":"default"}} -->
<div class="wp-block-group mp-header"><!-- wp:group {"className":"mp-brand","layout":{"type":"default"}} -->
<div class="wp-block-group mp-brand"><!-- wp:paragraph {"className":"mp-brand__tag"} -->
<p class="mp-brand__tag"><?php echo wp_kses_post( megumi_pharmacy_t( 'ke51c07ed' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"level":0,"className":"mp-brand__title"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"mp-nav mp-navtoggle","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:group {"className":"mp-tools","layout":{"type":"default"}} -->
<div class="wp-block-group mp-tools"><!-- wp:paragraph {"className":"mp-lang"} -->
<p class="mp-lang"><?php echo wp_kses_post( megumi_pharmacy_t( 'kaa85f184' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cart"} -->
<p class="mp-cart"><a href="/shop/"><?php echo wp_kses_post( megumi_pharmacy_t( 'k9f82518d' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-round"} -->
<p class="mp-round"><a href="/visit/" aria-label="<?php echo esc_attr( megumi_pharmacy_t( 'a886a655f' ) ); ?>"><span aria-hidden="true"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
