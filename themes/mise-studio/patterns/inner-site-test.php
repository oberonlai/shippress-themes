<?php
/**
 * Title: Page: Site test
 * Slug: mise-studio/inner-site-test
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: Site test page: framed-window head, the home masonry, test-day dated rows, three flush cells and a four-bar FAQ.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--head","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--head"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:paragraph {"className":"ms-crumb"} -->
<p class="ms-crumb"><a href="/"><?php echo esc_html( mise_studio_t( 'crumb_home' ) ); ?></a><span class="ms-crumb__sep" aria-hidden="true"> / </span>Site test</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ms-h1 ms-h1--page"} -->
<h1 class="wp-block-heading ms-h1 ms-h1--page">The site test</h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-headphoto sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ms-headphoto sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-pos-50-62"} -->
<figure class="wp-block-image size-full ms-pos-50-62"><img src="<?php echo mise_studio_img( 'hero-tape-floor' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_hero-tape-floor' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<svg class="ms-hero__outline ms-headphoto__outline" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" focusable="false"><polygon points="16,14 58,14 58,26 80,26 80,78 16,78"/></svg>
<!-- /wp:html -->

<!-- wp:group {"className":"ms-headphoto__cap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-headphoto__cap"><!-- wp:paragraph {"className":"ms-headphoto__t"} -->
<p class="ms-headphoto__t"><?php echo esc_html( mise_studio_t( 'stp_cap1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ms-headphoto__s"} -->
<p class="ms-headphoto__s"><?php echo esc_html( mise_studio_t( 'stp_cap2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up">Why we test the layout at full scale</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-sheet sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ms-lead"} -->
<p class="ms-lead"><?php echo esc_html( mise_studio_t( 'stp_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( mise_studio_t( 'stp_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'st_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-mason","layout":{"type":"default"}} -->
<div class="wp-block-group ms-mason"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-mason__tall"} -->
<figure class="wp-block-image size-full ms-mason__tall"><img src="<?php echo mise_studio_img( 'test-mockup' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_test-mockup' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ms-mason__right","layout":{"type":"default"}} -->
<div class="wp-block-group ms-mason__right"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ms-mason__wide"} -->
<figure class="wp-block-image size-full ms-mason__wide"><img src="<?php echo mise_studio_img( 'test-walk' ); ?>" alt="<?php echo esc_attr( mise_studio_t( 'alt_test-walk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ms-sheet ms-sheet--sm","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--sm"><!-- wp:heading {"level":3,"className":"ms-h3"} -->
<h3 class="wp-block-heading ms-h3"><?php echo esc_html( mise_studio_t( 'stp_h3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-cell__line ms-cell__line--left"} -->
<p class="ms-cell__line ms-cell__line--left"><?php echo esc_html( mise_studio_t( 'stp_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'stp_dh' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-sheet ms-sheet--rows sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--rows sp-reveal sp-reveal--up"><!-- wp:group {"className":"ms-sheet__head","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet__head"><!-- wp:heading {"level":3,"className":"ms-sheet__title"} -->
<h3 class="wp-block-heading ms-sheet__title"><?php echo esc_html( mise_studio_t( 'stp_dsh' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-dot"} -->
<p class="ms-dot"><a href="/book-a-visit/"><?php echo esc_html( mise_studio_t( 'cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-rows","layout":{"type":"default"}} -->
<div class="wp-block-group ms-rows"><!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label">13:00</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'stp_r1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label">14:00</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'stp_r2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label">15:30</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'stp_r3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-row","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row"><!-- wp:paragraph {"className":"ms-row__label"} -->
<p class="ms-row__label">16:30</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group ms-row__body"><!-- wp:paragraph {"className":"ms-row__p"} -->
<p class="ms-row__p"><?php echo esc_html( mise_studio_t( 'stp_r4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'stp_sh' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-intro"} -->
<p class="ms-intro"><?php echo esc_html( mise_studio_t( 'stp_b3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-cells","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cells"><!-- wp:group {"className":"ms-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cell"><!-- wp:paragraph {"className":"ms-cell__label"} -->
<p class="ms-cell__label"><?php echo esc_html( mise_studio_t( 'st_c1l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ms-cell__name"} -->
<h3 class="wp-block-heading ms-cell__name"><?php echo esc_html( mise_studio_t( 'st_c1n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-cell__line"} -->
<p class="ms-cell__line"><?php echo esc_html( mise_studio_t( 'st_c1p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cell"><!-- wp:paragraph {"className":"ms-cell__label"} -->
<p class="ms-cell__label"><?php echo esc_html( mise_studio_t( 'st_c2l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ms-cell__name"} -->
<h3 class="wp-block-heading ms-cell__name"><?php echo esc_html( mise_studio_t( 'st_c2n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-cell__line"} -->
<p class="ms-cell__line"><?php echo esc_html( mise_studio_t( 'st_c2p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cell"><!-- wp:paragraph {"className":"ms-cell__label"} -->
<p class="ms-cell__label"><?php echo esc_html( mise_studio_t( 'st_c3l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ms-cell__name"} -->
<h3 class="wp-block-heading ms-cell__name"><?php echo esc_html( mise_studio_t( 'st_c3n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-cell__line"} -->
<p class="ms-cell__line"><?php echo esc_html( mise_studio_t( 'st_c3p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec ms-sec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec ms-sec--in"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:heading {"className":"ms-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ms-h2 sp-reveal sp-reveal--up"><?php echo esc_html( mise_studio_t( 'stp_fh' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-bars","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bars"><!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'stp_q1' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'stp_a1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'stp_q2' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'stp_a2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'stp_q3' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'stp_a3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"ms-bar"} -->
<details class="wp-block-details ms-bar"><summary><?php echo esc_html( mise_studio_t( 'stp_q4' ) ); ?></summary>
<!-- wp:group {"className":"ms-bar__sheet","layout":{"type":"default"}} -->
<div class="wp-block-group ms-bar__sheet"><!-- wp:paragraph {"className":"ms-faq__a"} -->
<p class="ms-faq__a"><?php echo esc_html( mise_studio_t( 'stp_a4' ) ); ?></p>
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
