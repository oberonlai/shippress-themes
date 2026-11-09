<?php
/**
 * Title: Inner: retainer table
 * Slug: kataribe-partners/inner-table
 * Categories: kataribe-partners
 * Keywords: retainers, prices
 * Viewport Width: 1440
 * Description: The six-row retainer table at full width; stacked on phones.
 */
$e = 'kataribe_partners_e';
?>
<!-- wp:html -->
<table class="kp-table"><thead><tr><th scope="col"><?php echo $e( 'rt_h1' ); ?></th><th scope="col"><?php echo $e( 'rt_h2' ); ?></th><th scope="col"><?php echo $e( 'rt_h3' ); ?></th></tr></thead><tbody><?php for ( $n = 1; $n <= 6; $n++ ) : ?><tr><th scope="row"><?php echo $e( 'rt_' . $n . '_n' ); ?></th><td><span class="kp-table__label"><?php echo $e( 'rt_h2' ); ?></span><?php echo $e( 'rt_' . $n . '_d' ); ?></td><td class="kp-table__price"><span class="kp-table__label"><?php echo $e( 'rt_h3' ); ?></span><?php echo $e( 'rt_' . $n . '_p' ); ?></td></tr><?php endfor; ?></tbody></table>
<!-- /wp:html -->
