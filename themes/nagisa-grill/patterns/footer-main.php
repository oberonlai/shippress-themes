<?php
/**
 * Title: Footer: subscribe, hours and foot wordmark
 * Slug: nagisa-grill/footer-main
 * Categories: nagisa-grill
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"ng-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ng-footer"><!-- wp:group {"className":"ng-footer__top"} -->
<div class="wp-block-group ng-footer__top"><!-- wp:group {"className":"ng-footer__sub"} -->
<div class="wp-block-group ng-footer__sub"><!-- wp:heading {"level":2,"className":"ng-footer__h"} -->
<h2 class="wp-block-heading ng-footer__h"><?php echo esc_html( nagisa_grill_t( 'footer_board_heading' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ng-footer__note"} -->
<p class="ng-footer__note"><?php echo esc_html( nagisa_grill_t( 'footer_privacy_line' ) ); ?></p>
<!-- /wp:paragraph -->

<?php
echo shippress_form_slot(
	array(
		'kind'    => 'newsletter',
		'email'   => 'table@nagisagrill.example',
		'label'   => nagisa_grill_t( 'forms_email' ),
		'submit'  => nagisa_grill_t( 'forms_subscribe' ),
		'notice'  => nagisa_grill_t( 'forms_mail_notice' ),
		'subject' => nagisa_grill_t( 'forms_mail_subject' ),
	)
);
?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ng-footer__info"} -->
<div class="wp-block-group ng-footer__info"><!-- wp:paragraph {"className":"ng-footer__lbl"} -->
<p class="ng-footer__lbl">Hours</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Wednesday to Sunday<br>Bar from 17:30 · seatings at 18:00 and 20:30<br>Last order 22:00 · doors close 23:00<br>Closed Monday and Tuesday</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-footer__lbl"} -->
<p class="ng-footer__lbl">Find us</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>7 Harbour Row, Port Ellery<br><a href="mailto:table@nagisagrill.example">table@nagisagrill.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ng-wm ng-wm--foot sp-stagger"} -->
<h2 class="wp-block-heading ng-wm ng-wm--foot sp-stagger"><span class="sp-reveal sp-reveal--up">N</span><span class="sp-reveal sp-reveal--up">A</span><span class="sp-reveal sp-reveal--up">G</span><span class="sp-reveal sp-reveal--up">I</span><span class="sp-reveal sp-reveal--up">S</span><span class="sp-reveal sp-reveal--up">A</span></h2>
<!-- /wp:heading -->

<?php echo nagisa_grill_tide( 'ng-tide--foot' ); ?>

<!-- wp:group {"className":"ng-footer__bottom"} -->
<div class="wp-block-group ng-footer__bottom"><!-- wp:paragraph {"className":"ng-footer__links"} -->
<p class="ng-footer__links"><a href="/newsletter/">Newsletter</a> · <a href="/visit/">Visit</a> · <a href="/journal/">Journal</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-footer__copy"} -->
<p class="ng-footer__copy">© 2019–2026 Nagisa Grill. A fictional restaurant; all names, places and figures are invented.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
