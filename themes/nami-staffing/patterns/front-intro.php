<?php
/**
 * Title: Home: who we are, either side of the centre line
 * Slug: nami-staffing/front-intro
 * Categories: nami-staffing
 * Keywords: about, story
 * Viewport Width: 1440
 * Description: Grey band: label, heading and pill button left of the centre line, three narrative paragraphs on the right.
 */
?>
<!-- wp:group {"tagName": "section", "className": "nf-band nf-band--grey nf-spine", "layout": {"type": "default"}, "align": "full"} -->
<section class="wp-block-group alignfull nf-band nf-band--grey nf-spine"><!-- wp:group {"className": "nf-split", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split"><!-- wp:group {"className": "nf-split__l", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split__l"><!-- wp:paragraph {"className": "nf-eyebrow"} -->
<p class="nf-eyebrow"><?php echo wp_kses_post( nami_staffing_t( 'front_intro_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( nami_staffing_t( 'front_intro_title' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:buttons {"className": "nf-btns"} -->
<div class="wp-block-buttons nf-btns"><!-- wp:button {"className": "nf-pill"} -->
<div class="wp-block-button nf-pill"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( nami_staffing_t( 'front_intro_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-split__r nf-prose", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split__r nf-prose"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_intro_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_intro_p2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_intro_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
