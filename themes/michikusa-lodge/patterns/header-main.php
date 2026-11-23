<?php
/**
 * Title: Header: overlay on the window
 * Slug: michikusa-lodge/header-main
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Description: Overlay header: wordmark with kilometre line at the left, the one menu in white, a language chip and the round amber Book tonight disc at the right. Sits over the framed photo window.
 */
?>
<!-- wp:group {"className":"ml-head","layout":{"type":"default"}} -->
<div class="wp-block-group ml-head"><!-- wp:group {"className":"ml-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group ml-head__in"><!-- wp:group {"className":"ml-head__brand","layout":{"type":"default"}} -->
<div class="wp-block-group ml-head__brand"><!-- wp:paragraph {"className":"ml-wordmark"} -->
<p class="ml-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-wordsub"} -->
<p class="ml-wordsub"><?php echo esc_html( michikusa_lodge_t( 'logo_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:navigation {"overlayMenu":"mobile","icon":"handle","className":"ml-nav","layout":{"type":"flex","justifyContent":"right"}} /--><!-- wp:group {"className":"ml-head__right","layout":{"type":"default"}} -->
<div class="wp-block-group ml-head__right"><!-- wp:paragraph {"className":"ml-lang"} -->
<p class="ml-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="en"><?php echo esc_html( michikusa_lodge_t( 'lang_chip' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-disc"} -->
<p class="ml-disc"><a href="<?php echo esc_url( home_url( '/book-tonight/' ) ); ?>"><?php echo michikusa_lodge_lines( 'disc' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
