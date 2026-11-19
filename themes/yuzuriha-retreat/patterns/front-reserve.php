<?php
/**
 * Title: Home: the one way to reserve
 * Slug: yuzuriha-retreat/front-reserve
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Two columns: label, heading and a line on the left; three numbered hairline steps, the ink pill mailto button and the desk hours on the right. No scroll reveal.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone yr-sec--reserve","layout":{"type":"default"},"anchor":"reserve"} -->
<section id="reserve" class="wp-block-group yr-sec yr-sec--stone yr-sec--reserve"><!-- wp:group {"className":"yr-reserve","layout":{"type":"default"}} -->
<div class="wp-block-group yr-reserve"><!-- wp:group {"className":"yr-reserve__head","layout":{"type":"default"}} -->
<div class="wp-block-group yr-reserve__head"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'res_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-h2"} -->
<h2 class="wp-block-heading yr-h2"><?php echo esc_html( yuzuriha_retreat_t( 'res_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-intro"} -->
<p class="yr-intro"><?php echo esc_html( yuzuriha_retreat_t( 'res_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-reserve__body","layout":{"type":"default"}} -->
<div class="wp-block-group yr-reserve__body"><!-- wp:group {"className":"yr-rows","layout":{"type":"default"}} -->
<div class="wp-block-group yr-rows"><!-- wp:group {"className":"yr-step yr-row","layout":{"type":"default"}} -->
<div class="wp-block-group yr-step yr-row"><!-- wp:paragraph {"className":"yr-step__n"} -->
<p class="yr-step__n"><span class="yr-step__no">01</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-step__t"} -->
<p class="yr-step__t"><?php echo esc_html( yuzuriha_retreat_t( 'step1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-step yr-row","layout":{"type":"default"}} -->
<div class="wp-block-group yr-step yr-row"><!-- wp:paragraph {"className":"yr-step__n"} -->
<p class="yr-step__n"><span class="yr-step__no">02</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-step__t"} -->
<p class="yr-step__t"><?php echo esc_html( yuzuriha_retreat_t( 'step2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-step yr-row","layout":{"type":"default"}} -->
<div class="wp-block-group yr-step yr-row"><!-- wp:paragraph {"className":"yr-step__n"} -->
<p class="yr-step__n"><span class="yr-step__no">03</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-step__t"} -->
<p class="yr-step__t"><?php echo esc_html( yuzuriha_retreat_t( 'step3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-reserve__act","layout":{"type":"default"}} -->
<div class="wp-block-group yr-reserve__act"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"yr-pillbtn"} -->
<div class="wp-block-button yr-pillbtn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@yuzuriha.example?subject=' . rawurlencode( yuzuriha_retreat_t( 'res_subject' ) ) ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'res_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"yr-more yr-more--left"} -->
<p class="yr-more yr-more--left"><a href="<?php echo yuzuriha_retreat_url( '/reserve/' ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'res_page' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yr-note"} -->
<p class="yr-note"><?php echo esc_html( yuzuriha_retreat_t( 'res_desk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
