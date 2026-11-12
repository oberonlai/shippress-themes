<?php
/**
 * Title: Footer: address, hours, newsletter and pill links
 * Slug: gaku-frames/footer-main
 * Categories: gaku-frames
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"gk-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-footer"><!-- wp:group {"className":"gk-footer__inner","layout":{"type":"default"}} -->
<div class="wp-block-group gk-footer__inner"><!-- wp:group {"className":"gk-footer__col","layout":{"type":"default"}} -->
<div class="wp-block-group gk-footer__col"><!-- wp:paragraph {"className":"gk-footer__h"} -->
<p class="gk-footer__h">Visit the bench</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gk-footer__addr"} -->
<p class="gk-footer__addr">27 Cooper's Yard, Halden<br>+1 555 0127 2011 · <a href="mailto:bench@gakuframes.example">bench@gakuframes.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gk-footer__hours"} -->
<p class="gk-footer__hours">Tuesday–Saturday 10:00–18:00<br>Thursday until 20:00<br>Sunday and Monday closed (bench days)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-footer__col gk-footer__news","layout":{"type":"default"}} -->
<div class="wp-block-group gk-footer__col gk-footer__news"><!-- wp:paragraph {"className":"gk-footer__h"} -->
<p class="gk-footer__h">Bench notes, once a month</p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'bench@gakuframes.example',
	'label'   => gaku_frames_t( 'forms_email' ),
	'submit'  => gaku_frames_t( 'forms_subscribe' ),
	'notice'  => gaku_frames_t( 'forms_mail_notice' ),
	'subject' => gaku_frames_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-footer__col gk-footer__links","layout":{"type":"default"}} -->
<div class="wp-block-group gk-footer__col gk-footer__links"><!-- wp:paragraph {"className":"gk-footer__h"} -->
<p class="gk-footer__h">The shop</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gk-footer__pills"} -->
<p class="gk-footer__pills"><a class="gk-pill" href="/mouldings/">Mouldings</a> <a class="gk-pill" href="/mounting/">Mounting</a> <a class="gk-pill" href="/prices/">Prices</a> <a class="gk-pill" href="/delivery/">Delivery</a> <a class="gk-pill" href="/about/">About</a> <a class="gk-pill" href="/contact/">Visit</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gk-footer__more"} -->
<p class="gk-footer__more"><a href="/book/">Book a fitting</a> · <a href="/news/">Journal</a> · <a href="/faq/">FAQ &amp; care</a> · <a href="/newsletter/">Newsletter</a> · <a href="/privacy/">Privacy</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gk-footer__legal"} -->
<p class="gk-footer__legal">© 2011–2026 Gaku Frames</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
