<?php
/**
 * Title: Template: journal index, archive and search
 * Slug: shokutaku-dining/tpl-archive
 * Categories: shokutaku-dining
 * Inserter: no
 */
?>
<!-- wp:group {"className":"shk-pagehead shk-pagehead--plain","layout":{"type":"default"}} -->
<div class="wp-block-group shk-pagehead shk-pagehead--plain"><!-- wp:paragraph {"className":"shk-ghost"} -->
<p class="shk-ghost">NOTES</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"showPrefix":false,"className":"shk-h2 shk-h2--center"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"shk-in shk-archive","layout":{"type":"default"}} -->
<div class="wp-block-group shk-in shk-archive"><!-- wp:query {"queryId":3,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"shk-cards","layout":{"type":"default"}} -->
<div class="wp-block-query shk-cards"><!-- wp:post-template {"className":"shk-cards__list shk-cards__list--two","layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"5/7","className":"shk-arch shk-arch--small shk-card__img"} /-->

<!-- wp:post-date {"format":"j F Y","className":"shk-label"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"shk-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24,"className":"shk-card__ex"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
