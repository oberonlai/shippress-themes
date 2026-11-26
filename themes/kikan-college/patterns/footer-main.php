<?php
/**
 * Title: Footer
 * Slug: kikan-college/footer-main
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Deep footer: wordmark and address, hours, links and the college letter slot.
 */
?>
<!-- wp:group {"align":"full","className":"kc-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-footer">
<!-- wp:group {"className":"kc-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-footer__in">
<!-- wp:group {"className":"kc-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fcol">
<!-- wp:html -->
<a class="kc-brand kc-brand--f" href="/"><svg class="kc-mark" width="44" height="44" viewBox="0 0 44 44" aria-hidden="true" focusable="false"><circle cx="22" cy="22" r="20" fill="none" stroke="#B8683A" stroke-width="3"/><path d="M14 12v10a4 4 0 0 0 4 4h12" fill="none" stroke="#3C4F62" stroke-width="4" stroke-linecap="square"/></svg><span class="kc-brand__t"><span class="kc-wordmark"><?php echo esc_html( kikan_college_t( 'wordmark' ) ); ?></span><span class="kc-brand__sub"><?php echo esc_html( kikan_college_t( 'brand_sub' ) ); ?></span></span></a>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-fcol__p"} -->
<p class="kc-fcol__p"><?php echo esc_html( kikan_college_t( 'ft_tag' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-fcol__p"} -->
<p class="kc-fcol__p"><?php echo kikan_college_lines( 'ft_addr' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fcol">
<!-- wp:heading {"level":3,"className":"kc-fcol__h"} -->
<h3 class="wp-block-heading kc-fcol__h"><?php echo esc_html( kikan_college_t( 'ft_hours_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-fcol__p"} -->
<p class="kc-fcol__p"><?php echo kikan_college_lines( 'ft_hours' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fcol">
<!-- wp:heading {"level":3,"className":"kc-fcol__h"} -->
<h3 class="wp-block-heading kc-fcol__h"><?php echo esc_html( kikan_college_t( 'ft_links_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:html -->
<ul class="kc-flinks"><li><a href="/about/"><?php echo esc_html( kikan_college_t( 'fl_0' ) ); ?></a></li><li><a href="/stories/"><?php echo esc_html( kikan_college_t( 'fl_1' ) ); ?></a></li><li><a href="/newsletter/"><?php echo esc_html( kikan_college_t( 'fl_2' ) ); ?></a></li><li><a href="/news/"><?php echo esc_html( kikan_college_t( 'fl_3' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( kikan_college_t( 'fl_4' ) ); ?></a></li><li><a href="/contact/"><?php echo esc_html( kikan_college_t( 'fl_5' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-fcol kc-fcol--letter","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fcol kc-fcol--letter">
<!-- wp:heading {"level":3,"className":"kc-fcol__h"} -->
<h3 class="wp-block-heading kc-fcol__h"><?php echo esc_html( kikan_college_t( 'ft_letter_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-fcol__p"} -->
<p class="kc-fcol__p"><?php echo esc_html( kikan_college_t( 'ft_letter_p' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@kikan-college.example', 'label' => kikan_college_t( 'forms_email' ), 'submit' => kikan_college_t( 'forms_subscribe' ), 'notice' => kikan_college_t( 'forms_mail_notice' ), 'subject' => kikan_college_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-footer__base","layout":{"type":"default"}} -->
<div class="wp-block-group kc-footer__base">
<!-- wp:html -->
<ul class="kc-footer__lang"><li><a href="<?php echo esc_url( kikan_college_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( kikan_college_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( kikan_college_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( kikan_college_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( kikan_college_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === kikan_college_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"kc-footer__copy"} -->
<p class="kc-footer__copy"><?php echo esc_html( kikan_college_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
