<?php
/**
 * Title: Journal: notes from the desk
 * Slug: ashiato-hotel/journal
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: The three latest posts as horizontal rows with a rounded thumbnail.
 */
?>
<!-- wp:group {"tagName":"section","className":"ah-sec ah-journal","layout":{"type":"default"}} -->
<section class="wp-block-group ah-sec ah-journal"><!-- wp:group {"className":"ah-journal__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-journal__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 'journal_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ah-more"} -->
<p class="ah-more"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'journal_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ah-journal__q","layout":{"type":"default"}} -->
<div class="wp-block-query ah-journal__q"><!-- wp:post-template {"className":"ah-posts"} -->
<!-- wp:group {"className":"ah-post","layout":{"type":"default"}} -->
<div class="wp-block-group ah-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ah-post__img"} /-->

<!-- wp:group {"className":"ah-post__body","layout":{"type":"default"}} -->
<div class="wp-block-group ah-post__body"><!-- wp:post-date {"format":"F j, Y","className":"ah-post__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"ah-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":18,"className":"ah-post__x"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
