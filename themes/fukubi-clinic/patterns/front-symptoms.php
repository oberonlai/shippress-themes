<?php
/**
 * Title: Home: symptoms index
 * Slug: fukubi-clinic/front-symptoms
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Seven white bowl-topped cards in a three-and-four rhythm, each with a line icon, a two-line label and a square chevron box.
 */
?>
<?php
$icons = array(
	'<path d="M12 3c1 4 5 5 5 10a5 5 0 0 1-10 0c0-2 1-3 2-4 0 2 1 3 2 3 0-3-1-5 1-9z"/>',
	'<path d="M9 3v5c0 3-4 4-4 8a6 6 0 0 0 12 0c0-3-2-4-2-6V3"/><path d="M12 14v2"/>',
	'<ellipse cx="12" cy="10" rx="6" ry="7"/><path d="M11 17l1 2 1-2zM12 19c0 2-2 2-2 4"/>',
	'<path d="M12 12a1.5 1.5 0 1 1 1.5 1.5A3 3 0 1 1 10.5 10.5 4.5 4.5 0 1 1 15.5 15.5 6 6 0 1 1 9 6.5"/>',
	'<path d="M12 3c4 5 6 8 6 11a6 6 0 0 1-12 0c0-3 2-6 6-11z"/>',
	'<path d="M8 3v7c0 2 1 3 1 5v6M16 3v7c0 2-1 3-1 5v6"/><path d="M9.5 11h5"/>',
	'<path d="M3 11c0-3 4-5 9-5s9 2 9 5c0 4-5 7-10 7-4 0-8-2-8-7z"/><path d="M13 9c0 3 2 4 4 4"/>',
);
$labels = explode( '|', fc_t( 'sym_cards' ) );
$cards  = '';
foreach ( $labels as $i => $label ) {
	$cards .= '<!-- wp:group {"className":"fc-sym sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group fc-sym sp-reveal sp-reveal--up"><!-- wp:html -->' . "\n"
		. '<a class="fc-sym__a" href="' . esc_url( home_url( '/symptoms/#s' . ( $i + 1 ) ) ) . '"><span class="fc-sym__bowl"><svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $i ] . '</svg></span><span class="fc-sym__t">' . esc_html( $label ) . '</span>' . fc_chev() . '</a>' . "\n"
		. '<!-- /wp:html --></div>' . "\n"
		. '<!-- /wp:group -->' . "\n";
}
?>
<!-- wp:group {"align":"full","anchor":"symptoms","className":"fc-sec fc-sec--page","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--page" id="symptoms"><!-- wp:group {"className":"fc-in fc-center","layout":{"type":"default"}} -->
<div class="wp-block-group fc-in fc-center"><?php echo fc_label( fc_t( 'sym_label' ), 'fc-label--c' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:heading {"className":"fc-h2"} -->
<h2 class="wp-block-heading fc-h2"><?php echo esc_html( fc_t( 'sym_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"fc-sec__lead"} -->
<p class="fc-sec__lead"><?php echo esc_html( fc_t( 'sym_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"fc-syms sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group fc-syms sp-stagger"><?php echo $cards; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"fc-more"} -->
<p class="fc-more"><a href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>"><?php echo esc_html( fc_t( 'sym_all' ) ); ?></a><?php echo fc_chev(); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
