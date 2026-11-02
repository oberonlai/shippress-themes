<?php
/**
 * Title: Template: home
 * Slug: aya-paper/tpl-home
 * Categories: aya-paper
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ap-main ap-index","layout":{"type":"default"}} -->
<main class="wp-block-group ap-main ap-index">
<!-- wp:group {"className":"ap-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ap-pagehead">
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo wp_kses_post( aya_paper_t( 'k6b2b5614' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-lead"} -->
<p class="ap-lead"><?php echo wp_kses_post( aya_paper_t( 'kc6e1ddb1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-jfeat-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-jfeat-sec">
<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ap-jfeat"} -->
<div class="wp-block-query ap-jfeat"><!-- wp:post-template -->
<!-- wp:group {"className":"ap-jfeat__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ap-jfeat__photo">
<!-- wp:group {"className":"ap-frame ap-frame--line","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame ap-frame--line">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ap-jfeat__img"} /-->


</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-jfeat__text","layout":{"type":"default"}} -->
<div class="wp-block-group ap-jfeat__text">
<!-- wp:post-terms {"term":"category","className":"ap-chip"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"ap-jfeat__title"} /-->

<!-- wp:post-excerpt {"excerptLength":40,"className":"ap-jfeat__excerpt"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ap-note__date"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-cat ap-cat--list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-cat ap-cat--list">
<!-- wp:group {"className":"ap-cat__label","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cat__label">
<!-- wp:paragraph {"className":"ap-label sp-reveal sp-reveal--up"} -->
<p class="ap-label sp-reveal sp-reveal--up"><?php echo wp_kses_post( aya_paper_t( 'k67bfaf2f' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-cat__body ap-cat__body--list","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cat__body ap-cat__body--list">
<!-- wp:query {"queryId":2,"query":{"perPage":30,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ap-journal ap-journal--list"} -->
<div class="wp-block-query ap-journal ap-journal--list"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ap-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"className":"ap-ent__meta"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ap-note__date"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-prose">
<!-- wp:group {"className":"ap-prose__head","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__head">
<!-- wp:heading {"level":2,"className":"ap-subh"} -->
<h2 class="wp-block-heading ap-subh"><?php echo wp_kses_post( aya_paper_t( 'k04d14442' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-prose__body","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__body">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aya_paper_t( 'k649d30ef' ) ); ?></p>
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
<h2 class="wp-block-heading ap-subh"><?php echo wp_kses_post( aya_paper_t( 'k49dc6da5' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-prose__body","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__body">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aya_paper_t( 'k05c5a547' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->