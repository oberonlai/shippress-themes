<?php
/**
 * Title: Home: company stories
 * Slug: asaoka-screening/front-stories
 * Categories: asaoka-screening
 * Keywords: health screening, medical, company
 * Viewport Width: 1440
 * Description: Two white panels with a photograph, company, staff count, a short quote and an arrow link.
 */
?>
<!-- wp:group {"className":"as-sec as-stories","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull as-sec as-stories">

<!-- wp:group {"className":"as-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group as-wrap">
<!-- wp:group {"className":"as-head as-head--left","layout":{"type":"default"}} -->
<div class="wp-block-group as-head as-head--left">
<!-- wp:paragraph {"className":"as-dot-label"} -->
<p class="as-dot-label"><?php echo esc_html( asaoka_screening_t( 'story_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"as-h2"} -->
<h2 class="wp-block-heading as-h2"><?php echo esc_html( asaoka_screening_t( 'story_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="as-panels sp-stagger">
<article class="as-panel sp-reveal sp-reveal--up"><img class="as-panel__img" src="<?php echo asaoka_screening_img( 'p10-studio-staff.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P10' ) ); ?>" loading="lazy"/><div class="as-panel__body"><p class="as-panel__meta"><b><?php echo esc_html( asaoka_screening_t( 'story_c0' ) ); ?></b><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'story_n0' ) ); ?></span></p><p class="as-panel__quote"><?php echo esc_html( asaoka_screening_t( 'story_q0' ) ); ?></p><a class="as-more as-more--sm" href="/company-stories/"><span class="as-sq" aria-hidden="true"><?php echo asaoka_screening_arrow(); ?></span><?php echo esc_html( asaoka_screening_t( 'story_go' ) ); ?></a></div></article>
<article class="as-panel sp-reveal sp-reveal--up"><img class="as-panel__img" src="<?php echo asaoka_screening_img( 'p11-bakery-staff.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P11' ) ); ?>" loading="lazy"/><div class="as-panel__body"><p class="as-panel__meta"><b><?php echo esc_html( asaoka_screening_t( 'story_c1' ) ); ?></b><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'story_n1' ) ); ?></span></p><p class="as-panel__quote"><?php echo esc_html( asaoka_screening_t( 'story_q1' ) ); ?></p><a class="as-more as-more--sm" href="/company-stories/"><span class="as-sq" aria-hidden="true"><?php echo asaoka_screening_arrow(); ?></span><?php echo esc_html( asaoka_screening_t( 'story_go' ) ); ?></a></div></article>
</div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
