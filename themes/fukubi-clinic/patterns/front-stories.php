<?php
/**
 * Title: Home: stories
 * Slug: fukubi-clinic/front-stories
 * Categories: fukubi-clinic
 * Keywords: clinic, gastroenterology, digestive
 * Viewport Width: 1440
 * Description: Three white cards with a 3:2 photograph, a title, a short composite story and a chevron box.
 */
?>
<?php
$cards = '';
foreach ( array( 1 => 'p13-diary.webp', 2 => 'p14-breath.webp', 3 => 'p15-lounge.webp' ) as $n => $file ) {
	$cards .= '<!-- wp:group {"className":"fc-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group fc-story sp-reveal sp-reveal--up">' . fc_img( $file, fc_t( 'alt_p' . ( 12 + $n ) ), 'fc-ph fc-ph--32' ) . "\n"
		. '<!-- wp:heading {"level":3,"className":"fc-story__t"} -->' . "\n"
		. '<h3 class="wp-block-heading fc-story__t">' . esc_html( fc_t( 'st_t' . $n ) ) . '</h3>' . "\n"
		. '<!-- /wp:heading --><!-- wp:paragraph {"className":"fc-story__x"} -->' . "\n"
		. '<p class="fc-story__x">' . esc_html( fc_t( 'st_x' . $n ) ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --><!-- wp:html -->' . "\n" . '<p class="fc-story__go">' . fc_chev() . '</p>' . "\n" . '<!-- /wp:html --></div>' . "\n"
		. '<!-- /wp:group -->' . "\n";
}
?>
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--page","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--page"><!-- wp:group {"className":"fc-in","layout":{"type":"default"}} -->
<div class="wp-block-group fc-in"><?php echo fc_label( fc_t( 'st_label' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- wp:heading {"className":"fc-h2"} -->
<h2 class="wp-block-heading fc-h2"><?php echo esc_html( fc_t( 'st_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"fc-stories sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group fc-stories sp-stagger"><?php echo $cards; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"fc-note"} -->
<p class="fc-note"><?php echo esc_html( fc_t( 'st_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
