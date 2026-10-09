<?php
/**
 * Title: Access — festival map
 * Slug: hanabi-matsuri/access-map
 * Categories: hanabi-matsuri
 * Keywords: map, access, directions, venue
 * Viewport Width: 1440
 * Description: The festival map beside a numbered legend that matches its pins: stages, station, shuttle and the festival office.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"map","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section id="map" class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"hm-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide hm-grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-reveal","style":{"layout":{"columnSpan":8}}} -->
<figure class="wp-block-image size-full hm-reveal"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/access-map.svg' ) ); ?>" alt="Map of the festival: the river through the town, two bridges, three launch barges, hatched viewing banks, the station and the shuttle bus routes, with numbered points"/><figcaption class="wp-element-caption">Hatched in orange: free viewing banks. In marigold: the reserved fields. Dashed magenta: shuttle bus routes. The three barges sit mid-river.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hm-sticky","style":{"layout":{"columnSpan":4,"columnStart":9},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group hm-sticky"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Map</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">The <em>river</em>, end to end</h3>
<!-- /wp:heading -->

<!-- wp:html -->
<ol class="hm-legend">
	<li><strong>River Stage</strong> — north bank by Hotaru Bridge, the North Gate for pass holders</li>
	<li><strong>Lantern Stage</strong> — Tenjin Park, lantern writing and the Tenjin steps</li>
	<li><strong>Minase Station</strong> — Asagi Line, eight minutes on foot</li>
	<li><strong>Shuttle bus &amp; bike park</strong> — Kitano Bridge, south side</li>
	<li><strong>Festival office</strong> — first aid, lost children, lost property</li>
</ol>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
