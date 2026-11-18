<?php
/**
 * Title: Template: journal list
 * Slug: kawa-dumplings/tpl-home
 * Categories: kawa-dumplings
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page and archive templates.
 */
?>
<!-- wp:group {"tagName":"main","className":"kd-main","layout":{"type":"default"}} -->
<main class="wp-block-group kd-main"><!-- wp:group {"tagName":"section","className":"kd-sec kd-listing kd-wide","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-listing kd-wide"><!-- wp:group {"className":"kd-listing__head","layout":{"type":"default"}} -->
<div class="wp-block-group kd-listing__head"><!-- wp:paragraph {"className":"kd-kicker"} -->
<p class="kd-kicker"><?php echo esc_html( kawa_dumplings_t( 'list_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kd-h1 kd-h1--page"} -->
<h1 class="wp-block-heading kd-h1 kd-h1--page"><?php echo esc_html( kawa_dumplings_t( 'list_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"kd-cards"} -->
<!-- wp:group {"className":"kd-card","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kd-card__img"} /-->

<!-- wp:group {"className":"kd-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group kd-card__body"><!-- wp:post-date {"format":"j M Y","className":"kd-card__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"kd-card__t"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"kd-card__x"} /--></div>
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
<p><?php echo esc_html( kawa_dumplings_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
