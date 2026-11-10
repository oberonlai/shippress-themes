<?php
/**
 * Title: Home: who reads the result
 * Slug: fukubi-clinic/front-readers
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Large rounded wash panel: a 4:3 photograph with two tilted tiles behind, the two-readers text, three portrait rows with a 96 px circle each.
 */
?>
<?php
$people = '';
foreach ( array( 1 => 'p10-moravec.webp', 2 => 'p11-achebe.webp', 3 => 'p12-raman.webp' ) as $n => $file ) {
	$people .= '<!-- wp:group {"className":"fc-person","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group fc-person">' . fc_img( $file, fc_t( 'alt_p' . ( 9 + $n ) ), 'fc-person__img' ) . "\n"
		. '<!-- wp:group {"className":"fc-person__txt","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group fc-person__txt"><!-- wp:paragraph {"className":"fc-person__name"} -->' . "\n"
		. '<p class="fc-person__name">' . esc_html( fc_t( 'rd_n' . $n ) ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --><!-- wp:paragraph {"className":"fc-person__role"} -->' . "\n"
		. '<p class="fc-person__role">' . esc_html( fc_t( 'rd_r' . $n ) ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --></div>' . "\n"
		. '<!-- /wp:group --></div>' . "\n"
		. '<!-- /wp:group -->' . "\n";
}
?>
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--white fc-sec--panel","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--white fc-sec--panel"><!-- wp:group {"className":"fc-panel","layout":{"type":"default"}} -->
<div class="wp-block-group fc-panel"><!-- wp:columns {"className":"fc-readers","style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
<div class="wp-block-columns fc-readers"><!-- wp:column {"width":"46%","className":"fc-readers__ph"} -->
<div class="wp-block-column fc-readers__ph" style="flex-basis:46%"><!-- wp:html -->
<span class="fc-tile fc-tile--a" aria-hidden="true"></span><span class="fc-tile fc-tile--b" aria-hidden="true"></span>
<!-- /wp:html --><?php echo fc_img( 'p09-reviewing.webp', fc_t( 'alt_p09' ), 'fc-ph fc-ph--43' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:column --><!-- wp:column {"width":"54%"} -->
<div class="wp-block-column" style="flex-basis:54%"><?php echo fc_label( fc_t( 'rd_label' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:heading {"className":"fc-h2"} -->
<h2 class="wp-block-heading fc-h2"><?php echo esc_html( fc_t( 'rd_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'rd_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'rd_p2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"fc-people","layout":{"type":"default"}} -->
<div class="wp-block-group fc-people"><?php echo $people; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --><?php echo fc_btn( fc_t( 'rd_btn' ), home_url( '/team/' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
