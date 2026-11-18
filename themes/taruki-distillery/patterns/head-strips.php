<?php
/**
 * Title: Header strips
 * Slug: taruki-distillery/head-strips
 * Categories: taruki-distillery
 * Inserter: no
 * Description: S1: a copper next-tour strip over a caramel batch strip, both flat and full width.
 */
?>
<!-- wp:group {"align":"full","className":"td-strip td-strip--copper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull td-strip td-strip--copper"><!-- wp:paragraph {"align":"center","className":"td-strip__line"} -->
<p class="has-text-align-center td-strip__line"><a href="/book/"><?php echo esc_html( taruki_t( 'strip_tour' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"td-strip td-strip--caramel","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull td-strip td-strip--caramel"><!-- wp:group {"align":"wide","className":"td-strip__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide td-strip__row"><!-- wp:paragraph {"className":"td-strip__line"} -->
<p class="td-strip__line"><?php echo esc_html( taruki_t( 'strip_batch' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-strip__line"} -->
<p class="td-strip__line"><?php echo esc_html( taruki_t( 'strip_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
