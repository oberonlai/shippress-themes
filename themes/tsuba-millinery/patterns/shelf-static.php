<?php
/**
 * Title: Hat shelf without WooCommerce
 * Slug: tsuba-millinery/shelf-static
 * Categories: tsuba-millinery
 * Keywords: hats, millinery, cloche, boater, felt, straw
 * Viewport Width: 1440
 * Description: Find your shape: a vertical title in the margin, shape and material filters as a ruled table (they work without JavaScript) and the eight hats in a staggered grid, used where WooCommerce is not active.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-shape","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-shape"><!-- wp:group {"className":"tm-shape__rail","layout":{"type":"default"}} -->
<div class="wp-block-group tm-shape__rail"><!-- wp:heading {"level":2,"className":"tm-shape__title"} -->
<h2 class="wp-block-heading tm-shape__title">Find your shape</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-shape__count"} -->
<p class="tm-shape__count">Eight hats · four shapes · three materials</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-shape__body","layout":{"type":"default"}} -->
<div class="wp-block-group tm-shape__body"><!-- wp:paragraph {"className":"tm-shape__targets"} -->
<p class="tm-shape__targets"><span id="all"></span><span id="cloche"></span><span id="boater"></span><span id="bucket"></span><span id="wide-brim"></span><span id="felt"></span><span id="straw"></span><span id="cotton"></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tm-filters tm-filters--table","layout":{"type":"default"}} -->
<div class="wp-block-group tm-filters tm-filters--table"><!-- wp:group {"className":"tm-filters__group","layout":{"type":"default"}} -->
<div class="wp-block-group tm-filters__group"><!-- wp:paragraph -->
<p><span class="tm-filters__label">Shape</span> <a class="tm-chip" href="#cloche">Cloche</a> <a class="tm-chip" href="#boater">Boater</a> <a class="tm-chip" href="#bucket">Bucket</a> <a class="tm-chip" href="#wide-brim">Wide brim</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-filters__group","layout":{"type":"default"}} -->
<div class="wp-block-group tm-filters__group"><!-- wp:paragraph -->
<p><span class="tm-filters__label">Material</span> <a class="tm-chip" href="#felt">Felt</a> <a class="tm-chip" href="#straw">Straw</a> <a class="tm-chip" href="#cotton">Cotton</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-filters__group","layout":{"type":"default"}} -->
<div class="wp-block-group tm-filters__group"><!-- wp:paragraph -->
<p><span class="tm-filters__label">Head size</span> <a class="tm-chip" href="/fit-sizing/">54 to 61 cm · Fit &amp; sizing</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-shelf tm-box tm-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group tm-shelf tm-box tm-stagger"><!-- wp:group {"className":"tm-cell tm-box__cell is-cloche is-felt","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-box__cell is-cloche is-felt"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"tm-cell__picture"} -->
<figure class="wp-block-image size-large tm-cell__picture"><a href="/made-to-order/"><img src="{{theme}}/assets/images/p01-hana-cloche.webp" alt="Etching of an indigo felt cloche with a small plum-pink bow"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-cell__cat"} -->
<p class="tm-cell__cat">Felt · 4 cm brim</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title">Hana cloche</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-cell__price"} -->
<p class="tm-cell__price">$280</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-size"} -->
<p class="tm-size">Small · Medium · Large</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-box__cell is-boater is-straw","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-box__cell is-boater is-straw"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"tm-cell__picture"} -->
<figure class="wp-block-image size-large tm-cell__picture"><a href="/made-to-order/"><img src="{{theme}}/assets/images/p02-natsu-boater.webp" alt="Etching of a natural straw boater with an indigo ribbon band"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-cell__cat"} -->
<p class="tm-cell__cat">Straw · 6 cm brim</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title">Natsu boater</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-cell__price"} -->
<p class="tm-cell__price">$240</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-size"} -->
<p class="tm-size">Small · Medium · Large</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-box__cell is-bucket is-cotton","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-box__cell is-bucket is-cotton"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"tm-cell__picture"} -->
<figure class="wp-block-image size-large tm-cell__picture"><a href="/made-to-order/"><img src="{{theme}}/assets/images/p03-ame-bucket.webp" alt="Etching of a soft washed-indigo cotton bucket hat"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-cell__cat"} -->
<p class="tm-cell__cat">Cotton · 5 cm brim</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title">Ame bucket</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-cell__price"} -->
<p class="tm-cell__price">$180</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-size"} -->
<p class="tm-size">S / M / L</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-box__cell is-wide-brim is-felt","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-box__cell is-wide-brim is-felt"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"tm-cell__picture"} -->
<figure class="wp-block-image size-large tm-cell__picture"><a href="/made-to-order/"><img src="{{theme}}/assets/images/p04-kaze-wide-brim.webp" alt="Etching of a charcoal wide-brim felt hat with a thin plum-pink band"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-cell__cat"} -->
<p class="tm-cell__cat">Felt · 11 cm brim</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title">Kaze wide brim</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-cell__price"} -->
<p class="tm-cell__price">$460</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-size"} -->
<p class="tm-size">Small · Medium · Large</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-box__cell is-cloche is-felt","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-box__cell is-cloche is-felt"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"tm-cell__picture"} -->
<figure class="wp-block-image size-large tm-cell__picture"><a href="/made-to-order/"><img src="{{theme}}/assets/images/p05-fuyu-beret.webp" alt="Etching of a plum-pink wool felt beret"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-cell__cat"} -->
<p class="tm-cell__cat">Felt · no brim</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title">Fuyu beret</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-cell__price"} -->
<p class="tm-cell__price">$190</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-size"} -->
<p class="tm-size">Small · Medium · Large</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-box__cell is-wide-brim is-straw","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-box__cell is-wide-brim is-straw"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"tm-cell__picture"} -->
<figure class="wp-block-image size-large tm-cell__picture"><a href="/made-to-order/"><img src="{{theme}}/assets/images/p06-hiyori-sun-hat.webp" alt="Etching of a wide woven straw sun hat with a long indigo ribbon"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-cell__cat"} -->
<p class="tm-cell__cat">Straw · 12 cm brim</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title">Hiyori sun hat</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-cell__price"} -->
<p class="tm-cell__price">$320</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-size"} -->
<p class="tm-size">Small · Medium · Large</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-box__cell is-boater is-felt","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-box__cell is-boater is-felt"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"tm-cell__picture"} -->
<figure class="wp-block-image size-large tm-cell__picture"><a href="/made-to-order/"><img src="{{theme}}/assets/images/p07-kiri-trilby.webp" alt="Etching of a grey felt trilby with a pinched crown and an indigo band"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-cell__cat"} -->
<p class="tm-cell__cat">Felt · 5 cm brim</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title">Kiri trilby</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-cell__price"} -->
<p class="tm-cell__price">$340</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-size"} -->
<p class="tm-size">Small · Medium · Large</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-box__cell is-cloche is-felt","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-box__cell is-cloche is-felt"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","className":"tm-cell__picture"} -->
<figure class="wp-block-image size-large tm-cell__picture"><a href="/made-to-order/"><img src="{{theme}}/assets/images/p08-tsubomi-pillbox.webp" alt="Etching of a small plum-pink felt pillbox hat"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"tm-cell__cat"} -->
<p class="tm-cell__cat">Felt · no brim</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title">Tsubomi pillbox</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-cell__price"} -->
<p class="tm-cell__price">$260</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-size"} -->
<p class="tm-size">Made to fit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tm-shape__note"} -->
<p class="tm-shape__note">To order, write to <a href="mailto:hello@tsuba-millinery.example">hello@tsuba-millinery.example</a> with the hat and your head size; we reply within two days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
