<?php
/**
 * Title: Header: wheel wordmark and one anchor menu
 * Slug: kuruma-tabi/header-main
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: White header, 90 px: wheel emblem and wordmark left, the one anchor menu centred, language chip right.
 */
?>
<!-- wp:group {"className":"kt-head-bar","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head-bar"><!-- wp:group {"className":"kt-head__l","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head__l"><!-- wp:paragraph {"className":"kt-wordmark"} -->
<p class="kt-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="kt-wordmark__ic"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span><span class="kt-wordmark__t"><?php echo esc_html( kuruma_tabi_t( 'logo_name' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-head__m","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head__m"><!-- wp:navigation {"overlayMenu":"mobile","className":"kt-nav","layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-head__r","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head__r"><!-- wp:paragraph {"className":"kt-lang"} -->
<p class="kt-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo kuruma_tabi_a( 'lang_aria' ); ?>"><?php echo esc_html( kuruma_tabi_t( 'lang_chip' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
