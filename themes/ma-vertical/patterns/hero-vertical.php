<?php
/**
 * Title: Hero — vertical title
 * Slug: ma-vertical/hero-vertical
 * Categories: ma-vertical, banner, featured
 * Keywords: hero, vertical, tategaki, enso
 * Description: Full-height opening with a vertical display title on the right, an ink ensō and a quiet English lead.
 */
?>
<!-- wp:group {"align":"full","className":"ma-hero","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ma-hero" style="margin-top:0"><!-- wp:columns {"align":"wide","className":"ma-reverse","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns alignwide ma-reverse"><!-- wp:column {"width":"42%","className":"ma-hero__text"} -->
<div class="wp-block-column ma-hero__text" style="flex-basis:42%"><!-- wp:group {"className":"is-style-tategaki ma-hero__titles ma-keep-tategaki","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-tategaki ma-hero__titles ma-keep-tategaki"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Room for<br>the hand.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ma-hero__sub"} -->
<p class="ma-hero__sub">A small craft studio in Kyoto.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-hanko"} -->
<p class="is-style-hanko">MA</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%","className":"ma-hero__visual"} -->
<div class="wp-block-column ma-hero__visual" style="flex-basis:58%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ma-enso"} -->
<figure class="wp-block-image size-full ma-enso"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/enso.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ma-hero__lead","layout":{"type":"default"}} -->
<div class="wp-block-group ma-hero__lead"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Margin Atelier — Kyoto, since 2014</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>A craft and editorial studio. We make small runs of lacquer, paper and cloth, and the quiet books that tell their stories — leaving room, always, for what is not said.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ma-scroll"} -->
<p class="ma-scroll">Scroll</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
