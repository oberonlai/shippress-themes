<?php
/**
 * Title: Header: centred menu
 * Slug: mebuki-college/header-main
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: White 74px header under a 4px moss rule: wordmark with sub-line at the left, the one centred menu, a language chip and a small Open days pill at the right.
 */
?>
<!-- wp:group {"className":"mb-head","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head"><!-- wp:group {"className":"mb-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__in"><!-- wp:group {"className":"mb-head__brand","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__brand"><!-- wp:paragraph {"className":"mb-wordmark"} -->
<p class="mb-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mb-wordsub"} -->
<p class="mb-wordsub"><?php echo esc_html( mebuki_college_t( 'logo_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"mobile","icon":"handle","className":"mb-nav","layout":{"type":"flex","justifyContent":"center"}} /-->
<!-- wp:group {"className":"mb-head__right","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__right"><!-- wp:paragraph {"className":"mb-lang"} -->
<p class="mb-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="en"><?php echo esc_html( mebuki_college_t( 'lang_chip' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"mb-head__btn"} -->
<div class="wp-block-buttons mb-head__btn"><!-- wp:button {"className":"mb-btn mb-btn--small"} -->
<div class="wp-block-button mb-btn mb-btn--small"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/open-days/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'head_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
