<?php
/**
 * Title: Home: book a site visit and waitlist
 * Slug: mise-studio/front-visit
 * Categories: mise-studio
 * Keywords: cta, visit, waitlist
 * Viewport Width: 1440
 * Description: A white two-column sheet with the visit details and the large Book a site visit pill, then a flat strip with the visit waitlist form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"ms-sec ms-sec--visit","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull ms-sec ms-sec--visit"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:group {"className":"ms-sheet ms-vs","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-vs"><!-- wp:group {"className":"ms-vs__left","layout":{"type":"default"}} -->
<div class="wp-block-group ms-vs__left"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'vs_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-vs__p"} -->
<p class="ms-vs__p"><?php echo esc_html( mise_studio_t( 'vs_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-vs__addr"} -->
<p class="ms-vs__addr"><?php echo esc_html( mise_studio_t( 'vs_addr' ) ); ?><br><?php echo esc_html( mise_studio_t( 'vs_hours' ) ); ?><br><?php echo esc_html( mise_studio_t( 'vs_windows' ) ); ?><br><?php echo esc_html( mise_studio_t( 'vs_phone' ) ); ?> · <a href="mailto:hello@mise-studio.example"><?php echo wp_kses_post( mise_studio_t( 'k589054e7' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-vs__right","layout":{"type":"default"}} -->
<div class="wp-block-group ms-vs__right"><!-- wp:buttons {"className":"ms-pill ms-pill--lg-wrap"} -->
<div class="wp-block-buttons ms-pill ms-pill--lg-wrap"><!-- wp:button {"className":"ms-pill ms-pill--lg"} -->
<div class="wp-block-button ms-pill ms-pill--lg"><a class="wp-block-button__link wp-element-button" href="/book-a-visit/"><?php echo esc_html( mise_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ms-vs__fee"} -->
<p class="ms-vs__fee"><?php echo esc_html( mise_studio_t( 'vs_fee' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-wl","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wl"><!-- wp:group {"className":"ms-wl__text","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wl__text"><!-- wp:heading {"level":3,"className":"ms-wl__h"} -->
<h3 class="wp-block-heading ms-wl__h"><?php echo esc_html( mise_studio_t( 'wl_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-wl__p"} -->
<p class="ms-wl__p"><?php echo esc_html( mise_studio_t( 'wl_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-wl__form","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wl__form"><!-- wp:pattern {"slug":"mise-studio/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
