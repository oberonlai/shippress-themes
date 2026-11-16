<?php
/**
 * Title: Weekly list: sign-up panel
 * Slug: hinata-market/weekly-form
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: The newsletter slot on a dark walnut panel.
 */
?>
<!-- wp:group {"className":"hm-dark hm-signup","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dark hm-signup"><?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'hello@hinata-market.example',
	'label'   => hinata_market_t( 'forms_email' ),
	'submit'  => hinata_market_t( 'forms_subscribe' ),
	'notice'  => hinata_market_t( 'forms_mail_notice' ),
	'subject' => hinata_market_t( 'forms_mail_subject' ),
) ); ?></div>
<!-- /wp:group -->
