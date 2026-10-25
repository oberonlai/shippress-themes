<?php
/**
 * Title: Home: notes from the counter
 * Slug: shiori-books/front-journal
 * Categories: shiori-books
 * Keywords: bookshop, journal, posts
 * Viewport Width: 1440
 * Description: The three latest journal posts in three columns.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sb-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sb-journal"><!-- wp:group {"className":"sb-journal__intro","layout":{"type":"default"}} -->
<div class="wp-block-group sb-journal__intro"><!-- wp:paragraph {"className":"sb-label"} -->
<p class="sb-label"><?php echo esc_html( shiori_books_t( 'jr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( shiori_books_t( 'jr_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"sb-journal__q"} -->
<div class="wp-block-query sb-journal__q"><!-- wp:post-template {"className":"sb-cards sp-stagger","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sb-card-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sb-card-post sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sb-card-post__img"} /-->

<!-- wp:post-date {"format":"d.m.Y","className":"sb-card-post__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","className":"sb-card-post__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"sb-arrow sb-journal__all"} -->
<p class="sb-arrow sb-journal__all"><a href="/journal/"><?php echo esc_html( shiori_books_t( 'jr_all' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
