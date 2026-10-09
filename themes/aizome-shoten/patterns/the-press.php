<?php
/**
 * Title: Shiori Press — the back room
 * Slug: aizome-shoten/the-press
 * Categories: aizome-shoten, featured, media
 * Keywords: small press, publishing, letterpress, imprint, dark
 * Viewport Width: 1440
 * Description: A deep indigo section about the shop's own small press: the press-room illustration, a condensed title, a paragraph, three numbered facts and a link to the about page.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-section az-press","backgroundColor":"kon","textColor":"kinari","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull az-section az-press has-kinari-color has-kon-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"az-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide az-grid"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-halftone az-press__image","style":{"layout":{"columnSpan":6}}} -->
<figure class="wp-block-image size-full is-style-halftone az-press__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/press-room.svg' ) ); ?>" alt="The back room: a small platen press, a cabinet of type drawers and stacks of printed sheets" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"az-press__copy","style":{"layout":{"columnSpan":5,"columnStart":8},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group az-press__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">In the back room</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Shiori<br>Press</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Four small books a year, printed in the pocket bunko size and sold for the price of lunch. We publish new writing, essays nobody else would take, and poetry in translation, with covers set by hand on our own platen press.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-index"} -->
<ul class="wp-block-list is-style-index"><!-- wp:list-item -->
<li>Covers letterpress-printed in the back room, two colours at most</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Editions of 800, numbered by hand on the last page</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Translators named on the cover and paid before the printer</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about/">Meet the press</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
