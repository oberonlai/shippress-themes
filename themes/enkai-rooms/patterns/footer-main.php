<?php
/**
 * Title: Footer: address, hours, pages and dates list
 * Slug: enkai-rooms/footer-main
 * Categories: enkai-rooms
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"er-footer er-dark","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-footer er-dark"><!-- wp:group {"className":"er-footer__grid","layout":{"type":"default"}} -->
<div class="wp-block-group er-footer__grid"><!-- wp:group {"className":"er-footer__c","layout":{"type":"default"}} -->
<div class="wp-block-group er-footer__c"><!-- wp:paragraph {"className":"er-footer__mark"} -->
<p class="er-footer__mark"><a href="/" aria-label="Enkai Rooms, home"><span class="er-ftag__rule"></span><span class="er-ftag__a">ENKAI</span><span class="er-ftag__b">ROOMS</span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>14 Harbour Steps, Calder<br>+00 31 555 0186<br><a href="mailto:rooms@enkai-rooms.example">rooms@enkai-rooms.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-footer__c","layout":{"type":"default"}} -->
<div class="wp-block-group er-footer__c"><!-- wp:paragraph {"className":"er-footer__label"} -->
<p class="er-footer__label">Hours</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Dinner Tue–Sat 18:00–23:00<br>Private lunches Sat–Sun 12:00–15:30<br>Closed Monday<br>Events office Tue–Sat 10:00–18:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-footer__c er-footer__links","layout":{"type":"default"}} -->
<div class="wp-block-group er-footer__c er-footer__links"><!-- wp:paragraph {"className":"er-footer__label"} -->
<p class="er-footer__label">The house</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/rooms/">Rooms</a><br><a href="/menus/">Menus and prices</a><br><a href="/weddings/">Weddings</a><br><a href="/company-dinners/">Company dinners</a><br><a href="/about/">The house</a><br><a href="/journal/">Journal</a><br><a href="/ask-about-a-date/">Ask about a date</a><br><a href="/privacy/">Privacy</a><br><a href="/terms/">Terms</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-footer__c er-footer__news","layout":{"type":"default"}} -->
<div class="wp-block-group er-footer__c er-footer__news"><!-- wp:paragraph {"className":"er-footer__label"} -->
<p class="er-footer__label">Dates list</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Next season's private-room dates are sent to the list one week before they open to everyone.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"er-footer__form","layout":{"type":"default"}} -->
<div class="wp-block-group er-footer__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'rooms@enkai-rooms.example', 'label' => enkai_rooms_t( 'forms_email' ), 'submit' => enkai_rooms_t( 'forms_subscribe' ), 'notice' => enkai_rooms_t( 'forms_mail_notice' ), 'subject' => enkai_rooms_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"er-footer__legal"} -->
<p class="er-footer__legal">Enkai Rooms is a fictional restaurant. Sample content.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
