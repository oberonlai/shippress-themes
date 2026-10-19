<?php
/**
 * Title: Home: apply in three steps
 * Slug: waza-college/apply-steps
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Description: Three application steps in one compact row and the apply button, on a pale tint.
 */
?>
<!-- wp:group {"tagName":"section","className":"wz-ap","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull wz-ap"><!-- wp:paragraph {"className":"wz-eyebrow"} -->
<p class="wz-eyebrow"><?php echo esc_html( waza_college_t( 'ap_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="wz-ap__list"><li><span class="wz-ap__no">1</span><strong><?php echo esc_html( waza_college_t( 'ap1_t' ) ); ?></strong><span><?php echo esc_html( waza_college_t( 'ap1_d' ) ); ?></span></li><li><span class="wz-ap__no">2</span><strong><?php echo esc_html( waza_college_t( 'ap2_t' ) ); ?></strong><span><?php echo esc_html( waza_college_t( 'ap2_d' ) ); ?></span></li><li><span class="wz-ap__no">3</span><strong><?php echo esc_html( waza_college_t( 'ap3_t' ) ); ?></strong><span><?php echo esc_html( waza_college_t( 'ap3_d' ) ); ?></span></li></ol>
<!-- /wp:html -->

<!-- wp:buttons {"className":"wz-ap__btn"} -->
<div class="wp-block-buttons wz-ap__btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/apply/"><?php echo esc_html( waza_college_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
