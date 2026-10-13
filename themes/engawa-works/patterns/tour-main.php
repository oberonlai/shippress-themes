<?php
/**
 * Title: Tour booking: form, hours and plans briefly
 * Slug: engawa-works/tour-main
 * Categories: engawa-works
 * Keywords: coworking, workspace
 * Viewport Width: 1440
 * Description: A tour request form that composes an email, the week's hours and the address from Space details, then the synced plans in their short form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ew-section ew-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ew-section ew-section--last"><!-- wp:group {"align":"wide","className":"ew-write-grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ew-write-grid"><!-- wp:group {"className":"ew-write","layout":{"type":"default"}} -->
<div class="wp-block-group ew-write"><!-- wp:paragraph {"className":"ew-eyebrow"} -->
<p class="ew-eyebrow">Request a tour</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ew-sec__title"} -->
<h2 class="wp-block-heading ew-sec__title">Pick a day and a time.</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="ew-form" action="#" method="post" data-subject="Tour request" hidden>
<p class="ew-form__field"><label for="ew-t-name">Name</label><input id="ew-t-name" name="name" type="text" autocomplete="name" required></p>
<p class="ew-form__field"><label for="ew-t-email">Email</label><input id="ew-t-email" name="email" type="email" autocomplete="email" required></p>
<p class="ew-form__field ew-form__field--half"><label for="ew-t-date">Preferred day</label><input id="ew-t-date" name="day" type="date" required></p>
<p class="ew-form__field ew-form__field--half"><label for="ew-t-time">Time</label><select id="ew-t-time" name="time"><option>10:00</option><option>13:00</option><option>16:00</option><option>18:30</option></select></p>
<p class="ew-form__field"><label for="ew-t-plan">Interested in</label><select id="ew-t-plan" name="plan"><option>Not sure yet</option><option>Day pass</option><option>Desk</option><option>Studio desk</option><option>Team table</option></select></p>
<p class="ew-form__field"><label for="ew-t-message">Anything we should know</label><textarea id="ew-t-message" name="message" rows="4"></textarea></p>
<p class="ew-form__send"><button type="submit" class="ew-form__button">Compose the request</button><span class="ew-form__hint">Opens your email app with the request filled in. Nothing is stored on this site.</span></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ew-form__fallback"} -->
<p class="ew-form__fallback">Prefer to write it yourself? Use the email or telephone beside this form; we answer within a day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ew-write__side","layout":{"type":"default"}} -->
<div class="wp-block-group ew-write__side"><!-- wp:paragraph {"className":"ew-eyebrow"} -->
<p class="ew-eyebrow">Opening hours</p>
<!-- /wp:paragraph -->

<!-- wp:engawa-works/space-info {"show":"week"} /-->

<!-- wp:paragraph {"className":"ew-eyebrow"} -->
<p class="ew-eyebrow">Where</p>
<!-- /wp:paragraph -->

<!-- wp:engawa-works/space-info {"show":"card"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-rail"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-rail"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","className":"ew-sec__head-text","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ew-sec__head-text"><!-- wp:paragraph {"className":"ew-eyebrow"} -->
<p class="ew-eyebrow">The plans, briefly</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ew-sec__title"} -->
<h2 class="wp-block-heading ew-sec__title">What you could join.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ew-plans-short","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ew-plans-short"><!-- wp:pattern {"slug":"engawa-works/plans"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
