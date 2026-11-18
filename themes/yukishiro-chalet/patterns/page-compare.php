<?php
/**
 * Title: Page: Compare packages
 * Slug: yukishiro-chalet/page-compare
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Page head and the nine-column package table.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( yukishiro_chalet_img( 'card-ski-week.webp' ) ); ?>","dimRatio":30,"overlayColor":"ink","minHeight":480,"minHeightUnit":"px","contentPosition":"center center","isDark":true,"className":"yk-ph sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light yk-ph sp-parallax" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p04' ) ); ?>" src="<?php echo esc_url( yukishiro_chalet_img( 'card-ski-week.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"yk-lead yk-lead--w"} -->
<p class="yk-lead yk-lead--w"><?php echo esc_html( yukishiro_chalet_t( 'ph_compare_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yk-h1"} -->
<h1 class="wp-block-heading yk-h1"><?php echo esc_html( yukishiro_chalet_t( 'ph_compare_h1' ) ); ?></h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:html -->
<svg class="yk-seam yk-seam--page" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0,40 C360,120 1080,120 1440,40 L1440,120 L0,120 Z" fill="#FFFFFF"/></svg>
<!-- /wp:html -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-compare","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-compare"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'c_compare_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title"} -->
<h2 class="wp-block-heading yk-title"><?php echo esc_html( yukishiro_chalet_t( 'c_compare_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yk-lede yk-lede--full"} -->
<p class="yk-lede yk-lede--full"><?php echo esc_html( yukishiro_chalet_t( 'c_compare_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"hasFixedLayout":true,"className":"yk-table yk-table--wide"} -->
<figure class="wp-block-table yk-table yk-table--wide"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( yukishiro_chalet_t( 'th_pkg' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_season' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_school' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_dry' ) ); ?></th><th class="yk-from"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></th></tr></thead><tbody><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n1' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>7</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_season' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_season_w' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass6' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_school' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dry' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€1,640</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n2' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>3</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_season' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_season_w' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass2' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_school' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dry' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€690</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n3' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>5</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_season' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_season_w' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass_first' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_school' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_school4' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dry' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€1,280</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n4' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>7</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_season' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_season_s' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass_summer' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_school' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_guide3' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dry' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€1,120</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n5' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>4</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_season' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_season_s' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass_summer' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_school' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_guide_huts' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dry' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€860</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n6' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>3</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_season' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_season_s' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass_summer' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_school' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_dry' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€480</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_compare_0_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_compare_0_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split sp-stagger"><!-- wp:heading {"className":"yk-sh sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading yk-sh sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_compare_1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp sp-reveal sp-reveal--up"} -->
<p class="yk-sp sp-reveal sp-reveal--up"><?php echo esc_html( yukishiro_chalet_t( 's_compare_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--tight"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-split","layout":{"type":"default"}} -->
<div class="wp-block-group yk-split"><!-- wp:heading {"className":"yk-sh"} -->
<h2 class="wp-block-heading yk-sh"><?php echo esc_html( yukishiro_chalet_t( 's_compare_2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-sp"} -->
<p class="yk-sp"><?php echo esc_html( yukishiro_chalet_t( 's_compare_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yk-rows sp-stagger"><!-- wp:group {"className":"yk-row  sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row  sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yk-row__k"} -->
<p class="yk-row__k"><?php echo esc_html( yukishiro_chalet_t( 'ni_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-row__v"} -->
<p class="yk-row__v"><?php echo esc_html( yukishiro_chalet_t( 'ni_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-row  sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row  sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yk-row__k"} -->
<p class="yk-row__k"><?php echo esc_html( yukishiro_chalet_t( 'ni_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-row__v"} -->
<p class="yk-row__v"><?php echo esc_html( yukishiro_chalet_t( 'ni_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-row  sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row  sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yk-row__k"} -->
<p class="yk-row__k"><?php echo esc_html( yukishiro_chalet_t( 'ni_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-row__v"} -->
<p class="yk-row__v"><?php echo esc_html( yukishiro_chalet_t( 'ni_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yk-row  sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row  sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"yk-row__k"} -->
<p class="yk-row__k"><?php echo esc_html( yukishiro_chalet_t( 'ni_k4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-row__v"} -->
<p class="yk-row__v"><?php echo esc_html( yukishiro_chalet_t( 'ni_v4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"yk-sec yk-sec--cta","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-sec--cta"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:buttons {"className":"yk-cta"} -->
<div class="wp-block-buttons yk-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/packages/"><?php echo esc_html( yukishiro_chalet_t( 'cta_packages' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
