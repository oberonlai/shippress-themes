<?php
/**
 * Title: Newsletter — sign up for The Deckle Edge
 * Slug: kami-no-ne/newsletter-signup
 * Categories: kami-no-ne, header, call-to-action
 * Keywords: newsletter, signup, email, letter
 * Viewport Width: 1440
 * Description: The newsletter page head: a large title, what the monthly letter brings, and the email signup form, beside a photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kn-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kn-page-head"><!-- wp:group {"align":"wide","className":"kn-split kn-split--6-5","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kn-split kn-split--6-5"><!-- wp:group {"className":"kn-stack kn-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group kn-stack kn-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Deckle Edge</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">A letter on the <em>first Sunday</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Once a month, a short letter from the atelier: what came out of the vat, a note on ink or binding, the next workshop dates before anyone else, and now and then a sheet of something new.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="kn-form kn-form--letter" action="#" method="post"><div class="kn-field"><label for="kn-letter-email-page">Your email</label><div class="kn-form__row"><input id="kn-letter-email-page" type="email" name="email" placeholder="you@example.com" autocomplete="email" required><button class="wp-element-button" type="submit">Subscribe</button></div></div><p class="kn-form__note">One letter a month, on the first Sunday. Unsubscribe in one click.</p></form>
<!-- /wp:html -->

<!-- wp:list {"className":"is-style-hairline"} -->
<ul class="wp-block-list is-style-hairline"><!-- wp:list-item -->
<li>New pressings a week before they reach the shop</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Workshop dates first, with a held seat for readers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Never more than one letter a month</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kn-figure kn-figure--tall"} -->
<figure class="wp-block-image size-full kn-figure kn-figure--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/envelopes.jpg' ) ); ?>" alt="A bundle of cream envelopes and letter sheets tied with cotton string beside a dish of indigo ink and a persimmon"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
