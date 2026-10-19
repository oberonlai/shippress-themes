<?php
/**
 * Title: Home: notices
 * Slug: asahi-gakuen/notices
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: The three latest school notices as a dated list with category and a link to all notices.
 */
?>
<!-- wp:group {"tagName":"section","className":"ag-nt","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-nt">
<!-- wp:group {"className":"ag-sec__head","layout":{"type":"default"}} -->
<div class="wp-block-group ag-sec__head"><!-- wp:paragraph {"className":"ag-label"} -->
<p class="ag-label"><?php echo esc_html( asahi_gakuen_t( 'nt_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ag-sec__title"} -->
<h2 class="wp-block-heading ag-sec__title"><?php echo esc_html( asahi_gakuen_t( 'nt_title' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ag-nt__q"} -->
<div class="wp-block-query ag-nt__q"><!-- wp:post-template {"className":"ag-nt__list"} -->
<!-- wp:post-date {"format":"j M Y","className":"ag-nt__d"} /-->

<!-- wp:post-terms {"term":"category","className":"ag-nt__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ag-nt__t"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:html -->
<p class="ag-nt__all"><a href="/news/"><?php echo esc_html( asahi_gakuen_t( 'nt_all' ) ); ?> <span aria-hidden="true">&rarr;</span></a></p>
<!-- /wp:html --></section>
<!-- /wp:group -->
