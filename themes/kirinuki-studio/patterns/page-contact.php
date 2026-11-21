<?php
/**
 * Title: Page: Contact
 * Slug: kirinuki-studio/page-contact
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: Contact page: address, hours and how to reach Wharf Yard, a contact form slot with mailto fallback and a full-width studio floor photograph that drifts with scroll.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kr-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-ihead"><!-- wp:html -->
<div class="kr-grain" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kr-ihead__inner","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__inner"><!-- wp:group {"className":"kr-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-ihead__text"><!-- wp:paragraph {"className":"kr-eyebrow kr-dots"} -->
<p class="kr-eyebrow kr-dots"><?php echo esc_html( kirinuki_studio_t( 'i_crumb_contact' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kr-ihead__h"} -->
<h1 class="wp-block-heading kr-ihead__h"><?php echo esc_html( kirinuki_studio_t( 'i_contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-ihead__lede"} -->
<p class="kr-ihead__lede"><?php echo esc_html( kirinuki_studio_t( 'i_contact_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-triptych kr-triptych--s","layout":{"type":"default"}} -->
<div class="wp-block-group kr-triptych kr-triptych--s"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'p1.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_p1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'w3.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w3' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-tri sp-parallax"} -->
<figure class="wp-block-image size-full kr-tri sp-parallax"><img src="<?php echo kirinuki_studio_img( 'w5.webp' ); ?>" alt="<?php echo kirinuki_studio_a( 'alt_w5' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground"><!-- wp:group {"className":"kr-sheet kr-sheet--plain","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet kr-sheet--plain"><!-- wp:group {"className":"kr-sheet__title sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-sheet__title sp-reveal sp-reveal--up"><!-- wp:group {"className":"kr-title","layout":{"type":"default"}} -->
<div class="wp-block-group kr-title"><!-- wp:heading {"level":2,"className":"kr-title__h"} -->
<h2 class="wp-block-heading kr-title__h"><?php echo esc_html( kirinuki_studio_t( 'i_ct_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-title__sub"} -->
<p class="kr-title__sub"><?php echo esc_html( kirinuki_studio_t( 'i_ct_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_contact_s1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:paragraph {"className":"kr-prow__p"} -->
<p class="kr-prow__p"><?php echo esc_html( kirinuki_studio_t( 'i_contact_s2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"write","className":"kr-prow kr-prow--form","layout":{"type":"default"}} -->
<div id="write" class="wp-block-group kr-prow kr-prow--form"><!-- wp:heading {"level":2,"className":"kr-prow__h"} -->
<h2 class="wp-block-heading kr-prow__h"><?php echo esc_html( kirinuki_studio_t( 'i_ct_form_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kr-prow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kr-prow__body"><!-- wp:group {"className":"kr-formwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-formwrap"><?php ob_start(); ?>
<!-- wp:buttons {"className":"kr-btns"} -->
<div class="wp-block-buttons kr-btns"><!-- wp:button {"className":"kr-pill kr-pill--dark"} -->
<div class="wp-block-button kr-pill kr-pill--dark"><a class="wp-block-button__link wp-element-button" href="mailto:hello@kirinuki-studio.example"><?php echo esc_html( kirinuki_studio_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php $fallback = ob_get_clean(); echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo kirinuki_studio_img( 'b1.webp' ); ?>","dimRatio":0,"minHeight":620,"minHeightUnit":"px","contentPosition":"bottom left","isUserOverlayColor":false,"className":"kr-floor sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kr-floor sp-parallax" style="min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo kirinuki_studio_a( 'alt_b1' ); ?>" src="<?php echo kirinuki_studio_img( 'b1.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kr-floor__card","layout":{"type":"default"}} -->
<div class="wp-block-group kr-floor__card"><!-- wp:heading {"level":3,"className":"kr-floor__h"} -->
<h3 class="wp-block-heading kr-floor__h"><?php echo esc_html( kirinuki_studio_t( 'floor_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-floor__p"} -->
<p class="kr-floor__p"><?php echo esc_html( kirinuki_studio_t( 'floor_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-floor__p"} -->
<p class="kr-floor__p"><?php echo esc_html( kirinuki_studio_t( 'floor_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-floor__p"} -->
<p class="kr-floor__p"><?php echo esc_html( kirinuki_studio_t( 'floor_dock' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
