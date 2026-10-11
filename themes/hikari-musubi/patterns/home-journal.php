<?php
/**
 * Title: Home: from the journal
 * Slug: hikari-musubi/home-journal
 * Categories: hikari-musubi
 * Keywords: journal, posts, news, blog
 * Description: The three latest journal posts as a quiet list.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-journal"><!-- wp:paragraph {"align":"center","className":"is-style-label"} -->
<p class="has-text-align-center is-style-label">From the journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Notes from the planning table</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"hm-latest","layout":{"type":"default"}} -->
<div class="wp-block-query hm-latest"><!-- wp:post-template {"className":"hm-latest__items"} -->
<!-- wp:group {"className":"hm-latest__item","layout":{"type":"default"}} -->
<div class="wp-block-group hm-latest__item"><!-- wp:post-date {"className":"hm-latest__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hm-latest__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"hm-buttons","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons hm-buttons"><!-- wp:button {"className":"is-style-quiet"} -->
<div class="wp-block-button is-style-quiet"><a class="wp-block-button__link wp-element-button" href="/journal/">Read the journal</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
