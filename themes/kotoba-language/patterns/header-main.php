<?php
/**
 * Title: Header: split navigation
 * Slug: kotoba-language/header-main
 * Categories: kotoba-language
 * Description: Wordmark left, menu, language list and Enquire pill at the right.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"kl-bar","layout":{"type":"default"}} -->
<div class="wp-block-group kl-bar"><!-- wp:paragraph {"className":"kl-mark"} -->
<p class="kl-mark"><a href="/">Kotoba</a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kl-nav","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:group {"className":"kl-head__r","layout":{"type":"default"}} -->
<div class="wp-block-group kl-head__r"><!-- wp:paragraph {"className":"kl-langs"} -->
<p class="kl-langs"><?php echo esc_html( kotoba_language_t( 'langs' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kl-pill-btn kl-pill-btn--sm-wrap"} -->
<div class="wp-block-buttons kl-pill-btn kl-pill-btn--sm-wrap"><!-- wp:button {"className":"kl-pill-btn kl-pill-btn--sm"} -->
<div class="wp-block-button kl-pill-btn kl-pill-btn--sm"><a class="wp-block-button__link wp-element-button" href="/enquiry/"><?php echo esc_html( kotoba_language_t( 'nav_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kl-rail" aria-hidden="false"><span class="kl-rail__lines"><i></i><i></i><i></i><b></b></span><nav class="kl-rail__label" aria-label="Enquire"><a class="kl-rail__a" href="/enquiry/"><?php echo esc_html( kotoba_language_t( 'rail_a' ) ); ?></a><a class="kl-rail__b" href="#top" tabindex="-1"><?php echo esc_html( kotoba_language_t( 'rail_b' ) ); ?></a></nav></div>
<!-- /wp:html -->