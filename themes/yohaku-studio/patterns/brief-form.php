<?php
/**
 * Title: Start a project: brief form
 * Slug: yohaku-studio/brief-form
 * Categories: yohaku-studio
 * Keywords: design studio
 * Viewport Width: 1440
 * Description: A labelled brief form that composes an email to the studio (no backend), beside the synced studio details and a brief checklist for readers without JavaScript.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yh-section yh-band yh-band--flush yh-band--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yh-section yh-band yh-band--flush yh-band--last"><!-- wp:group {"align":"wide","className":"yh-inquiry","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yh-inquiry"><!-- wp:group {"className":"yh-inquiry__form","layout":{"type":"default"}} -->
<div class="wp-block-group yh-inquiry__form"><!-- wp:paragraph {"className":"yh-fig"} -->
<p class="yh-fig">Fig. 01 &#8212; The brief</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="yh-brief" action="#" method="post" hidden>
<fieldset class="yh-brief__row"><legend class="yh-brief__legend">About you</legend>
<p class="yh-brief__field"><label for="yh-name">Name</label><input id="yh-name" name="name" type="text" autocomplete="name" required></p>
<p class="yh-brief__field"><label for="yh-email">Email</label><input id="yh-email" name="email" type="email" autocomplete="email" required></p>
<p class="yh-brief__field yh-brief__field--wide"><label for="yh-company">Company or organisation</label><input id="yh-company" name="company" type="text" autocomplete="organization"></p>
</fieldset>
<fieldset class="yh-brief__row"><legend class="yh-brief__legend">What do you need?</legend>
<p class="yh-brief__checks"><label><input type="checkbox" name="discipline" value="Graphic / identity"> Graphic and identity</label><label><input type="checkbox" name="discipline" value="Advertising / campaign"> Advertising and campaigns</label><label><input type="checkbox" name="discipline" value="Website"> Website</label><label><input type="checkbox" name="discipline" value="Not sure yet"> Not sure yet</label></p>
</fieldset>
<fieldset class="yh-brief__row"><legend class="yh-brief__legend">Budget and timing</legend>
<p class="yh-brief__field"><label for="yh-budget">Budget range</label><select id="yh-budget" name="budget"><option value="">Choose a range</option><option>Under $5,000</option><option>$5,000 to $10,000</option><option>$10,000 to $20,000</option><option>Over $20,000</option></select></p>
<p class="yh-brief__field"><label for="yh-timeline">Timeline</label><select id="yh-timeline" name="timeline"><option value="">Choose a timeline</option><option>As soon as possible</option><option>In the next three months</option><option>In three to six months</option><option>Flexible</option></select></p>
</fieldset>
<p class="yh-brief__field yh-brief__field--wide"><label for="yh-message">Your brief</label><textarea id="yh-message" name="message" rows="7" required placeholder="What are you making, for whom, and why now?"></textarea></p>
<p class="yh-brief__send"><button type="submit" class="yh-brief__button">Compose the email</button><span class="yh-brief__hint" role="status">Opens your email app with the brief filled in. Nothing is stored on this site.</span></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yh-brief__fallback"} -->
<p class="yh-brief__fallback">Prefer to write it yourself? Email the studio at the address on the right; the checklist alongside is all we need.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yh-inquiry__aside","layout":{"type":"default"}} -->
<div class="wp-block-group yh-inquiry__aside"><!-- wp:paragraph {"className":"yh-fig"} -->
<p class="yh-fig">Fig. 02 &#8212; The studio</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"yohaku-studio/studio"} /-->

<!-- wp:paragraph {"className":"yh-fig"} -->
<p class="yh-fig">Fig. 03 &#8212; What to include</p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true,"className":"is-style-ruled"} -->
<ol class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li>Who you are and what your organisation does</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>What you need: identity, campaign, website or something else</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Why now: the deadline or event behind it</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Your budget range, even a rough one</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Two or three examples of work you admire</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Who decides, and who we will work with day to day</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
