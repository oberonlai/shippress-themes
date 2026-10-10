<?php
/**
 * Title: Workshops — book a seat
 * Slug: kami-no-ne/workshops-booking
 * Categories: kami-no-ne, call-to-action
 * Keywords: booking, form, workshops, reserve
 * Viewport Width: 1440
 * Description: A booking request form (plain HTML: connect its action to your form or booking service) with the workshop, date and seats, beside a photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kn-section kn-section--line","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-section--line"><!-- wp:group {"align":"wide","className":"kn-split kn-split--7-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kn-split kn-split--7-5"><!-- wp:group {"className":"kn-stack kn-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group kn-stack kn-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Book a seat</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Save a place <em>at the table</em></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form id="book" class="kn-form" action="#" method="post"><div class="kn-field kn-field--half"><label for="kn-book-name">Your name</label><input id="kn-book-name" type="text" name="name" autocomplete="name" required></div><div class="kn-field kn-field--half"><label for="kn-book-email">Email</label><input id="kn-book-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></div><fieldset><legend>Workshop</legend><label class="kn-choice"><input type="radio" name="workshop" value="vat" checked><span>A morning at the vat</span></label><label class="kn-choice"><input type="radio" name="workshop" value="binding"><span>Four-hole binding</span></label><label class="kn-choice"><input type="radio" name="workshop" value="brush"><span>Brush, ink &amp; a letter</span></label><label class="kn-choice"><input type="radio" name="workshop" value="seal"><span>Carve your own seal</span></label></fieldset><div class="kn-field kn-field--half"><label for="kn-book-date">Date</label><select id="kn-book-date" name="date"><option>Saturday, October 24</option><option>Saturday, November 14</option><option>Saturday, November 28</option><option>Saturday, December 12</option></select></div><div class="kn-field kn-field--half"><label for="kn-book-seats">Seats</label><select id="kn-book-seats" name="seats"><option>1</option><option>2</option><option>3</option><option>4</option></select></div><div class="kn-field"><label for="kn-book-note">Anything we should know?</label><textarea id="kn-book-note" name="note" rows="3"></textarea></div><div class="kn-field"><button class="wp-element-button" type="submit">Request a seat</button><p class="kn-form__note">We confirm every booking by email within a day. Pay at the atelier on the day.</p></div></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kn-figure kn-figure--tall"} -->
<figure class="wp-block-image size-full kn-figure kn-figure--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/inkstone.jpg' ) ); ?>" alt="A black inkstone with a pool of indigo ink and an ink stick on a wooden tray beside a persimmon"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
