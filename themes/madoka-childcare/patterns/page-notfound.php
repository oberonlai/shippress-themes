<?php
/**
 * Title: Not found
 * Slug: madoka-childcare/page-notfound
 * Categories: madoka-childcare
 * Description: 404 body.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"mc-sec mc-pagehead","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-sec mc-pagehead"><!-- wp:group {"className":"mc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mc-wrap"><?php echo madoka_childcare_heading( madoka_childcare_t( 'nf_h' ), 1 ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo madoka_childcare_text( 'nf_p' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo madoka_childcare_link( madoka_childcare_t( 'back_home' ), '/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
