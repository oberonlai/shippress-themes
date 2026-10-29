<?php
/**
 * Title: Header
 * Slug: nodoka-counselling/head-main
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Thin 72px bar: wordmark with a two-line caption at the left, the centred menu, a Book link at the right.
 */
?>
<!-- wp:group {"className":"nc-header","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull nc-header"><!-- wp:group {"className":"nc-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group nc-header__bar"><!-- wp:group {"className":"nc-brand","layout":{"type":"default"}} -->
<div class="wp-block-group nc-brand"><!-- wp:paragraph {"className":"nc-brand__name"} -->
<p class="nc-brand__name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-brand__cap"} -->
<p class="nc-brand__cap"><?php echo esc_html( nodoka_counselling_t( 'caption1' ) ); ?><br><?php echo esc_html( nodoka_counselling_t( 'caption2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"mobile","className":"nc-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->
<!-- wp:paragraph {"className":"nc-header__book"} -->
<p class="nc-header__book"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'book' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
