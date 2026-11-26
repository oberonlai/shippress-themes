<?php
/**
 * Title: Header: wordmark row and centred anchor menu
 * Slug: fuchi-glazing/header-main
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Row one: wordmark, phone, survey days and languages. Row two: one centred anchor menu with a solid current block and the outlined Book a survey box.
 */
?>
<!-- wp:group {"align":"full","className":"fg-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fg-head">
<!-- wp:group {"className":"fg-head__top","layout":{"type":"default"}} -->
<div class="wp-block-group fg-head__top">
<!-- wp:group {"className":"fg-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group fg-head__in">
<!-- wp:html -->
<a class="fg-brand" href="/"><span class="fg-mark" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="currentColor" stroke-width="1.5" focusable="false"><rect x="2" y="2" width="18" height="18"/><path d="M2 14 14 2M9 20 20 9" stroke-width="1"/></svg></span><span class="fg-wordmark"><?php echo esc_html( fuchi_glazing_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:html -->
<div class="fg-head__meta"><a href="tel:+002079460412"><?php echo esc_html( fuchi_glazing_t( 'phone' ) ); ?></a><span class="fg-sep" aria-hidden="true"></span><span><?php echo esc_html( fuchi_glazing_t( 'hd_days' ) ); ?></span><span class="fg-sep" aria-hidden="true"></span><ul class="fg-lang"><li><a href="<?php echo esc_url( fuchi_glazing_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === fuchi_glazing_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( fuchi_glazing_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === fuchi_glazing_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( fuchi_glazing_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === fuchi_glazing_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( fuchi_glazing_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === fuchi_glazing_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( fuchi_glazing_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === fuchi_glazing_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-head__nav","layout":{"type":"default"}} -->
<div class="wp-block-group fg-head__nav">
<!-- wp:group {"className":"fg-head__navin","layout":{"type":"default"}} -->
<div class="wp-block-group fg-head__navin">
<!-- wp:navigation {"overlayMenu":"mobile","className":"fg-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->
<!-- wp:html -->
<a class="fg-cta fg-cta--head" href="/contact/"><span><?php echo esc_html( fuchi_glazing_t( 'cta_book' ) ); ?></span><svg class="fg-cta__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="7.4"/><path d="M4.8 8h6M8.6 5.6 11 8l-2.4 2.4"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
