<?php
/**
 * Title: Header: stripe, mark, one menu, languages, button
 * Slug: teate-clinic/header-main
 * Categories: teate-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Sticky header with a 6 px celadon stripe: mark and wordmark left, the one top menu, language switcher and the Book a visit button right.
 */
?>
<!-- wp:group {"align":"full","className":"tc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-header">
<!-- wp:group {"className":"tc-header__row","layout":{"type":"default"}} -->
<div class="wp-block-group tc-header__row">
<!-- wp:html -->
<a class="tc-brand" href="/"><span class="tc-mark" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 36 36" fill="none" stroke="#fff" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M13 21V10a2 2 0 0 1 4 0v8M17 18V8a2 2 0 0 1 4 0v10M21 18v-7a2 2 0 0 1 4 0v9M25 15a2 2 0 0 1 4 0v7c0 5-4 9-9 9h-1c-4 0-6-2-8-5l-4-6a2 2 0 0 1 3-3l3 3"/></svg></span><span class="tc-wordmark"><?php echo esc_html( teate_clinic_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:navigation {"overlayMenu":"mobile","className":"tc-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<!-- wp:group {"className":"tc-header__tools","layout":{"type":"default"}} -->
<div class="wp-block-group tc-header__tools">
<!-- wp:html -->
<details class="tc-lang"><summary aria-label="<?php echo teate_clinic_a( 'lang_label' ); ?>"><?php echo esc_html( strtoupper( teate_clinic_lang() ) ); ?></summary><ul><li><a href="<?php echo esc_url( teate_clinic_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( teate_clinic_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( teate_clinic_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( teate_clinic_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( teate_clinic_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul></details>
<!-- /wp:html -->
<!-- wp:buttons {"className":"tc-btns"} -->
<div class="wp-block-buttons tc-btns">
<!-- wp:button {"className":"tc-btn tc-btn--head"} -->
<div class="wp-block-button tc-btn tc-btn--head"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo esc_html( teate_clinic_t( 'btn_book' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
