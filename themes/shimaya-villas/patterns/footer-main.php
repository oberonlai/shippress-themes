<?php
/**
 * Title: Footer: four columns with the season letter
 * Slug: shimaya-villas/footer-main
 * Categories: shimaya-villas
 * Viewport Width: 1440
 * Description: Dark footer: address, hours and boats, link list and the newsletter slot, then copyright and back to top.
 */
?>
<!-- wp:group {"backgroundColor":"dark","textColor":"on-dark","className":"sv-footer","layout":{"type":"default"}} -->
<div class="wp-block-group sv-footer has-on-dark-color has-text-color has-dark-background-color has-background"><!-- wp:group {"className":"sv-footer__cols","layout":{"type":"default"}} -->
<div class="wp-block-group sv-footer__cols"><!-- wp:group {"className":"sv-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group sv-fcol"><!-- wp:paragraph {"className":"sv-fwordmark"} -->
<p class="sv-fwordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Shimaya Villas</a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fplace"} -->
<p class="sv-fplace">Lune Cay</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fp"} -->
<p class="sv-fp">The Jetty House, Lune Cay</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fp"} -->
<p class="sv-fp">+00 30 555 0142</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fp"} -->
<p class="sv-fp">stay@shimayavillas.example</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group sv-fcol"><!-- wp:paragraph {"className":"sv-fh"} -->
<p class="sv-fh">Guest desk</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fp"} -->
<p class="sv-fp">Daily 08:00–20:00 (island time)</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fp"} -->
<p class="sv-fp">Check-in from 14:00</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fp"} -->
<p class="sv-fp">Check-out 11:00, or 16:00 when booked direct</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fp"} -->
<p class="sv-fp">Boats from Port Avel 10:00, 13:00, 16:00; from Lune Cay 09:15, 12:15, 16:15, daily in season</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group sv-fcol"><!-- wp:paragraph {"className":"sv-fh"} -->
<p class="sv-fh">The houses</p>
<!-- /wp:paragraph --><!-- wp:list {"className":"sv-flinks"} -->
<ul class="wp-block-list sv-flinks"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/villas/' ) ); ?>">The houses</a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/season-and-rates/' ) ); ?>">Season &amp; rates</a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/arrival/' ) ); ?>">Arrival &amp; the island</a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/hold-dates/' ) ); ?>">Hold dates</a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>">Journal</a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>">The season letter</a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy</a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-fcol sv-fcol--news","layout":{"type":"default"}} -->
<div class="wp-block-group sv-fcol sv-fcol--news"><!-- wp:paragraph {"className":"sv-fh"} -->
<p class="sv-fh">The season letter</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fp"} -->
<p class="sv-fp">Hear first when the next season opens: three short letters a year.</p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'stay@shimayavillas.example',
	'label'   => shimaya_villas_t( 'forms_email' ),
	'submit'  => shimaya_villas_t( 'forms_subscribe' ),
	'notice'  => shimaya_villas_t( 'forms_mail_notice' ),
	'subject' => shimaya_villas_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-footer__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group sv-footer__bottom"><!-- wp:paragraph {"className":"sv-fsmall"} -->
<p class="sv-fsmall">© 2027 Shimaya Villas, Lune Cay</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fsmall"} -->
<p class="sv-fsmall"><a href="#top">Back to top</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
