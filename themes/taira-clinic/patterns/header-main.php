<?php
/**
 * Title: Header: centred wordmark over a slate nav strip
 * Slug: taira-clinic/header-main
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: 8 px slate strip, a white row with the languages, the centred wordmark and a booking link, then a slate navigation strip with six equal cells (one menu).
 */
?>
<!-- wp:group {"align":"full","className":"tc-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-head">
<!-- wp:group {"className":"tc-head__row","layout":{"type":"default"}} -->
<div class="wp-block-group tc-head__row">
<!-- wp:html -->
<ul class="tc-lang"><li><a href="<?php echo esc_url( taira_clinic_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === taira_clinic_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( taira_clinic_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === taira_clinic_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( taira_clinic_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === taira_clinic_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( taira_clinic_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === taira_clinic_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( taira_clinic_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === taira_clinic_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul>
<!-- /wp:html -->
<!-- wp:html -->
<a class="tc-brand" href="/"><svg class="tc-brand__mark" width="30" height="30" viewBox="0 0 30 30" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false"><path d="M3 24h24"/><circle cx="15" cy="13" r="5"/></svg><span class="tc-brand__name"><?php echo esc_html( taira_clinic_t( 'wordmark' ) ); ?></span><span class="tc-brand__tag"><?php echo esc_html( taira_clinic_t( 'tagline' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:html -->
<p class="tc-head__acts"><a class="tc-head__book" href="/contact/#book"><?php echo esc_html( taira_clinic_t( 'hd_book' ) ); ?></a><span class="tc-sep" aria-hidden="true"></span><a href="tel:+15550142200"><?php echo esc_html( taira_clinic_t( 'hd_phone' ) ); ?></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-head__strip","layout":{"type":"default"}} -->
<div class="wp-block-group tc-head__strip">
<!-- wp:group {"className":"tc-head__nav","layout":{"type":"default"}} -->
<div class="wp-block-group tc-head__nav">
<!-- wp:navigation {"overlayMenu":"mobile","className":"tc-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"stretch"}} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
