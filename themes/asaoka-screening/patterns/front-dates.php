<?php
/**
 * Title: Home: open dates
 * Slug: asaoka-screening/front-dates
 * Categories: asaoka-screening
 * Keywords: health screening, medical, company
 * Viewport Width: 1440
 * Description: Square-dot label and title left, four dated rows with a places-left chip right.
 */
?>
<!-- wp:group {"anchor":"dates","className":"as-sec as-dates","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull as-sec as-dates" id="dates">
<!-- wp:group {"className":"as-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group as-wrap">
<!-- wp:group {"className":"as-split","layout":{"type":"default"}} -->
<div class="wp-block-group as-split">
<!-- wp:group {"className":"as-split__lead","layout":{"type":"default"}} -->
<div class="wp-block-group as-split__lead">
<!-- wp:paragraph {"className":"as-dot-label"} -->
<p class="as-dot-label"><?php echo esc_html( asaoka_screening_t( 'date_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"as-h2"} -->
<h2 class="wp-block-heading as-h2"><?php echo esc_html( asaoka_screening_t( 'date_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="as-more" href="/for-companies/"><span class="as-sq" aria-hidden="true"><?php echo asaoka_screening_arrow(); ?></span><?php echo esc_html( asaoka_screening_t( 'date_link' ) ); ?></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<ul class="as-rows sp-stagger">
<li class="as-row sp-reveal sp-reveal--up"><div class="as-row__main"><p class="as-row__meta"><span class="as-row__step"><?php echo esc_html( asaoka_screening_t( 'date_d0' ) ); ?></span><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'date_c0' ) ); ?></span></p><p class="as-row__text"><?php echo esc_html( asaoka_screening_t( 'date_t0' ) ); ?></p></div><a class="as-go" href="/for-companies/" aria-label="<?php echo esc_attr( asaoka_screening_t( 'date_d0' ) ); ?>"><?php echo asaoka_screening_arrow(); ?></a></li>
<li class="as-row sp-reveal sp-reveal--up"><div class="as-row__main"><p class="as-row__meta"><span class="as-row__step"><?php echo esc_html( asaoka_screening_t( 'date_d1' ) ); ?></span><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'date_c1' ) ); ?></span></p><p class="as-row__text"><?php echo esc_html( asaoka_screening_t( 'date_t1' ) ); ?></p></div><a class="as-go" href="/for-companies/" aria-label="<?php echo esc_attr( asaoka_screening_t( 'date_d1' ) ); ?>"><?php echo asaoka_screening_arrow(); ?></a></li>
<li class="as-row sp-reveal sp-reveal--up"><div class="as-row__main"><p class="as-row__meta"><span class="as-row__step"><?php echo esc_html( asaoka_screening_t( 'date_d2' ) ); ?></span><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'date_c2' ) ); ?></span></p><p class="as-row__text"><?php echo esc_html( asaoka_screening_t( 'date_t2' ) ); ?></p></div><a class="as-go" href="/for-companies/" aria-label="<?php echo esc_attr( asaoka_screening_t( 'date_d2' ) ); ?>"><?php echo asaoka_screening_arrow(); ?></a></li>
<li class="as-row sp-reveal sp-reveal--up"><div class="as-row__main"><p class="as-row__meta"><span class="as-row__step"><?php echo esc_html( asaoka_screening_t( 'date_d3' ) ); ?></span><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'date_c3' ) ); ?></span></p><p class="as-row__text"><?php echo esc_html( asaoka_screening_t( 'date_t3' ) ); ?></p></div><a class="as-go" href="/for-companies/" aria-label="<?php echo esc_attr( asaoka_screening_t( 'date_d3' ) ); ?>"><?php echo asaoka_screening_arrow(); ?></a></li>
</ul>
<p class="as-rows__note"><?php echo esc_html( asaoka_screening_t( 'date_note' ) ); ?></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
