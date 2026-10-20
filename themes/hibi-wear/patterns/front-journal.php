<?php
/**
 * Title: Home: journal
 * Slug: hibi-wear/front-journal
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Description: Three latest journal entries with rounded photos.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-journal"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'jo_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hw-h"} -->
<h2 class="wp-block-heading hw-h"><?php echo hibi_wear_lines( 'jo_title' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":5,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"hw-notes"} -->
<div class="wp-block-query alignwide hw-notes"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hw-note__img"} /-->

<!-- wp:group {"className":"hw-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hw-note__text"><!-- wp:post-terms {"term":"category","className":"hw-note__cat"} /-->

<!-- wp:post-date {"format":"F j, Y","className":"hw-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hw-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hibi_wear_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"wide","className":"hw-morewrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-morewrap"><!-- wp:paragraph {"className":"hw-more"} -->
<p class="hw-more"><a href="/journal/"><?php echo esc_html( hibi_wear_t( 'jo_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
