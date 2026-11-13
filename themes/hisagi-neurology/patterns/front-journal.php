<?php
/**
 * Title: Home: the journal
 * Slug: hisagi-neurology/front-journal
 * Categories: hisagi-neurology
 * Viewport Width: 1440
 * Description: The latest three posts as ruled rows: date, category, title and an arrow.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hn-sec hn-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hn-sec hn-journal"><!-- wp:group {"className":"hn-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hn-narrow sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"hn-label hn-strip"} -->
<p class="hn-label hn-strip"><?php echo wp_kses_post( hisagi_neurology_t( 'k4eb3f96b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hn-h2"} -->
<h2 class="wp-block-heading hn-h2"><?php echo wp_kses_post( hisagi_neurology_t( 'ke9d55f63' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"hn-journal__q","layout":{"type":"default"}} -->
<div class="wp-block-query hn-journal__q"><!-- wp:post-template {"className":"hn-rows"} -->
<!-- wp:group {"className":"hn-row","layout":{"type":"default"}} -->
<div class="wp-block-group hn-row"><!-- wp:post-date {"format":"<?php echo esc_attr( hisagi_neurology_t( 'date_fmt' ) ); ?>","className":"hn-row__date"} /-->

<!-- wp:post-terms {"term":"category","className":"hn-row__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hn-row__t"} /-->

<!-- wp:paragraph {"className":"hn-row__go"} -->
<p class="hn-row__go">→</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
