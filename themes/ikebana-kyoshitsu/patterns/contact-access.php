<?php
/**
 * Title: Contact — map and getting here
 * Slug: ikebana-kyoshitsu/contact-access
 * Categories: ikebana-kyoshitsu, contact
 * Keywords: map, access, directions, getting here, tram, bus
 * Viewport Width: 1440
 * Description: A drawn neighbourhood map bleeding off the left edge, with directions from the tram, bus and on foot as stem-marked notes on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ik-section","backgroundColor":"blush","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ik-section has-blush-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"ik-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ik-grid"><!-- wp:image {"aspectRatio":"16/11","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-paper-mat ik-bleed-left ik-reveal","style":{"layout":{"columnSpan":7,"columnStart":1}}} -->
<figure class="wp-block-image size-full is-style-paper-mat ik-bleed-left ik-reveal"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/area-map.svg' ) ); ?>" alt="A simple map of the neighbourhood: the river, the canal, the tram stop and the studio" style="aspect-ratio:16/11;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ik-reveal","style":{"layout":{"columnSpan":4,"columnStart":9},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group ik-reveal"><!-- wp:heading -->
<h2 class="wp-block-heading">Getting <em>here</em></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-stems"} -->
<ul class="wp-block-list is-style-stems"><!-- wp:list-item -->
<li><strong>Tram</strong> — four minutes from the canal stop; follow the water east to the second bridge.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Bus</strong> — the 5 or the 32 to the park gate, then two streets south.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Bicycle</strong> — racks by the door; the studio is up one flight, with a lift.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Look for</strong> — a white noren curtain with three thin lines on it.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
