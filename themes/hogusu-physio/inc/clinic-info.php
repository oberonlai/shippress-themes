<?php
/**
 * Clinic details: opening hours, phone, email and address kept in ONE place (Appearance → Clinic details)
 * and shown wherever the theme needs them by one small server-rendered block, hogusu-physio/clinic-info:
 * the utility strip, the home page locator card, the footer and the Contact page all read the same option,
 * so changing the hours once changes them everywhere. Until the form is saved the sample clinic's details
 * below are used. "Today" is worked out on the server in the site's own timezone (Settings → General).
 *
 * @package hogusu-physio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Weekdays in table order (Monday first), keyed mon … sun.
 */
function hogusu_physio_clinic_days() {
	return array(
		'mon' => __( 'Mon', 'hogusu-physio' ),
		'tue' => __( 'Tue', 'hogusu-physio' ),
		'wed' => __( 'Wed', 'hogusu-physio' ),
		'thu' => __( 'Thu', 'hogusu-physio' ),
		'fri' => __( 'Fri', 'hogusu-physio' ),
		'sat' => __( 'Sat', 'hogusu-physio' ),
		'sun' => __( 'Sun', 'hogusu-physio' ),
	);
}

/**
 * The sample clinic's details (used until the Clinic details form is saved).
 */
function hogusu_physio_clinic_defaults() {
	$week = array_fill_keys( array_keys( hogusu_physio_clinic_days() ), true );
	return array(
		'rows'      => array(
			array(
				'time' => '9:00–12:30',
				'days' => array_merge( $week, array( 'sun' => false ) ),
			),
			array(
				'time' => '15:30–19:00',
				'days' => array_merge( $week, array( 'wed' => false, 'sat' => false, 'sun' => false ) ),
			),
		),
		'summary'   => 'Mon–Sat from 9:00, closed Sundays',
		'note'      => 'Closed on Sundays and public holidays. Wednesday and Saturday afternoons are kept for home visits and team training.',
		'phone'     => '0123-555-0190',
		'email'     => 'hello@hogusu.example',
		'address'   => "4-2 Lantern Lane, Kitamachi\nKayanomori 182-0000",
		'emergency' => 'Kayanomori Municipal Hospital, emergency department',
		'er_phone'  => '0123-555-0911',
		'er_note'   => 'Open every night. For sudden severe pain, numbness or an injury after a fall.',
	);
}

/**
 * The saved clinic details, with the sample values filling anything missing.
 */
function hogusu_physio_clinic() {
	$saved = get_option( 'hogusu_physio_clinic' );
	return is_array( $saved ) ? array_merge( hogusu_physio_clinic_defaults(), hogusu_physio_clinic_sanitize( $saved ) ) : hogusu_physio_clinic_defaults();
}

/**
 * Cleans the Clinic details form (and any later update_option call) into the stored shape.
 *
 * @param mixed $input Raw value.
 * @return array
 */
function hogusu_physio_clinic_sanitize( $input ) {
	$input = is_array( $input ) ? $input : array();
	$clean = array();
	if ( isset( $input['rows'] ) ) {
		$clean['rows'] = array();
		foreach ( (array) $input['rows'] as $row ) {
			$time = sanitize_text_field( $row['time'] ?? '' );
			if ( '' === $time ) {
				continue;
			}
			$days = array();
			foreach ( array_keys( hogusu_physio_clinic_days() ) as $day ) {
				$days[ $day ] = ! empty( $row['days'][ $day ] );
			}
			$clean['rows'][] = array(
				'time' => $time,
				'days' => $days,
			);
		}
	}
	foreach ( array( 'summary', 'note', 'phone', 'emergency', 'er_phone', 'er_note' ) as $key ) {
		if ( isset( $input[ $key ] ) ) {
			$clean[ $key ] = sanitize_text_field( $input[ $key ] );
		}
	}
	if ( isset( $input['email'] ) ) {
		$clean['email'] = sanitize_email( $input['email'] );
	}
	if ( isset( $input['address'] ) ) {
		$clean['address'] = sanitize_textarea_field( $input['address'] );
	}
	return $clean;
}

/**
 * The opening times of one weekday, e.g. array( '9:00–13:00', '14:30–18:30' ).
 *
 * @param array  $clinic Clinic details.
 * @param string $day    mon … sun.
 * @return string[]
 */
function hogusu_physio_clinic_day_times( $clinic, $day ) {
	$times = array();
	foreach ( $clinic['rows'] as $row ) {
		if ( ! empty( $row['days'][ $day ] ) ) {
			$times[] = $row['time'];
		}
	}
	return $times;
}

/**
 * One day's hours as text: in full ("9:00–13:00 · 14:30–18:30") or short ("9:00–18:30", first opening to last closing).
 *
 * @param string[] $times Opening times of the day.
 * @param bool     $short Short form.
 * @return string
 */
function hogusu_physio_clinic_day_text( $times, $short ) {
	if ( $short && count( $times ) > 1 ) {
		$first = preg_split( '/\s*[–—-]\s*/u', reset( $times ) );
		$last  = preg_split( '/\s*[–—-]\s*/u', end( $times ) );
		if ( 2 === count( $first ) && 2 === count( $last ) ) {
			return $first[0] . '–' . $last[1];
		}
	}
	return implode( ' · ', $times );
}

/**
 * The "Open today" line for today in the site's timezone.
 *
 * @param array $clinic Clinic details.
 * @param bool  $short  Short form (header strip).
 * @return string Inner HTML.
 */
function hogusu_physio_clinic_today_html( $clinic, $short ) {
	$days  = hogusu_physio_clinic_days();
	$keys  = array_keys( $days );
	$names = array(
		'mon' => __( 'Monday', 'hogusu-physio' ),
		'tue' => __( 'Tuesday', 'hogusu-physio' ),
		'wed' => __( 'Wednesday', 'hogusu-physio' ),
		'thu' => __( 'Thursday', 'hogusu-physio' ),
		'fri' => __( 'Friday', 'hogusu-physio' ),
		'sat' => __( 'Saturday', 'hogusu-physio' ),
		'sun' => __( 'Sunday', 'hogusu-physio' ),
	);
	// The site's own timezone, never the visitor's clock.
	$day   = strtolower( wp_date( 'D', null, wp_timezone() ) );
	$day   = isset( $days[ $day ] ) ? $day : 'mon';
	$i     = array_search( $day, $keys, true );
	$times = hogusu_physio_clinic_day_times( $clinic, $day );
	if ( $times ) {
		return '<strong>' . esc_html__( 'Open today', 'hogusu-physio' ) . '</strong> ' . esc_html( hogusu_physio_clinic_day_text( $times, $short ) );
	}
	$text = '<strong>' . esc_html__( 'Closed today', 'hogusu-physio' ) . '</strong>';
	for ( $n = 1; $n < 7; $n++ ) {
		$next  = $keys[ ( $i + $n ) % 7 ];
		$later = hogusu_physio_clinic_day_times( $clinic, $next );
		if ( $later ) {
			$opens = preg_split( '/\s*[–—-]\s*/u', $later[0] )[0];
			/* translators: 1: weekday, 2: opening time. */
			$text .= esc_html( sprintf( __( ', back %1$s %2$s', 'hogusu-physio' ), $names[ $next ], $opens ) );
			break;
		}
	}
	return $text;
}

/**
 * The week's opening-hours table (ticks and dashes), styled by the "hours" table style.
 *
 * @param array $clinic Clinic details.
 * @return string Inner HTML.
 */
function hogusu_physio_clinic_table_html( $clinic ) {
	$html = '<table><thead><tr><th>' . esc_html__( 'Hours', 'hogusu-physio' ) . '</th>';
	foreach ( hogusu_physio_clinic_days() as $label ) {
		$html .= '<th>' . esc_html( $label ) . '</th>';
	}
	$html .= '</tr></thead><tbody>';
	foreach ( $clinic['rows'] as $row ) {
		$html .= '<tr><td>' . esc_html( $row['time'] ) . '</td>';
		foreach ( array_keys( hogusu_physio_clinic_days() ) as $day ) {
			$html .= '<td>' . ( empty( $row['days'][ $day ] ) ? '–' : '✓' ) . '</td>';
		}
		$html .= '</tr>';
	}
	$html .= '</tbody></table>';
	$note  = trim( __( '✓ open · – closed.', 'hogusu-physio' ) . ' ' . $clinic['note'] );
	return $html . '<figcaption class="wp-element-caption">' . esc_html( $note ) . '</figcaption>';
}

/**
 * Renders hogusu-physio/clinic-info.
 *
 * @param array $attributes Block attributes ("show").
 * @return string
 */
function hogusu_physio_clinic_render( $attributes ) {
	$clinic = hogusu_physio_clinic();
	$show   = $attributes['show'] ?? 'hours';
	$tel    = 'tel:' . preg_replace( '/[^0-9+]/', '', $clinic['phone'] );

	switch ( $show ) {
		case 'today':
		case 'today-short':
			$class = 'mv-today';
			return '<p ' . get_block_wrapper_attributes( array( 'class' => $class ) ) . '>' . hogusu_physio_clinic_today_html( $clinic, 'today-short' === $show ) . '</p>';
		case 'call':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'mv-strip__tel' ) ) . '><a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html__( 'Call', 'hogusu-physio' ) . '<span class="mv-strip__long"> ' . esc_html( $clinic['phone'] ) . '</span></a></p>';
		case 'call-button':
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'wp-block-buttons' ) ) . '><div class="wp-block-button is-style-soft"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( sprintf( /* translators: %s: phone number. */ __( 'Call %s', 'hogusu-physio' ), $clinic['phone'] ) ) . '</a></div></div>';
		case 'emergency':
			$er = 'tel:' . preg_replace( '/[^0-9+]/', '', $clinic['er_phone'] );
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'mv-er' ) ) . '><span class="mv-er__name">' . esc_html( $clinic['emergency'] ) . '</span><a class="mv-er__tel" href="' . esc_url( $er, array( 'tel' ) ) . '">' . esc_html( $clinic['er_phone'] ) . '</a><span class="mv-er__note">' . esc_html( $clinic['er_note'] ) . '</span></p>';
		case 'phone':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'mv-phone' ) ) . '><a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $clinic['phone'] ) . '</a></p>';
		case 'address':
			return '<p ' . get_block_wrapper_attributes() . '>' . nl2br( esc_html( $clinic['address'] ), false ) . '</p>';
		case 'phone-email':
			$links = array();
			if ( $clinic['phone'] ) {
				$links[] = '<a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $clinic['phone'] ) . '</a>';
			}
			if ( $clinic['email'] ) {
				$links[] = '<a href="' . esc_url( 'mailto:' . $clinic['email'] ) . '">' . esc_html( $clinic['email'] ) . '</a>';
			}
			return '<p ' . get_block_wrapper_attributes() . '>' . implode( '<br>', $links ) . '</p>';
		default:
			// The table block's own base styles load only when a core/table block is on the page.
			wp_enqueue_style( 'wp-block-table' );
			return '<figure ' . get_block_wrapper_attributes( array( 'class' => 'wp-block-table is-style-hours' ) ) . '>' . hogusu_physio_clinic_table_html( $clinic ) . '</figure>';
	}
}

/**
 * Registers the block (server-rendered; the editor previews it and links to the Clinic details screen).
 */
function hogusu_physio_clinic_block() {
	wp_register_script(
		'hogusu-physio-clinic-info',
		get_template_directory_uri() . '/assets/js/clinic-info.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-server-side-render', 'wp-i18n' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script( 'hogusu-physio-clinic-info', 'window.hogusuPhysioClinic = ' . wp_json_encode( array( 'settingsUrl' => admin_url( 'themes.php?page=hogusu-physio-clinic' ) ) ) . ';', 'before' );

	register_block_type(
		'hogusu-physio/clinic-info',
		array(
			'api_version'     => 3,
			'title'           => __( 'Clinic details', 'hogusu-physio' ),
			'description'     => __( 'Opening hours, phone, email, address or the out-of-hours emergency contact from Appearance → Clinic details. Edit them there once and every place updates.', 'hogusu-physio' ),
			'category'        => 'theme',
			'icon'            => 'clock',
			'keywords'        => array( 'opening hours', 'phone', 'address', 'today' ),
			'attributes'      => array(
				'show' => array(
					'type'    => 'string',
					'enum'    => array( 'hours', 'today', 'today-short', 'call', 'call-button', 'address', 'phone', 'phone-email', 'emergency' ),
					'default' => 'hours',
				),
			),
			'supports'        => array(
				'html'            => false,
				'customClassName' => false,
				'reusable'        => false,
			),
			'editor_script'   => 'hogusu-physio-clinic-info',
			'render_callback' => 'hogusu_physio_clinic_render',
		)
	);
}
add_action( 'init', 'hogusu_physio_clinic_block' );

/**
 * The Clinic details screen (Appearance → Clinic details).
 */
function hogusu_physio_clinic_settings() {
	register_setting(
		'hogusu_physio_clinic',
		'hogusu_physio_clinic',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'hogusu_physio_clinic_sanitize',
		)
	);
}
add_action( 'init', 'hogusu_physio_clinic_settings' );

/**
 * Lets anyone who may edit the site's design (not only administrators) save the screen.
 */
function hogusu_physio_clinic_capability() {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_hogusu_physio_clinic', 'hogusu_physio_clinic_capability' );

/**
 * Adds Appearance → Clinic details.
 */
function hogusu_physio_clinic_menu() {
	add_theme_page( __( 'Clinic details', 'hogusu-physio' ), __( 'Clinic details', 'hogusu-physio' ), 'edit_theme_options', 'hogusu-physio-clinic', 'hogusu_physio_clinic_page' );
}
add_action( 'admin_menu', 'hogusu_physio_clinic_menu' );

/**
 * Prints the Clinic details form.
 */
function hogusu_physio_clinic_page() {
	$clinic = hogusu_physio_clinic();
	$days   = hogusu_physio_clinic_days();
	$rows   = array_pad( $clinic['rows'], max( 3, count( $clinic['rows'] ) + 1 ), array( 'time' => '', 'days' => array() ) );
	$name   = 'hogusu_physio_clinic';
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Clinic details', 'hogusu-physio' ); ?></h1>
		<?php settings_errors(); ?>
		<p><?php esc_html_e( 'Your opening hours, phone number, email, address and out-of-hours emergency contact. They appear in the utility strip, on the home page locator card, in the footer and on the Contact page: change them here once and every place updates.', 'hogusu-physio' ); ?></p>
		<form method="post" action="options.php">
			<?php settings_fields( 'hogusu_physio_clinic' ); ?>
			<h2><?php esc_html_e( 'Opening hours', 'hogusu-physio' ); ?></h2>
			<p class="description"><?php esc_html_e( 'One line per opening time, for example 9:00–13:00. Tick the days it applies to. Leave a time empty to remove its line.', 'hogusu-physio' ); ?></p>
			<table class="widefat striped" style="max-width:48rem">
				<thead>
					<tr>
						<th scope="col"><?php esc_html_e( 'Time', 'hogusu-physio' ); ?></th>
						<?php foreach ( $days as $label ) : ?>
							<th scope="col" style="text-align:center"><?php echo esc_html( $label ); ?></th>
						<?php endforeach; ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( $rows as $i => $row ) : ?>
						<tr>
							<td><input type="text" class="regular-text" style="width:10rem" name="<?php echo esc_attr( "{$name}[rows][{$i}][time]" ); ?>" value="<?php echo esc_attr( $row['time'] ); ?>" aria-label="<?php echo esc_attr( sprintf( /* translators: %d: line number. */ __( 'Opening time, line %d', 'hogusu-physio' ), $i + 1 ) ); ?>"></td>
							<?php foreach ( $days as $day => $label ) : ?>
								<td style="text-align:center"><input type="checkbox" name="<?php echo esc_attr( "{$name}[rows][{$i}][days][{$day}]" ); ?>" value="1" <?php checked( ! empty( $row['days'][ $day ] ) ); ?> aria-label="<?php echo esc_attr( sprintf( /* translators: 1: weekday, 2: line number. */ __( 'Open on %1$s, line %2$d', 'hogusu-physio' ), $label, $i + 1 ) ); ?>"></td>
							<?php endforeach; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<table class="form-table" role="presentation">
				<tr>
					<th scope="row"><label for="mv-clinic-summary"><?php esc_html_e( 'The week in one line', 'hogusu-physio' ); ?></label></th>
					<td><input type="text" class="large-text" id="mv-clinic-summary" name="<?php echo esc_attr( "{$name}[summary]" ); ?>" value="<?php echo esc_attr( $clinic['summary'] ); ?>">
					<p class="description"><?php esc_html_e( 'A short summary of the week, for your own reference.', 'hogusu-physio' ); ?></p></td>
				</tr>
				<tr>
					<th scope="row"><label for="mv-clinic-note"><?php esc_html_e( 'Note under the hours', 'hogusu-physio' ); ?></label></th>
					<td><input type="text" class="large-text" id="mv-clinic-note" name="<?php echo esc_attr( "{$name}[note]" ); ?>" value="<?php echo esc_attr( $clinic['note'] ); ?>"></td>
				</tr>
				<tr>
					<th scope="row"><label for="mv-clinic-phone"><?php esc_html_e( 'Phone', 'hogusu-physio' ); ?></label></th>
					<td><input type="text" class="regular-text" id="mv-clinic-phone" name="<?php echo esc_attr( "{$name}[phone]" ); ?>" value="<?php echo esc_attr( $clinic['phone'] ); ?>"></td>
				</tr>
				<tr>
					<th scope="row"><label for="mv-clinic-email"><?php esc_html_e( 'Email', 'hogusu-physio' ); ?></label></th>
					<td><input type="email" class="regular-text" id="mv-clinic-email" name="<?php echo esc_attr( "{$name}[email]" ); ?>" value="<?php echo esc_attr( $clinic['email'] ); ?>"></td>
				</tr>
				<tr>
					<th scope="row"><label for="mv-clinic-emergency"><?php esc_html_e( 'Out-of-hours emergency care', 'hogusu-physio' ); ?></label></th>
					<td><input type="text" class="large-text" id="mv-clinic-emergency" name="<?php echo esc_attr( "{$name}[emergency]" ); ?>" value="<?php echo esc_attr( $clinic['emergency'] ); ?>"></td>
				</tr>
				<tr>
					<th scope="row"><label for="mv-clinic-er-phone"><?php esc_html_e( 'Emergency phone', 'hogusu-physio' ); ?></label></th>
					<td><input type="text" class="regular-text" id="mv-clinic-er-phone" name="<?php echo esc_attr( "{$name}[er_phone]" ); ?>" value="<?php echo esc_attr( $clinic['er_phone'] ); ?>"></td>
				</tr>
				<tr>
					<th scope="row"><label for="mv-clinic-er-note"><?php esc_html_e( 'Emergency note', 'hogusu-physio' ); ?></label></th>
					<td><input type="text" class="large-text" id="mv-clinic-er-note" name="<?php echo esc_attr( "{$name}[er_note]" ); ?>" value="<?php echo esc_attr( $clinic['er_note'] ); ?>"></td>
				</tr>
				<tr>
					<th scope="row"><label for="mv-clinic-address"><?php esc_html_e( 'Address', 'hogusu-physio' ); ?></label></th>
					<td><textarea class="large-text" rows="3" id="mv-clinic-address" name="<?php echo esc_attr( "{$name}[address]" ); ?>"><?php echo esc_textarea( $clinic['address'] ); ?></textarea></td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}
