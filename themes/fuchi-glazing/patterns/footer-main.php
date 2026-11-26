<?php
/**
 * Title: Footer: slate with waitlist
 * Slug: fuchi-glazing/footer-main
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Slate footer: wordmark and address, hours, page links and the dark waitlist form, with a Top square.
 */
?>
<!-- wp:group {"align":"full","className":"fg-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fg-footer">
<!-- wp:group {"className":"fg-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group fg-footer__in">
<!-- wp:group {"className":"fg-footer__col fg-footer__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group fg-footer__col fg-footer__col--brand">
<!-- wp:html -->
<a class="fg-brand" href="/"><span class="fg-mark" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="currentColor" stroke-width="1.5" focusable="false"><rect x="2" y="2" width="18" height="18"/><path d="M2 14 14 2M9 20 20 9" stroke-width="1"/></svg></span><span class="fg-wordmark"><?php echo esc_html( fuchi_glazing_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"fg-footer__txt"} -->
<p class="fg-footer__txt"><?php echo esc_html( fuchi_glazing_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<p class="fg-footer__addr"><a href="tel:+002079460412"><?php echo esc_html( fuchi_glazing_t( 'phone' ) ); ?></a><br><a href="mailto:survey@fuchi-glazing.example">survey@fuchi-glazing.example</a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group fg-footer__col">
<!-- wp:paragraph {"className":"fg-footer__h"} -->
<p class="fg-footer__h"><?php echo esc_html( fuchi_glazing_t( 'ft_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-footer__txt"} -->
<p class="fg-footer__txt"><?php echo esc_html( fuchi_glazing_t( 'ft_h1' ) ); ?><br><?php echo esc_html( fuchi_glazing_t( 'ft_h2' ) ); ?><br><?php echo esc_html( fuchi_glazing_t( 'ft_h3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group fg-footer__col">
<!-- wp:paragraph {"className":"fg-footer__h"} -->
<p class="fg-footer__h"><?php echo esc_html( fuchi_glazing_t( 'ft_pages_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="fg-footer__links"><li><a href="/about/"><?php echo esc_html( fuchi_glazing_t( 'fl_about' ) ); ?></a></li><li><a href="/survey/"><?php echo esc_html( fuchi_glazing_t( 'fl_survey' ) ); ?></a></li><li><a href="/replace/"><?php echo esc_html( fuchi_glazing_t( 'fl_replace' ) ); ?></a></li><li><a href="/prices/"><?php echo esc_html( fuchi_glazing_t( 'fl_prices' ) ); ?></a></li><li><a href="/projects/"><?php echo esc_html( fuchi_glazing_t( 'fl_projects' ) ); ?></a></li><li><a href="/news/"><?php echo esc_html( fuchi_glazing_t( 'fl_news' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( fuchi_glazing_t( 'fl_privacy' ) ); ?></a></li><li><a href="/terms/"><?php echo esc_html( fuchi_glazing_t( 'fl_terms' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-footer__col fg-footer__col--form","layout":{"type":"default"}} -->
<div class="wp-block-group fg-footer__col fg-footer__col--form">
<!-- wp:paragraph {"className":"fg-footer__h"} -->
<p class="fg-footer__h"><?php echo esc_html( fuchi_glazing_t( 'ft_wl_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-footer__txt"} -->
<p class="fg-footer__txt"><?php echo esc_html( fuchi_glazing_t( 'ft_wl_x' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'survey@fuchi-glazing.example', 'label' => fuchi_glazing_t( 'forms_email' ), 'submit' => fuchi_glazing_t( 'forms_subscribe' ), 'notice' => fuchi_glazing_t( 'forms_mail_notice' ), 'subject' => fuchi_glazing_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-footer__base","layout":{"type":"default"}} -->
<div class="wp-block-group fg-footer__base">
<!-- wp:paragraph {"className":"fg-footer__copy"} -->
<p class="fg-footer__copy"><?php echo esc_html( fuchi_glazing_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<a class="fg-top" href="#top" aria-label="<?php echo fuchi_glazing_a( 'ft_top' ); ?>"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M3 10l5-5 5 5"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
