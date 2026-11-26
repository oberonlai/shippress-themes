<?php
/**
 * Title: Home: case notes
 * Slug: noki-surveyors/front-cases
 * Categories: noki-surveyors
 * Viewport Width: 1440
 * Description: News-style text rows: a filter list on the left, three case notes on the right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"cases","align":"full","className":"nk-sec nk-sec--cases","layout":{"type":"default"}} -->
<section id="cases" class="wp-block-group alignfull nk-sec nk-sec--cases">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'cases_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'cases_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-cases","layout":{"type":"default"}} -->
<div class="wp-block-group nk-cases">
<!-- wp:html -->
<ul class="nk-filter"><li class="is-active"><a href="#cases"><?php echo esc_html( noki_surveyors_t( 'cf_all' ) ); ?></a></li><li><a href="#case-bell"><?php echo esc_html( noki_surveyors_t( 'cf_house' ) ); ?></a></li><li><a href="#case-iqbal"><?php echo esc_html( noki_surveyors_t( 'cf_shop' ) ); ?></a></li><li><a href="#case-anand"><?php echo esc_html( noki_surveyors_t( 'cf_flat' ) ); ?></a></li></ul>
<!-- /wp:html -->
<!-- wp:group {"className":"nk-crows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nk-crows sp-stagger">
<!-- wp:group {"anchor":"case-bell","className":"nk-crow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="case-bell" class="wp-block-group nk-crow sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"nk-crow__m"} -->
<p class="nk-crow__m"><?php echo esc_html( noki_surveyors_t( 'case1_m' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"nk-crow__t"} -->
<h3 class="wp-block-heading nk-crow__t"><a href="/cases/#bell"><?php echo esc_html( noki_surveyors_t( 'case1_t' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-crow__s"} -->
<p class="nk-crow__s"><?php echo esc_html( noki_surveyors_t( 'case1_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"case-iqbal","className":"nk-crow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="case-iqbal" class="wp-block-group nk-crow sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"nk-crow__m"} -->
<p class="nk-crow__m"><?php echo esc_html( noki_surveyors_t( 'case2_m' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"nk-crow__t"} -->
<h3 class="wp-block-heading nk-crow__t"><a href="/cases/#iqbal"><?php echo esc_html( noki_surveyors_t( 'case2_t' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-crow__s"} -->
<p class="nk-crow__s"><?php echo esc_html( noki_surveyors_t( 'case2_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"case-anand","className":"nk-crow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div id="case-anand" class="wp-block-group nk-crow sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"nk-crow__m"} -->
<p class="nk-crow__m"><?php echo esc_html( noki_surveyors_t( 'case3_m' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"nk-crow__t"} -->
<h3 class="wp-block-heading nk-crow__t"><a href="/cases/#anand"><?php echo esc_html( noki_surveyors_t( 'case3_t' ) ); ?></a></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-crow__s"} -->
<p class="nk-crow__s"><?php echo esc_html( noki_surveyors_t( 'case3_s' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
