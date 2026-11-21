<?php
/**
 * Title: Header: split navigation
 * Slug: nagare-workation/header-main
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Wordmark left over the photograph, the one top menu over the text pane, language chip and a filled Book a stay pill at the right.
 */
?>
<!-- wp:group {"className":"nw-head","layout":{"type":"default"}} -->
<div class="wp-block-group nw-head"><!-- wp:group {"className":"nw-head__l","layout":{"type":"default"}} -->
<div class="wp-block-group nw-head__l"><!-- wp:paragraph {"className":"nw-wordmark"} -->
<p class="nw-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'logo_name' ) ); ?><span class="nw-wordmark__sub"><?php echo esc_html( nagare_workation_t( 'logo_sub' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-head__m","layout":{"type":"default"}} -->
<div class="wp-block-group nw-head__m"><!-- wp:navigation {"overlayMenu":"mobile","className":"nw-nav","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:paragraph {"className":"nw-lang"} -->
<p class="nw-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'lang_chip' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-head__r","layout":{"type":"default"}} -->
<div class="wp-block-group nw-head__r"><!-- wp:buttons {"className":"nw-btns nw-head__btn"} -->
<div class="wp-block-buttons nw-btns nw-head__btn"><!-- wp:button {"className":"nw-pill nw-pill--fill"} -->
<div class="wp-block-button nw-pill nw-pill--fill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
