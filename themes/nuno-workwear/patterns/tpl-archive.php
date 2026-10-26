<?php
/**
 * Title: Template: archive
 * Slug: nuno-workwear/tpl-archive
 * Categories: nuno-workwear
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"nw-main","layout":{"type":"default"}} -->
<main class="wp-block-group nw-main"><!-- wp:pattern {"slug":"nuno-workwear/head-journal"} /--><!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-page"><!-- wp:group {"className":"nw-in","layout":{"type":"default"}} -->
<div class="wp-block-group nw-in"><!-- wp:group {"className":"nw-hs","layout":{"type":"default"}} -->
<div class="wp-block-group nw-hs"><!-- wp:group {"className":"nw-hs__l","layout":{"type":"default"}} -->
<div class="wp-block-group nw-hs__l"><!-- wp:paragraph {"className":"nw-eyebrow"} -->
<p class="nw-eyebrow"><?php echo wp_kses_post( nuno_workwear_t( 'kfa658b32' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo wp_kses_post( nuno_workwear_t( 'k7d9725b9' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-hs__r","layout":{"type":"default"}} -->
<div class="wp-block-group nw-hs__r"><!-- wp:paragraph {"className":"nw-lead"} -->
<p class="nw-lead"><?php echo wp_kses_post( nuno_workwear_t( 'kb85fbe7e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"nw-loop"} -->
<div class="wp-block-query nw-loop"><!-- wp:post-template {"className":"nw-loop__list"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:post-date {"className":"nw-eyebrow"} /-->

<!-- wp:post-title {"isLink":true,"level":2,"className":"nw-card__name"} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->