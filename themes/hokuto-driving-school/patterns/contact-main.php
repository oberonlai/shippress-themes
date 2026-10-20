<?php
/**
 * Title: Contact: school card, enquiry form and photograph
 * Slug: hokuto-driving-school/contact-main
 * Categories: hokuto-driving-school
 * Keywords: contact, form
 * Viewport Width: 1440
 * Description: The synced school details and a plain first-lesson enquiry form, then a photograph of the depot street.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-section--flush hk-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-section--flush hk-section--last"><!-- wp:group {"align":"wide","className":"hk-split hk-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split hk-split--top"><!-- wp:group {"className":"hk-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text"><!-- wp:group {"className":"hk-card","layout":{"type":"default"}} -->
<div class="wp-block-group hk-card"><!-- wp:pattern {"slug":"hokuto-driving-school/school"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-contact__photo"} -->
<figure class="wp-block-image size-large hk-contact__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/parking.webp' ) ); ?>" alt="A small car parked on the terraced street beside the depot"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-split__text hk-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text hk-contact__form"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">First-lesson enquiry</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hk-split__title"} -->
<h2 class="wp-block-heading hk-split__title">Tell us a little about you.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>What have you driven before, if anything? Manual or automatic? Mornings, afternoons or evenings? We will reply with two or three slots and the instructor we think will suit you.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hk-form" action="#" method="post"><p class="hk-field"><label for="hk-name">Your name</label><input id="hk-name" name="name" type="text" autocomplete="name"></p><p class="hk-field"><label for="hk-email">Email or telephone</label><input id="hk-email" name="contact" type="text" autocomplete="email"></p><p class="hk-field"><label for="hk-course">Course</label><select id="hk-course" name="course"><option>Standard course, manual</option><option>Standard course, automatic</option><option>Two-week intensive</option><option>Refresher</option><option>Licence conversion</option><option>Not sure yet</option></select></p><p class="hk-field"><label for="hk-note">Anything we should know</label><textarea id="hk-note" name="note" rows="4"></textarea></p><p class="hk-field"><button type="submit">Send enquiry</button></p></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hk-small"} -->
<p class="hk-small">This form is plain HTML: connect it to your form or email service.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
