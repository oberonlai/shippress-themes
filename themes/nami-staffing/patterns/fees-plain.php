<?php
/**
 * Title: Fees in one plain paragraph
 * Slug: nami-staffing/fees-plain
 * Categories: nami-staffing
 * Keywords: fees, prices, cost
 * Viewport Width: 1440
 * Description: A pale sage band with a convex arc at its lower edge: label, heading and the fees in one paragraph, the same text on the home page and the Fees page.
 */
?>
<!-- wp:group {"tagName": "section", "className": "nf-fees nf-spine", "layout": {"type": "default"}, "align": "full"} -->
<section class="wp-block-group alignfull nf-fees nf-spine"><!-- wp:group {"className": "nf-split", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split"><!-- wp:group {"className": "nf-split__l", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split__l"><!-- wp:paragraph {"className": "nf-eyebrow"} -->
<p class="nf-eyebrow"><?php echo wp_kses_post( nami_staffing_t( 'fees_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( nami_staffing_t( 'fees_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-split__r nf-prose", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split__r nf-prose"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'fees_plain' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className": "nf-btns"} -->
<div class="wp-block-buttons nf-btns"><!-- wp:button {"className": "nf-pill"} -->
<div class="wp-block-button nf-pill"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo wp_kses_post( nami_staffing_t( 'fees_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
