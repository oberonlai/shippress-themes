<?php
/**
 * Title: Page: Fees
 * Slug: homura-safety/page-fees
 * Categories: homura-safety
 * Viewport Width: 1440
 * Description: Fees: slanted word FEES, docked strip, the five fixed fees as a full-width table (stacked on mobile), what is included and travel terms.
 */
?>
<!-- wp:cover {"url":"<?php echo homura_safety_img( 'hs-06-workshop' ); ?>","dimRatio":40,"minHeight":320,"minHeightUnit":"px","align":"full","className":"hs-pagehead hs-pagehead--photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull hs-pagehead hs-pagehead--photo sp-parallax" style="min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( homura_safety_t( 'alt_06' ) ); ?>" src="<?php echo homura_safety_img( 'hs-06-workshop' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"hs-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-pagehead__in"><!-- wp:paragraph {"className":"hs-barword hs-barword--page"} -->
<p class="hs-barword hs-barword--page" aria-hidden="true"><?php echo esc_html( homura_safety_t( 'pw_fees' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hs-pagehead__title"} -->
<h1 class="wp-block-heading hs-pagehead__title"><?php echo esc_html( homura_safety_t( 'fees_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"nav","align":"full","className":"hs-strip-wrap","layout":{"type":"default"}} -->
<nav class="wp-block-group alignfull hs-strip-wrap" aria-label="<?php echo esc_attr( homura_safety_t( 'st_label' ) ); ?>"><!-- wp:group {"align":"wide","className":"hs-strip","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-strip"><!-- wp:paragraph {"className":"hs-strip__cell hs-strip__cell--1"} -->
<p class="hs-strip__cell hs-strip__cell--1"><a href="/scope/"><?php echo esc_html( homura_safety_t( 'sl_scope' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-strip__cell hs-strip__cell--2"} -->
<p class="hs-strip__cell hs-strip__cell--2"><a href="/process/"><?php echo esc_html( homura_safety_t( 'sl_process' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-strip__cell hs-strip__cell--3"} -->
<p class="hs-strip__cell hs-strip__cell--3"><a href="/findings/"><?php echo esc_html( homura_safety_t( 'sl_findings' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-strip__cell hs-strip__cell--4"} -->
<p class="hs-strip__cell hs-strip__cell--4"><a href="/contact/"><?php echo esc_html( homura_safety_t( 'sl_contact' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec hs-fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec hs-fees"><!-- wp:group {"align":"wide","className":"hs-leadwrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-leadwrap"><!-- wp:paragraph {"className":"hs-lead"} -->
<p class="hs-lead"><?php echo esc_html( homura_safety_t( 'fees_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hs-prose","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-prose"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'fees_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_schedule' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'fees_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"align":"wide","className":"hs-feetable"} -->
<figure class="wp-block-table alignwide hs-feetable"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( homura_safety_t( 'fe_c1' ) ); ?></th><th><?php echo esc_html( homura_safety_t( 'fe_c2' ) ); ?></th><th><?php echo esc_html( homura_safety_t( 'fe_c3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( homura_safety_t( 'fe1_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe1_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( homura_safety_t( 'fe2_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe2_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( homura_safety_t( 'fe3_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe3_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( homura_safety_t( 'fe4_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe4_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( homura_safety_t( 'fe5_s' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe5_d' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fe5_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"hs-note"} -->
<p class="hs-note"><?php echo esc_html( homura_safety_t( 'fe_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec hs-sec--pale","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec hs-sec--pale"><!-- wp:group {"align":"wide","className":"hs-notch hs-notch--l","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-notch hs-notch--l"><!-- wp:group {"className":"hs-notch__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hs-notch__tile"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo homura_safety_img( 'hs-03-hood-nozzle' ); ?>" alt="<?php echo esc_attr( homura_safety_t( 'alt_03' ) ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-notch__panel","layout":{"type":"default"}} -->
<div class="wp-block-group hs-notch__panel"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'fees_h2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'fees_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"hs-dots"} -->
<ul class="wp-block-list hs-dots"><!-- wp:list-item -->
<li><?php echo esc_html( homura_safety_t( 'inc1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( homura_safety_t( 'inc2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( homura_safety_t( 'inc3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( homura_safety_t( 'inc4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec"><!-- wp:group {"align":"wide","className":"hs-prose","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-prose"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'fees_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_travel' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'fees_b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
