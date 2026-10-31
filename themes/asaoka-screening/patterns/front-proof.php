<?php
/**
 * Title: Home: parallax photo band with figures
 * Slug: asaoka-screening/front-proof
 * Categories: asaoka-screening
 * Keywords: health screening, medical, company
 * Viewport Width: 1440
 * Description: Full-width photograph with slow parallax and a static white card carrying three figures.
 */
?>
<!-- wp:cover {"url":"<?php echo asaoka_screening_img( 'p09-clinic-exterior.webp' ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","contentPosition":"center left","isDark":false,"align":"full","className":"as-band sp-parallax"} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-center-left as-band sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P09' ) ); ?>" src="<?php echo asaoka_screening_img( 'p09-clinic-exterior.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"as-proofcard","layout":{"type":"default"}} -->
<div class="wp-block-group as-proofcard">
<!-- wp:heading {"level":3,"className":"as-proofcard__h"} -->
<h3 class="wp-block-heading as-proofcard__h"><?php echo esc_html( asaoka_screening_t( 'proof_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"as-proofcard__item","layout":{"type":"default"}} -->
<div class="wp-block-group as-proofcard__item"><!-- wp:paragraph {"className":"as-num sp-reveal sp-count"} -->
<p class="as-num sp-reveal sp-count"><?php echo esc_html( asaoka_screening_t( 'proof_n0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"as-numd"} -->
<p class="as-numd"><?php echo esc_html( asaoka_screening_t( 'proof_d0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"as-proofcard__item","layout":{"type":"default"}} -->
<div class="wp-block-group as-proofcard__item"><!-- wp:paragraph {"className":"as-num sp-reveal sp-count"} -->
<p class="as-num sp-reveal sp-count"><?php echo esc_html( asaoka_screening_t( 'proof_n1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"as-numd"} -->
<p class="as-numd"><?php echo esc_html( asaoka_screening_t( 'proof_d1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"as-proofcard__item","layout":{"type":"default"}} -->
<div class="wp-block-group as-proofcard__item"><!-- wp:paragraph {"className":"as-num sp-reveal sp-count"} -->
<p class="as-num sp-reveal sp-count"><?php echo esc_html( asaoka_screening_t( 'proof_n2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"as-numd"} -->
<p class="as-numd"><?php echo esc_html( asaoka_screening_t( 'proof_d2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
