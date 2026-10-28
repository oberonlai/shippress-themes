<?php
/**
 * Title: Home: specified in your room (mirrored room box)
 * Slug: hikari-lighting/front-specify
 * Categories: hikari-lighting
 * Description: Mirrored dark room box: window at the right, vertical word at the right edge, three prose paragraphs on how a fitting is specified.
 */
$img = esc_url( get_theme_file_uri( 'assets/images/demo/hl-05-planner.webp' ) );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hl-roombox hl-roombox--mirror","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-roombox hl-roombox--mirror"><!-- wp:html -->
<?php echo hikari_lighting_wordmark( 'hl-roombox__word' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hl-window sp-parallax"} -->
<figure class="wp-block-image size-large hl-window sp-parallax"><img src="<?php echo $img; ?>" alt="Lighting planner and client examining a lamp head above drawings on a stone table."/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hl-roombox__text","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__text"><!-- wp:group {"className":"hl-roombox__head","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__head"><!-- wp:paragraph {"className":"hl-label"} -->
<p class="hl-label">[ 04 ] Fitting &amp; specification</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hl-h2"} -->
<h2 class="wp-block-heading hl-h2">Specified in<br>your room.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-roombox__body","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__body"><!-- wp:paragraph -->
<p>We begin in your space with a 90-minute home consultation for €120 across the Rotterdam area. We assess how daylight recedes, examine wall finishes and ceiling heights, and listen to how you inhabit each corner throughout the evening.</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>Following our visit, we deliver a written light plan detailing exact lamp positions, switching arrangements, dimmers, and bulb specifications. Every fitting is calibrated to 2700K warm white to maintain tonal harmony and eliminate cold glare.</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>Before committing, you test up to three selected pieces in your home through our 7-day home trial for a refundable €50 deposit. Once confirmed, installation is completed seamlessly by our partner electrician.</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hl-mono hl-arrow"} -->
<p class="hl-mono hl-arrow"><a href="/fitting/">Fitting &amp; prices ↗</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
