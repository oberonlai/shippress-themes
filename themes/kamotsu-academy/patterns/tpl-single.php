<?php
/**
 * Title: Template: single story
 * Slug: kamotsu-academy/tpl-single
 * Categories: kamotsu-academy
 * Inserter: no
 * Viewport Width: 1440
 * Description: A story: the category word in white over the featured image with a docked date card, the title and text column, and three more stories as square cards.
 */
?>
<!-- wp:group {"tagName":"main","className":"ka-main","layout":{"type":"default"}} -->
<main class="wp-block-group ka-main">
<!-- wp:group {"align":"full","className":"ka-pagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ka-pagewrap">
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isDark":false,"className":"ka-pagehead ka-pagehead--post","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light ka-pagehead ka-pagehead--post"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:post-terms {"term":"category","className":"ka-pagehead__catword"} /-->
<!-- wp:group {"className":"ka-card ka-card--text","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card ka-card--text">
<!-- wp:group {"className":"ka-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group ka-card__text">
<!-- wp:paragraph {"className":"ka-card__k"} -->
<p class="ka-card__k"><?php echo wp_kses_post( kamotsu_academy_t( 'single_card_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-date {"className":"ka-card__t"} /-->
<!-- wp:html -->
<a class="ka-chev ka-chev--line" href="/fees/" aria-label="<?php echo kamotsu_academy_a( 'single_card_go' ); ?>"><svg viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M4 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-sec ka-wrap ka-single__body","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sec ka-wrap ka-single__body">
<!-- wp:post-title {"level":1,"className":"ka-single__title"} /-->
<!-- wp:post-content {"className":"ka-prose","layout":{"type":"constrained"}} /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ka-sec ka-sec--w ka-arch","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ka-sec ka-sec--w ka-arch">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sechead">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'single_more_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'single_more_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ka-sq-q","layout":{"type":"default"}} -->
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
<!-- /wp:post-template --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
