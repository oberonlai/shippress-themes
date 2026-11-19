<?php
/**
 * Title: Template: single post
 * Slug: kisha-rail/tpl-single
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Single post: title, meta row and a narrow text column.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-sec kr-article","layout":{"type":"default"}} -->
<section class="wp-block-group kr-sec kr-article">
<!-- wp:group {"className":"kr-col","layout":{"type":"default"}} -->
<div class="wp-block-group kr-col">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 'single_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"className":"kr-h1p"} /-->

<!-- wp:post-terms {"term":"category","className":"kr-post__cat"} /-->

<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"kr-ph kr-ph--32"} /-->

<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"kr-tags"} /-->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
