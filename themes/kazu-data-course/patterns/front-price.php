<?php
/**
 * Title: Home: price
 * Slug: kazu-data-course/front-price
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: The one price card and the full price table.
 */
$list = '';
for ( $i = 1; $i <= 4; $i++ ) {
	$list .= '<li>' . esc_html( kazu_t( "pr_inc$i" ) ) . '</li>';
}
$rows = array();
for ( $i = 1; $i <= 6; $i++ ) {
	$rows[] = array( kazu_t( "pt$i" ), kazu_t( "pt{$i}i" ), kazu_t( "pt{$i}a" ), kazu_t( "pt{$i}p" ) );
}
echo kz_g( 'kz-sec kz-price-sec',
	kz_g( 'kz-col kz-col--center', kz_open( 'pr_eyebrow', 'pr_title' ) )
	. kz_g( 'kz-card kz-pricecard',
		kz_p( 'kz-pill', esc_html( kazu_t( 'pr_pill' ) ) )
		. kz_h( 3, 'kz-pricecard__name', esc_html( kazu_t( 'pr_name' ) ) )
		. kz_p( 'kz-bignum', esc_html( kazu_t( 'pr_num' ) ) )
		. "<!-- wp:list {\"className\":\"kz-checks\"} -->\n<ul class=\"wp-block-list kz-checks\">" . str_replace( '<li>', "<!-- wp:list-item -->\n<li>", str_replace( '</li>', "</li>\n<!-- /wp:list-item -->", $list ) ) . "</ul>\n<!-- /wp:list -->\n\n"
		. kz_btns( 'kz-pricecard__btn', array( array( kazu_t( 'pr_btn' ), kazu_buy_url() ) ) )
	)
	. kz_g( 'kz-wide kz-tablewrap',
		kz_h( 3, 'kz-h3', esc_html( kazu_t( 'pr_all' ) ) )
		. kz_table( 'kz-table', array( kazu_t( 'th_item' ), kazu_t( 'th_inc' ), kazu_t( 'th_acc' ), kazu_t( 'th_price' ) ), $rows )
	),
	'section', 'full'
);
