<?php
/**
 * Title: Journal: three notes from the quay
 * Slug: soko-hotel/journal
 * Categories: soko-hotel
 * Viewport Width: 1440
 * Description: Paper ground; heading and a three-column list of the latest journal posts with 2.4:1 thumbnails.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-sec sk-journal","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-journal"><!-- wp:heading {"level":2,"className":"sk-h2"} -->
<h2 class="wp-block-heading sk-h2"><?php echo esc_html( soko_hotel_t( 'journal_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sk-journal__list sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-journal__list sp-reveal sp-reveal--up"><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"sk-posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sk-post","layout":{"type":"default"}} -->
<div class="wp-block-group sk-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"12/5","className":"sk-post__img"} /-->

<!-- wp:post-date {"format":"F j, Y","className":"sk-post__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"sk-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-more"} -->
<p class="sk-more"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'journal_all' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
