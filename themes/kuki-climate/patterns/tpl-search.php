<?php
/**
 * Title: Template: search
 * Slug: kuki-climate/tpl-search
 * Categories: kuki-climate
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main"><!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-sec kc-page"><!-- wp:search {"label":"<?php echo esc_attr( kuki_climate_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( kuki_climate_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide","className":"kc-list"} -->
<div class="wp-block-query alignwide kc-list"><!-- wp:post-template -->
<!-- wp:group {"className":"kc-list__item","layout":{"type":"default"}} -->
<div class="wp-block-group kc-list__item"><!-- wp:post-title {"level":2,"isLink":true} /-->

<!-- wp:post-date /-->

<!-- wp:post-excerpt {"moreText":""} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->