<?php
/**
 * Title: Home: journal
 * Slug: tsubasa-college/front-journal
 * Categories: tsubasa-college
 * Keywords: journal, posts
 * Viewport Width: 1440
 * Description: An uppercase label with a chevron, then the three latest posts as 16:9 thumbnails with a title and a date over a grey underline that ends in a red chevron.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"journal","className":"tc-sec tc-journal","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group alignfull tc-sec tc-journal"><!-- wp:heading {"align":"wide","className":"tc-journal__label"} -->
<h2 class="wp-block-heading alignwide tc-journal__label"><a href="/journal/"><?php echo esc_html( tsubasa_college_t( 'jo_h' ) ); ?></a> <span class="tc-chev">›</span></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"tc-journal__q","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide tc-journal__q"><!-- wp:post-template {"className":"tc-journal__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tc-journal__title"} /-->

<!-- wp:group {"className":"tc-journal__foot","layout":{"type":"default"}} -->
<div class="wp-block-group tc-journal__foot"><!-- wp:post-date {"format":"<?php echo esc_attr( tsubasa_college_t( 'date_fmt' ) ); ?>"} /-->

<!-- wp:paragraph {"className":"tc-chev-end"} -->
<p class="tc-chev-end"><span class="tc-chev">›</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
