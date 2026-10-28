<?php
/**
 * Title: Home: on the floor (room box)
 * Slug: hikari-lighting/front-floor
 * Categories: hikari-lighting
 * Description: Dark perspective room box with one lit photo window and a vertical stencil word.
 */
$img = esc_url( get_theme_file_uri( 'assets/images/demo/hl-02-floor.webp' ) );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hl-roombox","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-roombox"><!-- wp:html -->
<?php echo hikari_lighting_wordmark( 'hl-roombox__word' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hl-window sp-parallax"} -->
<figure class="wp-block-image size-large hl-window sp-parallax"><img src="<?php echo $img; ?>" alt="Six lit lamps standing on stone plinths while a staff member adjusts one linen shade."/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hl-roombox__text","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__text"><!-- wp:group {"className":"hl-roombox__head","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__head"><!-- wp:paragraph {"className":"hl-label"} -->
<p class="hl-label">[ 02 ] On the floor — November</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hl-h2"} -->
<h2 class="wp-block-heading hl-h2">Six pieces,<br>one room at a time.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-roombox__body","layout":{"type":"default"}} -->
<div class="wp-block-group hl-roombox__body"><!-- wp:paragraph -->
<p>The showroom floor is re-set on the first Wednesday of each month with exactly six pieces. We keep the space quiet so you can sit with a lamp, observe how its warm 2700K glow fills a corner, and understand how the shade behaves once darkness falls outside.</p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p>Because light can never be judged purely in a showroom, any piece on the floor can be borrowed for a 7-day home trial. You take the fitting into your own space, live with it across morning and evening, and ensure it belongs before deciding to keep it.</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hl-mono hl-arrow"} -->
<p class="hl-mono hl-arrow"><a href="/lamps/">See the six pieces ↗</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
