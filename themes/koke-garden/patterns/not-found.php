<?php
/**
 * Title: Page not found
 * Slug: koke-garden/not-found
 * Categories: koke-garden
 * Keywords: 404, not found
 * Inserter: no
 * Description: A quiet 404 message with a search field and links back.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-section kg-section--raked kg-section--last kg-404","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-section--raked kg-section--last kg-404"><!-- wp:group {"className":"kg-panel kg-404__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kg-panel kg-404__panel"><!-- wp:paragraph {"className":"kg-eyebrow"} -->
<p class="kg-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kg-pagehead__title"} -->
<h1 class="wp-block-heading kg-pagehead__title">This path is not raked yet.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The page you were looking for has moved or never grew. Try a search, or start again from the gardens.</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search the site","buttonText":"Search","className":"kg-search"} /-->

<!-- wp:buttons {"className":"kg-links"} -->
<div class="wp-block-buttons kg-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">Projects</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
