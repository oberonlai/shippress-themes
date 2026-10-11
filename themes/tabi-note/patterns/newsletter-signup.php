<?php
/**
 * Title: Newsletter: a letter each season
 * Slug: tabi-note/newsletter-signup
 * Categories: tabi-note
 * Keywords: newsletter, signup
 * Description: A short sign-up form for the seasonal letter, with three recent letters listed.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-section tn-newsletter","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-newsletter"><!-- wp:group {"className":"tn-split","layout":{"type":"default"}} -->
<div class="wp-block-group tn-split"><!-- wp:group {"className":"tn-prose-col","layout":{"type":"default"}} -->
<div class="wp-block-group tn-prose-col"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Letters from the trail</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">One quiet letter each season.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Four times a year we write about the paths as they are now: what is flowering, which inn has a new cook, and when the next departures open. Nothing else, and never shared.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-card tn-form-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card tn-form-card"><!-- wp:html -->
<form class="tn-form tn-form--inline" action="#" method="post" onsubmit="return false;">
<p><label for="tn-letter-email">Your email</label>
<input id="tn-letter-email" type="email" name="email" autocomplete="email" required></p>
<p><button type="submit" class="wp-element-button">Send me the letters</button></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-past","layout":{"type":"default"}} -->
<div class="wp-block-group tn-past"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Recent letters</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled"} -->
<ul class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li><strong>Autumn 2026</strong> · Maples above the Iya gorge, and the new Kyoto Edges walk</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Summer 2026</strong> · Early starts on the islands, and the ferry that waits</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Spring 2026</strong> · Cherry trees on the Kiso road and a rebuilt bridge</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Winter 2025</strong> · Hot springs, snow on the cedars, and next year's dates</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
