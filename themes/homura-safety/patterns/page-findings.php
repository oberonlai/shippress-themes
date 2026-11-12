<?php
/**
 * Title: Page: Findings sample
 * Slug: homura-safety/page-findings
 * Categories: homura-safety
 * Viewport Width: 1440
 * Description: Findings sample: slanted word READ, docked strip, report structure, priority definitions and a twelve-row findings register that stacks on mobile.
 */
?>
<!-- wp:cover {"url":"<?php echo homura_safety_img( 'hs-09-findings-desk' ); ?>","dimRatio":40,"minHeight":320,"minHeightUnit":"px","align":"full","className":"hs-pagehead hs-pagehead--photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull hs-pagehead hs-pagehead--photo sp-parallax" style="min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( homura_safety_t( 'alt_09' ) ); ?>" src="<?php echo homura_safety_img( 'hs-09-findings-desk' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"hs-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-pagehead__in"><!-- wp:paragraph {"className":"hs-barword hs-barword--page"} -->
<p class="hs-barword hs-barword--page" aria-hidden="true"><?php echo esc_html( homura_safety_t( 'pw_findings' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hs-pagehead__title"} -->
<h1 class="wp-block-heading hs-pagehead__title"><?php echo esc_html( homura_safety_t( 'findings_title' ) ); ?></h1>
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
<p class="hs-strip__cell hs-strip__cell--3"><a href="/fees/"><?php echo esc_html( homura_safety_t( 'sl_fees' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-strip__cell hs-strip__cell--4"} -->
<p class="hs-strip__cell hs-strip__cell--4"><a href="/contact/"><?php echo esc_html( homura_safety_t( 'sl_contact' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec"><!-- wp:group {"align":"wide","className":"hs-leadwrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-leadwrap"><!-- wp:paragraph {"className":"hs-lead"} -->
<p class="hs-lead"><?php echo esc_html( homura_safety_t( 'findings_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hs-findings__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-findings__grid"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"hs-findings__photo"} -->
<figure class="wp-block-image size-full hs-findings__photo"><img src="<?php echo homura_safety_img( 'hs-19-exit-sign' ); ?>" alt="<?php echo esc_attr( homura_safety_t( 'alt_19' ) ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hs-findings__card","layout":{"type":"default"}} -->
<div class="wp-block-group hs-findings__card"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'findings_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_structure' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'findings_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec hs-sec--pale","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec hs-sec--pale"><!-- wp:group {"align":"wide","className":"hs-prose","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-prose"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'findings_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_priority' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'findings_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hs-rows","layout":{"type":"default"}} -->
<div class="wp-block-group hs-rows"><!-- wp:group {"className":"hs-row","layout":{"type":"default"}} -->
<div class="wp-block-group hs-row"><!-- wp:paragraph {"className":"hs-row__id"} -->
<p class="hs-row__id"><?php echo wp_kses_post( homura_safety_t( 'k5f2b9323' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-row__text"} -->
<p class="hs-row__text"><?php echo esc_html( homura_safety_t( 'pd1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-pill"} -->
<p class="hs-pill"><?php echo esc_html( homura_safety_t( 'fi1_pr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-row","layout":{"type":"default"}} -->
<div class="wp-block-group hs-row"><!-- wp:paragraph {"className":"hs-row__id"} -->
<p class="hs-row__id"><?php echo wp_kses_post( homura_safety_t( 'k5890595e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-row__text"} -->
<p class="hs-row__text"><?php echo esc_html( homura_safety_t( 'pd2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-pill"} -->
<p class="hs-pill"><?php echo esc_html( homura_safety_t( 'fi2_pr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-row","layout":{"type":"default"}} -->
<div class="wp-block-group hs-row"><!-- wp:paragraph {"className":"hs-row__id"} -->
<p class="hs-row__id"><?php echo wp_kses_post( homura_safety_t( 'kbd11537f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-row__text"} -->
<p class="hs-row__text"><?php echo esc_html( homura_safety_t( 'pd3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-pill"} -->
<p class="hs-pill"><?php echo esc_html( homura_safety_t( 'fi3_pr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec"><!-- wp:group {"align":"wide","className":"hs-prose","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-prose"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'findings_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_register' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'findings_b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"align":"wide","className":"hs-feetable hs-findtable"} -->
<figure class="wp-block-table alignwide hs-feetable hs-findtable"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( homura_safety_t( 'fr_c1' ) ); ?></th><th><?php echo esc_html( homura_safety_t( 'fr_c2' ) ); ?></th><th><?php echo esc_html( homura_safety_t( 'fr_c3' ) ); ?></th><th><?php echo esc_html( homura_safety_t( 'fr_c4' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( homura_safety_t( 'kc63582ad' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi1_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi1_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi1_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'k25eddbd9' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi2_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi2_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi2_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'k47f272f2' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi3_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi3_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi3_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'k80e0e4c8' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr4_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr4_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi2_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'kf9ca9e93' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr5_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr5_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi1_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'k757ba4f8' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr6_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr6_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi2_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'k00c32447' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr7_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr7_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi2_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'k7bbce116' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr8_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr8_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi2_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'kf08b42eb' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr9_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr9_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi1_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'k63d74b92' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr10_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr10_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi3_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'k06c612c2' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr11_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr11_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi3_pr' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( homura_safety_t( 'kde4786c2' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr12_w' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fr12_t' ) ); ?></td><td><?php echo esc_html( homura_safety_t( 'fi3_pr' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></section>
<!-- /wp:group -->
