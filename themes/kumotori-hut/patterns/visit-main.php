<?php
/**
 * Title: Visit: hours, address and a message
 * Slug: kumotori-hut/visit-main
 * Categories: kumotori-hut
 * Keywords: mountain hut, contact
 * Viewport Width: 1440
 * Description: The week's hours and the address card from Appearance > Hut details, then a short message form that composes an email.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kh-section kh-col kh-col--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kh-section kh-col kh-col--last"><!-- wp:paragraph {"className":"kh-eyebrow"} -->
<p class="kh-eyebrow">Reception</p>
<!-- /wp:paragraph -->

<!-- wp:kumotori-hut/hut-info {"show":"week"} /-->

<!-- wp:separator {"className":"is-style-tiles"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tiles"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"kh-eyebrow"} -->
<p class="kh-eyebrow">The address</p>
<!-- /wp:paragraph -->

<!-- wp:kumotori-hut/hut-info {"show":"card"} /-->

<!-- wp:separator {"className":"is-style-tiles"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tiles"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"kh-visit","layout":{"type":"default"}} -->
<div class="wp-block-group kh-visit"><!-- wp:paragraph {"className":"kh-eyebrow"} -->
<p class="kh-eyebrow">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-sec__title"} -->
<h2 class="wp-block-heading kh-sec__title">Bookings, trail questions, a note after your stay.</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="kh-form" action="#" method="post" hidden>
<p class="kh-form__field"><label for="kh-name">Name</label><input id="kh-name" name="name" type="text" autocomplete="name" required></p>
<p class="kh-form__field"><label for="kh-email">Email</label><input id="kh-email" name="email" type="email" autocomplete="email" required></p>
<p class="kh-form__field"><label for="kh-topic">About</label><select id="kh-topic" name="topic"><option>A question before my first visit</option><option>Something left behind</option><option>Groups and families</option><option>Something else</option></select></p>
<p class="kh-form__field"><label for="kh-message">Message</label><textarea id="kh-message" name="message" rows="5"></textarea></p>
<p class="kh-form__send"><button type="submit" class="kh-form__button">Compose the email</button><span class="kh-form__hint">Opens your email app with the message filled in. Nothing is stored on this site.</span></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kh-form__fallback"} -->
<p class="kh-form__fallback">Prefer to write it yourself? Use the telephone or email in the address card above; we answer before opening each day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
