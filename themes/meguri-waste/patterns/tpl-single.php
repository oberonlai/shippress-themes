<?php
/**
 * Title: Template: single
 * Slug: meguri-waste/tpl-single
 * Categories: meguri-waste
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"mw-main","layout":{"type":"default"}} -->
<main class="wp-block-group mw-main"><!-- wp:group {"align":"full","className":"mw-lead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-lead"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:post-terms {"term":"category","className":"mw-tagchip"} /-->

<!-- wp:post-title {"level":1,"className":"mw-h1"} /-->

<!-- wp:separator {"className":"mw-hairline is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide mw-hairline"/>
<!-- /wp:separator -->

<!-- wp:post-date {"format":"<?php echo esc_attr( meguri_waste_t( 'date_fmt' ) ); ?>","className":"mw-case__meta"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-single","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-single"><!-- wp:group {"className":"mw-wrap mw-single__in","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap mw-single__in"><!-- wp:post-featured-image {"aspectRatio":"2.4","className":"mw-single__pic"} /-->

<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"mw-single__tags"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->