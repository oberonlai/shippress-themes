<?php
/**
 * Title: Contact: letter form, on-air time and station details
 * Slug: oto-radio/contact-main
 * Categories: oto-radio
 * Keywords: contact, form, letter, email, subscribe
 * Viewport Width: 1280
 * Description: A letter form (plain HTML) beside the synced on-air time and station details (each edited once for the masthead, the footer and this page).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-section oto-section--tight","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull oto-section oto-section--tight"><!-- wp:group {"align":"wide","className":"oto-split oto-split--form","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide oto-split oto-split--form"><!-- wp:group {"className":"oto-split__a oto-panel","layout":{"type":"default"}} -->
<div class="wp-block-group oto-split__a oto-panel"><!-- wp:heading {"className":"oto-panel__title"} -->
<h2 class="wp-block-heading oto-panel__title">Send a letter</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="oto-form" action="#" method="post" onsubmit="return false;">
	<p class="oto-field oto-field--half"><label for="oto-c-name">Name (or the name we read out)</label><input id="oto-c-name" type="text" name="name" autocomplete="name" required></p>
	<p class="oto-field oto-field--half"><label for="oto-c-email">Email</label><input id="oto-c-email" type="email" name="email" autocomplete="email" required></p>
	<p class="oto-field"><label for="oto-c-type">What is it?</label><select id="oto-c-type" name="type"><option>A letter for the show</option><option>A place we should record</option><option>A guest we should meet</option><option>Press or anything else</option></select></p>
	<p class="oto-field"><label for="oto-c-msg">Your letter</label><textarea id="oto-c-msg" name="message" rows="6"></textarea></p>
	<p class="oto-field oto-field--check"><input id="oto-c-air" type="checkbox" name="on_air" checked><label for="oto-c-air">You may read this on air</label></p>
	<p class="oto-field"><button class="wp-block-button__link wp-element-button" type="submit">Send the letter</button></p>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"oto-small"} -->
<p class="oto-small">We use your details only to answer you. Nothing is shared.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"oto-split__b oto-contact__info","layout":{"type":"default"}} -->
<div class="wp-block-group oto-split__b oto-contact__info"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">When we are on</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"oto-radio/schedule"} /-->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Find the show</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"oto-radio/station"} /-->

<!-- wp:heading {"level":3,"className":"oto-panel__title"} -->
<h3 class="wp-block-heading oto-panel__title">What happens next</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-rundown"} -->
<ul class="wp-block-list is-style-rundown"><!-- wp:list-item -->
<li><strong>1</strong> <span>Sora reads it within a week and answers every letter</span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>2</strong> <span>Three letters a week are read on air, first names only</span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>3</strong> <span>A suggested place may become an episode; we ask you first</span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
