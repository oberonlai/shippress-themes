<?php
/**
 * Title: Contact: brief form and studio details
 * Slug: kiroku-studio/contact-main
 * Categories: kiroku-studio
 * Keywords: contact, form, brief, address, email, phone
 * Viewport Width: 1440
 * Description: A project brief form (plain HTML) beside the synced studio details (edited once for the footer and this page).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-section--tight","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-section--tight"><!-- wp:group {"align":"wide","className":"ks-split ks-split--form","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-split ks-split--form"><!-- wp:group {"className":"ks-split__a ks-panel","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__a ks-panel"><!-- wp:heading {"className":"ks-card-title"} -->
<h2 class="wp-block-heading ks-card-title">Start a project</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="ks-form" action="#" method="post" onsubmit="return false;">
	<p class="ks-field ks-field--half"><label for="ks-c-name">Name</label><input id="ks-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="ks-field ks-field--half"><label for="ks-c-email">Email</label><input id="ks-c-email" type="email" name="email" autocomplete="email" required></p>
	<p class="ks-field ks-field--half"><label for="ks-c-company">Company (optional)</label><input id="ks-c-company" type="text" name="company" autocomplete="organization"></p>
	<p class="ks-field ks-field--half"><label for="ks-c-type">What should move?</label><select id="ks-c-type" name="type"><option>A brand identity</option><option>A motion system</option><option>A film or idents</option><option>Something interactive</option><option>Not sure yet</option></select></p>
	<p class="ks-field"><label for="ks-c-budget">Budget</label><select id="ks-c-budget" name="budget"><option>Under ¥1M</option><option>¥1M to ¥3M</option><option>¥3M to ¥6M</option><option>Over ¥6M</option></select></p>
	<p class="ks-field"><label for="ks-c-msg">Tell us about it</label><textarea id="ks-c-msg" name="message" rows="6"></textarea></p>
	<p class="ks-field"><button class="wp-block-button__link wp-element-button" type="submit">Send the brief</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-small"} -->
<p class="ks-small">We use your details only to answer you. Nothing is shared.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-split__b","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__b"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Find us</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kiroku-studio/studio-info"} /-->

<!-- wp:heading {"level":3,"className":"ks-card-title"} -->
<h3 class="wp-block-heading ks-card-title">What happens next</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-index"} -->
<ul class="wp-block-list is-style-index"><!-- wp:list-item -->
<li>Aya answers within two working days</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A 45-minute call, or a visit to the long table</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A fixed quote within a week</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
