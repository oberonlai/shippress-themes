<?php
/**
 * Title: Home: how findings are explained
 * Slug: asaoka-screening/front-results
 * Categories: asaoka-screening
 * Keywords: health screening, medical, company
 * Viewport Width: 1440
 * Description: Square-dot label and title left, four ruled rows with chips and square arrow buttons right.
 */
?>
<!-- wp:group {"className":"as-sec as-results as-mist","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull as-sec as-results as-mist">

<!-- wp:group {"className":"as-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group as-wrap">
<!-- wp:group {"className":"as-split","layout":{"type":"default"}} -->
<div class="wp-block-group as-split">
<!-- wp:group {"className":"as-split__lead","layout":{"type":"default"}} -->
<div class="wp-block-group as-split__lead">
<!-- wp:paragraph {"className":"as-dot-label"} -->
<p class="as-dot-label"><?php echo esc_html( asaoka_screening_t( 'res_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"as-h2"} -->
<h2 class="wp-block-heading as-h2"><?php echo esc_html( asaoka_screening_t( 'res_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="as-more" href="/results/"><span class="as-sq" aria-hidden="true"><?php echo asaoka_screening_arrow(); ?></span><?php echo esc_html( asaoka_screening_t( 'res_link' ) ); ?></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="as-split__body"><ul class="as-rows sp-stagger">
<li class="as-row sp-reveal sp-reveal--up"><div class="as-row__main"><p class="as-row__meta"><span class="as-row__step"><?php echo esc_html( asaoka_screening_t( 'res_s0' ) ); ?></span><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'res_c0' ) ); ?></span></p><p class="as-row__text"><?php echo esc_html( asaoka_screening_t( 'res_t0' ) ); ?></p></div><a class="as-go" href="/results/" aria-label="<?php echo esc_attr( asaoka_screening_t( 'res_s0' ) ); ?>"><?php echo asaoka_screening_arrow(); ?></a></li>
<li class="as-row sp-reveal sp-reveal--up"><div class="as-row__main"><p class="as-row__meta"><span class="as-row__step"><?php echo esc_html( asaoka_screening_t( 'res_s1' ) ); ?></span><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'res_c1' ) ); ?></span></p><p class="as-row__text"><?php echo esc_html( asaoka_screening_t( 'res_t1' ) ); ?></p></div><a class="as-go" href="/results/" aria-label="<?php echo esc_attr( asaoka_screening_t( 'res_s1' ) ); ?>"><?php echo asaoka_screening_arrow(); ?></a></li>
<li class="as-row sp-reveal sp-reveal--up"><div class="as-row__main"><p class="as-row__meta"><span class="as-row__step"><?php echo esc_html( asaoka_screening_t( 'res_s2' ) ); ?></span><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'res_c2' ) ); ?></span></p><p class="as-row__text"><?php echo esc_html( asaoka_screening_t( 'res_t2' ) ); ?></p></div><a class="as-go" href="/results/" aria-label="<?php echo esc_attr( asaoka_screening_t( 'res_s2' ) ); ?>"><?php echo asaoka_screening_arrow(); ?></a></li>
<li class="as-row sp-reveal sp-reveal--up"><div class="as-row__main"><p class="as-row__meta"><span class="as-row__step"><?php echo esc_html( asaoka_screening_t( 'res_s3' ) ); ?></span><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'res_c3' ) ); ?></span></p><p class="as-row__text"><?php echo esc_html( asaoka_screening_t( 'res_t3' ) ); ?></p></div><a class="as-go" href="/results/" aria-label="<?php echo esc_attr( asaoka_screening_t( 'res_s3' ) ); ?>"><?php echo asaoka_screening_arrow(); ?></a></li>
</ul></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
