<?php
/**
 * Title: Header: olive strip
 * Slug: hozue-foodfest/header-main
 * Categories: hozue-foodfest
 * Viewport Width: 1440
 * Description: Sticky 68 px olive strip: wordmark, caps date and venue line, the one anchor menu, language pill and the early-bird pill.
 */
?>
<!-- wp:group {"className":"hf-head","layout":{"type":"default"}} -->
<div class="wp-block-group hf-head"><!-- wp:group {"className":"hf-head__l","layout":{"type":"default"}} -->
<div class="wp-block-group hf-head__l"><!-- wp:paragraph {"className":"hf-wordmark"} -->
<p class="hf-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'logo_name' ) ); ?><span class="hf-wordmark__sub"><?php echo esc_html( hozue_foodfest_t( 'logo_sub' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hf-dates"} -->
<p class="hf-dates"><?php echo esc_html( hozue_foodfest_t( 'head_dates' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-head__m","layout":{"type":"default"}} -->
<div class="wp-block-group hf-head__m"><!-- wp:navigation {"overlayMenu":"mobile","className":"hf-nav","layout":{"type":"flex","justifyContent":"left"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hf-head__r","layout":{"type":"default"}} -->
<div class="wp-block-group hf-head__r"><!-- wp:paragraph {"className":"hf-lang"} -->
<p class="hf-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'lang_chip' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hf-btns"} -->
<div class="wp-block-buttons hf-btns"><!-- wp:button {"className":"hf-pill hf-pill--cta hf-head__btn"} -->
<div class="wp-block-button hf-pill hf-pill--cta hf-head__btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#tickets' ) ); ?>"><?php echo esc_html( hozue_foodfest_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
