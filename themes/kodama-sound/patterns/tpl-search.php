<?php
/**
 * Title: Template: search
 * Slug: kodama-sound/tpl-search
 * Categories: kodama-sound
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kd-main","layout":{"type":"default"}} -->
<main class="wp-block-group kd-main"><!-- wp:group {"tagName":"section","className":"kd-sec kd-p","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-p"><!-- wp:group {"className":"kd-wide","layout":{"type":"default"}} -->
<div class="wp-block-group kd-wide"><!-- wp:search {"label":"<?php echo esc_attr( kodama_sound_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( kodama_sound_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"level":3,"className":"kd-h3 kd-h3--j"} /-->

<!-- wp:post-date {"className":"kd-jdate"} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->