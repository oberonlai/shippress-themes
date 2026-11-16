<?php
/**
 * Title: Journal list
 * Slug: futari-journeys/page-journal-list
 * Categories: futari-journeys
 * Inserter: no
 * Viewport Width: 1440
 * Description: Two-column list of itinerary-style cards: photo, ink category chip and an offset sheet.
 */
?>
<!-- wp:group {"className":"fj-section fj-section--in fj-journal-wrap","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull fj-section fj-section--in fj-journal-wrap"><!-- wp:group {"className":"fj-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group fj-narrow"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"fj-journal","layout":{"type":"default"}} -->
<div class="wp-block-query fj-journal"><!-- wp:post-template {"className":"fj-trips","layout":{"type":"default"}} -->
<!-- wp:group {"className":"fj-trip","layout":{"type":"default"}} -->
<div class="wp-block-group fj-trip"><!-- wp:group {"className":"fj-trip__photo","layout":{"type":"default"}} -->
<div class="wp-block-group fj-trip__photo"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1.71","className":"fj-ph fj-ph--171"} /-->

<!-- wp:post-terms {"term":"category","className":"fj-chip"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fj-trip__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group fj-trip__sheet"><!-- wp:post-title {"isLink":true,"level":3,"className":"fj-trip__t"} /-->

<!-- wp:post-date {"className":"fj-facts"} /-->

<!-- wp:post-excerpt {"excerptLength":24,"className":"fj-trip__p"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"fj-pager","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing here yet. Try the questions couples ask, or book a planning call.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
