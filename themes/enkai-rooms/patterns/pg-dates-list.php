<?php
/**
 * Title: Page: Dates list
 * Slug: enkai-rooms/pg-dates-list
 * Categories: enkai-rooms
 * Inserter: no
 * Viewport Width: 1440
 * Description: Early notice when new dates open
 */
?>
<!-- wp:group {"align":"full","className":"er-titleband sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-titleband sp-reveal sp-reveal--up"><!-- wp:heading {"level":1,"className":"er-titleband__h"} -->
<h1 class="wp-block-heading er-titleband__h">Dates list</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"er-titleband__sub"} -->
<p class="er-titleband__sub">Early notice when new dates open</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-narr er-datesform sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group er-narr er-datesform sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p>Join our priority dates list to receive early notice when reservation calendars open for forthcoming seasons. Subscribers receive room availability one week before dates are released to the public.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Why join the priority dates list?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Because Enkai Rooms operates only three private dining rooms—the Long Room, the Garden Room, and the Lamp Room—high-demand weekend dates for wedding celebrations, corporate annual dinners, and family milestones book months in advance. By subscribing to our dates list, you receive notice of upcoming calendar releases seven days before public availability opens. When events coordinator Aiyana Reyes releases spring, autumn, or holiday schedules, an email alert is delivered directly to your inbox. This priority window allows you to reserve preferred dates calmly and secure a seven-day provisional hold.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">How is your subscription managed?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our dates list is entirely private, non-commercial, and managed directly from our events office at 14 Harbour Steps in Calder. We do not distribute advertising, third-party newsletters, or frequent promotional mailings. You will only receive an email when upcoming seasonal booking schedules are announced or when an unexpected cancellation opens a weekend dining room. Standard booking terms apply: thirty percent deposit to confirm, ten days for final numbers, and full provisional support from Aiyana Reyes. You may unsubscribe from the dates list at any time with a single click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"er-rooms er-dark","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-rooms er-dark"><!-- wp:group {"className":"er-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group er-wrap sp-reveal sp-reveal--up"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Join the dates list</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"er-form-slot","layout":{"type":"default"}} -->
<div class="wp-block-group er-form-slot"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'rooms@enkai-rooms.example', 'label' => enkai_rooms_t( 'forms_email' ), 'submit' => enkai_rooms_t( 'forms_subscribe' ), 'notice' => enkai_rooms_t( 'forms_mail_notice' ), 'subject' => enkai_rooms_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
