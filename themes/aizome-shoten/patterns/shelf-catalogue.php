<?php
/**
 * Title: The shelf — catalogue with reservations by email
 * Slug: aizome-shoten/shelf-catalogue
 * Categories: aizome-shoten, featured, columns
 * Keywords: shop, catalogue, books, products, reserve, store
 * Viewport Width: 1440
 * Description: The shop page: a condensed page head, then the books, zines and paper goods as a grid of covers with catalogue numbers, and a band explaining how to reserve a copy by email and collect it. With WooCommerce active the shop template shows the real products instead.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-page-head","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull az-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"az-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide az-grid"><!-- wp:paragraph {"className":"is-style-spine","style":{"layout":{"columnSpan":1}}} -->
<p class="is-style-spine">The shelf — 4,200 titles</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"layout":{"columnSpan":9,"columnStart":2},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Books, zines &amp; paper goods</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The<br>shelf</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead az-page-head__note"} -->
<p class="is-style-lead az-page-head__note">Everything here is on our shelves in Kanda. Write to reserve a copy: we keep it behind the counter for a week, or wrap it in kinari paper and post it to you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"az-section az-catalogue","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull az-section az-catalogue" style="margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"az-grid az-books","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide az-grid az-books"><!-- wp:group {"className":"az-book az-reveal","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group az-book az-reveal"><!-- wp:image {"aspectRatio":"5/7","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-book"} -->
<figure class="wp-block-image size-full is-style-book"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/book-empty-stations.svg' ) ); ?>" alt="Cover of A Field Guide to Empty Stations" style="aspect-ratio:5/7;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">No. 014 — Essays</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"az-book__title"} -->
<h3 class="wp-block-heading az-book__title">A Field Guide to Empty Stations</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-book__author"} -->
<p class="az-book__author">Sayo Minegishi — paperback, 212 pages</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-book az-reveal","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group az-book az-reveal"><!-- wp:image {"aspectRatio":"5/7","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-book"} -->
<figure class="wp-block-image size-full is-style-book"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/book-eleven-bridges.svg' ) ); ?>" alt="Cover of Eleven Bridges in the Rain" style="aspect-ratio:5/7;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">No. 021 — Fiction</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"az-book__title"} -->
<h3 class="wp-block-heading az-book__title">Eleven Bridges in the Rain</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-book__author"} -->
<p class="az-book__author">Tomoe Hasunuma — paperback, 348 pages</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-book az-reveal","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group az-book az-reveal"><!-- wp:image {"aspectRatio":"5/7","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-book"} -->
<figure class="wp-block-image size-full is-style-book"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/book-indigo-year.svg' ) ); ?>" alt="Cover of The Indigo Year" style="aspect-ratio:5/7;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">No. 009 — Poetry</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"az-book__title"} -->
<h3 class="wp-block-heading az-book__title">The Indigo Year</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-book__author"} -->
<p class="az-book__author">Aki Tanemura — pocket bunko, 120 pages</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-book az-reveal","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group az-book az-reveal"><!-- wp:image {"aspectRatio":"5/7","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-book"} -->
<figure class="wp-block-image size-full is-style-book"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/book-night-laundry.svg' ) ); ?>" alt="Cover of Night Laundry on Kasuga Street" style="aspect-ratio:5/7;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">No. 033 — Stories</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"az-book__title"} -->
<h3 class="wp-block-heading az-book__title">Night Laundry on Kasuga Street</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-book__author"} -->
<p class="az-book__author">Kei Moriwaki — paperback, 236 pages</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-book az-reveal","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group az-book az-reveal"><!-- wp:image {"aspectRatio":"5/7","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-book"} -->
<figure class="wp-block-image size-full is-style-book"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/book-small-island.svg' ) ); ?>" alt="Cover of Weather Report from a Small Island" style="aspect-ratio:5/7;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">No. 027 — Poetry in translation</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"az-book__title"} -->
<h3 class="wp-block-heading az-book__title">Weather Report from a Small Island</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-book__author"} -->
<p class="az-book__author">Noa Shirane, translated by Ilse Varga</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-book az-reveal","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group az-book az-reveal"><!-- wp:image {"aspectRatio":"5/7","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-book"} -->
<figure class="wp-block-image size-full is-style-book"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/zine-spine-talk.svg' ) ); ?>" alt="Cover of the zine Spine Talk, issue seven, printed in blue and persimmon" style="aspect-ratio:5/7;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">Zine — risograph</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"az-book__title"} -->
<h3 class="wp-block-heading az-book__title">Spine Talk No. 7</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-book__author"} -->
<p class="az-book__author">A zine about bookbinding — 28 pages</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-book az-reveal","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group az-book az-reveal"><!-- wp:image {"aspectRatio":"5/7","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-book"} -->
<figure class="wp-block-image size-full is-style-book"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/almanac-2026.svg' ) ); ?>" alt="Cover of the Shiori Press Almanac 2026: a calendar grid of twelve boxes" style="aspect-ratio:5/7;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">Shiori Press</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"az-book__title"} -->
<h3 class="wp-block-heading az-book__title">Shiori Press Almanac 2026</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-book__author"} -->
<p class="az-book__author">Twelve readings, twelve months</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-book az-reveal","style":{"layout":{"columnSpan":3},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group az-book az-reveal"><!-- wp:image {"aspectRatio":"5/7","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-book"} -->
<figure class="wp-block-image size-full is-style-book"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/notebook-indigo.svg' ) ); ?>" alt="An indigo cloth notebook in the A6 pocket size" style="aspect-ratio:5/7;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-catalog-no"} -->
<p class="is-style-catalog-no">Paper goods</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"az-book__title"} -->
<h3 class="wp-block-heading az-book__title">Bunko Notebook, Indigo</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-book__author"} -->
<p class="az-book__author">A6, 160 kinari pages, cloth cover</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"is-style-ruled az-reserve","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-ruled az-reserve" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">How to reserve</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Write to <a href="mailto:counter@shiorido.example?subject=Reserve%20a%20book">counter@shiorido.example</a> with the title, or call the counter. We reply the same day, keep the book for seven days, and post anywhere in the country for a flat fee.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:counter@shiorido.example?subject=Reserve%20a%20book">Reserve by email</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/contact/">Visit the shop</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
