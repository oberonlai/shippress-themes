<?php
/**
 * Title: Header: utility bar, one menu, outlined button
 * Slug: kodou-charging/header-main
 * Categories: kodou-charging
 * Inserter: no
 * Viewport Width: 1440
 * Description: Utility bar with hours, phone, email and languages; main bar with the wordmark, the one anchor menu and an outlined Request a visit button.
 */
?>
<!-- wp:group {"align":"full","className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-head">
<!-- wp:group {"className":"kc-util","layout":{"type":"default"}} -->
<div class="wp-block-group kc-util">
<!-- wp:group {"className":"kc-util__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-util__in">
<!-- wp:paragraph {"className":"kc-util__hours"} -->
<p class="kc-util__hours"><?php echo esc_html( kodou_charging_t( 'util_hours' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<p class="kc-util__contact"><a href="tel:+002079460180"><?php echo esc_html( kodou_charging_t( 'phone' ) ); ?></a> <span aria-hidden="true">·</span> <a href="mailto:visits@kodou-charging.example"><?php echo esc_html( kodou_charging_t( 'email' ) ); ?></a></p>
<!-- /wp:html --><!-- wp:html -->
<details class="kc-lang"><summary aria-label="<?php echo kodou_charging_a( 'lang_label' ); ?>"><?php echo esc_html( strtoupper( kodou_charging_lang() ) ); ?></summary><ul><li><a href="<?php echo esc_url( kodou_charging_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( kodou_charging_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( kodou_charging_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( kodou_charging_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( kodou_charging_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul></details>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"kc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-header">
<!-- wp:group {"className":"kc-header__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-header__row">
<!-- wp:html -->
<a class="kc-brand" href="/"><span class="kc-mark" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M13 3 6 14h6l-1 7 7-11h-6z"/></svg></span><span class="kc-wordmark"><?php echo esc_html( kodou_charging_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html --><!-- wp:navigation {"overlayMenu":"mobile","className":"kc-nav","layout":{"type":"flex","orientation":"horizontal"}} /--><!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns">
<!-- wp:button {"className":"kc-btn kc-btn--head is-style-outline"} -->
<div class="wp-block-button kc-btn kc-btn--head is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( kodou_charging_t( 'btn_visit' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
