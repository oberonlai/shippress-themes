<?php
/**
 * Title: Contact — map and directions
 * Slug: beni-kappo/contact-access
 * Categories: beni-kappo, contact
 * Keywords: map, directions, access, location, walking
 * Viewport Width: 1440
 * Description: A line map of the old quarter in a lacquer frame, layered with a panel of walking directions from the station, the bus and the taxi rank.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bk-section is-style-lantern","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull bk-section is-style-lantern" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"bk-grid bk-layered","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide bk-grid bk-layered"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-lacquer-frame bk-layered__media","style":{"layout":{"columnSpan":8,"columnStart":1}}} -->
<figure class="wp-block-image size-full is-style-lacquer-frame bk-layered__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/area-map.svg' ) ); ?>" alt="A line map of the old quarter: the river, the bridge, the stone steps and a red mark for the restaurant" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"bk-layered__text is-style-lacquer bk-reveal","style":{"layout":{"columnSpan":5,"columnStart":8},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bk-layered__text is-style-lacquer bk-reveal"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Finding us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Up the steps, <em>under the lanterns</em></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-ruled"} -->
<ul class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li><strong>On foot</strong> — twenty minutes from the station: cross the river at the wooden bridge, turn left and climb the stone steps</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>By bus</strong> — the loop bus to Higashiyama, then four minutes uphill</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>By taxi</strong> — ask for the top of Akarizaka; cars cannot reach the door</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
