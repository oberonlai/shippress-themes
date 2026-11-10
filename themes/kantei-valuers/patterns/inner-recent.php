<?php
/**
 * Title: Recent instructions as links
 * Slug: kantei-valuers/inner-recent
 * Categories: kantei-valuers
 * Keywords: inner page
 * Viewport Width: 1440
 * Inserter: no
 * Description: Three one-line rows linking to the three recent instruction posts.
 */
$e = 'kantei_valuers_e';
$rows = array( array( 'c1', '/corner-shop-flat-above-refinance/' ), array( 'c2', '/two-floors-in-kilkenny/' ), array( 'c3', '/warehouse-lease-renewal-in-naas/' ) );
?>
<!-- wp:group {"align":"full","tagName":"section","className":"kv-sec kv-recent","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-sec kv-recent"><!-- wp:paragraph {"className":"kv-label"} -->
<p class="kv-label"><?php echo $e( 'recent_label' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo $e( 'recent_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kv-news kv-nrows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kv-news kv-nrows sp-stagger"><?php foreach ( $rows as $r ) : ?><!-- wp:group {"className":"kv-nrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-nrow sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-date"} -->
<p class="kv-date"><?php echo $e( $r[0] . '_date' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-chip"} -->
<p class="kv-chip"><?php echo $e( $r[0] . '_chip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kv-nrow__title"} -->
<h3 class="wp-block-heading kv-nrow__title"><a href="<?php echo esc_attr( $r[1] ); ?>"><?php echo $e( $r[0] . '_title' ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
