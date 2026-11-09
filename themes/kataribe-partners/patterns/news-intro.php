<?php
/**
 * Title: News: studio notes
 * Slug: kataribe-partners/news-intro
 * Categories: kataribe-partners
 * Keywords: news
 * Viewport Width: 1440
 * Inserter: no
 * Description: Pale band under the news list with the two short sections about the notes and the documented work.
 */
$e = 'kataribe_partners_e';
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kp-sec kp-pale","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kp-sec kp-pale"><!-- wp:group {"className":"kp-wrap kp-split","layout":{"type":"default"}} -->
<div class="wp-block-group kp-wrap kp-split"><!-- wp:group {"className":"kp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group kp-split__text"><!-- wp:paragraph {"className":"kp-lead"} -->
<p class="kp-lead"><?php echo $e( 'nw_intro' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-split__text kp-twocol","layout":{"type":"default"}} -->
<div class="wp-block-group kp-split__text kp-twocol"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo $e( 'nw_1_h' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo $e( 'nw_1_p' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo $e( 'nw_2_h' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo $e( 'nw_2_p' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
