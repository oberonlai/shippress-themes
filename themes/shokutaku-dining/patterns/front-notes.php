<?php
/**
 * Title: Home: from the kitchen notebook (journal)
 * Slug: shokutaku-dining/front-notes
 * Categories: shokutaku-dining
 * Keywords: journal, posts, stories
 * Viewport Width: 1440
 * Description: Ghost word NOTES and the three latest posts as staggered arch-topped cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"shk-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull shk-notes"><!-- wp:paragraph {"className":"shk-ghost"} -->
<p class="shk-ghost">NOTES</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"shk-in","layout":{"type":"default"}} -->
<div class="wp-block-group shk-in"><!-- wp:heading {"level":2,"className":"shk-h2 shk-h2--center"} -->
<h2 class="wp-block-heading shk-h2 shk-h2--center">From the kitchen notebook.</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"shk-cards","layout":{"type":"default"}} -->
<div class="wp-block-query shk-cards"><!-- wp:post-template {"className":"shk-cards__list","layout":{"type":"default"}} -->
<!-- wp:group {"className":"shk-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group shk-card sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"5/7","className":"shk-arch shk-arch--small shk-card__img"} /-->

<!-- wp:post-date {"format":"j F Y","className":"shk-label"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"shk-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"className":"shk-card__ex"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
