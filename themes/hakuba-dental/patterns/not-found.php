<?php
/**
 * Title: 404 — a missing tooth
 * Slug: hakuba-dental/not-found
 * Categories: hakuba-dental
 * Keywords: 404, not found, error, search
 * Viewport Width: 1440
 * Description: The not-found page: a mist cell with the title, a search box and two buttons, beside a smile photograph inside a tooth silhouette.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hd-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hd-page-head"><!-- wp:group {"align":"wide","className":"hd-bento","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-bento"><!-- wp:group {"className":"hd-cell hd-c-8 hd-page-head__intro","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-c-8 hd-page-head__intro"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Error 404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">This page has gone missing, like a baby tooth.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">The link may be old, or the page has moved. Search the site, or start again from the home page.</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search the site","buttonText":"Search"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/">Back to the home page</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-soft"} -->
<div class="wp-block-button is-style-soft"><a class="wp-block-button__link wp-element-button" href="/contact/">Book a visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-cell hd-c-4 hd-tooth-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hd-cell hd-c-4 hd-tooth-cell"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-tooth"} -->
<figure class="wp-block-image size-large is-style-tooth"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smile.jpg' ) ); ?>" alt="A close-up of a woman smiling with healthy teeth"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
