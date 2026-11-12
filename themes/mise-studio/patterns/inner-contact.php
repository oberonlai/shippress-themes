<?php
/**
 * Title: Page: Contact
 * Slug: mise-studio/inner-contact
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact page: framed-window head, the contact form slot with the mailto fallback, address rows, directions and a five-bar FAQ.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--head","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--head"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:paragraph {"className":"ms-crumb"} -->
<p class="ms-crumb"><a href="/"><?php echo esc_html( mise_studio_t( 'crumb_home' ) ); ?></a><span class="ms-crumb__sep" aria-hidden="true"> / </span>Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ms-h1 ms-h1--page"} -->
<h1 class="wp-block-heading ms-h1 ms-h1--page">Contact</h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-headphoto sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ms-headphoto sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-pos-50-50"} -->
<figure class="wp-block-image size-full ms-pos-50-50"><img src="<?php echo mise_studio_img( 'room-washup' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_room-washup' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<svg class="ms-hero__outline ms-headphoto__outline" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" focusable="false"><polygon points="14,16 56,16 56,28 84,28 84,78 14,78"/></svg>
<!-- /wp:html -->

<!-- wp:group {"className":"ms-headphoto__cap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-headphoto__cap"><!-- wp:paragraph {"className":"ms-headphoto__t"} -->
<p class="ms-headphoto__t"><?php echo esc_html( mise_studio_t( 'ct_cap1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-headphoto__s"} -->
<p class="ms-headphoto__s"><?php echo esc_html( mise_studio_t( 'ct_cap2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2"} -->
<h2 class="wp-block-heading ms-h2"><?php echo esc_html( mise_studio_t( 'ct_fh' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-sheet ms-sheet--form","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--form"><!-- wp:pattern {"slug":"mise-studio/contact-slot"} /-->

<!-- wp:paragraph {"className":"ms-note"} -->
<p class="ms-note"><?php echo esc_html( mise_studio_t( 'ct_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'ct_ah' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-sheet ms-sheet--rows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--rows sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ms-lead"} -->
<p class="ms-lead"><?php echo esc_html( mise_studio_t( 'ct_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( mise_studio_t( 'ct_b1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-sheet__head","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet__head"><!-- wp:heading {"level":3,"className":"ms-sheet__title"} -->
<h3 class="wp-block-heading ms-sheet__title"><?php echo esc_html( mise_studio_t( 'ct_rh' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-rows","layout":{"type":"default"}} -->
<div class="wp-block-group ms-rows"><!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'ct_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'vs_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'ct_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'ct_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'ct_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'vs_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'ct_l4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><a href="mailto:hello@mise-studio.example">hello@mise-studio.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:group {"className":"ms-split","layout":{"type":"default"}} -->
<div class="wp-block-group ms-split"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-split__img"} -->
<figure class="wp-block-image size-full ms-split__img"><img src="<?php echo mise_studio_img( 'kitchen-school' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_kitchen-school' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ms-sheet ms-sheet--sm","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--sm"><!-- wp:heading {"level":3,"className":"ms-h3"} -->
<h3 class="wp-block-heading ms-h3"><?php echo esc_html( mise_studio_t( 'ct_dh' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-cell__line ms-cell__line--left"} -->
<p class="ms-cell__line ms-cell__line--left"><?php echo esc_html( mise_studio_t( 'ct_dp' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'ct_qh' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-bars","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bars"><!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'ct_q1' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'ct_a1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'ct_q2' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'ct_a2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'ct_q3' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'ct_a3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'ct_q4' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'ct_a4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'ct_q5' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'ct_a5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:group {"className":"ms-sheet ms-sheet--close","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--close"><!-- wp:group {"className":"ms-close","layout":{"type":"default"}} -->
<div class="wp-block-group ms-close"><!-- wp:heading {"level":3,"className":"ms-sheet__title"} -->
<h3 class="wp-block-heading ms-sheet__title"><?php echo esc_html( mise_studio_t( 'fl_book' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"ms-pill-wrap"} -->
<div class="wp-block-buttons ms-pill-wrap"><!-- wp:button {"className":"ms-pill"} -->
<div class="wp-block-button ms-pill"><a class="wp-block-button__link wp-element-button" href="/book-a-visit/"><?php echo esc_html( mise_studio_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
