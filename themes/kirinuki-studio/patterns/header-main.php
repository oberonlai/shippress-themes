<?php
/**
 * Title: Header: floating bar
 * Slug: kirinuki-studio/header-main
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: White rounded bar floating over the mist with the wordmark, the one anchor menu and a language cell, plus a separate dark Book a shoot cell.
 */
?>
<!-- wp:group {"className":"kr-head","layout":{"type":"default"}} -->
<div class="wp-block-group kr-head"><!-- wp:group {"className":"kr-head__bar","layout":{"type":"default"}} -->
<div class="wp-block-group kr-head__bar"><!-- wp:paragraph {"className":"kr-wordmark"} -->
<p class="kr-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kr-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:paragraph {"className":"kr-lang"} -->
<p class="kr-lang"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'lang_chip' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-head__cta","layout":{"type":"default"}} -->
<div class="wp-block-group kr-head__cta"><!-- wp:buttons {"className":"kr-btns kr-head__btn"} -->
<div class="wp-block-buttons kr-btns kr-head__btn"><!-- wp:button {"className":"kr-headcta"} -->
<div class="wp-block-button kr-headcta"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( kirinuki_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
