<?php
/**
 * Title: Home: three doors
 * Slug: getsuji-payroll/front-thumbs
 * Categories: getsuji-payroll
 * Keywords: services, thumbnails
 * Viewport Width: 1440
 * Description: Three square photographs with pole headings and one-line captions.
 */
$gp_cols = array(
	array( 'p3', 'The month', '/the-month/', 'Hand over timecards on the 20th. We resolve questions directly, approve figures on the 23rd, and disburse pay on the 25th.' ),
	array( 'p4', 'Firm accounts', '/accounts/', 'Read how local bakeries, architecture studios, and cleaning services keep their monthly payroll orderly and on time.' ),
	array( 'p5', 'Fees', '/fees/', 'Straightforward monthly pricing starting at €120 for up to five employees, with no hidden setup costs or unexpected surcharges.' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"services","className":"gp-thumbs gp-section","layout":{"type":"default"}} -->
<section id="services" class="wp-block-group alignfull gp-thumbs gp-section"><!-- wp:group {"className":"gp-thumbs__row sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group gp-thumbs__row sp-stagger"><?php foreach ( $gp_cols as $gp_col ) : ?>
<!-- wp:group {"className":"gp-thumb sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gp-thumb sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"gp-pole"} -->
<h3 class="wp-block-heading gp-pole"><?php echo esc_html( $gp_col[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gp-ph gp-ph--<?php echo esc_attr( $gp_col[0] ); ?> gp-thumb__img"} -->
<figure class="wp-block-image size-full gp-ph gp-ph--<?php echo esc_attr( $gp_col[0] ); ?> gp-thumb__img"><img src="<?php echo esc_url( getsuji_payroll_img( $gp_col[0] ) ); ?>" alt="<?php $gp_alts = getsuji_payroll_alts(); echo esc_attr( isset( $gp_alts[ $gp_col[0] ] ) ? $gp_alts[ $gp_col[0] ] : '' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gp-thumb__cap"} -->
<p class="gp-thumb__cap"><a href="<?php echo esc_url( home_url( $gp_col[2] ) ); ?>"><?php echo esc_html( $gp_col[3] ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
