<?php
/**
 * Title: Footer: pale four columns
 * Slug: taira-clinic/footer-main
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Pale footer: wordmark and address, page links, hours and contact, closed by an 8 px slate strip.
 */
?>
<!-- wp:group {"align":"full","className":"tc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-footer">
<!-- wp:group {"className":"tc-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__in">
<!-- wp:group {"className":"tc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__col">
<!-- wp:html -->
<a class="tc-brand tc-brand--foot" href="/"><svg class="tc-brand__mark" width="30" height="30" viewBox="0 0 30 30" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false"><path d="M3 24h24"/><circle cx="15" cy="13" r="5"/></svg><span class="tc-brand__name"><?php echo esc_html( taira_clinic_t( 'wordmark' ) ); ?></span><span class="tc-brand__tag"><?php echo esc_html( taira_clinic_t( 'tagline' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"tc-footer__txt"} -->
<p class="tc-footer__txt"><?php echo esc_html( taira_clinic_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__col">
<!-- wp:paragraph {"className":"tc-footer__h"} -->
<p class="tc-footer__h"><?php echo esc_html( taira_clinic_t( 'ft_pages_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="tc-footer__links"><li><a href="/about/"><?php echo esc_html( taira_clinic_t( 'fl_about' ) ); ?></a></li><li><a href="/first-visit/"><?php echo esc_html( taira_clinic_t( 'fl_first' ) ); ?></a></li><li><a href="/stories/"><?php echo esc_html( taira_clinic_t( 'fl_stories' ) ); ?></a></li><li><a href="/news/"><?php echo esc_html( taira_clinic_t( 'fl_news' ) ); ?></a></li><li><a href="/newsletter/"><?php echo esc_html( taira_clinic_t( 'fl_newsletter' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( taira_clinic_t( 'fl_privacy' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__col">
<!-- wp:paragraph {"className":"tc-footer__h"} -->
<p class="tc-footer__h"><?php echo esc_html( taira_clinic_t( 'ft_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-footer__txt"} -->
<p class="tc-footer__txt"><?php echo esc_html( taira_clinic_t( 'ft_h1' ) ); ?><br><?php echo esc_html( taira_clinic_t( 'ft_h2' ) ); ?><br><?php echo esc_html( taira_clinic_t( 'ft_h3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__col">
<!-- wp:paragraph {"className":"tc-footer__h"} -->
<p class="tc-footer__h"><?php echo esc_html( taira_clinic_t( 'ft_contact_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<p class="tc-footer__txt"><a href="tel:+15550142200"><?php echo esc_html( taira_clinic_t( 'hd_phone' ) ); ?></a><br><a href="mailto:desk@taira-clinic.example">desk@taira-clinic.example</a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-footer__bar","layout":{"type":"default"}} -->
<div class="wp-block-group tc-footer__bar">
<!-- wp:paragraph {"className":"tc-footer__copy"} -->
<p class="tc-footer__copy"><?php echo esc_html( taira_clinic_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="tc-lang tc-lang--foot"><li><a href="<?php echo esc_url( taira_clinic_url( 'en' ) ); ?>" hreflang="en" lang="en">EN</a></li><li><a href="<?php echo esc_url( taira_clinic_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW">&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( taira_clinic_url( 'ja' ) ); ?>" hreflang="ja" lang="ja">&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( taira_clinic_url( 'fr' ) ); ?>" hreflang="fr" lang="fr">Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( taira_clinic_url( 'de' ) ); ?>" hreflang="de" lang="de">Deutsch</a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
