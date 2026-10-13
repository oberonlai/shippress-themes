<?php
/**
 * Title: Listening booth: book a slot
 * Slug: hibiki-records/booth-book
 * Categories: hibiki-records
 * Keywords: records, vinyl
 * Viewport Width: 1440
 * Description: A booking request form (date, time slot, people, name, email, the records you want to hear) that writes an email to the shop, beside the headphones photograph and the shop's phone and email.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-section"><!-- wp:group {"align":"wide","className":"hb-split hb-split--top hb-split--5-7","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-split hb-split--top hb-split--5-7"><!-- wp:group {"className":"hb-stack hb-write","layout":{"type":"default"}} -->
<div class="wp-block-group hb-stack hb-write"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">How to book</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Ask for <em>a slot.</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Send the form and we reply by email the same day to confirm. Or ring the shop, or ask at the counter.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","className":"hb-book__photo"} -->
<figure class="wp-block-image size-large hb-book__photo"><img src="{{theme}}/assets/images/headphones.jpg" alt="A pair of headphones hanging on the dark booth wall"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hb-stack hb-book__reach","layout":{"type":"default"}} -->
<div class="wp-block-group hb-stack hb-book__reach"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Or reach us</p>
<!-- /wp:paragraph -->

<!-- wp:hibiki-records/shop-info {"show":"phone-email"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hb-stack hb-write hb-book__form","layout":{"type":"default"}} -->
<div class="wp-block-group hb-stack hb-write hb-book__form"><!-- wp:html -->
<form class="hb-form hb-form--book" action="#" method="post" data-subject="Listening booth request" hidden><div class="hb-form__pair"><label>Date<input type="date" name="date" required></label><label>Time slot<select name="slot" required><option>11:00</option><option>12:00</option><option>13:00</option><option>14:00</option><option>15:00</option><option>16:00</option><option>17:00</option><option>18:00</option><option>19:00</option></select></label></div><label>People<select name="people"><option>One</option><option>Two</option></select></label><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>Records you want to hear<textarea name="records" rows="4" placeholder="Catalogue numbers, artists or just a mood: quiet piano, 1970s folk…"></textarea></label><label>Anything else<textarea name="message" rows="2"></textarea></label><button type="submit">Send the request</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine hb-form__fallback"} -->
<p class="is-style-fine hb-form__fallback">The form opens your email app with the request written out; nothing is stored on this site. Without JavaScript, write to the email beside it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
