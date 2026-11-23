<?php
/**
 * Title: Header: wordmark and one menu
 * Slug: yubi-college/header-main
 * Categories: yubi-college
 * Viewport Width: 1440
 * Description: Translucent white 90px header: wordmark with sub-line at the left, the one top menu, a language chip and a small outline Taster evenings pill at the right.
 */
?>
<!-- wp:group {"className":"yb-head","layout":{"type":"default"}} -->
<div class="wp-block-group yb-head"><!-- wp:group {"className":"yb-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-head__in"><!-- wp:group {"className":"yb-head__brand","layout":{"type":"default"}} -->
<div class="wp-block-group yb-head__brand"><!-- wp:paragraph {"className":"yb-wordmark"} -->
<p class="yb-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yb-wordsub"} -->
<p class="yb-wordsub"><?php echo esc_html( yubi_college_t( 'logo_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"mobile","icon":"handle","className":"yb-nav","layout":{"type":"flex","justifyContent":"right"}} /-->
<!-- wp:group {"className":"yb-head__right","layout":{"type":"default"}} -->
<div class="wp-block-group yb-head__right"><!-- wp:paragraph {"className":"yb-lang"} -->
<p class="yb-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="en"><?php echo esc_html( yubi_college_t( 'lang_chip' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"yb-head__btn"} -->
<div class="wp-block-buttons yb-head__btn"><!-- wp:button {"className":"yb-pill yb-pill--outline"} -->
<div class="wp-block-button yb-pill yb-pill--outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/taster-evenings/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'head_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
