<?php
/**
 * Title: Home: what a report covers
 * Slug: kantei-valuers/front-report
 * Categories: kantei-valuers
 * Keywords: report, rows, chips
 * Viewport Width: 1440
 * Description: Heading, text and a tall photograph at the left, seven report rows at the right, each with a black page-range chip, a title and one line.
 */
$e = 'kantei_valuers_e';
$a = 'kantei_valuers_a';
$i = 'kantei_valuers_img';
$l = 'kantei_valuers_lines';
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"report","className":"kv-sec kv-report","layout":{"type":"default"}} -->
<section id="report" class="wp-block-group alignfull kv-sec kv-report"><!-- wp:group {"className":"kv-report__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kv-report__grid"><!-- wp:group {"className":"kv-report__l sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-report__l sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-label"} -->
<p class="kv-label"><?php echo esc_html( kantei_valuers_t( 'report_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo $l( 'report_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kantei_valuers_t( 'report_body' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"kv-report__img"} -->
<figure class="wp-block-image size-large kv-report__img"><img src="<?php echo $i( 'h10-report.webp' ); ?>" alt="<?php echo esc_attr( kantei_valuers_t( 'alt_report' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-rrows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kv-rrows sp-stagger"><?php for ( $n = 1; $n <= 7; $n++ ) : ?><!-- wp:group {"className":"kv-rrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-rrow sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-rrow__chip"} -->
<p class="kv-rrow__chip"><span class="kv-chip"><?php echo $e( "r{$n}_chip" ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kv-rrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group kv-rrow__body"><!-- wp:heading {"level":3,"className":"kv-rrow__title"} -->
<h3 class="wp-block-heading kv-rrow__title"><?php echo $e( "r{$n}_title" ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kv-rrow__line"} -->
<p class="kv-rrow__line"><?php echo $e( "r{$n}_line" ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
