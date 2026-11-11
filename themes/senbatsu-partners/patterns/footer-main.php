<?php
/**
 * Title: Footer: search notes, address and hours
 * Slug: senbatsu-partners/footer-main
 * Categories: senbatsu-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"sb-footer"} -->
<div class="wp-block-group alignfull sb-footer">
<!-- wp:group {"className":"sb-footer__top"} -->
<div class="wp-block-group sb-footer__top">
<!-- wp:group {"className":"sb-footer__info"} -->
<div class="wp-block-group sb-footer__info">
<!-- wp:paragraph {"className":"sb-footer__mark"} -->
<p class="sb-footer__mark"><a href="/">SENBATSU PARTNERS</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Oostelijke Handelskade 1210<br>1019 BL Amsterdam</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Mon–Fri 08:30–18:00 CET<br>Brief sessions on Tuesdays and Thursdays</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="mailto:search@senbatsu-partners.example">search@senbatsu-partners.example</a><br>+31 20 555 0142</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-footer__sub"} -->
<div class="wp-block-group sb-footer__sub">
<!-- wp:heading {"level":2,"className":"sb-footer__h"} -->
<h2 class="wp-block-heading sb-footer__h"><?php echo esc_html( senbatsu_partners_t( 'footer_heading' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sb-footer__note"} -->
<p class="sb-footer__note"><?php echo esc_html( senbatsu_partners_t( 'footer_note' ) ); ?></p>
<!-- /wp:paragraph -->

<?php
echo shippress_form_slot(
	array(
		'kind'    => 'newsletter',
		'email'   => 'search@senbatsu-partners.example',
		'label'   => senbatsu_partners_t( 'forms_email' ),
		'submit'  => senbatsu_partners_t( 'forms_subscribe' ),
		'notice'  => senbatsu_partners_t( 'forms_mail_notice' ),
		'subject' => senbatsu_partners_t( 'forms_mail_subject' ),
	)
);
?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-footer__links"} -->
<div class="wp-block-group sb-footer__links">
<!-- wp:paragraph -->
<p><a href="/about/">The firm</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/mandates/">Mandates</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/process/">How a search runs</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/fees/">Fees and terms</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/partners/">Partners</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/letters/">Letters</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/newsletter/">Search notes</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/contact/">Open a search</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-footer__bottom"} -->
<div class="wp-block-group sb-footer__bottom">
<!-- wp:paragraph -->
<p><a href="/privacy/">Privacy</a> · <a href="/terms/">Terms</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>© 2012–2026 Senbatsu Partners</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
