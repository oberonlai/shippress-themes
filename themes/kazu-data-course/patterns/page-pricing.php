<?php
/**
 * Title: Page: pricing
 * Slug: kazu-data-course/page-pricing
 * Categories: kazu-data-course
 * Inserter: false
 */
$list = '';
for ( $i = 1; $i <= 4; $i++ ) {
	$list .= '<li>' . esc_html( kazu_t( "pr_inc$i" ) ) . '</li>';
}
$rows = array();
for ( $i = 1; $i <= 6; $i++ ) {
	$rows[] = array( kazu_t( "pt$i" ), kazu_t( "pt{$i}i" ), kazu_t( "pt{$i}a" ), kazu_t( "pt{$i}p" ) );
}
$steps = array( 'Watch the free preview.', 'Buy at checkout.', 'Log in and open My courses.', 'Work through lessons and submit projects.', 'Get written feedback from Priya or Kazu.' );
$sh    = '';
foreach ( $steps as $i => $s ) {
	$sh .= kz_g( 'kz-step', kz_p( 'kz-step__no', $i + 1 ) . kz_p( 'kz-step__text', kz_x( $s ) ) );
}
echo kz_sub( 'One course, one price: €290.' )
. kz_g( 'kz-sec kz-inner',
	kz_g( 'kz-pair',
		kz_card( kazu_t( 'pr_pill' ),
			kz_h( 3, 'kz-pricecard__name', esc_html( kazu_t( 'pr_name' ) ) )
			. kz_p( 'kz-bignum', esc_html( kazu_t( 'pr_num' ) ) )
			. "<!-- wp:list {\"className\":\"kz-checks\"} -->\n<ul class=\"wp-block-list kz-checks\">" . str_replace( '<li>', "<!-- wp:list-item -->\n<li>", str_replace( '</li>', "</li>\n<!-- /wp:list-item -->", $list ) ) . "</ul>\n<!-- /wp:list -->\n\n"
			. kz_btns( 'kz-pricecard__btn', array( array( kazu_t( 'pr_btn' ), kazu_buy_url() ) ) ),
			'kz-pricecard kz-pricecard--a' )
		. kz_card( 'Team licence',
			kz_h( 3, 'kz-pricecard__name', kz_x( 'Five seats, one invoice' ) )
			. kz_p( 'kz-bignum', '€1,160' )
			. kz_t( 'The complete course five times over, for a small team. 24 months of access for every seat, one invoice.', 'kz-small kz-small--0' )
			. kz_p( 'kz-quote kz-quote--s', kz_x( '“We put four colleagues through it together and the team now shares one way of cleaning data.”' ) )
			. kz_p( 'kz-namesmall', kz_x( 'Sofia Marchetti, HR generalist' ) )
			. kz_btns( 'kz-pricecard__btn', array( array( kazu_x( 'Ask about a team licence' ), '/contact/', 'is-style-outline' ) ) ),
			'kz-pricecard kz-pricecard--b' )
	)
	. kz_g( 'kz-wide kz-tablewrap',
		kz_h( 3, 'kz-h3', esc_html( kazu_t( 'pr_all' ) ) )
		. kz_table( 'kz-table', array( kazu_t( 'th_item' ), kazu_t( 'th_inc' ), kazu_t( 'th_acc' ), kazu_t( 'th_price' ) ), $rows )
	)
	. kz_g( 'kz-col kz-gap',
		kz_p( 'kz-eyebrow', kz_x( 'Refunds' ) )
		. kz_h( 2, 'kz-h2', kz_x( '14 days, if you have watched less than a quarter' ) )
		. kz_t( 'If the course is not for you, write to us within 14 days of buying and tell us. If you have watched less than a quarter of it, we refund the price in full.' )
		. kz_p( 'kz-eyebrow', kz_x( 'After you buy' ) )
		. kz_g( 'kz-steps', $sh )
		. kz_t( 'Payment is by card at the checkout, in euros. The checkout page shows the full total before you confirm. Prices include everything listed in the table.', 'kz-small' )
	),
	'section', 'full'
);
