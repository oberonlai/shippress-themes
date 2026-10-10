<?php
/**
 * Title: Contact: shop details, message form and photograph
 * Slug: hana-kago/contact-main
 * Categories: hana-kago, contact
 * Keywords: contact, form, address, hours, phone, map
 * Viewport Width: 1440
 * Description: The Contact page: a page head, the shop details (synced) on pressed paper, a message form (plain HTML: connect it to your form service) and a photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-page-head"><!-- wp:group {"align":"wide","className":"hk-head","style":{"spacing":{"margin":{"bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-head" style="margin-bottom:0"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Come by, <em>or write to us</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">For weddings, events, standing orders for offices and restaurants, or just a question about the peonies.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-section--flush-top"><!-- wp:group {"align":"wide","className":"hk-split hk-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split hk-split--top"><!-- wp:group {"className":"hk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stack"><!-- wp:group {"className":"hk-tile","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tile"><!-- wp:group {"className":"hk-paper hk-paper--petal","layout":{"type":"default"}} -->
<div class="wp-block-group hk-paper hk-paper--petal"><!-- wp:pattern {"slug":"hana-kago/shop-info"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-deckle"} -->
<figure class="wp-block-image size-full is-style-deckle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/subscription.jpg' ) ); ?>" alt="A kraft flower box holding a paper-wrapped bunch of coral spray roses"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-tile","layout":{"type":"default"}} -->
<div class="wp-block-group hk-tile"><!-- wp:group {"className":"hk-paper","layout":{"type":"default"}} -->
<div class="wp-block-group hk-paper"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Send a <em>message</em></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="hk-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" placeholder="you@example.com" autocomplete="email" required></label><label>What is it about?<select name="topic"><option>An order or a delivery</option><option>A wedding or an event</option><option>A subscription</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="6" required></textarea></label><button type="submit">Send</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">We answer within one working day, usually sooner.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
