<?php
/**
 * Title: Home: fees
 * Slug: getsuji-payroll/front-fees
 * Categories: getsuji-payroll
 * Keywords: fees, prices, table
 * Viewport Width: 1440
 * Description: The six fees in a full-width table with the price column kept on one line.
 */
$gp_fees = array(
	array( 'Monthly base', 'Pay run for up to 5 staff, payslips, contribution filing, one named clerk.', '€120 / month' ),
	array( 'Each further employee', 'One payslip and its filing.', '€9 / employee / month' ),
	array( 'Switching (one-off)', 'Data take-over, parallel first month.', '€350 one-off' ),
	array( 'Starter or leaver', 'Contracts data, final pay, forms.', '€25 / change' ),
	array( 'Extra pay run', 'Off-cycle run (bonus, correction).', '€60 / run' ),
	array( 'Year-end statements', 'Annual tax forms per employee.', '€15 / employee' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"gp-fees gp-section","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull gp-fees gp-section"><!-- wp:group {"className":"gp-fees__inner","layout":{"type":"default"}} -->
<div class="wp-block-group gp-fees__inner"><!-- wp:heading {"className":"gp-pole"} -->
<h2 class="wp-block-heading gp-pole"><?php echo wp_kses_post( getsuji_payroll_t( 'k006300ef' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"gp-fee-table"} -->
<figure class="wp-block-table gp-fee-table"><table class="has-fixed-layout"><thead><tr><th><?php echo wp_kses_post( getsuji_payroll_t( 'k7d74f3b9' ) ); ?></th><th><?php echo wp_kses_post( getsuji_payroll_t( 'keb37b12b' ) ); ?></th><th><?php echo wp_kses_post( getsuji_payroll_t( 'k3601146c' ) ); ?></th></tr></thead><tbody><?php foreach ( $gp_fees as $gp_f ) : ?><tr><td><?php echo esc_html( $gp_f[0] ); ?></td><td><?php echo esc_html( $gp_f[1] ); ?></td><td><?php echo esc_html( $gp_f[2] ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"gp-fees__note"} -->
<p class="gp-fees__note"><?php echo wp_kses_post( getsuji_payroll_t( 'k56d413cb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"gp-fees__cta"} -->
<div class="wp-block-buttons gp-fees__cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo wp_kses_post( getsuji_payroll_t( 'k4e21ca2f' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
