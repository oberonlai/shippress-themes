<?php
/**
 * Title: Home: notes
 * Slug: tana-furniture/front-notes
 * Categories: tana-furniture
 * Keywords: furniture, journal, news
 * Viewport Width: 1440
 * Description: Three latest journal posts as hairline-ruled rows: date, category, title and an arrow.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec tf-notes","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec tf-notes"><!-- wp:paragraph {"align":"center","className":"is-style-bracket-label tf-label"} -->
<p class="has-text-align-center is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'nt_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"tf-rows"} -->
<div class="wp-block-query alignwide tf-rows"><!-- wp:post-template -->
<!-- wp:group {"className":"tf-row","layout":{"type":"default"}} -->
<div class="wp-block-group tf-row"><!-- wp:post-date {"format":"j M Y","className":"tf-row__date"} /-->

<!-- wp:post-terms {"term":"category","className":"tf-row__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tf-row__title"} /-->

<!-- wp:paragraph {"className":"tf-row__arrow"} -->
<p class="tf-row__arrow">→</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"align":"center","className":"tf-more"} -->
<p class="has-text-align-center tf-more"><a href="/journal/"><?php echo esc_html( tana_furniture_t( 'nt_all' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
