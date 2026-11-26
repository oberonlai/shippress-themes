<?php
/**
 * Title: Footer: deep celadon
 * Slug: teate-clinic/footer-main
 * Categories: teate-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Deep celadon footer: wordmark, address and phone, short hours, page links, languages and the back-to-top tab.
 */
?>
<!-- wp:group {"align":"full","className":"tc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-footer">
<!-- wp:group {"className":"tc-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__in">
<!-- wp:group {"className":"tc-footer__col tc-footer__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__col tc-footer__col--brand">
<!-- wp:html -->
<a class="tc-brand" href="/"><span class="tc-mark" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 36 36" fill="none" stroke="#fff" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M13 21V10a2 2 0 0 1 4 0v8M17 18V8a2 2 0 0 1 4 0v10M21 18v-7a2 2 0 0 1 4 0v9M25 15a2 2 0 0 1 4 0v7c0 5-4 9-9 9h-1c-4 0-6-2-8-5l-4-6a2 2 0 0 1 3-3l3 3"/></svg></span><span class="tc-wordmark"><?php echo esc_html( teate_clinic_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"tc-footer__addr"} -->
<p class="tc-footer__addr"><?php echo esc_html( teate_clinic_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-footer__addr"} -->
<p class="tc-footer__addr"><a href="tel:+00445550172"><?php echo esc_html( teate_clinic_t( 'phone' ) ); ?></a><br><a href="mailto:hello@teate-clinic.example"><?php echo esc_html( teate_clinic_t( 'email' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__col">
<!-- wp:paragraph {"className":"tc-footer__h"} -->
<p class="tc-footer__h"><?php echo esc_html( teate_clinic_t( 'ft_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-footer__hours"} -->
<p class="tc-footer__hours"><?php echo esc_html( teate_clinic_t( 'ft_h1' ) ); ?><br><?php echo esc_html( teate_clinic_t( 'ft_h2' ) ); ?><br><?php echo esc_html( teate_clinic_t( 'ft_h3' ) ); ?><br><?php echo esc_html( teate_clinic_t( 'ft_h4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__col">
<!-- wp:paragraph {"className":"tc-footer__h"} -->
<p class="tc-footer__h"><?php echo esc_html( teate_clinic_t( 'ft_pages_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="tc-footer__links"><li><a href="/about/"><?php echo esc_html( teate_clinic_t( 'fl_about' ) ); ?></a></li><li><a href="/first-visit/"><?php echo esc_html( teate_clinic_t( 'fl_first' ) ); ?></a></li><li><a href="/conditions/"><?php echo esc_html( teate_clinic_t( 'fl_cond' ) ); ?></a></li><li><a href="/clinicians/"><?php echo esc_html( teate_clinic_t( 'fl_clin' ) ); ?></a></li><li><a href="/prices/"><?php echo esc_html( teate_clinic_t( 'fl_prices' ) ); ?></a></li><li><a href="/stories/"><?php echo esc_html( teate_clinic_t( 'fl_stories' ) ); ?></a></li><li><a href="/book/"><?php echo esc_html( teate_clinic_t( 'fl_book' ) ); ?></a></li><li><a href="/contact/"><?php echo esc_html( teate_clinic_t( 'fl_contact' ) ); ?></a></li><li><a href="/notes/"><?php echo esc_html( teate_clinic_t( 'fl_notes' ) ); ?></a></li><li><a href="/newsletter/"><?php echo esc_html( teate_clinic_t( 'fl_letter' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( teate_clinic_t( 'fl_privacy' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-footer__base","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__base">
<!-- wp:html -->
<ul class="tc-footer__lang"><li><a href="<?php echo esc_url( teate_clinic_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( teate_clinic_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( teate_clinic_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( teate_clinic_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( teate_clinic_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === teate_clinic_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"tc-footer__copy"} -->
<p class="tc-footer__copy"><?php echo esc_html( teate_clinic_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<a class="tc-top" href="#top" aria-label="<?php echo teate_clinic_a( 'to_top' ); ?>"><span aria-hidden="true"></span></a>
<!-- /wp:html -->
