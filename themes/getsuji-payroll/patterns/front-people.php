<?php
/**
 * Title: Home: the people
 * Slug: getsuji-payroll/front-people
 * Categories: getsuji-payroll
 * Keywords: team, people, staff
 * Viewport Width: 1440
 * Description: A portrait over an offset dot grid with an oversized word overlapping its edge, a paragraph and a hairline list of the five staff.
 */
$gp_staff = array(
	array( 'Hana Morel', 'Founder, payroll lead' ),
	array( 'Tomás Verbeek', 'Senior payroll clerk' ),
	array( 'Ines Duarte', 'Leave and absence' ),
	array( 'Pieter Claes', 'Contributions and tax filing' ),
	array( 'Ama Owusu', 'Switching and onboarding' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"people","className":"gp-people gp-section","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group alignfull gp-people gp-section"><!-- wp:group {"className":"gp-people__inner","layout":{"type":"default"}} -->
<div class="wp-block-group gp-people__inner"><!-- wp:group {"className":"gp-photo gp-photo--people","layout":{"type":"default"}} -->
<div class="wp-block-group gp-photo gp-photo--people"><!-- wp:group {"className":"gp-dots sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group gp-dots sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gp-ph gp-ph--p7 gp-photo__img"} -->
<figure class="wp-block-image size-full gp-ph gp-ph--p7 gp-photo__img"><img src="<?php echo esc_url( getsuji_payroll_img( 'p7' ) ); ?>" alt="<?php $gp_alts = getsuji_payroll_alts(); echo esc_attr( isset( $gp_alts[ 'p7' ] ) ? $gp_alts[ 'p7' ] : '' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gp-steady"} -->
<p class="gp-steady"><?php echo wp_kses_post( getsuji_payroll_t( 'k2a1c6ac4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gp-people__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group gp-people__text sp-stagger"><!-- wp:paragraph {"className":"gp-label sp-reveal sp-reveal--up"} -->
<p class="gp-label sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'k4fa1cdcb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( getsuji_payroll_t( 'k30d060de' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gp-staff sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gp-staff sp-reveal sp-reveal--up"><?php foreach ( $gp_staff as $gp_s ) : ?>
<!-- wp:paragraph {"className":"gp-staff__row"} -->
<p class="gp-staff__row"><strong><?php echo esc_html( $gp_s[0] ); ?></strong><span><?php echo esc_html( $gp_s[1] ); ?></span></p>
<!-- /wp:paragraph -->
<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
