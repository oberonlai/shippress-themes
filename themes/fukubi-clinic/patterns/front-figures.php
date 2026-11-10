<?php
/**
 * Title: Home: figures
 * Slug: fukubi-clinic/front-figures
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Four centred figures in large light numerals with a count-up and a small tracked caption.
 */
?>
<?php
$cols = '';
foreach ( explode( '||', fc_t( 'fig_items' ) ) as $it ) {
	list( $num, $cap ) = explode( '|', $it );
	$num_html          = preg_replace( '/\s*([a-z]+)$/', ' <small>$1</small>', esc_html( $num ) );
	$cols             .= '<!-- wp:column {"className":"fc-fig"} -->' . "\n"
		. '<div class="wp-block-column fc-fig"><!-- wp:paragraph {"className":"fc-fig__n sp-reveal sp-count"} -->' . "\n"
		. '<p class="fc-fig__n sp-reveal sp-count">' . $num_html . '</p>' . "\n"
		. '<!-- /wp:paragraph --><!-- wp:paragraph {"className":"fc-fig__c"} -->' . "\n"
		. '<p class="fc-fig__c">' . esc_html( $cap ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --></div>' . "\n"
		. '<!-- /wp:column -->' . "\n";
}
?>
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--white fc-sec--figs","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--white fc-sec--figs"><!-- wp:columns {"className":"fc-in fc-figs"} -->
<div class="wp-block-columns fc-in fc-figs"><?php echo $cols; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
