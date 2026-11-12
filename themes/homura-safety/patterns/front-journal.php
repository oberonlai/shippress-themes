<?php
/**
 * Title: Home: journal
 * Slug: homura-safety/front-journal
 * Categories: homura-safety
 * Keywords: journal, posts
 * Viewport Width: 1440
 * Description: The three latest posts as small 16:9 thumbnails with titles.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"journal","className":"hs-sec hs-journal","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group alignfull hs-sec hs-journal"><!-- wp:group {"align":"wide","className":"hs-title hs-title--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-title hs-title--row"><!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up"><?php echo esc_html( homura_safety_t( 'jo_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'jo_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"hs-journal__q","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide hs-journal__q"><!-- wp:post-template {"className":"hs-journal__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":18} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"hs-more"} -->
<p class="hs-more"><a href="/journal/"><?php echo esc_html( homura_safety_t( 'jo_all' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
