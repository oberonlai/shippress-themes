<?php
/**
 * Title: Page: Contact
 * Slug: yuzuriha-retreat/page-contact
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Opener, desk details, the contact form slot with a mailto fallback and three notes.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-opener sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group yr-opener sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-opener__img"} -->
<figure class="wp-block-image size-full yr-opener__img"><img src="<?php echo yuzuriha_retreat_img( 'p16-ridge-walkers.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yr-opener__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-opener__text"><!-- wp:html -->
<div class="yr-glow" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-kicker"} -->
<p class="yr-kicker"><?php echo esc_html( yuzuriha_retreat_t( 'p_contact_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yr-opener__h"} -->
<h1 class="wp-block-heading yr-opener__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_contact_t' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--stone"><!-- wp:paragraph {"className":"yr-label"} -->
<p class="yr-label"><?php echo esc_html( yuzuriha_retreat_t( 'ct_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-intro yr-intro--wide"} -->
<p class="yr-intro yr-intro--wide"><?php echo esc_html( yuzuriha_retreat_t( 'p_contact_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"yr-rows","layout":{"type":"default"}} -->
<div class="wp-block-group yr-rows"><!-- wp:group {"className":"yr-row yr-row--fact yr-fact","layout":{"type":"default"}} -->
<div class="wp-block-group yr-row yr-row--fact yr-fact"><!-- wp:paragraph {"className":"yr-fact__l"} -->
<p class="yr-fact__l"><?php echo esc_html( yuzuriha_retreat_t( 'ct_phone_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-fact__v"} -->
<p class="yr-fact__v"><a href="tel:+00445550186">+00 44 555 0186</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-row yr-row--fact yr-fact","layout":{"type":"default"}} -->
<div class="wp-block-group yr-row yr-row--fact yr-fact"><!-- wp:paragraph {"className":"yr-fact__l"} -->
<p class="yr-fact__l"><?php echo esc_html( yuzuriha_retreat_t( 'ct_mail_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-fact__v"} -->
<p class="yr-fact__v"><a href="mailto:stay@yuzuriha.example">stay@yuzuriha.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-row yr-row--fact yr-fact","layout":{"type":"default"}} -->
<div class="wp-block-group yr-row yr-row--fact yr-fact"><!-- wp:paragraph {"className":"yr-fact__l"} -->
<p class="yr-fact__l"><?php echo esc_html( yuzuriha_retreat_t( 'ct_desk_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-fact__v"} -->
<p class="yr-fact__v"><?php echo esc_html( yuzuriha_retreat_t( 'ct_desk_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-row yr-row--fact yr-fact","layout":{"type":"default"}} -->
<div class="wp-block-group yr-row yr-row--fact yr-fact"><!-- wp:paragraph {"className":"yr-fact__l"} -->
<p class="yr-fact__l"><?php echo esc_html( yuzuriha_retreat_t( 'ct_addr_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yr-fact__v"} -->
<p class="yr-fact__v"><?php echo esc_html( yuzuriha_retreat_t( 'ct_addr_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--mist yr-sec--formband","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--mist yr-sec--formband"><?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"yr-pillbtn"} -->
<div class="wp-block-button yr-pillbtn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:stay@yuzuriha.example?subject=' . rawurlencode( yuzuriha_retreat_t( 'forms_contact_subject' ) ) ); ?>"><?php echo esc_html( yuzuriha_retreat_t( 'forms_contact_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yr-sec yr-sec--stone","layout":{"type":"default"}} -->
<section class="wp-block-group yr-sec yr-sec--stone"><!-- wp:group {"className":"yr-splits","layout":{"type":"default"}} -->
<div class="wp-block-group yr-splits"><!-- wp:group {"className":"yr-split","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_contact_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_contact_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-split","layout":{"type":"default"}} -->
<div class="wp-block-group yr-split"><!-- wp:heading {"level":2,"className":"yr-split__h"} -->
<h2 class="wp-block-heading yr-split__h"><?php echo esc_html( yuzuriha_retreat_t( 'p_contact_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-split__b"} -->
<p class="yr-split__b"><?php echo esc_html( yuzuriha_retreat_t( 'p_contact_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
