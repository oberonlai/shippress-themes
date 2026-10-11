<?php
/**
 * Title: Repair: price list
 * Slug: ginrin-cycle/repair-prices
 * Categories: ginrin-cycle, featured
 * Keywords: prices, repair, list
 * Viewport Width: 1440
 * Description: The synced repair price list with a short note beside it. Edit the prices once in the synced pattern.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"prices","align":"full","className":"gc-section gc-section--paper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull gc-section gc-section--paper" id="prices"><!-- wp:group {"align":"wide","className":"gc-split gc-split--5-7 gc-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide gc-split gc-split--5-7 gc-split--top"><!-- wp:group {"className":"gc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group gc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Price list</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Labour, written down.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>These are the jobs we do most. Anything else gets a written quote before we pick up a tool.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-drawing"} -->
<figure class="wp-block-image size-full is-style-drawing"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.jpg' ) ); ?>" alt="A wheel in a truing stand on a wooden workbench with tools on the wall"/><figcaption class="wp-element-caption">Fig. 01 — The repair bench</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gc-repair__prices","layout":{"type":"default"}} -->
<div class="wp-block-group gc-repair__prices"><!-- wp:pattern {"slug":"ginrin-cycle/price-list"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
