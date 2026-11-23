<?php
/**
 * Title: Header: three cells
 * Slug: soroe-clinic/header-main
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Description: Three white 72px cells on the mist gutter: wordmark, the one split menu with a language chip, and phone with a slate pill.
 */
?>
<!-- wp:group {"className":"so-head","layout":{"type":"default"}} -->
<div class="wp-block-group so-head"><!-- wp:group {"className":"so-hcell so-hcell--brand","layout":{"type":"default"}} -->
<div class="wp-block-group so-hcell so-hcell--brand"><!-- wp:paragraph {"className":"so-wordmark"} -->
<p class="so-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"so-wordsub"} -->
<p class="so-wordsub"><?php echo esc_html( soroe_clinic_t( 'logo_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-hcell so-hcell--nav","layout":{"type":"default"}} -->
<div class="wp-block-group so-hcell so-hcell--nav"><!-- wp:navigation {"overlayMenu":"mobile","icon":"handle","className":"so-nav","layout":{"type":"flex","justifyContent":"center"}} /-->
<!-- wp:paragraph {"className":"so-lang"} -->
<p class="so-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="en"><?php echo esc_html( soroe_clinic_t( 'lang_chip' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"so-hcell so-hcell--act","layout":{"type":"default"}} -->
<div class="wp-block-group so-hcell so-hcell--act"><!-- wp:paragraph {"className":"so-phone"} -->
<p class="so-phone"><a href="tel:+0020555190"><?php echo esc_html( soroe_clinic_t( 'phone' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"so-btn so-btn--small-wrap"} -->
<div class="wp-block-buttons so-btn so-btn--small-wrap"><!-- wp:button {"className":"so-btn so-btn--small"} -->
<div class="wp-block-button so-btn so-btn--small"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/first-visit/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
