<?php
/**
 * Title: Home: from the park (journal cards)
 * Slug: nohara-park/front-journal
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Latest three posts as caption-panel cards with white panels on a pale grey band.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-journalsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-journalsec"><!-- wp:group {"className":"np-wrap np-wrap--cards","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--cards"><!-- wp:heading {"className":"np-h2 np-h2--c sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 np-h2--c sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'jr_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"np-journal"} -->
<div class="wp-block-query np-journal"><!-- wp:post-template {"className":"np-cards np-cards--white","layout":{"type":"default"}} -->
<!-- wp:group {"className":"np-card sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group np-card sp-reveal sp-reveal--zoom"><!-- wp:post-featured-image {"isLink":true,"className":"np-card__pic"} /-->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:post-terms {"term":"category","className":"np-badge"} /-->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:post-date {"className":"np-card__line"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"np-card__title"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"np-textlink np-textlink--r"} -->
<p class="np-textlink np-textlink--r"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'jr_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
