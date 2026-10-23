<?php
/**
 * Title: Home: full-bleed quay photograph with parallax
 * Slug: ishizue-holdings/front-quay
 * Categories: ishizue-holdings
 * Description: Full-bleed photograph of the head office on the harbour quay that moves slower than the page, with a white caption pill.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ih-quaysec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ih-quaysec"><!-- wp:html -->
<div class="ih-quay"><div class="ih-quay__ph sp-parallax" style="--sp-par:12%"><img src="<?php echo ishizue_holdings_img( 'p11.webp' ); ?>" alt="<?php echo esc_attr( ishizue_holdings_t( 'a2af11e0c' ) ); ?>"/></div><p class="ih-pill ih-pill--quay"><span class="ih-pill__k"><?php echo wp_kses_post( ishizue_holdings_t( 'k1a41c3d0' ) ); ?></span><span class="ih-pill__t"><?php echo wp_kses_post( ishizue_holdings_t( 'k5961c131' ) ); ?></span></p></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
