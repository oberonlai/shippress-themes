<?php
/**
 * Title: Page: Reserve
 * Slug: yuzuriha-retreat/page-reserve
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Opener, the three notes, the three steps, the contact form slot with a mailto fallback and the deposit terms.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-opener sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group yr-opener sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-opener__img"} -->
<figure class="wp-block-image size-full yr-opener__img"><img src="<?php echo yuzuriha_retreat_img( 'p06-mats-at-dawn.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yr-opener__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-opener__text"><!-- wp:html -->
<div class="yr-glow" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-kicker"} -->
<p class="yr-kicker"><?php echo esc_html( yuzuriha_retreat_t( 'p_reserve_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yr-opener__h"} -->
<h1 class="wp-block-heading yr-opener__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_reserve_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--stone"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'res_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-intro yr-intro--wide"} -->
<p class="yr-intro yr-intro--wide"><?php echo esc_html( yuzuriha_retreat_t( 'p_reserve_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-splits","layout":{"type":"default"}} -->
<div class="wp-block-group yr-splits"><!-- wp:group {"className":"yr-split","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_reserve_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_reserve_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_reserve_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_reserve_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_reserve_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_reserve_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--mist yr-sec--formband","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--mist yr-sec--formband"><!-- wp:group {"className":"yr-rows","layout":{"type":"default"}} -->
<div class="wp-block-group yr-rows"><!-- wp:group {"className":"yr-step yr-row","layout":{"type":"default"}} -->
<div class="wp-block-group yr-step yr-row"><!-- wp:paragraph {"className":"yr-step__n"} -->
<p class="yr-step__n"><span class="yr-step__no">01</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-step__t"} -->
<p class="yr-step__t"><?php echo esc_html( yuzuriha_retreat_t( 'step1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"yr-step yr-row","layout":{"type":"default"}} -->
<div class="wp-block-group yr-step yr-row"><!-- wp:paragraph {"className":"yr-step__n"} -->
<p class="yr-step__n"><span class="yr-step__no">02</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-step__t"} -->
<p class="yr-step__t"><?php echo esc_html( yuzuriha_retreat_t( 'step2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"yr-step yr-row","layout":{"type":"default"}} -->
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
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
