<?php
/**
 * Title: Home: come in for a coffee
 * Slug: nami-staffing/front-close
 * Categories: nami-staffing
 * Keywords: contact, visit
 * Viewport Width: 1440
 * Description: Grey band ending the centre line: an invitation, the address and phone, and two buttons.
 */
?>
<!-- wp:group {"tagName": "section", "className": "nf-band nf-band--grey nf-spine nf-spine--end nf-close", "layout": {"type": "default"}, "align": "full"} -->
<section class="wp-block-group alignfull nf-band nf-band--grey nf-spine nf-spine--end nf-close"><!-- wp:group {"className": "nf-close__in", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-close__in"><!-- wp:paragraph {"className": "nf-eyebrow"} -->
<p class="nf-eyebrow"><?php echo wp_kses_post( nami_staffing_t( 'front_close_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( nami_staffing_t( 'front_close_title' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_close_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className": "nf-btns"} -->
<div class="wp-block-buttons nf-btns"><!-- wp:button {"className": "nf-pill"} -->
<div class="wp-block-button nf-pill"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( nami_staffing_t( 'front_close_b1' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo wp_kses_post( nami_staffing_t( 'front_close_b2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
