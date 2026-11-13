<?php
/**
 * Title: Home: notes from the counter
 * Slug: kaimon-fishmongers/front-journal
 * Categories: kaimon-fishmongers
 * Keywords: journal, news, posts
 * Viewport Width: 1440
 * Description: The three latest posts as ruled text rows: date, category, title and a circle arrow.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kf-sec kf-sec--far kf-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kf-sec kf-sec--far kf-journal"><!-- wp:group {"className":"kf-journal__in","layout":{"type":"default"}} -->
<div class="wp-block-group kf-journal__in"><!-- wp:paragraph {"className":"kf-label"} -->
<p class="kf-label"><?php echo wp_kses_post( kaimon_fishmongers_t( 'k3dbae2c6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kf-h2"} -->
<h2 class="wp-block-heading kf-h2"><?php echo wp_kses_post( kaimon_fishmongers_t( 'k04d14442' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"kf-news sp-reveal sp-reveal--up"} -->
<div class="wp-block-query kf-news sp-reveal sp-reveal--up"><!-- wp:post-template -->
<!-- wp:group {"className":"kf-news__row kf-rule","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group kf-news__row kf-rule"><!-- wp:post-date {"format":"<?php echo esc_attr( kaimon_fishmongers_t( 'date_fmt' ) ); ?>","className":"kf-news__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kf-news__cat"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"kf-news__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"kf-link"} -->
<p class="kf-link"><a href="/journal/"><?php echo wp_kses_post( kaimon_fishmongers_t( 'kdb9c7592' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
