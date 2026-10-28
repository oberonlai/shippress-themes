<?php
/**
 * Title: Header: triangle logo and anchor menu
 * Slug: hatake-greens/head-main
 * Categories: hatake-greens
 * Inserter: false
 * Viewport Width: 1440
 * Description: Sage triangle logo at the top-left corner, a three-column anchor menu and one Join pill; sits over the hero photo.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-header', 'header', 'full' ) . "\n";
echo hg_open( 'hg-logo' ) . "\n" . hg_p( 'hg-logo__t', '<a href="/">' . esc_html( $t( 'logo_a' ) ) . '<br>' . esc_html( $t( 'logo_b' ) ) . '</a>' ) . "\n" . hg_close() . "\n\n";
echo hg_open( 'hg-header__bar' ) . "\n";
$links = array( 'why', 'crate', 'packing', 'plan', 'stories', 'faq' );
echo '<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"paper","overlayTextColor":"ink","className":"hg-nav sp-stagger","layout":{"type":"flex","orientation":"horizontal"}} -->' . "\n";
foreach ( $links as $k ) {
	echo '<!-- wp:navigation-link ' . wp_json_encode( array( 'label' => $t( 'nav_' . $k ), 'type' => 'custom', 'url' => '/#' . $k, 'kind' => 'custom', 'isTopLevelLink' => true, 'className' => 'sp-reveal sp-reveal--up' ) ) . ' /-->' . "\n";
}
echo '<!-- /wp:navigation -->' . "\n\n";
echo hg_pill( '/#plan', $t( 'nav_join' ), 'hg-pill--head' ) . "\n";
echo hg_close() . "\n" . hg_close( 'header' );
