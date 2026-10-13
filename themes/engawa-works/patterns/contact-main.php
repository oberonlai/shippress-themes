<?php
/**
 * Title: Contact: details and a message form
 * Slug: engawa-works/contact-main
 * Categories: engawa-works
 * Keywords: coworking, workspace
 * Viewport Width: 1440
 * Description: The address card and the week from Space details beside a message form that composes an email, then the street photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ew-section ew-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ew-section ew-section--last"><!-- wp:group {"align":"wide","className":"ew-write-grid ew-write-grid--contact","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ew-write-grid ew-write-grid--contact"><!-- wp:group {"className":"ew-write__side","layout":{"type":"default"}} -->
<div class="wp-block-group ew-write__side"><!-- wp:paragraph {"className":"ew-eyebrow"} -->
<p class="ew-eyebrow">The house</p>
<!-- /wp:paragraph -->

<!-- wp:engawa-works/space-info {"show":"card"} /-->

<!-- wp:paragraph {"className":"ew-eyebrow"} -->
<p class="ew-eyebrow">This week</p>
<!-- /wp:paragraph -->

<!-- wp:engawa-works/space-info {"show":"summary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ew-write","layout":{"type":"default"}} -->
<div class="wp-block-group ew-write"><!-- wp:paragraph {"className":"ew-eyebrow"} -->
<p class="ew-eyebrow">Write to the hosts</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ew-sec__title"} -->
<h2 class="wp-block-heading ew-sec__title">Questions about plans, events, the room.</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="ew-form" action="#" method="post" data-subject="A note to Engawa Works" hidden>
<p class="ew-form__field"><label for="ew-c-name">Name</label><input id="ew-c-name" name="name" type="text" autocomplete="name" required></p>
<p class="ew-form__field"><label for="ew-c-email">Email</label><input id="ew-c-email" name="email" type="email" autocomplete="email" required></p>
<p class="ew-form__field"><label for="ew-c-topic">About</label><select id="ew-c-topic" name="topic"><option>Membership</option><option>An event or a talk</option><option>Renting the event room</option><option>Something else</option></select></p>
<p class="ew-form__field"><label for="ew-c-message">Message</label><textarea id="ew-c-message" name="message" rows="5"></textarea></p>
<p class="ew-form__send"><button type="submit" class="ew-form__button">Compose the email</button><span class="ew-form__hint">Opens your email app with the message filled in. Nothing is stored on this site.</span></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ew-form__fallback"} -->
<p class="ew-form__fallback">Prefer to write it yourself? Use the email in the card beside this form.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","className":"ew-photo ew-photo--band alignwide"} -->
<figure class="wp-block-image size-large ew-photo ew-photo--band alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/street.jpg' ) ); ?>" alt="The quiet back street in Nishioka with the timber house front"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
