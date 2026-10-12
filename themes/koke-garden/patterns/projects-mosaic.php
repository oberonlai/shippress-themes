<?php
/**
 * Title: Projects: mosaic and index
 * Slug: koke-garden/projects-mosaic
 * Categories: koke-garden
 * Keywords: garden design, projects, mosaic, index
 * Viewport Width: 1440
 * Description: All garden projects as the mosaic of photo and plan cards, then a hairline index with type, place and year.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-section kg-section--raked","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-section--raked"><?php echo Koke_Garden_Projects::mosaic(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme. ?></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kg-section kg-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-section--last"><!-- wp:group {"align":"wide","className":"kg-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kg-sechead"><!-- wp:paragraph {"className":"kg-eyebrow"} -->
<p class="kg-eyebrow">Index</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kg-sechead__title"} -->
<h2 class="wp-block-heading kg-sechead__title">All six gardens at a glance.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<?php echo Koke_Garden_Projects::index_list(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme. ?></section>
<!-- /wp:group -->
