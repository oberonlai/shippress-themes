<?php
/**
 * Title: Post: single article
 * Slug: kosame-hotpot/post-page
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Inserter: no
 * Description: A single post: its featured image on the stage, the title and date, the article text with tags and a button to the journal.
 */
?>
<!-- wp:group {"className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split"><!-- wp:group {"className":"ks-stage ks-stage--n1","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage ks-stage--n1"><!-- wp:group {"className":"ks-stage__slides","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__slides"><!-- wp:post-featured-image {"sizeSlug":"full","className":"ks-stage__slide ks-stage__slide--1"} /--></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ks-stage__scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--a"} -->
<p class="ks-stage__phrase ks-stage__phrase--a"><?php echo esc_html( kosame_hotpot_t( 'phrase_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--b"} -->
<p class="ks-stage__phrase ks-stage__phrase--b"><?php echo esc_html( kosame_hotpot_t( 'phrase_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-col ks-col--inner","layout":{"type":"default"}} -->
<div class="wp-block-group ks-col ks-col--inner"><!-- wp:group {"anchor":"top","className":"ks-pagehead ks-pagehead--post","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group ks-pagehead ks-pagehead--post"><!-- wp:paragraph {"className":"ks-pagehead__kicker"} -->
<p class="ks-pagehead__kicker"><?php echo esc_html( kosame_hotpot_t( 'post_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"className":"ks-pagehead__h1"} /-->

<!-- wp:post-date {"format":"j F Y","className":"ks-notice__date"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-article","layout":{"type":"default"}} -->
<div class="wp-block-group ks-article"><!-- wp:post-content {"layout":{"type":"default"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-article__tags","layout":{"type":"default"}} -->
<div class="wp-block-group ks-article__tags"><!-- wp:post-terms {"term":"post_tag","separator":" · "} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ks-more-wrap sp-reveal sp-reveal--up"} -->
<div class="wp-block-buttons ks-more-wrap sp-reveal sp-reveal--up"><!-- wp:button {"className":"ks-more"} -->
<div class="wp-block-button ks-more"><a class="wp-block-button__link wp-element-button" href="<?php echo kosame_hotpot_url( '/journal/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'more_notices_p' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:pattern {"slug":"kosame-hotpot/book-frame"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
