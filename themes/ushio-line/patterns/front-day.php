<?php
/**
 * Title: Home: sailing day
 * Slug: ushio-line/front-day
 * Categories: ushio-line
 * Keywords: ferry, harbour
 * Viewport Width: 1440
 * Description: The huge-radius slate band on a mist ground: the day title, the six stops of a sailing day on a sine line and a ghost word at the foot.
 */
?>
<?php
$ul_stops = '';
for ( $ul_i = 1; $ul_i <= 6; $ul_i++ ) {
	$ul_stops .= '<li class="ul-stop"><span class="ul-stop__t">' . esc_html( ushio_line_t( 'st' . $ul_i . '_t' ) ) . '</span><span class="ul-stop__n">' . esc_html( ushio_line_t( 'st' . $ul_i . '_n' ) ) . '</span><span class="ul-stop__m">' . esc_html( ushio_line_t( 'st' . $ul_i . '_m' ) ) . '</span></li>';
}
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"day","className":"ul-sec ul-day","layout":{"type":"default"}} -->
<section id="day" class="wp-block-group alignfull ul-sec ul-day"><!-- wp:group {"className":"ul-band","layout":{"type":"default"}} -->
<div class="wp-block-group ul-band"><!-- wp:heading {"textAlign":"center","className":"ul-band__title"} -->
<h2 class="wp-block-heading has-text-align-center ul-band__title"><?php echo esc_html( ushio_line_t( 'dy_title' ) ); ?></h2>
<!-- /wp:heading -->

<?php echo ushio_line_go( ushio_line_t( 'dy_go' ), '/timetable/', 'ul-band__go' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:html -->
<ol class="ul-stops"><?php echo $ul_stops; // phpcs:ignore WordPress.Security.EscapeOutput ?></ol>
<p class="ul-band__note"><?php echo esc_html( ushio_line_t( 'dy_note' ) ); ?></p>
<p class="ul-ghost" aria-hidden="true"><?php echo esc_html( ushio_line_t( 'dy_ghost' ) ); ?></p>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
