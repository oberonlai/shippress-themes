<?php
/**
 * Title: Home: questions
 * Slug: hatake-greens/front-faq
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Label and heading at the left, six hairline-separated questions at the right.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-sec hg-faq', 'section', 'full', 'faq' ) . "\n" . hg_open( 'hg-wrap hg-faq__in' ) . "\n";
echo hg_open( 'hg-faq__head' ) . "\n" . hg_label( $t( 'faq_label' ) ) . "\n\n" . hg_h( 2, 'hg-h2', esc_html( $t( 'faq_h' ) ) ) . "\n" . hg_close() . "\n\n";
echo hg_open( 'hg-faq__list' ) . "\n";
foreach ( array( 1, 2, 3, 4, 5, 6 ) as $n ) {
	echo "<!-- wp:details {\"className\":\"hg-q\"} -->\n<details class=\"wp-block-details hg-q\"><summary>" . esc_html( $t( 'q' . $n ) ) . "</summary><!-- wp:paragraph -->\n<p>" . esc_html( $t( 'a' . $n ) ) . "</p>\n<!-- /wp:paragraph --></details>\n<!-- /wp:details -->\n\n";
}
echo hg_close() . "\n" . hg_close() . "\n" . hg_close( 'section' );
