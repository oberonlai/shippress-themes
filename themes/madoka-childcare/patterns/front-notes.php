<?php
/**
 * Title: Home: notes from the rooms
 * Slug: madoka-childcare/front-notes
 * Categories: madoka-childcare
 * Description: Stripe heading and the three latest posts in a row.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mc-sec mc-sec--n mc-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-sec mc-sec--n mc-notes"><!-- wp:group {"className":"mc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mc-wrap"><!-- wp:heading {"level":2,"className":"mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"} -->
<h2 class="wp-block-heading mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"><mark class="mc-stripe__in"><?php echo wp_kses( str_replace( "\n", '<br>', esc_html( madoka_childcare_t( 'notes_h' ) ) ), array( 'br' => array() ) ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mc-notes__p"} -->
<p class="mc-notes__p"><?php echo esc_html( madoka_childcare_t( 'notes_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"mc-notes__q"} -->
<div class="wp-block-query mc-notes__q"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","scale":"cover","className":"mc-note__img"} /-->

<!-- wp:post-date {"className":"mc-meta"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"mc-note__h"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'nothing' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"mc-link"} -->
<p class="mc-link"><a href="/notes/"><?php echo esc_html( madoka_childcare_t( 'notes_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
