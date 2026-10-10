<?php
/**
 * Clinic details: opening hours, phone, email and address kept in ONE place (Appearance → Clinic details)
 * and shown wherever the theme needs them by one small server-rendered block, hakuba-dental/clinic-info:
 * the header strip, the home page's "today" cell, the footer and the Contact page all read the same option,
 * so changing the hours once changes them everywhere. Until the form is saved the sample clinic's details
 * below are used, so a site set up with 1.0.0 looks exactly as before.
 *
 * @package hakuba-dental
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Weekdays in table order (Monday first), keyed like the hd-day-* classes set by assets/js/today.js.
 */
function hakuba_dental_clinic_days() {
	return array(
		'mon' => __( 'Mon', 'hakuba-dental' ),
		'tue' => __( 'Tue', 'hakuba-dental' ),
		'wed' => __( 'Wed', 'hakuba-dental' ),
		'thu' => __( 'Thu', 'hakuba-dental' ),
		'fri' => __( 'Fri', 'hakuba-dental' ),
		'sat' => __( 'Sat', 'hakuba-dental' ),
		'sun' => __( 'Sun', 'hakuba-dental' ),
	);
}

/**
 * The sample clinic's details (used until the Clinic details form is saved).
 */
function hakuba_dental_clinic_defaults() {
	$week = array_fill_keys( array_keys( hakuba_dental_clinic_days() ), true );
	return array(
		'rows'    => array(
			array(
				'time' => '9:00–13:00',
				'days' => array_merge( $week, array( 'sun' => false ) ),
			),
			array(
				'time' => '14:30–18:30',
				'days' => array_merge( $week, array( 'thu' => false, 'sat' => false, 'sun' => false ) ),
			),
		),
		'summary' => 'Mon–Sat from 9:00, closed Sundays',
		'note'    => 'Closed on Sundays and public holidays. Last appointment 30 minutes before closing.',
		'phone'   => '03-5555-0148',
		'email'   => 'hello@hakuba-dental.example',
		'address' => "2F Shirakaba Building, 5-3-1 Hakubazaka\nBunkyo, Tokyo 113-0000",
	);
}

/**
 * The saved clinic details, with the sample values filling anything missing.
 */
function hakuba_dental_clinic() {
	$saved = get_option( 'hakuba_dental_clinic' );
	return is_array( $saved ) ? array_merge( hakuba_dental_clinic_defaults(), hakuba_dental_clinic_sanitize( $saved ) ) : hakuba_dental_clinic_defaults();
}

/**
 * Cleans the Clinic details form (and any later update_option call) into the stored shape.
 *
 * @param mixed $input Raw value.
 * @return array
 */
function hakuba_dental_clinic_sanitize( $input ) {
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
			foreach ( array_keys( hakuba_dental_clinic_days() ) as $day ) {
				$days[ $day ] = ! empty( $row['days'][ $day ] );
			}
			$clean['rows'][] = array(
				'time' => $time,
				'days' => $days,
			);
		}
	}
	foreach ( array( 'summary', 'note', 'phone' ) as $key ) {
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
function hakuba_dental_clinic_day_times( $clinic, $day ) {
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
function hakuba_dental_clinic_day_text( $times, $short ) {
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
 * The "Open today" line: the week summary plus one line per weekday (assets/js/today.js shows the visitor's).
 *
 * @param array $clinic Clinic details.
 * @param bool  $short  Short form (header strip).
 * @return string Inner HTML.
 */
function hakuba_dental_clinic_today_html( $clinic, $short ) {
	$days  = hakuba_dental_clinic_days();
	$keys  = array_keys( $days );
	$names = array(
		'mon' => __( 'Monday', 'hakuba-dental' ),
		'tue' => __( 'Tuesday', 'hakuba-dental' ),
		'wed' => __( 'Wednesday', 'hakuba-dental' ),
		'thu' => __( 'Thursday', 'hakuba-dental' ),
		'fri' => __( 'Friday', 'hakuba-dental' ),
		'sat' => __( 'Saturday', 'hakuba-dental' ),
		'sun' => __( 'Sunday', 'hakuba-dental' ),
	);
	$html  = '<span class="hd-today__all">' . esc_html( $clinic['summary'] ) . '</span>';
	foreach ( $keys as $i => $day ) {
		$times = hakuba_dental_clinic_day_times( $clinic, $day );
		if ( $times ) {
			$text = '<strong>' . esc_html__( 'Open today', 'hakuba-dental' ) . '</strong> ' . esc_html( hakuba_dental_clinic_day_text( $times, $short ) );
		} else {
			$text = '<strong>' . esc_html__( 'Closed today', 'hakuba-dental' ) . '</strong>';
			for ( $n = 1; $n < 7; $n++ ) {
				$next  = $keys[ ( $i + $n ) % 7 ];
				$later = hakuba_dental_clinic_day_times( $clinic, $next );
				if ( $later ) {
					$opens = preg_split( '/\s*[–—-]\s*/u', $later[0] )[0];
					/* translators: 1: weekday, 2: opening time. */
					$text .= esc_html( sprintf( $short ? __( ', back %1$s %2$s', 'hakuba-dental' ) : __( ' Back on %1$s at %2$s', 'hakuba-dental' ), $names[ $next ], $opens ) );
					break;
				}
			}
		}
		$html .= '<span class="hd-today__day hd-today__day--' . $day . '">' . $text . '</span>';
	}
	return $html;
}

/**
 * The week's opening-hours table (ticks and dashes), styled by the "hours" table style.
 *
 * @param array $clinic Clinic details.
 * @return string Inner HTML.
 */
function hakuba_dental_clinic_table_html( $clinic ) {
	$html = '<table><thead><tr><th>' . esc_html__( 'Hours', 'hakuba-dental' ) . '</th>';
	foreach ( hakuba_dental_clinic_days() as $label ) {
		$html .= '<th>' . esc_html( $label ) . '</th>';
	}
	$html .= '</tr></thead><tbody>';
	foreach ( $clinic['rows'] as $row ) {
		$html .= '<tr><td>' . esc_html( $row['time'] ) . '</td>';
		foreach ( array_keys( hakuba_dental_clinic_days() ) as $day ) {
			$html .= '<td>' . ( empty( $row['days'][ $day ] ) ? '–' : '✓' ) . '</td>';
		}
		$html .= '</tr>';
	}
	$html .= '</tbody></table>';
	$note  = trim( __( '✓ open · – closed.', 'hakuba-dental' ) . ' ' . $clinic['note'] );
	return $html . '<figcaption class="wp-element-caption">' . esc_html( $note ) . '</figcaption>';
}

/**
 * Renders hakuba-dental/clinic-info.
 *
 * @param array $attributes Block attributes ("show").
 * @return string
 */
function hakuba_dental_clinic_render( $attributes ) {
	$clinic = hakuba_dental_clinic();
	$show   = $attributes['show'] ?? 'hours';
	$tel    = 'tel:' . preg_replace( '/[^0-9+]/', '', $clinic['phone'] );

	switch ( $show ) {
		case 'today':
		case 'today-short':
			$class = 'hd-today';
			foreach ( array_keys( hakuba_dental_clinic_days() ) as $day ) {
				if ( ! hakuba_dental_clinic_day_times( $clinic, $day ) ) {
					$class .= ' hd-today--off-' . $day;
				}
			}
			return '<p ' . get_block_wrapper_attributes( array( 'class' => $class ) ) . '>' . hakuba_dental_clinic_today_html( $clinic, 'today-short' === $show ) . '</p>';
		case 'call':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'hd-strip__tel' ) ) . '><a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html__( 'Call', 'hakuba-dental' ) . '<span class="hd-strip__long"> ' . esc_html( $clinic['phone'] ) . '</span></a></p>';
		case 'call-button':
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'wp-block-buttons' ) ) . '><div class="wp-block-button is-style-soft"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( sprintf( /* translators: %s: phone number. */ __( 'Call %s', 'hakuba-dental' ), $clinic['phone'] ) ) . '</a></div></div>';
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
			return '<figure ' . get_block_wrapper_attributes( array( 'class' => 'wp-block-table is-style-hours' ) ) . '>' . hakuba_dental_clinic_table_html( $clinic ) . '</figure>';
	}
}

/**
 * Registers the block (server-rendered; the editor previews it and links to the Clinic details screen).
 */
function hakuba_dental_clinic_block() {
	wp_register_script(
		'hakuba-dental-clinic-info',
		get_template_directory_uri() . '/assets/js/clinic-info.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-server-side-render', 'wp-i18n' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script( 'hakuba-dental-clinic-info', 'window.hakubaDentalClinic = ' . wp_json_encode( array( 'settingsUrl' => admin_url( 'themes.php?page=hakuba-dental-clinic' ) ) ) . ';', 'before' );

	register_block_type(
		'hakuba-dental/clinic-info',
		array(
			'api_version'     => 3,
			'title'           => __( 'Clinic details', 'hakuba-dental' ),
			'description'     => __( 'Opening hours, phone, email or address from Appearance → Clinic details. Edit them there once and every place updates.', 'hakuba-dental' ),
			'category'        => 'theme',
			'icon'            => 'clock',
			'keywords'        => array( 'opening hours', 'phone', 'address', 'today' ),
			'attributes'      => array(
				'show' => array(
					'type'    => 'string',
					'enum'    => array( 'hours', 'today', 'today-short', 'call', 'call-button', 'address', 'phone-email' ),
					'default' => 'hours',
				),
			),
			'supports'        => array(
				'html'            => false,
				'customClassName' => false,
				'reusable'        => false,
			),
			'editor_script'   => 'hakuba-dental-clinic-info',
			'render_callback' => 'hakuba_dental_clinic_render',
		)
	);
}
add_action( 'init', 'hakuba_dental_clinic_block' );

/**
 * The Clinic details screen (Appearance → Clinic details).
 */
function hakuba_dental_clinic_settings() {
	register_setting(
		'hakuba_dental_clinic',
		'hakuba_dental_clinic',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'hakuba_dental_clinic_sanitize',
		)
	);
}
add_action( 'init', 'hakuba_dental_clinic_settings' );

/**
 * Lets anyone who may edit the site's design (not only administrators) save the screen.
 */
function hakuba_dental_clinic_capability() {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_hakuba_dental_clinic', 'hakuba_dental_clinic_capability' );

/**
 * Adds Appearance → Clinic details.
 */
function hakuba_dental_clinic_menu() {
	add_theme_page( __( 'Clinic details', 'hakuba-dental' ), __( 'Clinic details', 'hakuba-dental' ), 'edit_theme_options', 'hakuba-dental-clinic', 'hakuba_dental_clinic_page' );
}
add_action( 'admin_menu', 'hakuba_dental_clinic_menu' );

/**
 * Prints the Clinic details form.
 */
function hakuba_dental_clinic_page() {
	$clinic = hakuba_dental_clinic();
	$days   = hakuba_dental_clinic_days();
	$rows   = array_pad( $clinic['rows'], max( 3, count( $clinic['rows'] ) + 1 ), array( 'time' => '', 'days' => array() ) );
	$name   = 'hakuba_dental_clinic';
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Clinic details', 'hakuba-dental' ); ?></h1>
		<?php settings_errors(); ?>
		<p><?php esc_html_e( 'Your opening hours, phone number, email and address. They appear in the header, on the home page, in the footer and on the Contact page: change them here once and every place updates.', 'hakuba-dental' ); ?></p>
		<form method="post" action="options.php">
			<?php settings_fields( 'hakuba_dental_clinic' ); ?>
			<h2><?php esc_html_e( 'Opening hours', 'hakuba-dental' ); ?></h2>
			<p class="description"><?php esc_html_e( 'One line per opening time, for example 9:00–13:00. Tick the days it applies to. Leave a time empty to remove its line.', 'hakuba-dental' ); ?></p>
			<table class="widefat striped" style="max-width:48rem">
				<thead>
					<tr>
						<th scope="col"><?php esc_html_e( 'Time', 'hakuba-dental' ); ?></th>
						<?php foreach ( $days as $label ) : ?>
							<th scope="col" style="text-align:center"><?php echo esc_html( $label ); ?></th>
						<?php endforeach; ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( $rows as $i => $row ) : ?>
						<tr>
							<td><input type="text" class="regular-text" style="width:10rem" name="<?php echo esc_attr( "{$name}[rows][{$i}][time]" ); ?>" value="<?php echo esc_attr( $row['time'] ); ?>" aria-label="<?php echo esc_attr( sprintf( /* translators: %d: line number. */ __( 'Opening time, line %d', 'hakuba-dental' ), $i + 1 ) ); ?>"></td>
							<?php foreach ( $days as $day => $label ) : ?>
								<td style="text-align:center"><input type="checkbox" name="<?php echo esc_attr( "{$name}[rows][{$i}][days][{$day}]" ); ?>" value="1" <?php checked( ! empty( $row['days'][ $day ] ) ); ?> aria-label="<?php echo esc_attr( sprintf( /* translators: 1: weekday, 2: line number. */ __( 'Open on %1$s, line %2$d', 'hakuba-dental' ), $label, $i + 1 ) ); ?>"></td>
							<?php endforeach; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<table class="form-table" role="presentation">
				<tr>
					<th scope="row"><label for="hd-clinic-summary"><?php esc_html_e( 'The week in one line', 'hakuba-dental' ); ?></label></th>
					<td><input type="text" class="large-text" id="hd-clinic-summary" name="<?php echo esc_attr( "{$name}[summary]" ); ?>" value="<?php echo esc_attr( $clinic['summary'] ); ?>">
					<p class="description"><?php esc_html_e( 'Shown in the header when the visitor\'s weekday is unknown.', 'hakuba-dental' ); ?></p></td>
				</tr>
				<tr>
					<th scope="row"><label for="hd-clinic-note"><?php esc_html_e( 'Note under the hours', 'hakuba-dental' ); ?></label></th>
					<td><input type="text" class="large-text" id="hd-clinic-note" name="<?php echo esc_attr( "{$name}[note]" ); ?>" value="<?php echo esc_attr( $clinic['note'] ); ?>"></td>
				</tr>
				<tr>
					<th scope="row"><label for="hd-clinic-phone"><?php esc_html_e( 'Phone', 'hakuba-dental' ); ?></label></th>
					<td><input type="text" class="regular-text" id="hd-clinic-phone" name="<?php echo esc_attr( "{$name}[phone]" ); ?>" value="<?php echo esc_attr( $clinic['phone'] ); ?>"></td>
				</tr>
				<tr>
					<th scope="row"><label for="hd-clinic-email"><?php esc_html_e( 'Email', 'hakuba-dental' ); ?></label></th>
					<td><input type="email" class="regular-text" id="hd-clinic-email" name="<?php echo esc_attr( "{$name}[email]" ); ?>" value="<?php echo esc_attr( $clinic['email'] ); ?>"></td>
				</tr>
				<tr>
					<th scope="row"><label for="hd-clinic-address"><?php esc_html_e( 'Address', 'hakuba-dental' ); ?></label></th>
					<td><textarea class="large-text" rows="3" id="hd-clinic-address" name="<?php echo esc_attr( "{$name}[address]" ); ?>"><?php echo esc_textarea( $clinic['address'] ); ?></textarea></td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}
