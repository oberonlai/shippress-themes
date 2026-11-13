<?php
/**
 * Title: Home: journal
 * Slug: noka-cheese/front-journal
 * Categories: noka-cheese
 * Viewport Width: 1440
 * Description: Three latest journal entries as square-cornered thumbnails.
 */
?>
<!-- wp:group {"className":"nk-sec nk-journal","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-journal"><!-- wp:group {"className":"nk-row nk-row--journal","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nk-row nk-row--journal"><!-- wp:group {"className":"nk-cell nk-cell--wide","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cell nk-cell--wide"><!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo wp_kses_post( noka_cheese_t( 'jr_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo wp_kses_post( noka_cheese_t( 'jr_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"nk-jq"} -->
<div class="wp-block-query nk-jq"><!-- wp:post-template {"className":"nk-jlist","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"nk-jcard sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nk-jcard sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"nk-jcard__img"} /-->

<!-- wp:post-date {"className":"nk-jcard__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"nk-jcard__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"nk-pills nk-pills--text"} -->
<div class="wp-block-buttons nk-pills nk-pills--text"><!-- wp:button {"className":"nk-pill"} -->
<div class="wp-block-button nk-pill"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( noka_cheese_t( 'jr_link' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
