<?php
/**
 * Title: Contact: trial booking form and studio details
 * Slug: undo-ba/contact-main
 * Categories: undo-ba
 * Keywords: contact, booking, trial, form
 * Description: A trial booking form beside the studio details (the synced pattern).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ub-section ub-contact","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ub-section ub-contact"><!-- wp:group {"className":"ub-split ub-split--contact","layout":{"type":"default"}} -->
<div class="wp-block-group ub-split ub-split--contact"><!-- wp:group {"className":"ub-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group ub-contact__form"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Tell us when you can come and what you would like to try. We reply within a day with a time for your free first session.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-card ub-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card ub-form-card"><!-- wp:html -->
<form class="ub-form" action="#" method="post" onsubmit="return false;">
<p><label for="ub-name">Your name</label>
<input id="ub-name" type="text" name="name" autocomplete="name" required></p>
<p><label for="ub-email">Email</label>
<input id="ub-email" type="email" name="email" autocomplete="email" required></p>
<p><label for="ub-phone">Phone (optional)</label>
<input id="ub-phone" type="tel" name="phone" autocomplete="tel"></p>
<p><label for="ub-program">Which class would you like to try?</label>
<select id="ub-program" name="program"><option>Small-group strength</option><option>Conditioning</option><option>Kettlebell</option><option>Mobility and recovery</option><option>Personal coaching</option><option>Not sure yet</option></select></p>
<p><label for="ub-time">Days and times that suit you</label>
<input id="ub-time" type="text" name="time"></p>
<p><label for="ub-notes">Anything we should know (injuries, goals)?</label>
<textarea id="ub-notes" name="notes" rows="5"></textarea></p>
<p><button type="submit" class="wp-element-button">Request my trial</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ub-contact__aside","layout":{"type":"default"}} -->
<div class="wp-block-group ub-contact__aside"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The studio</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"undo-ba/studio-info"} /-->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ub-contact__photo"} -->
<figure class="wp-block-image size-large ub-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/recovery.jpg' ) ); ?>" alt="Folded dark towels and a ceramic cup on a pale wooden bench"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
