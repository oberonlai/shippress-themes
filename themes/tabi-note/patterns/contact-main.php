<?php
/**
 * Title: Contact: enquiry form and office details
 * Slug: tabi-note/contact-main
 * Categories: tabi-note
 * Keywords: contact, form
 * Description: An enquiry form beside the office details (the synced pattern) and a photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-section tn-contact","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-contact"><!-- wp:group {"className":"tn-split tn-split--contact","layout":{"type":"default"}} -->
<div class="wp-block-group tn-split tn-split--contact"><!-- wp:group {"className":"tn-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group tn-contact__form"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Tell us which journey interests you and when you might travel. A planner replies within two working days, usually with a few questions and a suggestion or two.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-card tn-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card tn-form-card"><!-- wp:html -->
<form class="tn-form" action="#" method="post" onsubmit="return false;">
<p><label for="tn-name">Your name</label>
<input id="tn-name" type="text" name="name" autocomplete="name" required></p>
<p><label for="tn-email">Email</label>
<input id="tn-email" type="email" name="email" autocomplete="email" required></p>
<p><label for="tn-tour">Which journey?</label>
<select id="tn-tour" name="tour"><option>Forest Road of Kumano</option><option>Island Hours</option><option>Post Towns of Kiso</option><option>The Slow Line North</option><option>High Villages of Iya</option><option>Kyoto Edges</option><option>A private journey</option><option>Not sure yet</option></select></p>
<p><label for="tn-when">When would you like to travel?</label>
<input id="tn-when" type="text" name="when"></p>
<p><label for="tn-people">How many of you?</label>
<input id="tn-people" type="number" name="people" min="1" max="8" value="2"></p>
<p><label for="tn-notes">Anything we should know?</label>
<textarea id="tn-notes" name="notes" rows="5"></textarea></p>
<p><button type="submit" class="wp-element-button">Send my enquiry</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-contact__aside","layout":{"type":"default"}} -->
<div class="wp-block-group tn-contact__aside"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The office</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"tabi-note/office-info"} /-->

<!-- wp:paragraph {"className":"tn-note"} -->
<p class="tn-note">Come by for tea and a look at the maps. Five minutes on foot from the nearest station.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tn-contact__photo"} -->
<figure class="wp-block-image size-large tn-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/local-train.jpg' ) ); ?>" alt="Flooded rice fields and mountains seen through the window of a local train"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
