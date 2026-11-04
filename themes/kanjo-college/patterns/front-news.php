<?php
/**
 * Title: Home: college notices
 * Slug: kanjo-college/front-news
 * Categories: kanjo-college
 * Keywords: news, posts
 * Viewport Width: 1440
 * Description: The three latest posts as ruled rows: date, category chip and title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-news","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-news"><!-- wp:group {"className":"kc-in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-in"><!-- wp:group {"className":"kc-head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head"><!-- wp:paragraph {"className":"kc-chip sp-reveal sp-reveal--up"} -->
<p class="kc-chip sp-reveal sp-reveal--up"><?php echo wp_kses_post( kanjo_college_t( 'kdd1ba187' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up"><?php echo wp_kses_post( kanjo_college_t( 'k240e3b92' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"kc-rows"} -->
<div class="wp-block-query kc-rows"><!-- wp:post-template -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row"><!-- wp:post-date {"format":"j M Y","className":"kc-row__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kc-row__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-row__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kanjo_college_t( 'kd2f9730f' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/news/"><?php echo wp_kses_post( kanjo_college_t( 'k86a1efc6' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
