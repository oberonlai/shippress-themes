<?php
/**
 * Title: Contact: form and visit details
 * Slug: kage-gallery/contact-main
 * Categories: kage-gallery
 * Keywords: gallery, contact, form
 * Viewport Width: 1440
 * Description: Page head, a short form that opens the visitor's email app (no backend) and the synced visit details.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kgl-section kgl-pagehead-wrap","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kgl-section kgl-pagehead-wrap"><!-- wp:group {"align":"wide","className":"kgl-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kgl-pagehead"><!-- wp:paragraph {"className":"kgl-label"} -->
<p class="kgl-label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kgl-pagehead__title"} -->
<h1 class="wp-block-heading kgl-pagehead__title">Write to the gallery.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Questions about a work, a visit, a group or a loan: the desk reads every message and replies within two working days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kgl-section kgl-section--last kgl-section--tight","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kgl-section kgl-section--last kgl-section--tight"><!-- wp:group {"align":"wide","className":"kgl-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kgl-split"><!-- wp:group {"className":"kgl-split__head kgl-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kgl-split__head kgl-formwrap"><!-- wp:html -->
<form class="kgl-form" action="#" method="post" data-subject="A note to the gallery" hidden><label>Your name<input type="text" name="name" autocomplete="name" required></label><label>Email<input type="email" name="email" autocomplete="email" placeholder="you@example.com" required></label><label>About<select name="topic"><option>A question about a work</option><option>A visit or a group</option><option>Artists: sending my work</option><option>Press and loans</option><option>Something else</option></select></label><label>Message<textarea name="message" rows="6" required></textarea></label><button type="submit">Write the email</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kgl-quiet kgl-form__note"} -->
<p class="kgl-quiet kgl-form__note">The form writes an email in your own email app; nothing is sent from or stored on this site. Without JavaScript, write to the address beside it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kgl-split__body kgl-visit-card","layout":{"type":"default"}} -->
<div class="wp-block-group kgl-split__body kgl-visit-card"><!-- wp:paragraph {"className":"kgl-label"} -->
<p class="kgl-label">The desk</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"kage-gallery/visit"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
