<?php
/**
 * Title: Footer: depot, links and round notes
 * Slug: shikii-mats/footer-main
 * Categories: shikii-mats
 * Inserter: no
 * Viewport Width: 1440
 * Description: Charcoal footer with a ribbed top edge: depot details, links and the round notes subscribe slot.
 */
?>
<!-- wp:group {"className":"sm-rib","layout":{"type":"default"}} -->
<div class="wp-block-group sm-rib">

</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"sm-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sm-footer">
<!-- wp:group {"align":"wide","className":"sm-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sm-footer__in">
<!-- wp:group {"className":"sm-fgrid","layout":{"type":"default"}} -->
<div class="wp-block-group sm-fgrid">
<!-- wp:group {"className":"sm-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group sm-fcol">
<!-- wp:heading {"level":3,"className":"sm-fh"} -->
<h3 class="wp-block-heading sm-fh"><?php echo esc_html( shikii_mats_t( 'f_h_depot' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-fp"} -->
<p class="sm-fp"><?php echo esc_html( shikii_mats_t( 'f_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-fp"} -->
<p class="sm-fp"><?php echo esc_html( shikii_mats_t( 'f_phone' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-fp"} -->
<p class="sm-fp"><a href="mailto:round@shikiimats.example"><?php echo esc_html( shikii_mats_t( 'f_email' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-fp"} -->
<p class="sm-fp"><?php echo esc_html( shikii_mats_t( 'f_hours1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-fp"} -->
<p class="sm-fp"><?php echo esc_html( shikii_mats_t( 'f_hours2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-fcol","layout":{"type":"default"}} -->
<div class="wp-block-group sm-fcol">
<!-- wp:heading {"level":3,"className":"sm-fh"} -->
<h3 class="wp-block-heading sm-fh"><?php echo esc_html( shikii_mats_t( 'f_h_links' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-fl"} -->
<p class="sm-fl"><a href="/sites/"><?php echo esc_html( shikii_mats_t( 'f_l_sites' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-fl"} -->
<p class="sm-fl"><a href="/the-round/"><?php echo esc_html( shikii_mats_t( 'f_l_round' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-fl"} -->
<p class="sm-fl"><a href="/mats-and-sizes/"><?php echo esc_html( shikii_mats_t( 'f_l_mats' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-fl"} -->
<p class="sm-fl"><a href="/prices/"><?php echo esc_html( shikii_mats_t( 'f_l_prices' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-fl"} -->
<p class="sm-fl"><a href="/about/"><?php echo esc_html( shikii_mats_t( 'f_l_about' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-fl"} -->
<p class="sm-fl"><a href="/contact/"><?php echo esc_html( shikii_mats_t( 'f_l_contact' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-fcol sm-fcol--sub","layout":{"type":"default"}} -->
<div class="wp-block-group sm-fcol sm-fcol--sub">
<!-- wp:heading {"level":3,"className":"sm-fh"} -->
<h3 class="wp-block-heading sm-fh"><?php echo esc_html( shikii_mats_t( 'f_h_sub' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-fp"} -->
<p class="sm-fp"><?php echo esc_html( shikii_mats_t( 'f_sub_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'round@shikiimats.example',
	'label'   => shikii_mats_t( 'forms_email' ),
	'submit'  => shikii_mats_t( 'forms_subscribe' ),
	'notice'  => shikii_mats_t( 'forms_mail_notice' ),
	'subject' => shikii_mats_t( 'forms_mail_subject' ),
) ); ?>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sm-legal"} -->
<p class="sm-legal"><a href="/privacy/"><?php echo esc_html( shikii_mats_t( 'l_priv' ) ); ?></a> · <a href="/terms/"><?php echo esc_html( shikii_mats_t( 'l_terms' ) ); ?></a> · <a href="/round-notes/"><?php echo esc_html( shikii_mats_t( 'l_notes' ) ); ?></a><br><?php echo esc_html( shikii_mats_t( 'copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
