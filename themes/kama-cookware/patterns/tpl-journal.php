<?php
/**
 * Title: Template: journal list
 * Slug: kama-cookware/tpl-journal
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Inserter: no
 * Description: Journal page: heading, wide image cards, two text rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--phead"><!-- wp:group {"className":"km-wrap km-phead","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap km-phead"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'jnl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-h2 km-h1"} -->
<h1 class="wp-block-heading km-h2 km-h1"><?php echo esc_html( kama_cookware_t( 'jnl_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kama_cookware_t( 'jnl_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--tpl","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--tpl"><!-- wp:group {"className":"km-wrap km-wrap--list","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap km-wrap--list"><!-- wp:query {"queryId":22,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"km-list km-list--cards"} -->
<div class="wp-block-query km-list km-list--cards"><!-- wp:post-template -->
<!-- wp:group {"className":"km-jcard","layout":{"type":"default"}} -->
<div class="wp-block-group km-jcard"><!-- wp:post-featured-image {"isLink":true,"className":"km-jcard__img"} /-->

<!-- wp:group {"className":"km-jcard__t","layout":{"type":"default"}} -->
<div class="wp-block-group km-jcard__t"><!-- wp:post-date {"format":"M j, Y","className":"km-num"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"km-h3"} /-->

<!-- wp:post-excerpt {"className":"km-row__p"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--tpl","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--tpl"><!-- wp:group {"className":"km-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap"><!-- wp:group {"className":"km-rows","layout":{"type":"default"}} -->
<div class="wp-block-group km-rows"><!-- wp:group {"className":"km-row km-row--j sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-row km-row--j sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'jns1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'jns1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-row__p"} -->
<p class="km-row__p"><?php echo esc_html( kama_cookware_t( 'jns1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-row km-row--j sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-row km-row--j sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-num"} -->
<p class="km-num"><?php echo esc_html( kama_cookware_t( 'jns2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"km-h3"} -->
<h3 class="wp-block-heading km-h3"><?php echo esc_html( kama_cookware_t( 'jns2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-row__p"} -->
<p class="km-row__p"><?php echo esc_html( kama_cookware_t( 'jns2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
