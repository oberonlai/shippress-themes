<?php
/**
 * Title: Home: garden projects mosaic
 * Slug: koke-garden/home-projects
 * Categories: koke-garden
 * Keywords: garden design, projects, mosaic
 * Viewport Width: 1440
 * Description: The garden projects as a quiet mosaic of photo cards and moss, stone and gravel cards carrying line-drawn plan sketches.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-section kg-section--raked","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-section--raked"><!-- wp:group {"align":"wide","className":"kg-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kg-sechead"><!-- wp:paragraph {"className":"kg-eyebrow"} -->
<p class="kg-eyebrow">Gardens</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kg-sechead__title"} -->
<h2 class="wp-block-heading kg-sechead__title">Six gardens, drawn as plans first.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"kg-links"} -->
<div class="wp-block-buttons kg-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/projects/">All projects</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php echo Koke_Garden_Projects::mosaic(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme. ?></section>
<!-- /wp:group -->
