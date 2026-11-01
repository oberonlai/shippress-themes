<?php
/**
 * Title: Footer: office and pages
 * Slug: ushio-line/foot-main
 * Categories: ushio-line
 * Keywords: ferry, harbour, footer
 * Viewport Width: 1440
 * Description: Solid slate footer with a white sine line on top: wordmark, office, hours and every page.
 */
$ul_pages = array(
	'/piers/'      => 'nav_piers',
	'/timetable/'  => 'nav_timetable',
	'/fares/'      => 'nav_fares',
	'/boats/'      => 'nav_boats',
	'/crew/'       => 'nav_crew',
	'/on-board/'   => 'nav_onboard',
	'/about/'      => 'nav_about',
	'/notices/'    => 'nav_notices',
	'/contact/'    => 'nav_contact',
);
$ul_menu = '';
foreach ( $ul_pages as $ul_url => $ul_key ) {
	$ul_menu .= '<li><a href="' . esc_url( $ul_url ) . '">' . esc_html( ushio_line_t( $ul_key ) ) . '</a></li>';
}
?>
<!-- wp:group {"className":"ul-foot","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ul-foot">
<!-- wp:html -->
<div class="ul-foot__cols"><div class="ul-foot__brand"><p class="ul-foot__mark"><?php echo esc_html( ushio_line_t( 'wordmark1' ) ); ?> <?php echo esc_html( ushio_line_t( 'wordmark2' ) ); ?></p><p class="ul-foot__tag"><?php echo esc_html( ushio_line_t( 'tagline' ) ); ?></p></div><div class="ul-foot__info"><p><?php echo esc_html( ushio_line_t( 'foot_office' ) ); ?><br><?php echo esc_html( ushio_line_t( 'foot_contact' ) ); ?></p><p><?php echo esc_html( ushio_line_t( 'foot_hours' ) ); ?></p></div><ul class="ul-foot__menu"><?php echo $ul_menu; // phpcs:ignore WordPress.Security.EscapeOutput ?></ul></div><p class="ul-foot__note"><?php echo esc_html( ushio_line_t( 'foot_small' ) ); ?></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
