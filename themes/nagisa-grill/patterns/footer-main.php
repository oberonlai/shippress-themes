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
<p class="ng-footer__lbl"><?php echo wp_kses_post( nagisa_grill_t( 'k6a7e7316' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nagisa_grill_t( 'kdc613d9c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-footer__lbl"} -->
<p class="ng-footer__lbl"><?php echo wp_kses_post( nagisa_grill_t( 'kedf7553d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nagisa_grill_t( 'ka3342d6c' ) ); ?><br><a href="mailto:table@nagisagrill.example"><?php echo wp_kses_post( nagisa_grill_t( 'k1a875966' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ng-wm ng-wm--foot sp-stagger"} -->
<h2 class="wp-block-heading ng-wm ng-wm--foot sp-stagger"><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( nagisa_grill_t( 'k8d9c307c' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( nagisa_grill_t( 'k7fc56270' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( nagisa_grill_t( 'kdfcf28d0' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( nagisa_grill_t( 'kdd753679' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( nagisa_grill_t( 'k5dbc98dc' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( nagisa_grill_t( 'k7fc56270' ) ); ?></span></h2>
<!-- /wp:heading -->

<?php echo nagisa_grill_tide( 'ng-tide--foot' ); ?>

<!-- wp:group {"className":"ng-footer__bottom"} -->
<div class="wp-block-group ng-footer__bottom"><!-- wp:paragraph {"className":"ng-footer__links"} -->
<p class="ng-footer__links"><a href="/newsletter/"><?php echo wp_kses_post( nagisa_grill_t( 'kffb7e666' ) ); ?></a> · <a href="/visit/"><?php echo wp_kses_post( nagisa_grill_t( 'k5e706a9b' ) ); ?></a> · <a href="/journal/"><?php echo wp_kses_post( nagisa_grill_t( 'k6b2b5614' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-footer__copy"} -->
<p class="ng-footer__copy"><?php echo wp_kses_post( nagisa_grill_t( 'k3103c02c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
