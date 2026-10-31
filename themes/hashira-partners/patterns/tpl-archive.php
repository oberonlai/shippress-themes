<?php
/**
 * Title: Template: archive
 * Slug: hashira-partners/tpl-archive
 * Categories: hashira-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hp-main","layout":{"type":"default"}} -->
<main class="wp-block-group hp-main"><!-- wp:group {"tagName":"section","align":"full","className":"hp-ihead hp-ihead--small","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-ihead hp-ihead--small"><!-- wp:query-title {"type":"archive","level":1,"className":"hp-h1 hp-h1--close hp-h1--qt"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hp-ibody hp-ibody--notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-ibody hp-ibody--notes"><!-- wp:group {"className":"hp-wrap hp-arch__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hp-wrap hp-arch__wrap"><!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"hp-notes-q"} -->
<div class="wp-block-query hp-notes-q"><!-- wp:post-template {"className":"hp-arch hp-arch--posts sp-stagger"} -->
<!-- wp:group {"className":"hp-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hp-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"hp-card__bar","layout":{"type":"default"}} -->
<div class="wp-block-group hp-card__bar"></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hp-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"hp-card__sum"} /-->

<!-- wp:group {"className":"hp-card__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hp-card__meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"j M Y"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-card__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hp-card__foot"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/3","className":"hp-card__photo"} /-->

<!-- wp:read-more {"content":"View More →","className":"hp-card__more"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hp-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hashira_partners_t( 'k83fdfdea' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->