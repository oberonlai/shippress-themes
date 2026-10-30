<?php
/**
 * Title: Home: the day
 * Slug: minori-seminars/front-day
 * Categories: minori-seminars
 * Keywords: seminar, management, landing
 * Viewport Width: 1440
 * Description: White block: label, heading, tall photo with two paragraphs, three counted numerals and the five ruled schedule rows.
 */
?>
<?php
$ms_rows = array(
	array( '09:30', 'Opening at the tables', 'Introductions in fours, building shared ground and working trust between table peers.' ),
	array( '10:00', 'Morning session at the flipchart', 'The one idea of the day, unpacked through practical examples and group discussion.' ),
	array( '12:30', 'Lunch at the same tables', 'Shared food and unhurried conversation, without leaving the room.' ),
	array( '13:30', 'Case clinic', 'Your own situation, worked in pairs to test the options you really have.' ),
	array( '15:45', 'Your next conversation', 'Written down, read to your table and refined into clear steps for Monday morning.' ),
);
$ms_html = '';
foreach ( $ms_rows as $ms_r ) {
	$ms_html .= '<!-- wp:group {"className":"ms-hour sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group ms-hour sp-reveal sp-reveal--up">' . minori_seminars_p( esc_html( $ms_r[0] ), 'ms-hour__time' ) . "\n\n"
		. '<!-- wp:group {"className":"ms-hour__main","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group ms-hour__main"><!-- wp:heading {"level":3,"className":"ms-hour__title"} -->' . "\n"
		. '<h3 class="wp-block-heading ms-hour__title">' . esc_html( $ms_r[1] ) . '</h3>' . "\n<!-- /wp:heading -->\n\n"
		. minori_seminars_p( esc_html( $ms_r[2] ), 'ms-hour__text' ) . '</div>' . "\n<!-- /wp:group --></div>\n<!-- /wp:group -->\n\n";
}
$ms_nums = array( array( '1', 'day' ), array( '16', 'seats' ), array( '4', 'tables' ) );
$ms_n    = '';
foreach ( $ms_nums as $ms_x ) {
	$ms_n .= '<!-- wp:group {"className":"ms-numcell","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group ms-numcell">' . minori_seminars_p( esc_html( $ms_x[0] ), 'ms-num sp-reveal sp-count' ) . "\n\n"
		. minori_seminars_p( esc_html( $ms_x[1] ), 'ms-numlabel' ) . '</div>' . "\n<!-- /wp:group -->\n\n";
}
?>
<!-- wp:group {"align":"full","anchor":"day","className":"ms-sec ms-day","layout":{"type":"default"}} -->
<div id="day" class="wp-block-group alignfull ms-sec ms-day"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><?php echo minori_seminars_label( 'THE DAY' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:heading {"level":2,"className":"ms-h2"} -->
<h2 class="wp-block-heading ms-h2"><?php echo wp_kses_post( minori_seminars_t( 'k2bd95fbb' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ms-cols ms-cols--day","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cols ms-cols--day"><!-- wp:group {"className":"ms-cols__side","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cols__side"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":864,"height":1152,"className":"ms-tall"} -->
<figure class="wp-block-image size-full ms-tall"><img src="<?php echo minori_seminars_img( 'day-arrival.webp' ); ?>" alt="<?php echo esc_attr( minori_seminars_t( 'a8e836724' ) ); ?>" width="864" height="1152"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minori_seminars_t( 'k5c30908a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minori_seminars_t( 'k41d7ba06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-cols__main","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cols__main"><!-- wp:group {"className":"ms-nums sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ms-nums sp-stagger"><?php echo $ms_n; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-hours sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ms-hours sp-stagger"><?php echo $ms_html; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ms-close"} -->
<p class="ms-close"><?php echo wp_kses_post( minori_seminars_t( 'k9e386405' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
