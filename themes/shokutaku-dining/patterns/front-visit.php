<?php
/**
 * Title: Home: visit and how to book
 * Slug: shokutaku-dining/front-visit
 * Categories: shokutaku-dining
 * Keywords: visit, address, hours, booking steps
 * Viewport Width: 1440
 * Description: Ghost word VISIT, two overlapping photographs (one with an arched top), the address, the hours, four booking steps and a booking button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"shk-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull shk-visit"><!-- wp:paragraph {"className":"shk-ghost"} -->
<p class="shk-ghost" aria-hidden="true">VISIT</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"shk-in shk-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group shk-in shk-visit__grid"><!-- wp:group {"className":"shk-visit__photos","layout":{"type":"default"}} -->
<div class="wp-block-group shk-visit__photos"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"shk-visit__a sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full shk-visit__a sp-reveal sp-reveal--wipe"><img src="<?php echo shokutaku_dining_img( 'p07.webp' ); ?>" alt="Corner building with a large glass window and a wooden door in the morning."/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"shk-visit__b sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full shk-visit__b sp-reveal sp-reveal--wipe"><img src="<?php echo shokutaku_dining_img( 'p08.webp' ); ?>" alt="Three guests seated at the counter watching cooks from behind."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"shk-visit__body","layout":{"type":"default"}} -->
<div class="wp-block-group shk-visit__body"><!-- wp:heading {"level":2,"className":"shk-h2"} -->
<h2 class="wp-block-heading shk-h2">Find us on Havenstraat.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Havenstraat 41, 3024 Rotterdam, the Netherlands. Tram 8 stops at Havenstraat, a three-minute walk. The entrance is step-free and there is an accessible toilet.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<dl class="shk-hours"><div><dt>Lunch</dt><dd>Tue–Fri 11:30–14:30</dd></div><div><dt>Dinner</dt><dd>Tue–Sat 17:30–22:30</dd></div><div><dt>Closed</dt><dd>Sunday and Monday</dd></div></dl>
<!-- /wp:html -->

<!-- wp:list {"ordered":true,"className":"shk-steps"} -->
<ol class="wp-block-list shk-steps"><!-- wp:list-item -->
<li>Choose a sitting.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Book online or call.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Email confirmation, reminder the day before.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Arrive; the table is held for 15 minutes.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className":"shk-btn-row"} -->
<div class="wp-block-buttons shk-btn-row"><!-- wp:button {"className":"shk-btn is-style-outline"} -->
<div class="wp-block-button shk-btn is-style-outline"><a class="wp-block-button__link wp-element-button" href="/reservations/#book">Book a table</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"shk-note"} -->
<p class="shk-note">Call <a href="tel:+31105550142">+31 10 555 0142</a> or email <a href="mailto:table@shokutaku.example">table@shokutaku.example</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
