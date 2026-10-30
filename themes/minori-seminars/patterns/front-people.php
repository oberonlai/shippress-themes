<?php
/**
 * Title: Home: facilitators
 * Slug: minori-seminars/front-people
 * Categories: minori-seminars
 * Keywords: seminar, management, landing
 * Viewport Width: 1440
 * Description: White block: label, portrait with caption, a paragraph on how facilitators work and the ruled name list of seven people.
 */
?>
<?php
$ms_people = array(
	array( 'Marit Coenen', 'Founder, lead facilitator, First-Time Manager Day' ),
	array( 'Samuel Adeyemi', 'Facilitator, Leading Through Change' ),
	array( 'Claire Dubois', "Facilitator, The Owner's Day" ),
	array( 'Tobias Brandt', 'Co-facilitator, case clinics' ),
	array( 'Wen-Yu Lin', 'Co-facilitator' ),
	array( 'Inès Laurent', 'Enrolment and participant care' ),
	array( 'Joost van Dam', 'Seminar room and operations' ),
);
$ms_list = '';
foreach ( $ms_people as $ms_p ) {
	$ms_list .= '<!-- wp:group {"className":"ms-person","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group ms-person">' . minori_seminars_p( esc_html( $ms_p[0] ), 'ms-person__name' ) . "\n\n"
		. minori_seminars_p( esc_html( $ms_p[1] ), 'ms-person__role' ) . '</div>' . "\n<!-- /wp:group -->\n\n";
}
?>
<!-- wp:group {"align":"full","anchor":"facilitators","className":"ms-sec ms-people","layout":{"type":"default"}} -->
<div id="facilitators" class="wp-block-group alignfull ms-sec ms-people"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><?php echo minori_seminars_label( 'FACILITATORS' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"ms-cols ms-cols--people","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cols ms-cols--people"><!-- wp:group {"className":"ms-cols__side","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cols__side"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":864,"height":1080,"className":"ms-tall"} -->
<figure class="wp-block-image size-full ms-tall"><img src="<?php echo minori_seminars_img( 'facilitator-marit.webp' ); ?>" alt="<?php echo esc_attr( minori_seminars_t( 'a19f234ba' ) ); ?>" width="864" height="1080"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ms-caption"} -->
<p class="ms-caption"><?php echo wp_kses_post( minori_seminars_t( 'ka21f5fff' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ms-cols__main","layout":{"type":"default"}} -->
<div class="wp-block-group ms-cols__main"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( minori_seminars_t( 'k959eb855' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-persons","layout":{"type":"default"}} -->
<div class="wp-block-group ms-persons"><?php echo $ms_list; // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<?php echo minori_seminars_btn( 'Meet the facilitators', '/facilitators/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
