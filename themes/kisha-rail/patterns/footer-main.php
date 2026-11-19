<?php
/**
 * Title: Footer: facts, links and the departures letter
 * Slug: kisha-rail/footer-main
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Dark grained footer: wordmark and address, hours, link list and the newsletter slot.
 */
?>
<!-- wp:group {"className":"kr-foot kr-grain","layout":{"type":"default"},"backgroundColor":"dark"} -->
<div class="wp-block-group kr-foot kr-grain has-dark-background-color has-background">
<!-- wp:group {"className":"kr-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__grid">
<!-- wp:group {"className":"kr-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__col">
<!-- wp:site-title {"level":0,"className":"kr-foot__logo"} /-->

<!-- wp:paragraph {"className":"kr-foot__a"} -->
<p class="kr-foot__a"><?php echo esc_html( kisha_rail_t( 'ft_addr1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__a"} -->
<p class="kr-foot__a"><?php echo esc_html( kisha_rail_t( 'ft_addr2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__a"} -->
<p class="kr-foot__a"><?php echo esc_html( kisha_rail_t( 'ft_phone' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__a"} -->
<p class="kr-foot__a"><a href="mailto:tours@kisharail.example">tours@kisharail.example</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__col">
<!-- wp:paragraph {"className":"kr-foot__k"} -->
<p class="kr-foot__k"><?php echo esc_html( kisha_rail_t( 'ft_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__a"} -->
<p class="kr-foot__a"><?php echo esc_html( kisha_rail_t( 'ft_hours1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__a"} -->
<p class="kr-foot__a"><?php echo esc_html( kisha_rail_t( 'ft_hours2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__a"} -->
<p class="kr-foot__a"><?php echo esc_html( kisha_rail_t( 'ft_hours3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__col">
<!-- wp:paragraph {"className":"kr-foot__k"} -->
<p class="kr-foot__k"><?php echo esc_html( kisha_rail_t( 'ft_links_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__l"} -->
<p class="kr-foot__l"><a href="/tours/"><?php echo esc_html( kisha_rail_t( 'ft_tours' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__l"} -->
<p class="kr-foot__l"><a href="/a-day-on-tour/"><?php echo esc_html( kisha_rail_t( 'ft_day' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__l"} -->
<p class="kr-foot__l"><a href="/what-we-carry/"><?php echo esc_html( kisha_rail_t( 'ft_carry' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__l"} -->
<p class="kr-foot__l"><a href="/departures-and-prices/"><?php echo esc_html( kisha_rail_t( 'ft_prices' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__l"} -->
<p class="kr-foot__l"><a href="/pace-and-access/"><?php echo esc_html( kisha_rail_t( 'ft_pace' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__l"} -->
<p class="kr-foot__l"><a href="/about/"><?php echo esc_html( kisha_rail_t( 'ft_about' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__l"} -->
<p class="kr-foot__l"><a href="/journal/"><?php echo esc_html( kisha_rail_t( 'ft_journal' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__l"} -->
<p class="kr-foot__l"><a href="/contact/"><?php echo esc_html( kisha_rail_t( 'ft_contact' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__l"} -->
<p class="kr-foot__l"><a href="/newsletter/"><?php echo esc_html( kisha_rail_t( 'ft_newsletter' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-foot__col kr-foot__col--nl","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__col kr-foot__col--nl">
<!-- wp:paragraph {"className":"kr-foot__k"} -->
<p class="kr-foot__k"><?php echo esc_html( kisha_rail_t( 'ft_nl_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__a"} -->
<p class="kr-foot__a"><?php echo esc_html( kisha_rail_t( 'ft_nl_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'tours@kisharail.example',
	'label'   => kisha_rail_t( 'forms_email' ),
	'submit'  => kisha_rail_t( 'forms_subscribe' ),
	'notice'  => kisha_rail_t( 'forms_mail_notice' ),
	'subject' => kisha_rail_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-foot__bottom","layout":{"type":"default"}} -->
<div class="wp-block-group kr-foot__bottom">
<!-- wp:paragraph {"className":"kr-foot__c"} -->
<p class="kr-foot__c"><?php echo esc_html( kisha_rail_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-foot__c"} -->
<p class="kr-foot__c"><a href="/brochure/"><?php echo esc_html( kisha_rail_t( 'ft_brochure' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
