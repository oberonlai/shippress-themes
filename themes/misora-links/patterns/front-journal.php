<?php
/**
 * Title: Home: journal
 * Slug: misora-links/front-journal
 * Categories: misora-links
 * Viewport Width: 1440
 * Description: Latest three posts in ticket frames.
 */
?>
<!-- wp:group {"className":"ml-band ml-band--pine ml-band--journal","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-band ml-band--pine ml-band--journal"><!-- wp:group {"className":"ml-sheet ml-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group ml-sheet ml-sheet--plain"><!-- wp:paragraph {"className":"ml-label"} -->
<p class="ml-label"><?php echo esc_html( misora_links_t( 'journal_a' ) ); ?> / <em><?php echo esc_html( misora_links_t( 'journal_b' ) ); ?></em></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"ml-sec__h2"} -->
<h2 class="wp-block-heading ml-sec__h2"><?php echo esc_html( misora_links_t( 'journal_h2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-journal__text"} -->
<p class="ml-journal__text"><?php echo esc_html( misora_links_t( 'journal_body' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ml-journal__query sp-reveal sp-reveal--up"} -->
<div class="wp-block-query ml-journal__query sp-reveal sp-reveal--up"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ml-ticket ml-ticket--sm"} /-->
<!-- wp:post-date {"className":"ml-post__date"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ml-post__title"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --><!-- wp:paragraph {"className":"ml-textlink"} -->
<p class="ml-textlink"><a href="/journal/"><?php echo esc_html( misora_links_t( 'journal_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
