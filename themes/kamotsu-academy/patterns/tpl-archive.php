<?php
/**
 * Title: Template: stories archive
 * Slug: kamotsu-academy/tpl-archive
 * Categories: kamotsu-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: Stories, archive, category and tag pages: a heading and square story cards.
 */
?>
<!-- wp:group {"tagName":"main","className":"ka-main","layout":{"type":"default"}} -->
<main class="wp-block-group ka-main">
<!-- wp:group {"align":"full","className":"ka-pagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ka-pagewrap">
<!-- wp:group {"tagName":"section","className":"ka-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group ka-pagehead">
<!-- wp:cover {"url":"<?php echo kamotsu_academy_img( 'p09-theory-evening.webp' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"isDark":false,"className":"ka-pagehead__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light ka-pagehead__photo"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo kamotsu_academy_a( 'alt_p09' ); ?>" src="<?php echo kamotsu_academy_img( 'p09-theory-evening.webp' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:query-title {"type":"archive","showPrefix":false,"level":1,"className":"ka-pagehead__word ka-pw-7"} /-->
</section>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ka-sec ka-wrap ka-arch","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sec ka-wrap ka-arch">
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
