<?php
/**
 * Title: Footer: the Monday stem letter (newsletter-led)
 * Slug: hana-kago/footer-letter
 * Categories: hana-kago, footer, call-to-action
 * Keywords: newsletter, subscribe, email, footer
 * Viewport Width: 1440
 * Description: The block that opens the footer: what the Monday letter brings, a big title, an email form (plain HTML: connect it to your email service) and a dried posy with soft paper edges.
 */
?>
<!-- wp:group {"align":"wide","className":"hk-letter","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-letter"><!-- wp:group {"className":"hk-letter__copy","layout":{"type":"default"}} -->
<div class="wp-block-group hk-letter__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The Monday stem letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">What is in bloom, <em>every Monday</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">The week's flowers from our growers, one care tip, first pick of the wreath workshops and a pressed-flower print to keep.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hk-form hk-form--inline" action="#" method="post"><label>Your email<input type="email" name="email" placeholder="you@example.com" autocomplete="email" required></label><button type="submit">Send me the letter</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">One short letter a week. No adverts, and you can leave with one click.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-deckle hk-letter__photo"} -->
<figure class="wp-block-image size-full is-style-deckle hk-letter__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dried.jpg' ) ); ?>" alt="A dried posy of pampas grass, pink statice and coral strawflowers tied with twine"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
