<?php
/**
 * Title: Footer: house, hours, links, letter
 * Slug: sazanami-hotel/footer-main
 * Categories: sazanami-hotel
 * Viewport Width: 1440
 * Description: Dark footer in four columns: the address, the hours, small links (not a second menu), the letter slot, and the wordmark between hairlines.
 */
?>
<!-- wp:group {"className":"sz-foot","layout":{"type":"default"}} -->
<div class="wp-block-group sz-foot"><!-- wp:group {"className":"sz-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group sz-foot__cols"><!-- wp:group {"className":"sz-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group sz-foot__c"><!-- wp:paragraph {"className":"sz-kicker sz-kicker--glint"} -->
<p class="sz-kicker sz-kicker--glint"><?php echo esc_html( sazanami_hotel_t( 'foot_addr_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-foot__p"} -->
<p class="sz-foot__p"><?php echo esc_html( sazanami_hotel_t( 'foot_addr' ) ); ?><br><?php echo esc_html( sazanami_hotel_t( 'foot_phone' ) ); ?><br><?php echo esc_html( sazanami_hotel_t( 'foot_email' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group sz-foot__c"><!-- wp:paragraph {"className":"sz-kicker sz-kicker--glint"} -->
<p class="sz-kicker sz-kicker--glint"><?php echo esc_html( sazanami_hotel_t( 'foot_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-foot__p"} -->
<p class="sz-foot__p"><?php echo sazanami_hotel_lines( 'foot_hours' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-foot__c","layout":{"type":"default"}} -->
<div class="wp-block-group sz-foot__c"><!-- wp:paragraph {"className":"sz-kicker sz-kicker--glint"} -->
<p class="sz-kicker sz-kicker--glint"><?php echo esc_html( sazanami_hotel_t( 'foot_links_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="sz-foot__links"><li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'foot_about' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'foot_faq' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'foot_contact' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'foot_newsletter' ) ); ?></a></li><li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'foot_privacy' ) ); ?></a></li></ul>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-foot__c sz-form-wrap sz-form-wrap--foot","layout":{"type":"default"}} -->
<div class="wp-block-group sz-foot__c sz-form-wrap sz-form-wrap--foot"><!-- wp:paragraph {"className":"sz-kicker sz-kicker--glint"} -->
<p class="sz-kicker sz-kicker--glint"><?php echo esc_html( sazanami_hotel_t( 'foot_letter_h' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@sazanami-hotel.example', 'label' => sazanami_hotel_t( 'forms_email' ), 'submit' => sazanami_hotel_t( 'forms_subscribe' ), 'notice' => sazanami_hotel_t( 'forms_mail_notice' ), 'subject' => sazanami_hotel_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group sz-foot__base"><!-- wp:html -->
<p class="sz-emblem sz-emblem--foot"><span class="sz-emblem__l"></span><span class="sz-emblem__c"><?php echo sazanami_hotel_icon( 'wave', 'sz-wave' ); ?><span class="sz-emblem__w"><?php echo esc_html( sazanami_hotel_t( 'emblem' ) ); ?></span></span><span class="sz-emblem__l"></span></p>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sz-foot__note"} -->
<p class="sz-foot__note"><?php echo esc_html( sazanami_hotel_t( 'foot_note' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

