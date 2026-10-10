<?php
/**
 * Title: 404: page not found
 * Slug: wagu-mono/not-found
 * Categories: wagu-mono
 * Keywords: 404, not found, error
 * Viewport Width: 1440
 * Inserter: no
 * Description: The 404 page: a dovetail diagram, a big 404, a short line, a search form and the way back.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"wm-section wm-lost","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wm-section wm-lost"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-diagram wm-lost__diagram"} -->
<figure class="wp-block-image size-full is-style-diagram wm-lost__diagram"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/joints/dovetail.svg' ) ); ?>" alt="Two boards with dovetails that have come apart"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wm-lost__no"} -->
<p class="wm-lost__no">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size">This joint <em>came apart</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">The page you were looking for is not here any more. Try a search, or go back to the showroom.</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Oak, oil, dovetail…","buttonText":"Search","className":"wm-search-form"} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/">Back to the showroom</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
