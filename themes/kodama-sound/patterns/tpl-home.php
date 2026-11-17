<?php
/**
 * Title: Template: home
 * Slug: kodama-sound/tpl-home
 * Categories: kodama-sound
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kd-main","layout":{"type":"default"}} -->
<main class="wp-block-group kd-main"><!-- wp:pattern {"slug":"kodama-sound/journal-head"} /-->

<!-- wp:group {"tagName":"section","className":"kd-sec kd-p kd-arch","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-p kd-arch"><!-- wp:group {"className":"kd-wide","layout":{"type":"default"}} -->
<div class="wp-block-group kd-wide"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"kd-jrows"} -->
<!-- wp:group {"className":"kd-jrow","layout":{"type":"default"}} -->
<div class="wp-block-group kd-jrow"><!-- wp:group {"className":"kd-jthumb","layout":{"type":"default"}} -->
<div class="wp-block-group kd-jthumb"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-jbody","layout":{"type":"default"}} -->
<div class="wp-block-group kd-jbody"><!-- wp:post-date {"format":"F j, Y","className":"kd-jdate"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"kd-h3 kd-h3--j"} /-->

<!-- wp:post-excerpt {"excerptLength":24,"className":"kd-jx"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kd-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kodama_sound_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->