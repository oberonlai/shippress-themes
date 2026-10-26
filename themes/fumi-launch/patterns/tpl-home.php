<?php
/**
 * Title: Template: home
 * Slug: fumi-launch/tpl-home
 * Categories: fumi-launch
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"fl-main fl-main--front","layout":{"type":"default"}} -->
<main class="wp-block-group fl-main fl-main--front"><!-- wp:group {"className":"fl-sec fl-sec--field","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fl-sec fl-sec--field"><!-- wp:group {"className":"fl-frame fl-frame--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group fl-frame fl-frame--narrow"><!-- wp:paragraph {"className":"fl-label"} -->
<p class="fl-label"><?php echo wp_kses_post( fumi_launch_t( 'kb3c01a08' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"fl-h fl-h--xl"} -->
<h1 class="wp-block-heading fl-h fl-h--xl"><?php echo wp_kses_post( fumi_launch_t( 'k2e452571' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"fl-post","layout":{"type":"default"}} -->
<div class="wp-block-group fl-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"fl-ph"} /-->

<!-- wp:post-title {"isLink":true,"className":"fl-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":30} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( fumi_launch_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->