<?php
/**
 * Title: Home: story cards from the latest posts
 * Slug: kamotsu-academy/front-stories
 * Categories: kamotsu-academy
 * Viewport Width: 1440
 * Description: Centred heading, three square story cards from the latest posts with a round chevron, and an outline pill.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"stories","className":"ka-sec ka-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull ka-sec ka-stories">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-sechead ka-sechead--c","layout":{"type":"default"}} -->
<div class="wp-block-group ka-sechead ka-sechead--c">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'st_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'st_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ka-sq-q","layout":{"type":"default"}} -->
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
<!-- wp:buttons {"className":"ka-pillrow"} -->
<div class="wp-block-buttons ka-pillrow">
<!-- wp:button {"className":"is-style-outline-pill ka-pill ka-pill--out"} -->
<div class="wp-block-button is-style-outline-pill ka-pill ka-pill--out"><a class="wp-block-button__link wp-element-button" href="/news/"><?php echo wp_kses_post( kamotsu_academy_t( 'st_pill' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
