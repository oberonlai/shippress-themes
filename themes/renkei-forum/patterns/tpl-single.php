<?php
/**
 * Title: Template: article
 * Slug: renkei-forum/tpl-single
 * Categories: renkei-forum
 * Viewport Width: 1440
 * Description: Article title, date and content on the dark ground.
 */
?>
<!-- wp:group {"className":"rf-page rf-single","layout":{"type":"default"}} -->
<div class="wp-block-group rf-page rf-single"><!-- wp:post-date {"className":"rf-label"} /-->

<!-- wp:post-title {"level":1,"className":"rf-single__title"} /-->

<!-- wp:post-content {"className":"rf-single__body"} /-->

<!-- wp:paragraph {"className":"rf-more"} -->
<p class="rf-more"><a href="/journal/"><?php echo wp_kses_post( rf_t( 'k4fb581ac' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
