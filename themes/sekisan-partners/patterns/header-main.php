<?php
/**
 * Title: Header: ink rail, brand, anchor menu and request button
 * Slug: sekisan-partners/header-main
 * Categories: sekisan-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"sk-header","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sk-header"><!-- wp:group {"className":"sk-rail","layout":{"type":"default"}} -->
<div class="wp-block-group sk-rail"><!-- wp:paragraph {"className":"sk-rail__up"} -->
<p class="sk-rail__up"><a href="#top" aria-label="<?php echo esc_attr( sekisan_partners_t( 'hdr_top' ) ); ?>"></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-rail__lang"} -->
<p class="sk-rail__lang"><span class="is-current" aria-current="true">EN</span><span lang="zh-TW">ZH</span><span lang="ja">JA</span><span lang="fr">FR</span><span lang="de">DE</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-rail__word"} -->
<p class="sk-rail__word"><span class="sk-rail__sq"></span><span class="sk-rail__vert">Sekisan Partners</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-bar","layout":{"type":"default"}} -->
<div class="wp-block-group sk-bar"><!-- wp:paragraph {"className":"sk-brand"} -->
<p class="sk-brand"><a href="/"><span class="sk-brand__mark"></span><span class="sk-brand__name">Sekisan <br>Partners</span></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sk-bar__right","layout":{"type":"default"}} -->
<div class="wp-block-group sk-bar__right"><!-- wp:navigation {"overlayMenu":"mobile","className":"sk-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"sk-bar__cta"} -->
<div class="wp-block-buttons sk-bar__cta"><!-- wp:button {"className":"is-style-sk-outline"} -->
<div class="wp-block-button is-style-sk-outline"><a class="wp-block-button__link wp-element-button" href="/request-a-proposal/"><?php echo esc_html( sekisan_partners_t( 'k6f96ac44' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-dots"} -->
<p class="sk-dots" role="navigation" aria-label="<?php echo esc_attr( sekisan_partners_t( 'hdr_sections' ) ); ?>"><a class="sk-dot sk-dot--gap" href="/#gap" aria-label="Gap"></a><a class="sk-dot sk-dot--estimate" href="/#estimate" aria-label="Estimate"></a><a class="sk-dot sk-dot--handover" href="/#handover" aria-label="Handover"></a><a class="sk-dot sk-dot--fees" href="/#fees" aria-label="Fees"></a><a class="sk-dot sk-dot--cases" href="/#cases" aria-label="Cases"></a><a class="sk-dot sk-dot--request" href="/#request" aria-label="Request"></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
