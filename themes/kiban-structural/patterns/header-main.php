<?php
/**
 * Title: Header: wordmark, language, menu and Contact pill
 * Slug: kiban-structural/header-main
 * Categories: kiban-structural
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"kb-header","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull kb-header"><!-- wp:group {"className":"kb-header__brand","layout":{"type":"default"}} -->
<div class="wp-block-group kb-header__brand"><!-- wp:paragraph {"className":"kb-logo"} -->
<p class="kb-logo"><a href="/"><?php echo esc_html( kiban_structural_t( 'hd_logo' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:html -->
<p class="kb-lang" aria-label="<?php echo esc_attr( kiban_structural_t( 'hd_lang_label' ) ); ?>"><span class="is-current" aria-current="true">EN</span><span>ZH</span><span>JA</span><span>FR</span><span>DE</span></p>
<!-- /wp:html --></div>
<!-- /wp:group --><!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"ground","overlayTextColor":"ink","icon":"menu","className":"kb-nav","layout":{"type":"flex","justifyContent":"left"}} /--><!-- wp:html -->
<p class="kb-pill-wrap"><a class="kb-pill" href="/contact/"><span class="kb-dot kb-dot--green" aria-hidden="true"></span><?php echo esc_html( kiban_structural_t( 'hd_contact' ) ); ?></a></p>
<!-- /wp:html --></div>
<!-- /wp:group -->
