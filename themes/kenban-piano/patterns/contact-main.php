<?php
/**
 * Title: Contact: first-lesson enquiry
 * Slug: kenban-piano/contact-main
 * Categories: kenban-piano
 * Keywords: piano school
 * Viewport Width: 1440
 * Description: A labelled first-lesson enquiry form that composes an email (no backend), beside the synced school details, the term and a photograph of the door.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kb-section kb-band kb-band--flush kb-band--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-band kb-band--flush kb-band--last"><!-- wp:group {"align":"wide","className":"kb-contact","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kb-contact"><!-- wp:group {"className":"kb-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group kb-contact__form"><!-- wp:paragraph {"className":"kb-mark"} -->
<p class="kb-mark">First-lesson enquiry</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="kb-form" action="#" method="post" hidden>
<p class="kb-form__field"><label for="kb-name">Your name</label><input id="kb-name" name="name" type="text" autocomplete="name" required></p>
<p class="kb-form__field"><label for="kb-email">Email</label><input id="kb-email" name="email" type="email" autocomplete="email" required></p>
<p class="kb-form__field"><label for="kb-for">The lesson is for</label><select id="kb-for" name="for"><option>A child aged 5 to 8</option><option>A child aged 9 to 15</option><option>An adult beginner</option><option>An adult who has played before</option><option>Diploma preparation</option></select></p>
<p class="kb-form__field"><label for="kb-date">A Saturday that suits you</label><input id="kb-date" name="date" type="date"></p>
<p class="kb-form__field kb-form__field--wide"><label for="kb-message">Anything we should know</label><textarea id="kb-message" name="message" rows="5" placeholder="Has the pupil played before? Is there a piece they love?"></textarea></p>
<p class="kb-form__send"><button type="submit" class="kb-form__button">Compose the email</button><span class="kb-form__hint" role="status">Opens your email app with the enquiry filled in. Nothing is stored on this site.</span></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kb-form__fallback"} -->
<p class="kb-form__fallback">Prefer to write it yourself? Email or call the office using the details alongside; tell us who the lesson is for and a Saturday that suits you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-contact__aside","layout":{"type":"default"}} -->
<div class="wp-block-group kb-contact__aside"><!-- wp:paragraph {"className":"kb-mark"} -->
<p class="kb-mark">The school</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kenban-piano/school"} /-->

<!-- wp:pattern {"slug":"kenban-piano/term"} /-->

<!-- wp:image {"sizeSlug":"large","className":"kb-contact__photo"} -->
<figure class="wp-block-image size-large kb-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/entrance.jpg' ) ); ?>" alt="The dark wooden door of the school in a pale wall"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
