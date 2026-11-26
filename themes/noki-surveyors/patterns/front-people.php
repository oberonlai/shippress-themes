<?php
/**
 * Title: Home: who comes to the house
 * Slug: noki-surveyors/front-people
 * Categories: noki-surveyors
 * Viewport Width: 1440
 * Description: A paragraph and a timed day beside five staff list rows.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"people","align":"full","className":"nk-sec nk-sec--people","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group alignfull nk-sec nk-sec--people">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'ppl_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'ppl_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-people","layout":{"type":"default"}} -->
<div class="wp-block-group nk-people">
<!-- wp:group {"className":"nk-people__l","layout":{"type":"default"}} -->
<div class="wp-block-group nk-people__l">
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'ppl_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-label"} -->
<p class="nk-label"><?php echo esc_html( noki_surveyors_t( 'day_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ol class="nk-day"><li><time><?php echo esc_html( noki_surveyors_t( 'day1_t' ) ); ?></time><?php echo esc_html( noki_surveyors_t( 'day1_l' ) ); ?></li><li><time><?php echo esc_html( noki_surveyors_t( 'day2_t' ) ); ?></time><?php echo esc_html( noki_surveyors_t( 'day2_l' ) ); ?></li><li><time><?php echo esc_html( noki_surveyors_t( 'day3_t' ) ); ?></time><?php echo esc_html( noki_surveyors_t( 'day3_l' ) ); ?></li><li><time><?php echo esc_html( noki_surveyors_t( 'day4_t' ) ); ?></time><?php echo esc_html( noki_surveyors_t( 'day4_l' ) ); ?></li><li><time><?php echo esc_html( noki_surveyors_t( 'day5_t' ) ); ?></time><?php echo esc_html( noki_surveyors_t( 'day5_l' ) ); ?></li></ol>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-people__r","layout":{"type":"default"}} -->
<div class="wp-block-group nk-people__r">
<!-- wp:html -->
<ul class="nk-staff"><li><strong><?php echo esc_html( noki_surveyors_t( 'st1_n' ) ); ?></strong><span class="nk-role"><?php echo esc_html( noki_surveyors_t( 'st1_r' ) ); ?></span><span><?php echo esc_html( noki_surveyors_t( 'st1_l' ) ); ?></span></li><li><strong><?php echo esc_html( noki_surveyors_t( 'st2_n' ) ); ?></strong><span class="nk-role"><?php echo esc_html( noki_surveyors_t( 'st2_r' ) ); ?></span><span><?php echo esc_html( noki_surveyors_t( 'st2_l' ) ); ?></span></li><li><strong><?php echo esc_html( noki_surveyors_t( 'st3_n' ) ); ?></strong><span class="nk-role"><?php echo esc_html( noki_surveyors_t( 'st3_r' ) ); ?></span><span><?php echo esc_html( noki_surveyors_t( 'st3_l' ) ); ?></span></li><li><strong><?php echo esc_html( noki_surveyors_t( 'st4_n' ) ); ?></strong><span class="nk-role"><?php echo esc_html( noki_surveyors_t( 'st4_r' ) ); ?></span><span><?php echo esc_html( noki_surveyors_t( 'st4_l' ) ); ?></span></li><li><strong><?php echo esc_html( noki_surveyors_t( 'st5_n' ) ); ?></strong><span class="nk-role"><?php echo esc_html( noki_surveyors_t( 'st5_r' ) ); ?></span><span><?php echo esc_html( noki_surveyors_t( 'st5_l' ) ); ?></span></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
