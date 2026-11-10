<?php
/**
 * Title: Template: single
 * Slug: genba-diary/tpl-single
 * Categories: genba-diary
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"gd-main","layout":{"type":"default"}} -->
<main class="wp-block-group gd-main"><!-- wp:group {"className":"gd-pagehead gd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group gd-pagehead gd-wrap"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe"><!-- wp:post-terms {"term":"category","className":"gd-label"} /-->

<!-- wp:post-title {"level":1,"className":"gd-pagehead__title"} /-->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:post-date {"className":"gd-micro gd-single__date"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-single__tri","layout":{"type":"default"}} -->
<div class="wp-block-group gd-single__tri"><!-- wp:post-featured-image {"className":"gd-single__img"} /-->

<!-- wp:html -->
<span class="gd-mini__sq" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:post-content {"className":"gd-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"gd-isec gd-isec--band gd-related","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull gd-isec gd-isec--band gd-related"><!-- wp:group {"className":"gd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wrap"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo wp_kses_post( genba_diary_t( 'k05eaaa66' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gd-h2"} -->
<h2 class="wp-block-heading gd-h2"><?php echo wp_kses_post( genba_diary_t( 'kb57045fc' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"gd-posts gd-related-posts","layout":{"type":"default"}} -->
<div class="wp-block-query gd-posts gd-related-posts"><!-- wp:post-template {"className":"gd-cards gd-cards--posts","layout":{"type":"default"}} -->
<!-- wp:group {"className":"gd-card","layout":{"type":"default"}} -->
<div class="wp-block-group gd-card"><!-- wp:post-terms {"term":"category","className":"gd-micro"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"gd-card__t"} /-->

<!-- wp:post-featured-image {"isLink":true,"className":"gd-card__img"} /-->

<!-- wp:post-excerpt {"excerptLength":18,"className":"gd-card__p"} /-->

<!-- wp:group {"className":"gd-more","layout":{"type":"default"}} -->
<div class="wp-block-group gd-more"><!-- wp:read-more {"content":"VIEW MORE"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"genba-diary/front-request"} /-->