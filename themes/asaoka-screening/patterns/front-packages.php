<?php
/**
 * Title: Home: packages and prices
 * Slug: asaoka-screening/front-packages
 * Categories: asaoka-screening
 * Keywords: health screening, medical, company
 * Viewport Width: 1440
 * Description: Mist band: label and title left, four ruled package rows with the price on the right.
 */
?>
<!-- wp:group {"className":"as-sec as-packages as-mist","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull as-sec as-packages as-mist">

<!-- wp:group {"className":"as-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group as-wrap">
<!-- wp:group {"className":"as-split","layout":{"type":"default"}} -->
<div class="wp-block-group as-split">
<!-- wp:group {"className":"as-split__lead","layout":{"type":"default"}} -->
<div class="wp-block-group as-split__lead">
<!-- wp:paragraph {"className":"as-dot-label"} -->
<p class="as-dot-label"><?php echo esc_html( asaoka_screening_t( 'pack_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"as-h2"} -->
<h2 class="wp-block-heading as-h2"><?php echo esc_html( asaoka_screening_t( 'pack_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="as-more" href="/packages/"><span class="as-sq" aria-hidden="true"><?php echo asaoka_screening_arrow(); ?></span><?php echo esc_html( asaoka_screening_t( 'pack_link' ) ); ?></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<ul class="as-prices">
<li class="as-prices__row"><div class="as-prices__name"><b><?php echo esc_html( asaoka_screening_t( 'pack_n0' ) ); ?></b><span><?php echo esc_html( asaoka_screening_t( 'pack_d0' ) ); ?></span></div><span class="as-prices__amount"><?php echo esc_html( asaoka_screening_t( 'pack_p0' ) ); ?></span></li>
<li class="as-prices__row"><div class="as-prices__name"><b><?php echo esc_html( asaoka_screening_t( 'pack_n1' ) ); ?></b><span><?php echo esc_html( asaoka_screening_t( 'pack_d1' ) ); ?></span></div><span class="as-prices__amount"><?php echo esc_html( asaoka_screening_t( 'pack_p1' ) ); ?></span></li>
<li class="as-prices__row"><div class="as-prices__name"><b><?php echo esc_html( asaoka_screening_t( 'pack_n2' ) ); ?></b><span><?php echo esc_html( asaoka_screening_t( 'pack_d2' ) ); ?></span></div><span class="as-prices__amount"><?php echo esc_html( asaoka_screening_t( 'pack_p2' ) ); ?></span></li>
<li class="as-prices__row"><div class="as-prices__name"><b><?php echo esc_html( asaoka_screening_t( 'pack_n3' ) ); ?></b><span><?php echo esc_html( asaoka_screening_t( 'pack_d3' ) ); ?></span></div><span class="as-prices__amount"><?php echo esc_html( asaoka_screening_t( 'pack_p3' ) ); ?></span></li>
</ul>
<p class="as-prices__note"><?php echo esc_html( asaoka_screening_t( 'pack_note' ) ); ?></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
