<?php
/**
 * Title: Home: book
 * Slug: noboru-lifts/front-book
 * Categories: noboru-lifts
 * Keywords: lift, inspection, landing
 * Viewport Width: 1440
 * Description: The single conversion: a split card with a photograph and a four-field booking form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"nl-book-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nl-book-sec" id="book"><!-- wp:group {"className":"nl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nl-wrap"><!-- wp:group {"className":"nl-bookcard","layout":{"type":"default"}} -->
<div class="wp-block-group nl-bookcard"><!-- wp:paragraph {"className":"nl-tab"} -->
<p class="nl-tab"><strong>Book</strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nl-bookcard__photo","layout":{"type":"default"}} -->
<div class="wp-block-group nl-bookcard__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nl-bookcard__img"} -->
<figure class="wp-block-image size-full nl-bookcard__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p17-desk.webp' ) ); ?>" alt="Quiet early-morning reception desk with a phone, notebook and lifts behind"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nl-bookcard__form","layout":{"type":"default"}} -->
<div class="wp-block-group nl-bookcard__form"><!-- wp:heading {"className":"nl-h2"} -->
<h2 class="wp-block-heading nl-h2"><span class="nl-strip">Book an</span><br><span class="nl-strip">inspection</span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nl-body"} -->
<p class="nl-body">Next free slot: Tuesday, 07:00. Name, building, floors and email are enough. We reply within 1 working day.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="nl-form" action="/thanks/" method="get"><p><label for="nl-name">Your name</label><input id="nl-name" name="name" type="text" autocomplete="name" required/></p><p><label for="nl-building">Building</label><input id="nl-building" name="building" type="text" autocomplete="organization" required/></p><p><label for="nl-floors">Floors (4 to 12)</label><input id="nl-floors" name="floors" type="number" min="4" max="12" required/></p><p><label for="nl-email">Email</label><input id="nl-email" name="email" type="email" autocomplete="email" required/></p><button type="submit">Book an inspection</button></form>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"nl-bookcard__call"} -->
<p class="nl-bookcard__call">Or call +1 555 0142, Mon–Fri 07:00–17:00.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
