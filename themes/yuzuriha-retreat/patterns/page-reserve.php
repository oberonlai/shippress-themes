<?php
/**
 * Title: Reserve: the three steps and the enquiry form slot
 * Slug: yuzuriha-retreat/page-reserve
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Lede, the three numbered steps, the contact form slot with a mailto fallback and the deposit terms.
 */
?>
<!-- wp:group {"className":"yr-pagebody","layout":{"type":"default"}} -->
<div class="wp-block-group yr-pagebody"><!-- wp:paragraph {"className":"yr-intro"} -->
<p class="yr-intro"><?php echo esc_html( yuzuriha_retreat_t( 'res_page_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-rows","layout":{"type":"default"}} -->
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

<?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"yr-pillbtn"} -->
<div class="wp-block-button yr-pillbtn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@yuzuriha.example?subject=' . rawurlencode( yuzuriha_retreat_t( 'forms_reserve_subject' ) ) ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'forms_reserve_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>

<!-- wp:paragraph {"className":"yr-note"} -->
<p class="yr-note"><?php echo esc_html( yuzuriha_retreat_t( 'res_page_deposit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-note"} -->
<p class="yr-note"><?php echo esc_html( yuzuriha_retreat_t( 'res_desk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
