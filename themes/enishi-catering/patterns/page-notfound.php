<?php
/**
 * Title: Page not found
 * Slug: enishi-catering/page-notfound
 * Categories: enishi-catering
 * Description: Plain 404 message with a link home.
 */
$t = 'enishi_catering_t';
?>
<!-- wp:group {"tagName":"section","align":"full","className":"enc-sec enc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull enc-sec enc-pagehead"><!-- wp:group {"className":"enc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group enc-wrap"><!-- wp:heading {"level":1,"className":"enc-h1"} -->
<h1 class="wp-block-heading enc-h1">404</h1>
<!-- /wp:heading -->

<?php echo enishi_catering_para( esc_html( $t( 'nothing' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo enishi_catering_btn( 'Home', '/', 'enc-btn--outline' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
