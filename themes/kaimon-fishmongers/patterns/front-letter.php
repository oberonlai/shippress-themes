<?php
/**
 * Title: Home: the Landing List
 * Slug: kaimon-fishmongers/front-letter
 * Categories: kaimon-fishmongers
 * Keywords: newsletter, subscribe
 * Viewport Width: 1440
 * Description: Newsletter section with a form slot: plugin form when available, otherwise a real email field that opens the mail app.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kf-sec kf-letter","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-sec kf-letter"><!-- wp:group {"className":"kf-letter__in","layout":{"type":"default"}} -->
<div class="wp-block-group kf-letter__in"><!-- wp:group {"className":"kf-letter__text","layout":{"type":"default"}} -->
<div class="wp-block-group kf-letter__text"><!-- wp:paragraph {"className":"kf-label"} -->
<p class="kf-label">THE LANDING LIST</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kf-h2"} -->
<h2 class="wp-block-heading kf-h2">Which boats, every Monday</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Every Monday at 17:00 we send a three-minute note on which boats are expected, what they will likely bring and one simple way to cook it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kf-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group kf-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'counter@kaimonfish.example', 'label' => kaimon_fishmongers_t( 'forms_email' ), 'submit' => kaimon_fishmongers_t( 'forms_subscribe' ), 'notice' => kaimon_fishmongers_t( 'forms_mail_notice' ), 'subject' => kaimon_fishmongers_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
