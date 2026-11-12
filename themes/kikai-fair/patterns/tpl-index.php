<?php
/**
 * Title: Template: index
 * Slug: kikai-fair/tpl-index
 * Categories: kikai-fair
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kf-main kf-main--list kf-lattice","layout":{"type":"constrained"}} -->
<main class="wp-block-group kf-main kf-main--list kf-lattice"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">News and Reports from the Floor</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kf-news__lead kf-news__lead--left"} -->
<p class="kf-news__lead kf-news__lead--left">Explore dispatches, machinery reports, and real workshop case studies from Kikai Fair. Our technical articles document production testing, tooling measurements, and equipment procurement from the exhibition floor.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"perPage":9,"inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kf-card-img"} /-->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kf-btn-line"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:group {"className":"kf-prose kf-prose--list","layout":{"type":"default"}} -->
<div class="wp-block-group kf-prose kf-prose--list"><!-- wp:heading -->
<h2 class="wp-block-heading">What took place during the 2025 edition of Kikai Fair?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our archived reports from the 2025 edition, catalogued under the category From the floor with the 2025 edition tag, illustrate how commercial workshops use Kikai Fair to resolve equipment choices. CNC manufacturer Rafael Ortega on stand A-14 demonstrated nesting efficiency by processing the same panel program six times in one afternoon for six visiting workshops. In Zone B, kitchen-cabinet workshop owner Priya Nair evaluated three competing edgebanders before placing an equipment order. In Zone D, joinery teacher Jonas Lindqvist led twelve apprentices equipped with a calibrated dust meter to measure extraction efficiency across ducting stands.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">What machinery and exhibitors are scheduled for the 2027 edition?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Looking forward to the 9th edition from 9 to 11 March 2027, Hall 4 at the Riverside Exhibition Centre will feature 180 exhibitors and 62 machines running under active electrical power across 22,000 square metres. Floor zones A, B, C, and D will host live demonstrations in panel processing, solid timber joinery, spray finishing booths, and central dust extraction networks. Online pass requests remain open until Sunday 21 February 2027. Review our articles to understand how practical trials on the exhibition floor translate directly into commercial workshop productivity.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kf-btn-line"} -->
<div class="wp-block-buttons kf-btn-line"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/request-a-pass/">Request a pass<svg class="kf-arrow" width="28" height="6" viewBox="0 0 28 6" aria-hidden="true" focusable="false"><path d="M0 3H27M23.5.5 27 3l-3.5 2.5" fill="none" stroke="currentColor" stroke-width="1"/></svg></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
