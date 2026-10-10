<?php
/**
 * Title: Contact: showroom details, message form and photograph
 * Slug: wagu-mono/contact-main
 * Categories: wagu-mono, contact
 * Keywords: contact, form, address, hours, phone
 * Viewport Width: 1440
 * Description: The Contact page: a page head, the showroom card (synced) on a drawing sheet, a showroom photograph and a message form (plain HTML: connect it to your form service).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"wm-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wm-page-head"><!-- wp:group {"align":"wide","className":"wm-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wm-head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Come and sit <em>on everything</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">For orders, commissions in your own size, repairs, or a workshop visit. The best way to choose a chair is still to sit on it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"wm-section wm-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wm-section wm-section--flush-top"><!-- wp:group {"align":"wide","className":"wm-split wm-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wm-split wm-split--top"><!-- wp:group {"className":"wm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group wm-stack"><!-- wp:group {"className":"is-style-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-sheet"><!-- wp:pattern {"slug":"wagu-mono/showroom-info"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-plate"} -->
<figure class="wp-block-image size-full is-style-plate"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="The showroom: an oak bench, a walnut lounge chair and a paper lamp"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-sheet wm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-sheet wm-stack"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Send a <em>message</em></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form class="wm-form" action="#" method="post"><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" placeholder="you@example.com" autocomplete="email" required></label><label>What is it about?<select name="topic"><option>An order or a commission</option><option>A repair</option><option>A workshop visit</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="6" required></textarea></label><button type="submit">Send</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"is-style-fine"} -->
<p class="is-style-fine">We answer within two working days. For repairs, a photograph and the number under the piece help.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
