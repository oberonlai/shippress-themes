<?php
/**
 * Title: Journal: giant word and rows
 * Slug: moyooshi-productions/journal
 * Categories: moyooshi-productions
 * Viewport Width: 1440
 * Description: Giant JOURNAL word and the three latest posts as ledger rows with a small thumbnail.
 */
?>
<!-- wp:group {"tagName":"section","className":"mp-sec mp-journal","layout":{"type":"default"}} -->
<section class="wp-block-group mp-sec mp-journal"><!-- wp:group {"className":"mp-frame","layout":{"type":"default"}} -->
<div class="wp-block-group mp-frame"><!-- wp:group {"className":"mp-giant","layout":{"type":"default"}} -->
<div class="wp-block-group mp-giant"><!-- wp:heading {"level":2,"className":"mp-giant__w sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading mp-giant__w sp-reveal sp-reveal--up"><?php echo esc_html( moyooshi_productions_t( 'w_journal' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-giant__s"} -->
<p class="mp-giant__s"><?php echo esc_html( moyooshi_productions_t( 'journal_s_1' ) ); ?><br><?php echo esc_html( moyooshi_productions_t( 'journal_s_2' ) ); ?><br><?php echo esc_html( moyooshi_productions_t( 'journal_s_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-more mp-giant__m"} -->
<p class="mp-more mp-giant__m"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"mp-posts","layout":{"type":"default"}} -->
<div class="wp-block-query mp-posts"><!-- wp:post-template {"className":"mp-jlist sp-stagger"} -->
<!-- wp:group {"className":"mp-jrow","layout":{"type":"default"}} -->
<div class="wp-block-group mp-jrow"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"mp-jrow__img"} /-->

<!-- wp:post-date {"format":"( Y.m )","className":"mp-jrow__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"mp-jrow__t"} /-->

<!-- wp:post-terms {"term":"category","className":"mp-jrow__c"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( moyooshi_productions_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
