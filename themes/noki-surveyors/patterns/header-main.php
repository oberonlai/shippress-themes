<?php
/**
 * Title: Header: centred anchor menu
 * Slug: noki-surveyors/header-main
 * Categories: noki-surveyors
 * Inserter: no
 * Viewport Width: 1440
 * Description: Sticky header: mark and wordmark left, one centred anchor menu, language switcher and the one request button right.
 */
?>
<!-- wp:group {"align":"full","className":"nk-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-header">
<!-- wp:group {"className":"nk-header__row","layout":{"type":"default"}} -->
<div class="wp-block-group nk-header__row">
<!-- wp:html -->
<a class="nk-brand" href="/"><span class="nk-mark" aria-hidden="true"></span><span class="nk-wordmark"><?php echo esc_html( noki_surveyors_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:navigation {"overlayMenu":"mobile","className":"nk-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->
<!-- wp:group {"className":"nk-header__tools","layout":{"type":"default"}} -->
<div class="wp-block-group nk-header__tools">
<!-- wp:html -->
<details class="nk-lang"><summary aria-label="<?php echo noki_surveyors_a( 'lang_label' ); ?>"><?php echo esc_html( strtoupper( noki_surveyors_lang() ) ); ?></summary><ul><li><a href="<?php echo esc_url( noki_surveyors_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( noki_surveyors_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( noki_surveyors_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( noki_surveyors_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( noki_surveyors_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul></details>
<!-- /wp:html -->
<!-- wp:buttons {"className":"nk-btns"} -->
<div class="wp-block-buttons nk-btns">
<!-- wp:button {"className":"nk-btn nk-btn--head"} -->
<div class="wp-block-button nk-btn nk-btn--head"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( noki_surveyors_t( 'btn_request' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
