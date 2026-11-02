<?php
/**
 * Title: Template: search
 * Slug: aya-paper/tpl-search
 * Categories: aya-paper
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ap-main ap-index","layout":{"type":"default"}} -->
<main class="wp-block-group ap-main ap-index">
<!-- wp:group {"className":"ap-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ap-pagehead">
<!-- wp:query-title {"type":"search","level":1} /-->

<!-- wp:paragraph {"className":"ap-lead"} -->
<p class="ap-lead"><?php echo wp_kses_post( aya_paper_t( 'k64edb01a' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-jsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-jsec">
<!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ap-journal ap-journal--list"} -->
<div class="wp-block-query ap-journal ap-journal--list"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ap-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"className":"ap-ent__meta"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ap-note__date"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aya_paper_t( 'k6fcb3e86' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-prose">
<!-- wp:group {"className":"ap-prose__head","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__head">
<!-- wp:heading {"level":2,"className":"ap-subh"} -->
<h2 class="wp-block-heading ap-subh"><?php echo wp_kses_post( aya_paper_t( 'k1ff6e16b' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-prose__body","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__body">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aya_paper_t( 'k7b8105a6' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-prose">
<!-- wp:group {"className":"ap-prose__head","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__head">
<!-- wp:heading {"level":2,"className":"ap-subh"} -->
<h2 class="wp-block-heading ap-subh"><?php echo wp_kses_post( aya_paper_t( 'k2b2f5fe6' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-prose__body","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__body">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aya_paper_t( 'k742bae0e' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-closer","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-closer">
<!-- wp:paragraph {"className":"ap-dotlink"} -->
<p class="ap-dotlink"><a href="/"><?php echo wp_kses_post( aya_paper_t( 'kebe32945' ) ); ?></a></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->