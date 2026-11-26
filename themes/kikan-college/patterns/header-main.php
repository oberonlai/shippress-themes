<?php
/**
 * Title: Header: strip, split header
 * Slug: kikan-college/header-main
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Announcement strip, then the split header: mark and wordmark left, utility line over the one menu right, two 64 px call-to-action blocks.
 */
?>
<!-- wp:group {"align":"full","className":"kc-strip","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-strip">
<!-- wp:html -->
<p class="kc-strip__p"><a href="/apply/"><svg class="kc-strip__i" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><circle cx="10" cy="10" r="10" fill="#B8683A"/><rect x="9" y="8.5" width="2" height="6" fill="#fff"/><circle cx="10" cy="5.8" r="1.2" fill="#fff"/></svg><span><?php echo esc_html( kikan_college_t( 'strip' ) ); ?></span><span class="kc-strip__a" aria-hidden="true">&rarr;</span></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"kc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-header">
<!-- wp:group {"className":"kc-header__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-header__row">
<!-- wp:html -->
<a class="kc-brand" href="/"><svg class="kc-mark" width="44" height="44" viewBox="0 0 44 44" aria-hidden="true" focusable="false"><circle cx="22" cy="22" r="20" fill="none" stroke="#B8683A" stroke-width="3"/><path d="M14 12v10a4 4 0 0 0 4 4h12" fill="none" stroke="#3C4F62" stroke-width="4" stroke-linecap="square"/></svg><span class="kc-brand__t"><span class="kc-wordmark"><?php echo esc_html( kikan_college_t( 'wordmark' ) ); ?></span><span class="kc-brand__sub"><?php echo esc_html( kikan_college_t( 'brand_sub' ) ); ?></span></span></a>
<!-- /wp:html -->
<!-- wp:group {"className":"kc-header__right","layout":{"type":"default"}} -->
<div class="wp-block-group kc-header__right">
<!-- wp:group {"className":"kc-header__row1","layout":{"type":"default"}} -->
<div class="wp-block-group kc-header__row1">
<!-- wp:html -->
<ul class="kc-util"><li><a href="/contact/"><svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="8" r="6"/><path d="M8 4.5V8l2.4 1.4"/></svg> <?php echo esc_html( kikan_college_t( 'util_office' ) ); ?></a></li><li><a href="tel:+00445550193"><svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.2 2.5h2.4l1 2.8-1.5 1a7.5 7.5 0 0 0 3.6 3.6l1-1.5 2.8 1v2.4a1.2 1.2 0 0 1-1.3 1.2A10.4 10.4 0 0 1 2 3.8a1.2 1.2 0 0 1 1.2-1.3z"/></svg> +00 44 555 0193</a></li><li><a href="/contact/"><svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8 14s4.5-4 4.5-7.5a4.5 4.5 0 0 0-9 0C3.5 10 8 14 8 14z"/><circle cx="8" cy="6.5" r="1.6"/></svg> <?php echo esc_html( kikan_college_t( 'util_here' ) ); ?></a></li></ul>
<!-- /wp:html -->
<!-- wp:html -->
<details class="kc-lang"><summary aria-label="<?php echo kikan_college_a( 'lang_label' ); ?>"><?php echo esc_html( strtoupper( kikan_college_lang() ) ); ?></summary><ul><li><a href="<?php echo esc_url( kikan_college_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( kikan_college_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( kikan_college_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( kikan_college_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( kikan_college_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul></details>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"mobile","className":"kc-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-ctas","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ctas">
<!-- wp:html -->
<a class="kc-cta kc-cta--taster" href="/open-days/"><?php echo kikan_college_lines( 'cta_taster' ); ?></a><a class="kc-cta kc-cta--apply" href="/apply/"><?php echo esc_html( kikan_college_t( 'cta_apply' ) ); ?></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="kc-tabs"><a class="kc-tab kc-tab--taster" href="/open-days/"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><rect x="3" y="4" width="14" height="13" rx="2"/><path d="M3 8h14M7 2v3M13 2v3"/></svg><span><?php echo esc_html( kikan_college_t( 'tab_taster' ) ); ?></span></a><a class="kc-tab kc-tab--apply" href="/apply/"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 16l1-4 8-8 3 3-8 8z"/></svg><span><?php echo esc_html( kikan_college_t( 'tab_apply' ) ); ?></span></a></div>
<!-- /wp:html -->
