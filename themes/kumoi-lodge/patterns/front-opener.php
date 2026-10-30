<?php
/**
 * Title: Home: blurred opener
 * Slug: kumoi-lodge/front-opener
 * Categories: kumoi-lodge
 * Keywords: lodge, home
 * Viewport Width: 1440
 * Description: Full-viewport out-of-focus photograph with two small text columns starting at 20% of the width: four statement lines at the left, a paragraph at the right.
 */
?>
<!-- wp:group {"className":"km-opener sp-parallax","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull km-opener sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"km-opener__img"} -->
<figure class="wp-block-image size-full km-opener__img"><img src="<?php echo kumoi_lodge_img( 'kl-b1' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( kumoi_lodge_t( 'alt_b1' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"km-opener__in","layout":{"type":"default"}} -->
<div class="wp-block-group km-opener__in"><!-- wp:heading {"level":2,"className":"km-statement sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading km-statement sp-reveal sp-reveal--up"><?php echo esc_html( kumoi_lodge_t( 'op_l1' ) ); ?><br><?php echo esc_html( kumoi_lodge_t( 'op_l2' ) ); ?><br><?php echo esc_html( kumoi_lodge_t( 'op_l3' ) ); ?><br><?php echo esc_html( kumoi_lodge_t( 'op_l4' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"km-lead sp-reveal sp-reveal--up","style":{"layout":{}}} -->
<p class="km-lead sp-reveal sp-reveal--up" style="--sp-delay:.15s"><?php echo esc_html( kumoi_lodge_t( 'op_body' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
