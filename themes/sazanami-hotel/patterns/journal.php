<?php
/**
 * Title: Journal: three latest posts
 * Slug: sazanami-hotel/journal
 * Categories: sazanami-hotel
 * Viewport Width: 1440
 * Description: Chapter "journal" on slate: the three latest posts in one row with a 3:2 thumbnail, date and title.
 */
?>
<!-- wp:group {"anchor":"journal","tagName":"section","className":"sz-ch sz-ch--slate","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group sz-ch sz-ch--slate"><!-- wp:group {"className":"sz-opener sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group sz-opener sp-reveal sp-reveal--up "><!-- wp:html -->
<span class="sz-wave-wrap" aria-hidden="true"><?php echo sazanami_hotel_icon( 'wave', 'sz-wave' ); ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sz-opener__w"} -->
<p class="sz-opener__w"><?php echo esc_html( sazanami_hotel_t( 'w_journal' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"sz-posts sp-reveal"} -->
<div class="wp-block-query sz-posts sp-reveal"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sz-post__img"} /-->

<!-- wp:post-date {"className":"sz-post__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sz-post__t"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

</section>
<!-- /wp:group -->

