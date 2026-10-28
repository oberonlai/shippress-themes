<?php
/**
 * Title: Home: the single plan
 * Slug: hatake-greens/front-plan
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: A sage-white card with the standard crate price, four facts and a photo, and the full-width price table below.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-sec hg-plan', 'section', 'full', 'plan' ) . "\n" . hg_open( 'hg-wrap' ) . "\n";
echo hg_open( 'hg-plan__card' ) . "\n" . hg_open( 'hg-plan__txt' ) . "\n";
echo hg_label( $t( 'plan_label' ), 'sp-reveal sp-reveal--up' ) . "\n\n";
echo hg_h( 2, 'hg-h2 hg-h2--plan sp-reveal sp-reveal--up', esc_html( $t( 'plan_h' ) ) ) . "\n\n";
echo hg_p( 'hg-prose', esc_html( $t( 'plan_p' ) ) ) . "\n\n";
echo "<!-- wp:list {\"className\":\"hg-facts\"} -->\n<ul class=\"wp-block-list hg-facts\">";
foreach ( array( 'plan_f1', 'plan_f2', 'plan_f3', 'plan_f4' ) as $k ) {
	echo "<!-- wp:list-item -->\n<li>" . esc_html( $t( $k ) ) . "</li>\n<!-- /wp:list-item -->";
}
echo "</ul>\n<!-- /wp:list -->\n\n";
echo hg_pill( '/waitlist/', $t( 'plan_cta' ), 'hg-pill--solid' ) . "\n" . hg_close() . "\n\n";
echo hg_img( 'hk-12.webp', $t( 'alt_hk-12' ), 'hg-plan__img' ) . "\n" . hg_close() . "\n\n";
echo '<!-- wp:table {"className":"hg-table"} -->' . "\n" . '<figure class="wp-block-table hg-table"><table><thead><tr><th>' . esc_html( $t( 'tbl_item' ) ) . '</th><th>' . esc_html( $t( 'tbl_price' ) ) . '</th></tr></thead><tbody>';
foreach ( array( 1, 2, 3, 4 ) as $n ) {
	echo '<tr><td>' . esc_html( $t( 'tbl_' . $n ) ) . '</td><td>' . esc_html( $t( 'tbl_' . $n . 'p' ) ) . '</td></tr>';
}
echo "</tbody></table></figure>\n<!-- /wp:table -->\n";
echo hg_close() . "\n" . hg_close( 'section' );
