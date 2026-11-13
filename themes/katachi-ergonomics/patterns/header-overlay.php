<?php
/**
 * Title: Header: wordmark, anchor menu and booking button over the photograph
 * Slug: katachi-ergonomics/header-overlay
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk, consultancy
 * Viewport Width: 1440
 * Inserter: no
 * Description: Wordmark left; one anchor menu and the Book a review button right.
 */
?>
<!-- wp:group {"align":"full","className":"ke-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ke-header__bar"><!-- wp:paragraph {"className":"ke-wm"} -->
<p class="ke-wm"><a href="<?php echo katachi_ergonomics_url( '/' ); ?>"><span class="ke-wm__a"><?php echo esc_html( katachi_ergonomics_t( 'wm_a' ) ); ?></span><span class="ke-wm__b"><?php echo esc_html( katachi_ergonomics_t( 'wm_b' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ke-header__right","layout":{"type":"default"}} -->
<div class="wp-block-group ke-header__right"><!-- wp:navigation {"overlayMenu":"mobile","className":"ke-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

<!-- wp:buttons {"className":"ke-header__cta"} -->
<div class="wp-block-buttons ke-header__cta"><!-- wp:button {"className":"ke-btn ke-btn--head"} -->
<div class="wp-block-button ke-btn ke-btn--head"><a class="wp-block-button__link wp-element-button" href="#book"><?php echo esc_html( katachi_ergonomics_t( 'head_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
