<?php
/**
 * Title: Home: visit (entrance photograph, address and hours)
 * Slug: seimyaku-clinic/front-visit
 * Categories: seimyaku-clinic
 * Keywords: visit, address
 * Viewport Width: 1440
 * Description: A photograph of the entrance beside the address, a two-column hours table, contact details, what to bring and two buttons.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"sz-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-visit" id="visit"><!-- wp:group {"className":"sz-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sz-visit__grid"><!-- wp:group {"className":"sz-visit__photo","layout":{"type":"default"}} -->
<div class="wp-block-group sz-visit__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo seimyaku_clinic_img( 'entrance-stairs.webp' ); ?>" alt="Bright second floor clinic entrance door next to stairs and an elevator landing."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-visit__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-visit__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Second floor, above the pharmacy</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>2nd floor, 41 Alder Row, Wrenfield, directly above the Alder Row pharmacy. Step-free lift.</p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"sz-hours","hasFixedLayout":false} -->
<figure class="wp-block-table sz-hours"><table><thead><tr><th>Day</th><th>Hours</th></tr></thead><tbody><tr><td>Monday–Friday</td><td>08:30–17:30 (Wednesday to 19:30)</td></tr><tr><td>Saturday</td><td>09:00–12:30</td></tr><tr><td>Sunday and public holidays</td><td>Closed</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph -->
<p>Fasting blood samples are taken from 08:30. Phone +00 31 555 0148 · <a href="mailto:care@seimyaku-clinic.example">care@seimyaku-clinic.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-bring"} -->
<p class="sz-bring"><strong>What to bring:</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sz-meta"} -->
<p class="is-style-sz-meta"><span>past letters</span><span>lab results</span><span>medicine list</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note">We do not provide dialysis or emergency care; in an emergency, call your local emergency number.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sz-visit__btns","layout":{"type":"default"}} -->
<div class="wp-block-group sz-visit__btns"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sz-btn"} -->
<div class="wp-block-button sz-btn"><a class="wp-block-button__link wp-element-button" href="/contact/">Book a first consultation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/">Ask a question</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
