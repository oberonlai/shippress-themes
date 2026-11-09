<?php
/**
 * Title: Footer: studio details and links
 * Slug: kataribe-partners/foot-main
 * Categories: kataribe-partners
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: Charcoal footer with the studio line, address and hours, the page links and the legal line.
 */
$e = 'kataribe_partners_e';
?>
<!-- wp:group {"align":"full","className":"kp-foot-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kp-foot-wrap"><!-- wp:group {"className":"kp-foot-grid","layout":{"type":"default"}} -->
<div class="wp-block-group kp-foot-grid"><!-- wp:group {"className":"kp-foot-brand","layout":{"type":"default"}} -->
<div class="wp-block-group kp-foot-brand"><!-- wp:html -->
<span class="kp-brand__mark kp-brand__mark--light" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"isLink":false,"className":"kp-foot-brand__title"} /-->

<!-- wp:paragraph {"className":"kp-foot-line"} -->
<p class="kp-foot-line"><?php echo esc_html( kataribe_partners_t( 'foot_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-foot-links","layout":{"type":"default"}} -->
<div class="wp-block-group kp-foot-links"><!-- wp:paragraph {"className":"kp-foot-h"} -->
<p class="kp-foot-h"><?php echo esc_html( kataribe_partners_t( 'foot_site' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kp-foot-list"} -->
<ul class="wp-block-list kp-foot-list"><!-- wp:list-item -->
<li><a href="/about/"><?php echo esc_html( kataribe_partners_t( 'f_about' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/the-week/"><?php echo esc_html( kataribe_partners_t( 'f_week' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/retainers/"><?php echo esc_html( kataribe_partners_t( 'f_retainers' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/news/"><?php echo esc_html( kataribe_partners_t( 'f_news' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/coverage-notes/"><?php echo esc_html( kataribe_partners_t( 'f_notes' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/contact/"><?php echo esc_html( kataribe_partners_t( 'f_contact' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/privacy/"><?php echo esc_html( kataribe_partners_t( 'f_privacy' ) ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="/terms/"><?php echo esc_html( kataribe_partners_t( 'f_terms' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-foot-info","layout":{"type":"default"}} -->
<div class="wp-block-group kp-foot-info"><!-- wp:paragraph {"className":"kp-foot-h"} -->
<p class="kp-foot-h"><?php echo esc_html( kataribe_partners_t( 'foot_studio' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kataribe_partners_t( 'foot_addr' ) ); ?><br><?php echo esc_html( kataribe_partners_t( 'foot_hours' ) ); ?><br><?php echo esc_html( kataribe_partners_t( 'foot_press' ) ); ?><br><?php echo esc_html( kataribe_partners_t( 'foot_phone' ) ); ?><br><a href="mailto:<?php echo esc_attr( kataribe_partners_t( 'foot_mail' ) ); ?>"><?php echo esc_html( kataribe_partners_t( 'foot_mail' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kp-outline kp-outline--light"} -->
<div class="wp-block-button kp-outline kp-outline--light"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( kataribe_partners_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kp-legal"} -->
<p class="kp-legal"><?php echo esc_html( kataribe_partners_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
