<?php
/**
 * Title: Home: from the journal
 * Slug: himuro-gelato/front-journal
 * Categories: himuro-gelato
 * Viewport Width: 1440
 * Description: Two ruled journal rows from the latest posts: a portrait thumbnail, the date, the title and an excerpt.
 */
?>
<!-- wp:group {"className":"hg-journal hg-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-journal hg-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'jn_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"hg-jq","layout":{"type":"default"}} -->
<div class="wp-block-query hg-jq"><!-- wp:post-template {"className":"hg-jlist"} -->
<!-- wp:group {"className":"hg-jrow","layout":{"type":"default"}} -->
<div class="wp-block-group hg-jrow"><!-- wp:post-featured-image {"isLink":true,"className":"hg-jrow__img"} /-->

<!-- wp:group {"className":"hg-jrow__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-jrow__txt"><!-- wp:post-date {"format":"j F Y","className":"hg-jrow__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hg-jrow__t"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"hg-jrow__x"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"hg-more"} -->
<p class="hg-more"><a href="/journal/"><?php echo esc_html( himuro_gelato_t( 'jn_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
