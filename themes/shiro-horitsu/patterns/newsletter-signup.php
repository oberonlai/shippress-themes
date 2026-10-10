<?php
/**
 * Title: Newsletter — the Shiro Letter sign-up
 * Slug: shiro-horitsu/newsletter-signup
 * Categories: shiro-horitsu, call-to-action
 * Keywords: newsletter, subscribe, email, sign up, form
 * Viewport Width: 1440
 * Description: The newsletter page opening: a large serif title, what each letter contains as a ruled list, and a sign-up card with name, email and topic choices (plain HTML form: connect it to your email service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sh-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sh-page-head"><!-- wp:group {"align":"wide","className":"sh-split sh-split--6-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sh-split sh-split--6-5"><!-- wp:group {"className":"sh-stack sh-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group sh-stack sh-stack--loose"><!-- wp:paragraph {"className":"is-style-section"} -->
<p class="is-style-section">The Shiro Letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">One page, <em>four times</em> a year</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">A short letter from the partners on changes in the law that touch families, small companies and people who make things. Written to be read over one cup of tea.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled"} -->
<ul class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li>One change in the law, explained in plain words</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>One question a client asked us, answered in general terms</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dates worth knowing: filing deadlines, renewals and new rules</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Never an advertisement, and never your address passed on</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:html -->
<form class="sh-form sh-form-card" action="#" method="post" onsubmit="return false;">
	<p class="sh-field sh-field--half"><label for="sh-n-name">First name</label><input id="sh-n-name" type="text" name="name" autocomplete="given-name"></p>
	<p class="sh-field sh-field--half"><label for="sh-n-email">Email</label><input id="sh-n-email" type="email" name="email" autocomplete="email" placeholder="you@example.com" required></p>
	<fieldset class="sh-choice">
		<legend>Most interested in</legend>
		<label><input type="checkbox" name="topics[]" value="corporate" checked> Companies</label>
		<label><input type="checkbox" name="topics[]" value="family"> Family</label>
		<label><input type="checkbox" name="topics[]" value="inheritance"> Inheritance</label>
		<label><input type="checkbox" name="topics[]" value="ip"> Intellectual property</label>
	</fieldset>
	<fieldset class="sh-choice">
		<legend>Language</legend>
		<label><input type="radio" name="language" value="en" checked> English</label>
		<label><input type="radio" name="language" value="ja"> Japanese</label>
	</fieldset>
	<label class="sh-consent"><input type="checkbox" name="consent" required> Send me the Shiro Letter. I can unsubscribe with one click at any time.</label>
	<p class="sh-field"><button class="wp-block-button__link wp-element-button" type="submit">Subscribe</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
