<?php
/**
 * Title: Home: journal rows
 * Slug: butai-playhouse/front-journal
 * Categories: butai-playhouse
 * Viewport Width: 1440
 * Description: Three latest posts as ruled rows on a pale ground: date, title, thumbnail and a pill arrow.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bp-section bp-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bp-section bp-journal"><!-- wp:group {"className":"bp-wide","layout":{"type":"default"}} -->
<div class="wp-block-group bp-wide"><!-- wp:group {"className":"bp-journal__head","layout":{"type":"default"}} -->
<div class="wp-block-group bp-journal__head"><!-- wp:heading {"level":2,"className":"bp-title"} -->
<h2 class="wp-block-heading bp-title"><?php echo wp_kses_post( butai_playhouse_t( 'k6b2b5614' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"bp-sub"} -->
<p class="bp-sub"><?php echo wp_kses_post( butai_playhouse_t( 'kc6bce625' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"bp-rows"} -->
<div class="wp-block-query bp-rows"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"bp-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group bp-row sp-reveal sp-reveal--up"><!-- wp:group {"className":"bp-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group bp-row__text"><!-- wp:post-date {"format":"j M Y","className":"bp-row__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"bp-row__title"} /-->

<!-- wp:read-more {"content":"Read →","className":"bp-row__more"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"bp-row__thumb"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
