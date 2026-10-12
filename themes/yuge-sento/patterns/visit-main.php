<?php
/**
 * Title: Visit: hours, address and a message
 * Slug: yuge-sento/visit-main
 * Categories: yuge-sento
 * Keywords: bathhouse, sento
 * Viewport Width: 1440
 * Description: The week's hours and the address card from Appearance > Bath details, then a short message form that composes an email.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yg-section yg-col yg-col--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yg-section yg-col yg-col--last"><!-- wp:paragraph {"className":"yg-eyebrow"} -->
<p class="yg-eyebrow">This week</p>
<!-- /wp:paragraph -->

<!-- wp:yuge-sento/bath-info {"show":"week"} /-->

<!-- wp:separator {"className":"is-style-tiles"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tiles"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yg-eyebrow"} -->
<p class="yg-eyebrow">The address</p>
<!-- /wp:paragraph -->

<!-- wp:yuge-sento/bath-info {"show":"card"} /-->

<!-- wp:separator {"className":"is-style-tiles"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tiles"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"yg-visit","layout":{"type":"default"}} -->
<div class="wp-block-group yg-visit"><!-- wp:paragraph {"className":"yg-eyebrow"} -->
<p class="yg-eyebrow">Write to us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yg-sec__title"} -->
<h2 class="wp-block-heading yg-sec__title">Questions, lost umbrellas, the mural.</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="yg-form" action="#" method="post" hidden>
<p class="yg-form__field"><label for="yg-name">Name</label><input id="yg-name" name="name" type="text" autocomplete="name" required></p>
<p class="yg-form__field"><label for="yg-email">Email</label><input id="yg-email" name="email" type="email" autocomplete="email" required></p>
<p class="yg-form__field"><label for="yg-topic">About</label><select id="yg-topic" name="topic"><option>A question before my first visit</option><option>Something left behind</option><option>Groups and families</option><option>Something else</option></select></p>
<p class="yg-form__field"><label for="yg-message">Message</label><textarea id="yg-message" name="message" rows="5"></textarea></p>
<p class="yg-form__send"><button type="submit" class="yg-form__button">Compose the email</button><span class="yg-form__hint">Opens your email app with the message filled in. Nothing is stored on this site.</span></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yg-form__fallback"} -->
<p class="yg-form__fallback">Prefer to write it yourself? Use the telephone or email in the address card above; we answer before opening each day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
