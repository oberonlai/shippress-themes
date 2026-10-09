<?php
/**
 * Title: Contact — title, direct lines and studio map
 * Slug: shashin-folio/contact-details
 * Categories: shashin-folio, contact
 * Keywords: contact, email, studio, address, map, representation
 * Viewport Width: 1440
 * Description: The contact page opening: a large title, direct email lines for commissions, prints and press, representation, and a dark studio map with an address caption.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-page-head","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-page-head" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"sf-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide sf-grid"><!-- wp:paragraph {"className":"is-style-frame-number","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-frame-number">(05)<br>Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"layout":{"columnSpan":10}}} -->
<h1 class="wp-block-heading">Write, and <em>I will write back.</em></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"sf-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide sf-grid" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"sf-lines","style":{"layout":{"columnSpan":4,"columnStart":3}},"layout":{"type":"default"}} -->
<div class="wp-block-group sf-lines"><!-- wp:group {"className":"is-style-plate","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-plate"><!-- wp:paragraph {"className":"is-style-caption-label"} -->
<p class="is-style-caption-label">A — Commissions</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sf-line"} -->
<p class="sf-line"><a href="mailto:studio@ren-aoki.example">studio@ren-aoki.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-plate","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-plate"><!-- wp:paragraph {"className":"is-style-caption-label"} -->
<p class="is-style-caption-label">B — Prints &amp; books</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sf-line"} -->
<p class="sf-line"><a href="mailto:prints@ren-aoki.example">prints@ren-aoki.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-plate","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-plate"><!-- wp:paragraph {"className":"is-style-caption-label"} -->
<p class="is-style-caption-label">C — Gallery representation</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sf-line"} -->
<p class="sf-line"><a href="mailto:hello@galleryhiru.example">Gallery Hiru, Tokyo</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-still","style":{"layout":{"columnSpan":5,"columnStart":8}}} -->
<figure class="wp-block-image size-full is-style-still"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio-map.svg' ) ); ?>" alt="A minimal dark map showing the studio near the station and the river" style="aspect-ratio:3/2;object-fit:cover"/><figcaption class="wp-element-caption">Studio — 3F, 4-12-8 Kiyosumi, Koto-ku, Tokyo. Six minutes from Kiyosumi-shirakawa station. By appointment.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
