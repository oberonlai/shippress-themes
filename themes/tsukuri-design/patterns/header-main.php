<?php
/**
 * Title: Header: centred white pill
 * Slug: tsukuri-design/header-main
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: A white pill at the top centre of the title strip: wordmark, the one top menu and a square start-a-project button, with a language chip beside it.
 */
?>
<!-- wp:group {"className":"td-head","layout":{"type":"default"}} -->
<div class="wp-block-group td-head"><!-- wp:group {"className":"td-pill","layout":{"type":"default"}} -->
<div class="wp-block-group td-pill"><!-- wp:paragraph {"className":"td-wordmark"} -->
<p class="td-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"td-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:paragraph {"className":"td-cta"} -->
<p class="td-cta"><a href="<?php echo esc_url( home_url( '/start/' ) ); ?>"><span class="td-cta__long"><?php echo esc_html( tsukuri_design_t( 'cta' ) ); ?></span><span class="td-cta__short"><?php echo esc_html( tsukuri_design_t( 'cta_short' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-lang"} -->
<p class="td-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'lang_chip' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
