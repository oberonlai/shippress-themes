<?php
/**
 * Title: Hero — statement, lead image and studio figures
 * Slug: kenchiku-grid/hero-index
 * Categories: kenchiku-grid, featured, banner
 * Keywords: hero, intro, architecture, studio, grid
 * Viewport Width: 1400
 * Description: A display statement set on the 12-column grid, a large cropped architectural image with a mono figure caption, and a column of studio figures.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-hero" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid"><!-- wp:paragraph {"className":"is-style-mono-label kg-hero__kicker","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-hero__kicker">(00) Index<br>Architecture<br>Est. 2009</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"is-style-display-tight kg-hero__title","style":{"layout":{"columnSpan":10}}} -->
<h1 class="wp-block-heading is-style-display-tight kg-hero__title">Quiet structures for light to land on.</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-grid-frame kg-hero__image","style":{"layout":{"columnSpan":8}}} -->
<figure class="wp-block-image size-full is-style-grid-frame kg-hero__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/light-slit.svg' ) ); ?>" alt="Concrete interior with a vertical slit of daylight falling across the floor" style="aspect-ratio:16/10;object-fit:cover"/><figcaption class="wp-element-caption">Fig. 01 — Hanare House, Kamakura (2025). North wall, 09:40, late October.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kg-hero__aside","style":{"layout":{"columnSpan":4},"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group kg-hero__aside"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Toho Kenchiku Office is an architecture studio in Tokyo and Kyoto. We design houses, small public buildings and workplaces — slowly, by drawing and by model — with concrete, timber and daylight as our first materials.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kg-figures","layout":{"type":"default"}} -->
<div class="wp-block-group kg-figures"><!-- wp:paragraph {"className":"kg-figure"} -->
<p class="kg-figure"><strong>61</strong><span>Buildings completed</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kg-figure"} -->
<p class="kg-figure"><strong>17</strong><span>Years in practice</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kg-figure"} -->
<p class="kg-figure"><strong>11</strong><span>Architects &amp; makers</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/projects/">View all projects</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
