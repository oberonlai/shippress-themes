<?php
/**
 * Title: Kilns — the map
 * Slug: seiji-utsuwa/kilns-map
 * Categories: seiji-utsuwa, media
 * Keywords: map, kilns, regions
 * Viewport Width: 1440
 * Description: A wide map of the four kilns on a porcelain plinth with a numbered legend beside it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"su-section su-kilns-map","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull su-section su-kilns-map"><!-- wp:group {"align":"wide","className":"su-grid su-map","layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide su-grid su-map"><!-- wp:group {"className":"su-map__media","style":{"layout":{"columnSpan":8}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-map__media"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-plinth"} -->
<figure class="wp-block-image size-full is-style-plinth"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kiln-map.svg' ) ); ?>" alt="A stylised map of Japan's main islands with four numbered markers for the kilns" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"su-map__legend","style":{"layout":{"columnSpan":4}},"layout":{"type":"default"}} -->
<div class="wp-block-group su-map__legend"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Where they are</p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true,"className":"is-style-index su-legend"} -->
<ol class="wp-block-list is-style-index su-legend"><!-- wp:list-item -->
<li><strong>Mizunoe Kiln</strong><br>Hills above the Sai river, Ishikawa</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Ishizuchi Kiln</strong><br>A cedar slope in the mountains of Ehime</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Tsukiyama Kiln</strong><br>An old rice store outside Mashiko, Tochigi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Shirokawa Kiln</strong><br>A riverside studio in the hills of Saga</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
