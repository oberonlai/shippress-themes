<?php
/**
 * Title: Footer: deep teal
 * Slug: kodou-charging/footer-main
 * Categories: kodou-charging
 * Inserter: no
 * Viewport Width: 1440
 * Description: Deep teal footer: wordmark, address, hours, page links, the updates form and languages.
 */
?>
<!-- wp:group {"align":"full","className":"kc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-footer">
<!-- wp:group {"className":"kc-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-footer__in">
<!-- wp:group {"className":"kc-footer__col kc-footer__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group kc-footer__col kc-footer__col--brand">
<!-- wp:html -->
<a class="kc-brand" href="/"><span class="kc-mark" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" focusable="false"><path d="M13 3 6 14h6l-1 7 7-11h-6z"/></svg></span><span class="kc-wordmark"><?php echo esc_html( kodou_charging_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html --><!-- wp:paragraph {"className":"kc-footer__addr"} -->
<p class="kc-footer__addr"><?php echo esc_html( kodou_charging_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<p class="kc-footer__addr"><a href="tel:+002079460180"><?php echo esc_html( kodou_charging_t( 'phone' ) ); ?></a><br><a href="mailto:visits@kodou-charging.example"><?php echo esc_html( kodou_charging_t( 'email' ) ); ?></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-footer__col">
<!-- wp:paragraph {"className":"kc-footer__h"} -->
<p class="kc-footer__h"><?php echo esc_html( kodou_charging_t( 'ft_hours_h' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"kc-footer__hours"} -->
<p class="kc-footer__hours"><?php echo esc_html( kodou_charging_t( 'ft_h1' ) ); ?><br><?php echo esc_html( kodou_charging_t( 'ft_h2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-footer__col">
<!-- wp:paragraph {"className":"kc-footer__h"} -->
<p class="kc-footer__h"><?php echo esc_html( kodou_charging_t( 'ft_pages_h' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<ul class="kc-footer__links"><li><a href="/about/"><?php echo esc_html( kodou_charging_t( 'fl_about' ) ); ?></a></li><li><a href="/site-assessment/"><?php echo esc_html( kodou_charging_t( 'fl_assess' ) ); ?></a></li><li><a href="/services/"><?php echo esc_html( kodou_charging_t( 'fl_services' ) ); ?></a></li><li><a href="/sites/"><?php echo esc_html( kodou_charging_t( 'fl_sites' ) ); ?></a></li><li><a href="/stories/"><?php echo esc_html( kodou_charging_t( 'fl_stories' ) ); ?></a></li><li><a href="/news/"><?php echo esc_html( kodou_charging_t( 'fl_news' ) ); ?></a></li><li><a href="/contact/"><?php echo esc_html( kodou_charging_t( 'fl_contact' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( kodou_charging_t( 'fl_privacy' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-footer__col kc-footer__col--form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-footer__col kc-footer__col--form">
<!-- wp:paragraph {"className":"kc-footer__h"} -->
<p class="kc-footer__h"><?php echo esc_html( kodou_charging_t( 'ft_news_h' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"kc-formwrap kc-formwrap--dark","layout":{"type":"default"}} -->
<div class="wp-block-group kc-formwrap kc-formwrap--dark">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'visits@kodou-charging.example', 'label' => kodou_charging_t( 'forms_email' ), 'submit' => kodou_charging_t( 'forms_subscribe' ), 'notice' => kodou_charging_t( 'forms_mail_notice' ), 'subject' => kodou_charging_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-footer__base","layout":{"type":"default"}} -->
<div class="wp-block-group kc-footer__base">
<!-- wp:html -->
<ul class="kc-footer__lang"><li><a href="<?php echo esc_url( kodou_charging_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( kodou_charging_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( kodou_charging_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( kodou_charging_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( kodou_charging_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === kodou_charging_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul>
<!-- /wp:html --><!-- wp:paragraph {"className":"kc-footer__copy"} -->
<p class="kc-footer__copy"><?php echo esc_html( kodou_charging_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
