<?php
/**
 * Title: Home: team photograph and the people
 * Slug: kantei-valuers/front-people
 * Categories: kantei-valuers
 * Keywords: team, people, parallax
 * Viewport Width: 1440
 * Description: Full-bleed team photograph with parallax, and under it the lead band with a heading, a paragraph and seven named rule rows. No portraits.
 */
$e = 'kantei_valuers_e';
$a = 'kantei_valuers_a';
$i = 'kantei_valuers_img';
$l = 'kantei_valuers_lines';
?>
<!-- wp:cover {"url":"<?php echo $i( 'h02-team-pavement.webp' ); ?>","alt":"<?php echo $a( 'alt_people' ); ?>","dimRatio":0,"isDark":false,"align":"full","tagName":"section","className":"kv-teamphoto sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-cover alignfull is-light kv-teamphoto sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo $a( 'alt_people' ); ?>" src="<?php echo $i( 'h02-team-pavement.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></section>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","tagName":"section","anchor":"people","className":"kv-lead kv-people","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group alignfull kv-lead kv-people"><!-- wp:group {"className":"kv-people__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kv-people__grid"><!-- wp:group {"className":"kv-people__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-people__l sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-label kv-label--light"} -->
<p class="kv-label kv-label--light"><?php echo $e( 'people_label' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-h2 kv-h2--light"} -->
<h2 class="wp-block-heading kv-h2 kv-h2--light"><?php echo $l( 'people_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kv-people__body"} -->
<p class="kv-people__body"><?php echo $e( 'people_body' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-prows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kv-prows sp-stagger"><?php for ( $n = 1; $n <= 7; $n++ ) : ?><!-- wp:group {"className":"kv-prow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-prow sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-prow__n"} -->
<p class="kv-prow__n"><?php echo $e( "p{$n}n" ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-prow__r"} -->
<p class="kv-prow__r"><?php echo $e( "p{$n}r" ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
