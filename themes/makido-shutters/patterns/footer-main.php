<?php
/**
 * Title: Footer: ink slate
 * Slug: makido-shutters/footer-main
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Ink footer: wordmark and address, page links, contact lines and legal links, with a back-to-top disc.
 */
?>
<!-- wp:group {"align":"full","className":"mk-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mk-footer">
<!-- wp:group {"className":"mk-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-footer__in">
<!-- wp:group {"className":"mk-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group mk-footer__col">
<!-- wp:html -->
<a class="mk-brand" href="/"><span class="mk-mark" aria-hidden="true"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="2" focusable="false"><rect x="2" y="2" width="24" height="24"/><path d="M2 8.5h24M2 14h24M2 19.5h16"/></svg></span><span class="mk-wordmark"><?php echo esc_html( makido_shutters_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"mk-footer__txt"} -->
<p class="mk-footer__txt"><?php echo esc_html( makido_shutters_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-footer__txt"} -->
<p class="mk-footer__txt"><?php echo esc_html( makido_shutters_t( 'ft_area' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group mk-footer__col">
<!-- wp:paragraph {"className":"mk-footer__h"} -->
<p class="mk-footer__h"><?php echo esc_html( makido_shutters_t( 'ft_pages_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="mk-footer__links"><li><a href="/about/"><?php echo esc_html( makido_shutters_t( 'fl_about' ) ); ?></a></li><li><a href="/doors/"><?php echo esc_html( makido_shutters_t( 'fl_doors' ) ); ?></a></li><li><a href="/how-it-works/"><?php echo esc_html( makido_shutters_t( 'fl_how' ) ); ?></a></li><li><a href="/prices/"><?php echo esc_html( makido_shutters_t( 'fl_prices' ) ); ?></a></li><li><a href="/work/"><?php echo esc_html( makido_shutters_t( 'fl_work' ) ); ?></a></li><li><a href="/news/"><?php echo esc_html( makido_shutters_t( 'fl_news' ) ); ?></a></li><li><a href="/newsletter/"><?php echo esc_html( makido_shutters_t( 'fl_newsletter' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group mk-footer__col">
<!-- wp:paragraph {"className":"mk-footer__h"} -->
<p class="mk-footer__h"><?php echo esc_html( makido_shutters_t( 'ft_contact_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<p class="mk-footer__txt"><a href="tel:+0214801948"><?php echo esc_html( makido_shutters_t( 'hd_phone' ) ); ?></a><br><a href="mailto:quotes@makido-shutters.example">quotes@makido-shutters.example</a></p>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"mk-footer__txt"} -->
<p class="mk-footer__txt"><?php echo esc_html( makido_shutters_t( 'ft_off' ) ); ?><br><?php echo esc_html( makido_shutters_t( 'ft_surv' ) ); ?><br><?php echo esc_html( makido_shutters_t( 'ft_emer' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group mk-footer__col">
<!-- wp:paragraph {"className":"mk-footer__h"} -->
<p class="mk-footer__h"><?php echo esc_html( makido_shutters_t( 'ft_legal_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="mk-footer__links"><li><a href="/privacy/"><?php echo esc_html( makido_shutters_t( 'fl_privacy' ) ); ?></a></li><li><a href="/terms/"><?php echo esc_html( makido_shutters_t( 'fl_terms' ) ); ?></a></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-footer__base","layout":{"type":"default"}} -->
<div class="wp-block-group mk-footer__base">
<!-- wp:paragraph {"className":"mk-footer__copy"} -->
<p class="mk-footer__copy"><?php echo esc_html( makido_shutters_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<a class="mk-top" href="#top" aria-label="<?php echo makido_shutters_a( 'ft_top' ); ?>"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false"><path d="M2 9l5-5 5 5"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
