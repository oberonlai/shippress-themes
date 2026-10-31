<?php
/**
 * Title: Home: request
 * Slug: hashira-partners/front-request
 * Categories: hashira-partners
 * Keywords: warehouse, leasing, brokerage
 * Viewport Width: 1440
 * Description: Black ruled close with the request form.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"request","align":"full","className":"hp-request","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group alignfull hp-request">
<!-- wp:group {"className":"hp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hp-wrap">
<!-- wp:heading {"level":2,"className":"hp-h1 hp-h1--close"} -->
<h2 class="wp-block-heading hp-h1 hp-h1--close"><span class="hp-line hp-line--1"><span class="hp-line__t">Bring your list</span></span> <span class="hp-line hp-line--2"><span class="hp-line__t">we'll bring the keys.</span></span></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hp-split hp-split--req","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split hp-split--req">
<!-- wp:group {"className":"hp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split__text">
<!-- wp:paragraph {"className":"hp-label"} -->
<p class="hp-label">Send a request</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"4/3","scale":"cover","className":"hp-photo43"} -->
<figure class="wp-block-image size-full hp-photo43"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/r1-key-hand.webp' ) ); ?>" alt="One hand passing a plain key ring to another hand at a half-open shutter" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-split__form","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split__form">
<!-- wp:paragraph {"className":"hp-lead"} -->
<p class="hp-lead">Send your name, your email, the size you need and the district: Eastgate, Riverside or Mill Cross. Priya Raman replies within 1 business day. The first viewing round, up to 3 bays, is free and runs Tue–Sat 09:00–15:00. The placement fee is 1 month's rent up to 24 months, or 1.5 months' rent from 25 months, paid only once a lease is signed.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hp-form" action="/thanks/" method="get"><p class="hp-field"><label for="hp-name">Name</label><input id="hp-name" name="name" type="text" autocomplete="name" required></p><p class="hp-field"><label for="hp-email">Email</label><input id="hp-email" name="email" type="email" autocomplete="email" required></p><p class="hp-field"><label for="hp-size">Size needed (m²)</label><input id="hp-size" name="size" type="text" inputmode="numeric" placeholder="e.g. 180"></p><p class="hp-field"><label for="hp-district">District</label><select id="hp-district" name="district"><option>Eastgate</option><option>Riverside</option><option>Mill Cross</option><option>No preference</option></select></p><p class="hp-field hp-field--go"><button type="submit" class="hp-submit">Request a viewing</button></p></form>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
