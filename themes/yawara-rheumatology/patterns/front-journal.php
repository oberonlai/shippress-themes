<?php
/**
 * Title: Home: patient notes
 * Slug: yawara-rheumatology/front-journal
 * Categories: yawara-rheumatology
 * Viewport Width: 1440
 * Description: Heading with an all-notes link, then the latest three posts as abutting squares with date-chip tabs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yw-journal"} -->
<section class="wp-block-group alignfull yw-journal"><!-- wp:group {"className":"yw-journal__head"} -->
<div class="wp-block-group yw-journal__head"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Patient notes', 'yawara-rheumatology' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yw-more"} -->
<p class="yw-more"><a href="/journal/"><?php esc_html_e( 'all notes', 'yawara-rheumatology' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","className":"yw-query"} -->
<div class="wp-block-query alignfull yw-query"><!-- wp:post-template {"className":"yw-posts"} -->
<!-- wp:group {"className":"yw-cell yw-cell--sq"} -->
<div class="wp-block-group yw-cell yw-cell--sq"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","scale":"cover","className":"yw-cell__img"} /-->

<!-- wp:group {"className":"yw-tab yw-tab--post"} -->
<div class="wp-block-group yw-tab yw-tab--post"><!-- wp:post-date {"format":"Y.m.d","className":"yw-chip"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"yw-tab__t"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
