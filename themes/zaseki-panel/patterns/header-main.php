<?php
/**
 * Title: Header: top bar
 * Slug: zaseki-panel/header-main
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Notice strip and the single top bar with the wordmark, the anchor menu and the pre-order button.
 */
?>
<!-- wp:group {"align":"full","className":"zp-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull zp-header">
<!-- wp:group {"className":"zp-strip","layout":{"type":"default"}} -->
<div class="wp-block-group zp-strip">
<!-- wp:paragraph {"className":"zp-strip__t"} -->
<p class="zp-strip__t"><a href="/#price"><?php echo esc_html( zaseki_panel_t( 'strip' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"wide","className":"zp-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide zp-bar">
<!-- wp:group {"className":"zp-brand","layout":{"type":"default"}} -->
<div class="wp-block-group zp-brand">
<!-- wp:paragraph {"className":"zp-wordmark"} -->
<p class="zp-wordmark"><a href="/"><?php echo esc_html( zaseki_panel_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-slogan"} -->
<p class="zp-slogan"><?php echo esc_html( zaseki_panel_t( 'slogan' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"always","className":"zp-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<!-- wp:html -->
<nav class="zp-lang" aria-label="<?php echo esc_attr( zaseki_panel_t( 'lang_label' ) ); ?>"><ul>
<li><a href="<?php echo esc_url( zaseki_panel_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === zaseki_panel_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li>
<li><a href="<?php echo esc_url( zaseki_panel_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === zaseki_panel_lang() ? ' aria-current="true"' : ''; ?>>中文</a></li>
<li><a href="<?php echo esc_url( zaseki_panel_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === zaseki_panel_lang() ? ' aria-current="true"' : ''; ?>>日本語</a></li>
<li><a href="<?php echo esc_url( zaseki_panel_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === zaseki_panel_lang() ? ' aria-current="true"' : ''; ?>>FR</a></li>
<li><a href="<?php echo esc_url( zaseki_panel_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === zaseki_panel_lang() ? ' aria-current="true"' : ''; ?>>DE</a></li>
</ul></nav>
<!-- /wp:html -->
<!-- wp:buttons {"className":"zp-head-btn"} -->
<div class="wp-block-buttons zp-head-btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/pre-order/"><?php echo esc_html( zaseki_panel_t( 'btn_pre' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
