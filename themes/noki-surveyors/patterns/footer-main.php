<?php
/**
 * Title: Footer
 * Slug: noki-surveyors/footer-main
 * Categories: noki-surveyors
 * Inserter: no
 * Viewport Width: 1440
 * Description: Light footer: wordmark and address, page links, languages and copyright.
 */
?>
<!-- wp:group {"tagName":"div","align":"full","className":"nk-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-footer">
<!-- wp:group {"className":"nk-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group nk-footer__in">
<!-- wp:group {"className":"nk-footer__brand","layout":{"type":"default"}} -->
<div class="wp-block-group nk-footer__brand">
<!-- wp:html -->
<a class="nk-brand" href="/"><span class="nk-mark" aria-hidden="true"></span><span class="nk-wordmark"><?php echo esc_html( noki_surveyors_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"nk-footer__addr"} -->
<p class="nk-footer__addr"><?php echo esc_html( noki_surveyors_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ul class="nk-footer__links"><li><a href="/report/"><?php echo esc_html( noki_surveyors_t( 'fl_0' ) ); ?></a></li><li><a href="/findings/"><?php echo esc_html( noki_surveyors_t( 'fl_1' ) ); ?></a></li><li><a href="/prices/"><?php echo esc_html( noki_surveyors_t( 'fl_2' ) ); ?></a></li><li><a href="/commercial/"><?php echo esc_html( noki_surveyors_t( 'fl_3' ) ); ?></a></li><li><a href="/cases/"><?php echo esc_html( noki_surveyors_t( 'fl_4' ) ); ?></a></li><li><a href="/about/"><?php echo esc_html( noki_surveyors_t( 'fl_5' ) ); ?></a></li><li><a href="/contact/"><?php echo esc_html( noki_surveyors_t( 'fl_6' ) ); ?></a></li><li><a href="/notes/"><?php echo esc_html( noki_surveyors_t( 'fl_7' ) ); ?></a></li><li><a href="/newsletter/"><?php echo esc_html( noki_surveyors_t( 'fl_8' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( noki_surveyors_t( 'fl_9' ) ); ?></a></li><li><a href="/terms/"><?php echo esc_html( noki_surveyors_t( 'fl_10' ) ); ?></a></li></ul>
<!-- /wp:html -->
<!-- wp:group {"className":"nk-footer__base","layout":{"type":"default"}} -->
<div class="wp-block-group nk-footer__base">
<!-- wp:html -->
<ul class="nk-footer__lang"><li><a href="<?php echo esc_url( noki_surveyors_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( noki_surveyors_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( noki_surveyors_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( noki_surveyors_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( noki_surveyors_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === noki_surveyors_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"nk-footer__copy"} -->
<p class="nk-footer__copy"><?php echo esc_html( noki_surveyors_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
