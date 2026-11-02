<?php
/**
 * Title: Home: journal
 * Slug: aya-paper/front-journal
 * Categories: aya-paper
 * Keywords: stationery, shop, paper
 * Viewport Width: 1440
 * Description: The latest three journal entries as a photograph, an underlined title and a mono date.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ap-sec ap-jsec", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ap-sec ap-jsec">
<!-- wp:heading {"className": "ap-head"} -->
<h2 class="wp-block-heading ap-head"><?php echo wp_kses_post( aya_paper_t( 'k3dbae2c6' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-jsec__intro"} -->
<p class="ap-jsec__intro"><?php echo wp_kses_post( aya_paper_t( 'kb3c1da17' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ap-journal"} -->
<div class="wp-block-query ap-journal"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ap-note__img"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ap-note__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ap-note__date"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aya_paper_t( 'k4fe84522' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"className": "ap-jsec__more", "layout": {"type": "default"}} -->
<div class="wp-block-group ap-jsec__more">
<!-- wp:paragraph {"className":"ap-dotlink"} -->
<p class="ap-dotlink"><a href="/journal/"><?php echo wp_kses_post( aya_paper_t( 'k6b59eea1' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->