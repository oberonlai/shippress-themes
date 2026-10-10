<?php
/**
 * Title: Newsletter — The Deckle Edge
 * Slug: kami-no-ne/newsletter-cta
 * Categories: kami-no-ne, call-to-action
 * Keywords: newsletter, email, signup, letter
 * Viewport Width: 1440
 * Description: A quiet invitation to the monthly letter with an email field, beside a photograph of an open journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kn-section kn-section--pale","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-section--pale"><!-- wp:group {"align":"wide","className":"kn-split kn-split--6-5 kn-split--middle","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kn-split kn-split--6-5 kn-split--middle"><!-- wp:group {"className":"kn-stack kn-stack--loose","layout":{"type":"default"}} -->
<div class="wp-block-group kn-stack kn-stack--loose"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Deckle Edge — a monthly letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">One letter a month, <em>written slowly</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>New pressings before they reach the shop, workshop dates first, and a short note on paper, ink or the art of the reply.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="kn-form kn-form--letter" action="#" method="post"><div class="kn-field"><label for="kn-letter-email-cta">Your email</label><div class="kn-form__row"><input id="kn-letter-email-cta" type="email" name="email" placeholder="you@example.com" autocomplete="email" required><button class="wp-element-button" type="submit">Subscribe</button></div></div><p class="kn-form__note">One letter a month, on the first Sunday. Unsubscribe in one click.</p></form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"kn-figure"} -->
<figure class="wp-block-image size-full kn-figure"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/journal-open.jpg' ) ); ?>" alt="An open blank journal with a blue fountain pen and a small cup of tea on a pale table" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
