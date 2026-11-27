<?php
/**
 * Title: Header: two-tier top bar
 * Slug: makido-shutters/header-main
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Utility row (phone, hours, service area, languages) and a main row with the wordmark, one anchor menu and the outline Book a site measure pill.
 */
?>
<!-- wp:group {"align":"full","className":"mk-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mk-head">
<!-- wp:group {"className":"mk-head__util","layout":{"type":"default"}} -->
<div class="wp-block-group mk-head__util">
<!-- wp:group {"className":"mk-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-head__in">
<!-- wp:html -->
<div class="mk-head__meta"><a href="tel:+0214801948"><?php echo esc_html( makido_shutters_t( 'hd_phone' ) ); ?></a><span class="mk-sep" aria-hidden="true"></span><span><?php echo esc_html( makido_shutters_t( 'hd_hours' ) ); ?></span><span class="mk-sep" aria-hidden="true"></span><span><?php echo esc_html( makido_shutters_t( 'hd_area' ) ); ?></span><ul class="mk-lang"><li><a href="<?php echo esc_url( makido_shutters_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === makido_shutters_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( makido_shutters_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === makido_shutters_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( makido_shutters_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === makido_shutters_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( makido_shutters_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === makido_shutters_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( makido_shutters_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === makido_shutters_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group mk-head__main">
<!-- wp:group {"className":"mk-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-head__in">
<!-- wp:html -->
<a class="mk-brand" href="/"><span class="mk-mark" aria-hidden="true"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="2" focusable="false"><rect x="2" y="2" width="24" height="24"/><path d="M2 8.5h24M2 14h24M2 19.5h16"/></svg></span><span class="mk-wordmark"><?php echo esc_html( makido_shutters_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:navigation {"overlayMenu":"mobile","className":"mk-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->
<!-- wp:html -->
<a class="mk-head__cta" href="/contact/"><span><?php echo esc_html( makido_shutters_t( 'cta_book' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
