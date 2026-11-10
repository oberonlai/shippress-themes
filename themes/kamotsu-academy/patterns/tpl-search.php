<?php
/**
 * Title: Template: search
 * Slug: kamotsu-academy/tpl-search
 * Categories: kamotsu-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: Search results.
 */
?>
<!-- wp:group {"tagName":"main","className":"ka-main","layout":{"type":"default"}} -->
<main class="wp-block-group ka-main"><!-- wp:group {"className":"ka-sec ka-wrap ka-arch","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sec ka-wrap ka-arch">
<!-- wp:query-title {"type":"search","level":1,"className":"ka-pagetitle"} /-->
<!-- wp:search {"label":"<?php echo kamotsu_academy_a( 'search_h' ); ?>","showLabel":false,"buttonText":"<?php echo kamotsu_academy_a( 'search_h' ); ?>"} /-->
<!-- wp:query {"queryId":12,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"ka-sq-q","layout":{"type":"default"}} -->
<div class="wp-block-query ka-sq-q"><!-- wp:post-template {"className":"ka-sq-row sp-stagger","layout":{"type":"default"}} -->
<!-- wp:group {"className":"ka-sq sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sq sp-reveal sp-reveal--up">
<!-- wp:post-featured-image {"isLink":false,"className":"ka-sq__img"} /-->
<!-- wp:post-excerpt {"excerptLength":12,"className":"ka-sq__k"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ka-sq__t"} /-->
<!-- wp:html -->
<span class="ka-chev ka-chev--card" aria-hidden="true"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kamotsu_academy_t( 'tpl_none' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group --></main>
<!-- /wp:group -->
