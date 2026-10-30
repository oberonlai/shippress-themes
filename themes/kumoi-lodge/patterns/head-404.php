<?php
/**
 * Title: Inner head: not found
 * Slug: kumoi-lodge/head-404
 * Categories: kumoi-lodge
 * Keywords: lodge, inner page
 * Viewport Width: 1440
 * Description: Blurred photograph with the not-found line and a pill home.
 */
?>
<?php echo kumoi_lodge_head( '<!-- wp:heading {"level":1,"className":"km-h1"} -->' . "\n" . '<h1 class="wp-block-heading km-h1">' . esc_html( kumoi_lodge_t( 'err_h1' ) ) . '</h1>' . "\n" . '<!-- /wp:heading -->', kumoi_lodge_t( 'err_p' ), 'kl-b1', kumoi_lodge_t( 'alt_b1' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:group {"className":"km-sec km-g-lichen","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull km-sec km-g-lichen"><!-- wp:group {"className":"km-col","layout":{"type":"default"}} -->
<div class="wp-block-group km-col"><?php echo kumoi_lodge_pill( kumoi_lodge_t( 'err_pill' ), '/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
