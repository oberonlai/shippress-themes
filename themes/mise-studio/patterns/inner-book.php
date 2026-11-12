<?php
/**
 * Title: Page: Book a site visit
 * Slug: mise-studio/inner-book
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: Booking page: 72/28 photo and panel head, visit details, five dated rows and the booking form slot with the mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--crumb","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--crumb"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:paragraph {"className":"ms-crumb"} -->
<p class="ms-crumb"><a href="/"><?php echo esc_html( mise_studio_t( 'crumb_home' ) ); ?></a><span class="ms-crumb__sep" aria-hidden="true"> / </span><?php echo esc_html( mise_studio_t( 'crumb_book' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-hero ms-hero--book","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-hero ms-hero--book"><!-- wp:group {"className":"ms-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ms-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-hero__slide ms-hero__slide--1"} -->
<figure class="wp-block-image size-full ms-hero__slide ms-hero__slide--1"><img src="<?php echo mise_studio_img( 'hero-plan-on-pass' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_hero-plan-on-pass' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<svg class="ms-hero__outline" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" focusable="false"><polygon points="21.5,40 38,40 38,33 56,33 56,83.7 21.5,83.7"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ms-hero__panel"><!-- wp:paragraph {"className":"ms-eyebrow"} -->
<p class="ms-eyebrow"><?php echo esc_html( mise_studio_t( 'bk_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ms-hero__h1 ms-hero__h1--book"} -->
<h1 class="wp-block-heading ms-hero__h1 ms-hero__h1--book"><?php echo esc_html( mise_studio_t( 'bk_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-hero__meta"} -->
<p class="ms-hero__meta"><?php echo esc_html( mise_studio_t( 'vs_windows' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-hero__meta"} -->
<p class="ms-hero__meta"><?php echo esc_html( mise_studio_t( 'vs_fee' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'bk_dh' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-sheet sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ms-lead"} -->
<p class="ms-lead"><?php echo esc_html( mise_studio_t( 'bk_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( mise_studio_t( 'bk_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'bk_ph' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-split","layout":{"type":"default"}} -->
<div class="wp-block-group ms-split"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-split__img"} -->
<figure class="wp-block-image size-full ms-split__img"><img src="<?php echo mise_studio_img( 'test-walk' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_test-walk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ms-sheet ms-sheet--sm","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--sm"><!-- wp:paragraph {"className":"ms-cell__line ms-cell__line--left"} -->
<p class="ms-cell__line ms-cell__line--left"><?php echo esc_html( mise_studio_t( 'bk_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'bk_rh' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-sheet ms-sheet--rows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--rows sp-reveal sp-reveal--up"><!-- wp:group {"className":"ms-sheet__head","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet__head"><!-- wp:heading {"level":3,"className":"ms-sheet__title"} -->
<h3 class="wp-block-heading ms-sheet__title"><?php echo esc_html( mise_studio_t( 'bk_rsh' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-rows","layout":{"type":"default"}} -->
<div class="wp-block-group ms-rows"><!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'pr_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__t"} -->
<p class="ms-row__t"><strong><?php echo esc_html( mise_studio_t( 'pr_t1' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'pr_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'pr_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__t"} -->
<p class="ms-row__t"><strong><?php echo esc_html( mise_studio_t( 'pr_t2' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'pr_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'pr_l3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__t"} -->
<p class="ms-row__t"><strong><?php echo esc_html( mise_studio_t( 'pr_t3' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'pr_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'pr_l4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__t"} -->
<p class="ms-row__t"><strong><?php echo esc_html( mise_studio_t( 'pr_t4' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'pr_p4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label"><?php echo esc_html( mise_studio_t( 'pr_l5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__t"} -->
<p class="ms-row__t"><strong><?php echo esc_html( mise_studio_t( 'pr_t5' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'pr_p5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2"} -->
<h2 class="wp-block-heading ms-h2"><?php echo esc_html( mise_studio_t( 'bk_fh' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-sheet ms-sheet--form","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--form"><!-- wp:pattern {"slug":"mise-studio/book-slot"} /-->

<!-- wp:paragraph {"className":"ms-note"} -->
<p class="ms-note"><?php echo esc_html( mise_studio_t( 'bk_contact' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
