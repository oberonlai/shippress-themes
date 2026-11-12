<?php
/**
 * Title: Template: single post
 * Slug: tsubasa-college/tpl-single
 * Categories: tsubasa-college
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"main","className":"tc-main","layout":{"type":"default"}} -->
<main class="wp-block-group tc-main"><!-- wp:group {"align":"full","className":"tc-sec tc-plain","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull tc-sec tc-plain"><!-- wp:post-terms {"term":"category","className":"tc-label"} /-->

<!-- wp:post-title {"level":1,"className":"tc-h1"} /-->

<!-- wp:group {"className":"tc-rule","layout":{"type":"default"}} -->
<div class="wp-block-group tc-rule"></div>
<!-- /wp:group -->

<!-- wp:post-date {"format":"<?php echo esc_attr( tsubasa_college_t( 'date_fmt' ) ); ?>"} /-->

<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
