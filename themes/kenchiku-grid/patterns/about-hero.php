<?php
/**
 * Title: Studio — opening statement and texture image
 * Slug: kenchiku-grid/about-hero
 * Categories: kenchiku-grid, about, featured
 * Keywords: about, studio, intro, story, practice
 * Viewport Width: 1400
 * Description: The studio page opening: display title, a two-column introduction placed on the grid and a wide board-formed concrete image with figure caption.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-page-head","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid"><!-- wp:paragraph {"className":"is-style-mono-label kg-hero__kicker","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-hero__kicker">(02) Studio<br>Tokyo + Kyoto<br>Since 2009</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"is-style-display-tight","style":{"layout":{"columnSpan":10}}} -->
<h1 class="wp-block-heading is-style-display-tight">A small office for buildings that age well.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead","style":{"layout":{"columnSpan":5,"columnStart":3}}} -->
<p class="is-style-lead">Toho Kenchiku Office was founded in 2009 by Ren Tohyama and Aiko Morishita in a former rope warehouse in Kiyosumi, Tokyo. A second studio opened in Shimogamo, Kyoto, in 2016.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kg-body-col","style":{"layout":{"columnSpan":4,"columnStart":9}}} -->
<p class="kg-body-col">We are eleven: eight architects, two model-makers and a carpenter. We take on no more than six projects a year, and we draw every one of them by hand before it reaches a computer. Most of our clients come to us through a building they have stood inside.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-grid-frame","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<figure class="wp-block-image alignwide size-full is-style-grid-frame" style="margin-top:var(--wp--preset--spacing--60)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/board-concrete.svg' ) ); ?>" alt="Board-formed concrete with tie holes under raking light" style="aspect-ratio:21/9;object-fit:cover"/><figcaption class="wp-element-caption">Fig. 05 — Cedar-board formwork imprint, Kiyosumi Workshop (2024). 120 mm boards, tie holes at 600 × 450.</figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
