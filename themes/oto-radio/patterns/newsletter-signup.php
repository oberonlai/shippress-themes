<?php
/**
 * Title: Newsletter: title and sign-up form
 * Slug: oto-radio/newsletter-signup
 * Categories: oto-radio
 * Keywords: newsletter, email, subscribe, sign up
 * Viewport Width: 1280
 * Description: The newsletter title with what is in each letter, beside an email sign-up form (plain HTML: connect it to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-head oto-head--form","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull oto-head oto-head--form"><!-- wp:group {"align":"wide","className":"oto-split oto-split--form","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide oto-split oto-split--form"><!-- wp:group {"className":"oto-split__a","layout":{"type":"default"}} -->
<div class="wp-block-group oto-split__a"><!-- wp:paragraph {"className":"oto-head__kicker"} -->
<p class="oto-head__kicker">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"oto-head__title"} -->
<h1 class="wp-block-heading oto-head__title">The Late Edition.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">One short letter every Friday, an hour before we go on air: tonight’s place, the running order, and the sound we could not fit in.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-dash"} -->
<ul class="wp-block-list is-style-dash"><!-- wp:list-item -->
<li>Tonight’s running order, before anyone else</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One recording that did not make the cut, in full</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The closing record, and why the guest chose it</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"oto-split__b oto-panel oto-signup","layout":{"type":"default"}} -->
<div class="wp-block-group oto-split__b oto-panel oto-signup"><!-- wp:heading {"className":"oto-panel__title"} -->
<h2 class="wp-block-heading oto-panel__title">Get the next one</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="oto-form" action="#" method="post" onsubmit="return false;">
	<p class="oto-field"><label for="oto-n-name">First name</label><input id="oto-n-name" type="text" name="name" autocomplete="given-name"></p>
	<p class="oto-field"><label for="oto-n-email">Email</label><input id="oto-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<p class="oto-field oto-field--check"><input id="oto-n-member" type="checkbox" name="member"><label for="oto-n-member">Tell me about becoming a member</label></p>
	<p class="oto-field"><button class="wp-block-button__link wp-element-button" type="submit">Get the Late Edition</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"oto-small"} -->
<p class="oto-small">Fridays only, never shared. Unsubscribe with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
