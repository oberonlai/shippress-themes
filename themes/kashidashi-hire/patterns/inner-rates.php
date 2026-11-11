<?php
/**
 * Title: Inner: rates
 * Slug: kashidashi-hire/inner-rates
 * Categories: kashidashi-hire
 * Inserter: no
 * Description: Rates page head, the seven-row rates table (stacked cards on mobile), what is included and delivery zones.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kh-hero kh-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-hero kh-ihead"><!-- wp:group {"className":"kh-wedge kh-wedge--i","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wedge kh-wedge--i"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__stage kh-ihead__stage","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stage kh-ihead__stage"><!-- wp:group {"className":"kh-hero__photo kh-ihead__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__photo kh-ihead__photo sp-parallax"><!-- wp:group {"className":"kh-hero__stack sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stack sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kh-ihead__img"} -->
<figure class="wp-block-image size-full kh-ihead__img"><img src="<?php echo kashidashi_hire_img( 'p06-roller-path' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p06' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__shade"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__copy kh-ihead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__copy kh-ihead__copy"><!-- wp:paragraph {"className":"kh-hero__kicker"} -->
<p class="kh-hero__kicker"><?php echo esc_html( kashidashi_hire_t( 'ih_rates_kick' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kh-hero__title kh-ihead__title"} -->
<h1 class="wp-block-heading kh-hero__title kh-ihead__title"><span class="kh-strip"><?php echo esc_html( kashidashi_hire_t( 'ih_rates_h1' ) ); ?></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-dock kh-dock--one","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock kh-dock--one"><!-- wp:group {"className":"kh-dock__b","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock__b"><!-- wp:paragraph {"className":"kh-dock__next"} -->
<p class="kh-dock__next"><span><?php echo esc_html( kashidashi_hire_t( 'dk_next' ) ); ?></span> <strong><?php echo esc_html( kashidashi_hire_t( 'dk_date' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-dock__req"} -->
<p class="kh-dock__req"><a href="/request/"><?php echo esc_html( kashidashi_hire_t( 'dk_req' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-ilead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-ilead"><!-- wp:group {"className":"kh-ilead__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ilead__in"><!-- wp:paragraph {"className":"kh-lead kh-lead--big sp-reveal sp-reveal--up"} -->
<p class="kh-lead kh-lead--big sp-reveal sp-reveal--up"><?php echo esc_html( kashidashi_hire_t( 'i_rates_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"table","align":"full","className":"kh-sec kh-rtable","layout":{"type":"default"}} -->
<section id="table" class="wp-block-group alignfull kh-sec kh-rtable"><!-- wp:group {"className":"kh-rtable__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-rtable__in"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kashidashi_hire_t( 'rt_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( kashidashi_hire_t( 'rt_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-lead"} -->
<p class="kh-lead"><?php echo esc_html( kashidashi_hire_t( 'rt_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<table class="kh-table kh-table--rates"><thead><tr><th><?php echo esc_html( kashidashi_hire_t( 'rt_h_g' ) ); ?></th><th><?php echo esc_html( kashidashi_hire_t( 'rt_h_m' ) ); ?></th><th><?php echo esc_html( kashidashi_hire_t( 'rt_h_w' ) ); ?></th><th class="kh-table__v"><?php echo esc_html( kashidashi_hire_t( 'rt_h_r' ) ); ?></th></tr></thead><tbody><tr><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_g' ) ); ?></span><span class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'rtt_1_0' ) ); ?></span></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'rtt_1_1' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_1_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_1_3' ) ); ?></td></tr><tr><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_g' ) ); ?></span><span class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'rtt_2_0' ) ); ?></span></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'rtt_2_1' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_2_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_2_3' ) ); ?></td></tr><tr><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_g' ) ); ?></span><span class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'rtt_3_0' ) ); ?></span></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'rtt_3_1' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_3_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_3_3' ) ); ?></td></tr><tr><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_g' ) ); ?></span><span class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'rtt_4_0' ) ); ?></span></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'rtt_4_1' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_4_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_4_3' ) ); ?></td></tr><tr><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_g' ) ); ?></span><span class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'rtt_5_0' ) ); ?></span></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'rtt_5_1' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_5_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_5_3' ) ); ?></td></tr><tr><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_g' ) ); ?></span><span class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'rtt_6_0' ) ); ?></span></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'rtt_6_1' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_6_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_6_3' ) ); ?></td></tr><tr><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_g' ) ); ?></span><span class="kh-tag"><?php echo esc_html( kashidashi_hire_t( 'rtt_7_0' ) ); ?></span></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'rtt_7_1' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_7_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'rt_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'rtt_7_3' ) ); ?></td></tr></tbody></table>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-ibody","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-ibody"><!-- wp:group {"className":"kh-ibody__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ibody__in"><!-- wp:group {"className":"kh-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__l"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-isec__t"} -->
<h2 class="wp-block-heading kh-isec__t"><?php echo esc_html( kashidashi_hire_t( 'i_rates_h1' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__r"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_rates_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__l"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-isec__t"} -->
<h2 class="wp-block-heading kh-isec__t"><?php echo esc_html( kashidashi_hire_t( 'i_rates_h2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__r"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_rates_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-incl sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-incl sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-incl__c","layout":{"type":"default"}} -->
<div class="wp-block-group kh-incl__c"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( kashidashi_hire_t( 'rt_inh' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"kh-list kh-list--in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-list kh-list--in"><!-- wp:paragraph {"className":"kh-list__i"} -->
<p class="kh-list__i"><?php echo esc_html( kashidashi_hire_t( 'rt_in1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-list__i"} -->
<p class="kh-list__i"><?php echo esc_html( kashidashi_hire_t( 'rt_in2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-list__i"} -->
<p class="kh-list__i"><?php echo esc_html( kashidashi_hire_t( 'rt_in3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-list__i"} -->
<p class="kh-list__i"><?php echo esc_html( kashidashi_hire_t( 'rt_in4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-incl__c","layout":{"type":"default"}} -->
<div class="wp-block-group kh-incl__c"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( kashidashi_hire_t( 'rt_exh' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"kh-list kh-list--ex","layout":{"type":"default"}} -->
<div class="wp-block-group kh-list kh-list--ex"><!-- wp:paragraph {"className":"kh-list__i"} -->
<p class="kh-list__i"><?php echo esc_html( kashidashi_hire_t( 'rt_ex1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-list__i"} -->
<p class="kh-list__i"><?php echo esc_html( kashidashi_hire_t( 'rt_ex2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-list__i"} -->
<p class="kh-list__i"><?php echo esc_html( kashidashi_hire_t( 'rt_ex3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-list__i"} -->
<p class="kh-list__i"><?php echo esc_html( kashidashi_hire_t( 'rt_ex4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__l"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-isec__t"} -->
<h2 class="wp-block-heading kh-isec__t"><?php echo esc_html( kashidashi_hire_t( 'i_rates_h3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__r"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_rates_b3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-zones sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-zones sp-reveal sp-reveal--up"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( kashidashi_hire_t( 'rt_zh' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"kh-zone","layout":{"type":"default"}} -->
<div class="wp-block-group kh-zone"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'rt_z1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-zone__v"} -->
<p class="kh-zone__v"><?php echo esc_html( kashidashi_hire_t( 'rt_z1v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-zone","layout":{"type":"default"}} -->
<div class="wp-block-group kh-zone"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'rt_z2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-zone__v"} -->
<p class="kh-zone__v"><?php echo esc_html( kashidashi_hire_t( 'rt_z2v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
