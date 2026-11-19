<?php
/**
 * Title: Home: journal, three square posts
 * Slug: yuzuriha-retreat/front-journal
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Label, heading and the latest three posts as square thumbnails with a circle chevron, pager dots, a hashtag category and the title.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--mist yr-sec--journal","layout":{"type":"default"},"anchor":"journal"} -->
<section id="journal" class="wp-block-group yr-sec yr-sec--mist yr-sec--journal"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'jr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-h2"} -->
<h2 class="wp-block-heading yr-h2"><?php echo esc_html( yuzuriha_retreat_t( 'jr_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"yr-journal__q sp-reveal sp-reveal--up"} -->
<div class="wp-block-query yr-journal__q sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"yr-journal__grid","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","scale":"cover","className":"yr-journal__img"} /-->

<!-- wp:html -->
<p class="yr-dots" aria-hidden="true"><span></span><span></span><span></span><span></span></p>
<!-- /wp:html -->

<!-- wp:post-terms {"term":"category","prefix":"#","className":"yr-tags"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"yr-journal__t"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
