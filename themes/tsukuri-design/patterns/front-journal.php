<?php
/**
 * Title: Home: journal
 * Slug: tsukuri-design/front-journal
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: The three latest notes as rows: a 3:2 thumbnail, month, category and title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--paper","anchor":"journal","layout":{"type":"default"}} -->
<section id="journal" class="wp-block-group alignfull td-sec td-sec--paper"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'l_journal' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"td-jr sp-reveal sp-reveal--up"} -->
<div class="wp-block-query td-jr sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"td-jr__list","layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"td-jr__img"} /-->

<!-- wp:group {"className":"td-jr__txt","layout":{"type":"default"}} -->
<div class="wp-block-group td-jr__txt"><!-- wp:group {"className":"td-jr__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group td-jr__meta"><!-- wp:post-date {"format":"M Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"level":3,"className":"td-jr__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"td-more"} -->
<p class="td-more"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'journal_all' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
