<?php
/**
 * Title: Tickets — seat plan
 * Slug: hanabi-matsuri/tickets-seatmap
 * Categories: hanabi-matsuri
 * Keywords: seat plan, map, zones, tickets
 * Viewport Width: 1440
 * Description: The seat plan of the levee in a cream poster frame, with a colour key for the zones and a short explanation.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"seats","align":"full","backgroundColor":"kon","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section id="seats" class="wp-block-group alignfull has-kon-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"hm-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide hm-grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-poster-frame hm-reveal","style":{"layout":{"columnSpan":7}}} -->
<figure class="wp-block-image size-full is-style-poster-frame hm-reveal"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tatami-seats.svg' ) ); ?>" alt="Seat plan of the levee seen from above: rows of mats in three colours by pass type, the river and three launch barges at the top, the footpath at the bottom"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"layout":{"columnSpan":4,"columnStart":9},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Seat plan</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Where the <em>mats</em> are</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The reserved fields run along the south levee between the two bridges, facing the three barges. Zone A is nearest the water; Zone B, the Lantern Field, sits behind it, and the free bank carries on either side.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="hm-swatches">
	<li>Zone A · Tatami Boxes</li>
	<li>Zone B · Lantern Field (passes)</li>
	<li>Accessible deck · free, book ahead</li>
</ul>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hm-muted","fontSize":"small"} -->
<p class="hm-muted has-small-font-size">Mats are numbered. Your number arrives by email a week before the festival.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
