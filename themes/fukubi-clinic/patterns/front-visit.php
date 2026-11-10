<?php
/**
 * Title: Home: first visit
 * Slug: fukubi-clinic/front-visit
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Heading, paragraph and a 3:4 photograph at the left; four white minute-marker rows at the right.
 */
?>
<?php
$rows = '';
foreach ( explode( '||', fc_t( 'vis_rows' ) ) as $r ) {
	list( $when, $tag, $txt ) = explode( '|', $r );
	$rows .= '<!-- wp:group {"className":"fc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group fc-row sp-reveal sp-reveal--up"><!-- wp:html -->' . "\n"
		. '<span class="fc-row__when">' . esc_html( $when ) . '</span><span class="fc-row__tag">' . esc_html( $tag ) . '</span><span class="fc-row__txt">' . esc_html( $txt ) . '</span>' . fc_chev() . "\n"
		. '<!-- /wp:html --></div>' . "\n"
		. '<!-- /wp:group -->' . "\n";
}
?>
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--page","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--page"><!-- wp:columns {"className":"fc-in fc-visit","style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
<div class="wp-block-columns fc-in fc-visit"><!-- wp:column {"width":"36%"} -->
<div class="wp-block-column" style="flex-basis:36%"><?php echo fc_label( fc_t( 'vis_label' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:heading {"className":"fc-h2"} -->
<h2 class="wp-block-heading fc-h2"><?php echo esc_html( fc_t( 'vis_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'vis_p1' ) ); ?></p>
<!-- /wp:paragraph --><?php echo fc_img( 'p07-prep-kit.webp', fc_t( 'alt_p07' ), 'fc-ph fc-ph--34' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:column --><!-- wp:column {"width":"64%"} -->
<div class="wp-block-column" style="flex-basis:64%"><!-- wp:group {"className":"fc-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group fc-rows sp-stagger"><?php echo $rows; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --><!-- wp:paragraph -->
<p><?php echo esc_html( fc_t( 'vis_p2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"fc-more"} -->
<p class="fc-more"><a href="<?php echo esc_url( home_url( '/first-visit/' ) ); ?>"><?php echo esc_html( fc_t( 'vis_btn' ) ); ?></a><?php echo fc_chev(); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
