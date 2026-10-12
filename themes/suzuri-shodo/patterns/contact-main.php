<?php
/**
 * Title: Contact: trial-lesson enquiry
 * Slug: suzuri-shodo/contact-main
 * Categories: suzuri-shodo
 * Keywords: calligraphy school
 * Viewport Width: 1440
 * Description: A labelled trial-lesson enquiry form that composes an email (no backend), beside the synced school details and directions.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-section sz-band sz-band--flush sz-band--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sz-section sz-band sz-band--flush sz-band--last"><!-- wp:group {"align":"wide","className":"sz-contact","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sz-contact"><!-- wp:group {"className":"sz-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__form"><!-- wp:paragraph {"className":"sz-mark"} -->
<p class="sz-mark">Trial-lesson enquiry</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="sz-form" action="#" method="post" hidden>
<p class="sz-form__field"><label for="sz-name">Name</label><input id="sz-name" name="name" type="text" autocomplete="name" required></p>
<p class="sz-form__field"><label for="sz-email">Email</label><input id="sz-email" name="email" type="email" autocomplete="email" required></p>
<p class="sz-form__field"><label for="sz-class">Interested in</label><select id="sz-class" name="class"><option>Free trial lesson (Saturday 14:00)</option><option>Adult classes</option><option>Young learners (7 to 12)</option><option>Open studio</option><option>Something else</option></select></p>
<p class="sz-form__field"><label for="sz-date">A Saturday that suits you</label><input id="sz-date" name="date" type="date"></p>
<p class="sz-form__field sz-form__field--wide"><label for="sz-message">Message</label><textarea id="sz-message" name="message" rows="5" placeholder="Have you written with a brush before? Any questions?"></textarea></p>
<p class="sz-form__send"><button type="submit" class="sz-form__button">Compose the email</button><span class="sz-form__hint" role="status">Opens your email app with the enquiry filled in. Nothing is stored on this site.</span></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sz-form__fallback"} -->
<p class="sz-form__fallback">Prefer to write it yourself? Email or call the office using the details alongside; tell us your name and a Saturday that suits you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-contact__aside","layout":{"type":"default"}} -->
<div class="wp-block-group sz-contact__aside"><!-- wp:paragraph {"className":"sz-mark"} -->
<p class="sz-mark">The school</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"suzuri-shodo/school"} /-->

<!-- wp:paragraph {"className":"sz-contact__way"} -->
<p class="sz-contact__way">Eight minutes on foot from Kiriyama Station, south exit: follow the stream uphill and turn left at the stone lantern. The gate with the small wooden sign is ours.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","className":"sz-contact__photo"} -->
<figure class="wp-block-image size-large sz-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/engawa.jpg' ) ); ?>" alt="The wooden veranda of the school opening onto a small moss garden"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
