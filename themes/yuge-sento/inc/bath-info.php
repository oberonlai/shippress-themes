<?php
/**
 * Bath details: the opening hours of each weekday, the closed day, address, nearest station, phone and email kept in
 * ONE place (Appearance → Bath details) and shown wherever the theme needs them by one small server-rendered block,
 * yuge-sento/bath-info: the "Open now" chip in the bottom bar, the opening line on the home page, the address card in
 * the footer and the hours on the Prices and Visit pages all read the same option, so changing the hours once changes
 * them everywhere. Until the form is saved the sample bathhouse's details below are used.
 *
 * "Now" is worked out on the server in the site's own timezone (Settings → General), never from the visitor's clock.
 *
 * @package yuge-sento
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Weekdays in order (Monday first), keyed mon … sun: array( short, long ).
 */
function yuge_sento_days() {
	return array(
		'mon' => array( __( 'Mon', 'yuge-sento' ), __( 'Monday', 'yuge-sento' ) ),
		'tue' => array( __( 'Tue', 'yuge-sento' ), __( 'Tuesday', 'yuge-sento' ) ),
		'wed' => array( __( 'Wed', 'yuge-sento' ), __( 'Wednesday', 'yuge-sento' ) ),
		'thu' => array( __( 'Thu', 'yuge-sento' ), __( 'Thursday', 'yuge-sento' ) ),
		'fri' => array( __( 'Fri', 'yuge-sento' ), __( 'Friday', 'yuge-sento' ) ),
		'sat' => array( __( 'Sat', 'yuge-sento' ), __( 'Saturday', 'yuge-sento' ) ),
		'sun' => array( __( 'Sun', 'yuge-sento' ), __( 'Sunday', 'yuge-sento' ) ),
	);
}

/**
 * The sample bathhouse's details (used until the Bath details form is saved).
 */
function yuge_sento_bath_defaults() {
	$evening = array(
		'open'  => '15:00',
		'close' => '24:00',
	);
	return array(
		'hours'   => array(
			'mon' => array(
				'open'  => '',
				'close' => '',
			),
			'tue' => $evening,
			'wed' => $evening,
			'thu' => $evening,
			'fri' => $evening,
			'sat' => $evening,
			'sun' => array(
				'open'  => '14:00',
				'close' => '23:00',
			),
		),
		'closed'  => 'Mondays (Tuesday when Monday is a public holiday)',
		'note'    => 'Last entry thirty minutes before closing.',
		'address' => "3-14-7 Kitamachi\nHamakaze City 211-0037",
		'station' => 'Six minutes on foot from Kitamachi Station, west exit',
		'phone'   => '0123-555-0158',
		'email'   => 'hello@yuge-sento.example',
		'map'     => '',
	);
}

/**
 * The saved bath details, with the sample values filling anything missing.
 */
function yuge_sento_bath() {
	$saved = get_option( 'yuge_sento_bath' );
	return is_array( $saved ) ? array_merge( yuge_sento_bath_defaults(), yuge_sento_bath_sanitize( $saved ) ) : yuge_sento_bath_defaults();
}

/**
 * Cleans the Bath details form (and any later update_option call) into the stored shape.
 *
 * @param mixed $input Raw value.
 * @return array
 */
function yuge_sento_bath_sanitize( $input ) {
	$input = is_array( $input ) ? $input : array();
	$clean = array();
	if ( isset( $input['hours'] ) && is_array( $input['hours'] ) ) {
		$clean['hours'] = array();
		foreach ( array_keys( yuge_sento_days() ) as $day ) {
			$row                    = $input['hours'][ $day ] ?? array();
			$clean['hours'][ $day ] = array(
				'open'  => yuge_sento_clean_time( $row['open'] ?? '' ),
				'close' => yuge_sento_clean_time( $row['close'] ?? '' ),
			);
		}
	}
	foreach ( array( 'closed', 'note', 'station', 'phone' ) as $key ) {
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
	if ( isset( $input['map'] ) ) {
		$clean['map'] = esc_url_raw( $input['map'] );
	}
	return $clean;
}

/**
 * "15.00", "15:00" or "3:00" → "15:00"-style text; anything else → "".
 *
 * @param string $time Raw time.
 * @return string
 */
function yuge_sento_clean_time( $time ) {
	if ( preg_match( '/^\s*(\d{1,2})[:.](\d{2})\s*$/', (string) $time, $m ) && (int) $m[1] <= 30 && (int) $m[2] < 60 ) {
		return (int) $m[1] . ':' . $m[2];
	}
	return '';
}

/**
 * Minutes after midnight for "15:00" (24:00 = 1440, 25:30 = past midnight).
 *
 * @param string $time Time text.
 * @return int
 */
function yuge_sento_minutes( $time ) {
	$parts = explode( ':', $time );
	return (int) $parts[0] * 60 + (int) ( $parts[1] ?? 0 );
}

/**
 * One day's opening span in minutes, or null when closed. A closing time at or before the opening time runs past
 * midnight.
 *
 * @param array  $bath Bath details.
 * @param string $day  mon … sun.
 * @return int[]|null array( open, close ).
 */
function yuge_sento_span( $bath, $day ) {
	$row = $bath['hours'][ $day ] ?? array();
	if ( empty( $row['open'] ) || empty( $row['close'] ) ) {
		return null;
	}
	$open  = yuge_sento_minutes( $row['open'] );
	$close = yuge_sento_minutes( $row['close'] );
	if ( $close <= $open ) {
		$close += 1440;
	}
	return array( $open, $close );
}

/**
 * Where the bath stands right now, in the site's timezone.
 *
 * @param array $bath Bath details.
 * @return array state (open|later|closed-today|after), day, next (day key or ''), today's row.
 */
function yuge_sento_now( $bath ) {
	$keys = array_keys( yuge_sento_days() );
	$now  = new DateTimeImmutable( 'now', wp_timezone() );
	$day  = strtolower( $now->format( 'D' ) );
	$day  = in_array( $day, $keys, true ) ? $day : 'mon';
	$i    = array_search( $day, $keys, true );
	$min  = (int) $now->format( 'G' ) * 60 + (int) $now->format( 'i' );

	// Still open from yesterday evening (a closing time after midnight).
	$yesterday = $keys[ ( $i + 6 ) % 7 ];
	$ys        = yuge_sento_span( $bath, $yesterday );
	if ( $ys && $ys[1] > 1440 && $min < $ys[1] - 1440 ) {
		return array( 'state' => 'open', 'day' => $yesterday, 'next' => '' );
	}

	$span = yuge_sento_span( $bath, $day );
	if ( $span && $min < $span[0] ) {
		return array( 'state' => 'later', 'day' => $day, 'next' => $day );
	}
	if ( $span && $min < $span[1] ) {
		return array( 'state' => 'open', 'day' => $day, 'next' => '' );
	}
	$next = '';
	for ( $n = 1; $n <= 7; $n++ ) {
		$k = $keys[ ( $i + $n ) % 7 ];
		if ( yuge_sento_span( $bath, $k ) ) {
			$next = $k;
			break;
		}
	}
	return array( 'state' => $span ? 'after' : 'closed-today', 'day' => $day, 'next' => $next );
}

/**
 * The hours of one day as text, "15:00–24:00", or "Closed".
 *
 * @param array  $bath Bath details.
 * @param string $day  mon … sun.
 * @return string
 */
function yuge_sento_day_text( $bath, $day ) {
	$row = $bath['hours'][ $day ] ?? array();
	if ( empty( $row['open'] ) || empty( $row['close'] ) ) {
		return __( 'Closed', 'yuge-sento' );
	}
	return $row['open'] . '–' . $row['close'];
}

/**
 * The week in one or two lines, consecutive days with the same hours grouped: "Tue–Sat 15:00–24:00 · Sun 14:00–23:00".
 *
 * @param array $bath Bath details.
 * @return string
 */
function yuge_sento_week_summary( $bath ) {
	$days   = yuge_sento_days();
	$groups = array();
	foreach ( array_keys( $days ) as $day ) {
		$text = yuge_sento_span( $bath, $day ) ? yuge_sento_day_text( $bath, $day ) : '';
		$last = count( $groups ) - 1;
		if ( $last >= 0 && $groups[ $last ]['text'] === $text ) {
			$groups[ $last ]['to'] = $day;
		} else {
			$groups[] = array(
				'from' => $day,
				'to'   => $day,
				'text' => $text,
			);
		}
	}
	$out = array();
	foreach ( $groups as $g ) {
		if ( '' === $g['text'] ) {
			continue;
		}
		$label = $days[ $g['from'] ][0] . ( $g['from'] === $g['to'] ? '' : '–' . $days[ $g['to'] ][0] );
		$out[] = $label . ' ' . $g['text'];
	}
	return implode( ' · ', $out );
}

/**
 * The opening time of a day ("15:00").
 *
 * @param array  $bath Bath details.
 * @param string $day  mon … sun.
 * @return string
 */
function yuge_sento_opens( $bath, $day ) {
	return (string) ( $bath['hours'][ $day ]['open'] ?? '' );
}

/**
 * The bar's state: today's hours and the chip ("Open now", "Closed · opens 15:00", "Closed today").
 *
 * @param array $bath Bath details.
 * @return string Inner HTML.
 */
function yuge_sento_state_html( $bath ) {
	$days = yuge_sento_days();
	$now  = yuge_sento_now( $bath );
	switch ( $now['state'] ) {
		case 'open':
			$hours = sprintf( /* translators: %s: hours. */ __( 'Today %s', 'yuge-sento' ), yuge_sento_day_text( $bath, $now['day'] ) );
			$chip  = __( 'Open now', 'yuge-sento' );
			break;
		case 'later':
			$hours = sprintf( /* translators: %s: hours. */ __( 'Today %s', 'yuge-sento' ), yuge_sento_day_text( $bath, $now['day'] ) );
			/* translators: %s: opening time. */
			$chip = sprintf( __( 'Closed · opens %s', 'yuge-sento' ), yuge_sento_opens( $bath, $now['next'] ) );
			break;
		case 'after':
			$hours = $now['next'] ? sprintf( /* translators: 1: weekday, 2: hours. */ __( 'Next %1$s %2$s', 'yuge-sento' ), $days[ $now['next'] ][0], yuge_sento_day_text( $bath, $now['next'] ) ) : '';
			/* translators: %s: opening time. */
			$chip = $now['next'] ? sprintf( __( 'Closed · opens %s', 'yuge-sento' ), yuge_sento_opens( $bath, $now['next'] ) ) : __( 'Closed', 'yuge-sento' );
			break;
		default:
			$hours = $now['next'] ? sprintf( /* translators: 1: weekday, 2: opening time. */ __( 'Back %1$s from %2$s', 'yuge-sento' ), $days[ $now['next'] ][0], yuge_sento_opens( $bath, $now['next'] ) ) : '';
			$chip  = __( 'Closed today', 'yuge-sento' );
	}
	$class = 'open' === $now['state'] ? 'is-open' : 'is-closed';
	return '<span class="yg-state__hours">' . esc_html( $hours ) . '</span><span class="yg-state__chip ' . $class . '"><span class="yg-state__dot" aria-hidden="true"></span>' . esc_html( $chip ) . '</span>';
}

/**
 * The home page's opening line: "Open this evening from 15:00 until 24:00." or when the bath is closed today, the
 * next opening.
 *
 * @param array $bath Bath details.
 * @return string Text.
 */
function yuge_sento_opening_text( $bath ) {
	$days = yuge_sento_days();
	$now  = yuge_sento_now( $bath );
	$row  = $bath['hours'][ $now['day'] ] ?? array();
	if ( 'open' === $now['state'] ) {
		/* translators: %s: closing time. */
		return sprintf( __( 'Open now, until %s this evening.', 'yuge-sento' ), $row['close'] ?? '' );
	}
	if ( 'later' === $now['state'] ) {
		/* translators: 1: opening time, 2: closing time. */
		return sprintf( __( 'Open this evening from %1$s until %2$s.', 'yuge-sento' ), $row['open'], $row['close'] );
	}
	if ( ! $now['next'] ) {
		return __( 'Closed for now.', 'yuge-sento' );
	}
	/* translators: 1: weekday, 2: opening time. */
	return sprintf( __( 'Closed this evening. Open again %1$s from %2$s.', 'yuge-sento' ), $days[ $now['next'] ][1], yuge_sento_opens( $bath, $now['next'] ) );
}

/**
 * The "Open in a map" address: the saved map link, or a map search for the address.
 *
 * @param array $bath Bath details.
 * @return string
 */
function yuge_sento_map_url( $bath ) {
	if ( ! empty( $bath['map'] ) ) {
		return $bath['map'];
	}
	return 'https://www.openstreetmap.org/search?query=' . rawurlencode( str_replace( "\n", ', ', $bath['address'] ) );
}

/**
 * Renders yuge-sento/bath-info.
 *
 * @param array $attributes Block attributes ("show").
 * @return string
 */
function yuge_sento_bath_render( $attributes ) {
	$bath = yuge_sento_bath();
	$show = $attributes['show'] ?? 'card';
	$tel  = 'tel:' . preg_replace( '/[^0-9+]/', '', $bath['phone'] );
	$days = yuge_sento_days();

	switch ( $show ) {
		case 'state':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'yg-state' ) ) . '>' . yuge_sento_state_html( $bath ) . '</p>';
		case 'opening':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'yg-tonight' ) ) . '>' . esc_html( yuge_sento_opening_text( $bath ) ) . '</p>';
		case 'week':
			$today = yuge_sento_now( $bath )['day'];
			$html  = '<ul class="yg-week__list">';
			foreach ( $days as $day => $label ) {
				$open  = (bool) yuge_sento_span( $bath, $day );
				$attrs = 'class="yg-week__day' . ( $open ? '' : ' is-closed' ) . ( $day === $today ? ' is-today' : '' ) . '"' . ( $day === $today ? ' aria-current="date"' : '' );
				$html .= '<li ' . $attrs . '><span class="yg-week__name">' . esc_html( $label[1] ) . '</span><span class="yg-week__time">' . esc_html( yuge_sento_day_text( $bath, $day ) ) . '</span></li>';
			}
			$html .= '</ul>';
			if ( $bath['note'] ) {
				$html .= '<p class="yg-week__note">' . esc_html( $bath['note'] ) . '</p>';
			}
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'yg-week' ) ) . '>' . $html . '</div>';
		case 'phone-email':
			$links = array();
			if ( $bath['phone'] ) {
				$links[] = '<a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $bath['phone'] ) . '</a>';
			}
			if ( $bath['email'] ) {
				$links[] = '<a class="yg-mail" href="' . esc_url( 'mailto:' . $bath['email'] ) . '">' . esc_html( $bath['email'] ) . '</a>';
			}
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'yg-reach' ) ) . '>' . implode( '<br>', $links ) . '</p>';
		case 'summary':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'yg-summary' ) ) . '>' . esc_html( yuge_sento_week_summary( $bath ) ) . '<br>' . esc_html( sprintf( /* translators: %s: closed day(s). */ __( 'Closed %s', 'yuge-sento' ), $bath['closed'] ) ) . '</p>';
		default:
			$rows = array(
				array( __( 'Address', 'yuge-sento' ), nl2br( esc_html( $bath['address'] ), false ), 'address' ),
				array( __( 'Getting here', 'yuge-sento' ), esc_html( $bath['station'] ), 'station' ),
				array( __( 'Hours', 'yuge-sento' ), esc_html( yuge_sento_week_summary( $bath ) ), 'hours' ),
				array( __( 'Closed', 'yuge-sento' ), esc_html( $bath['closed'] ), 'closed' ),
				array( __( 'Telephone', 'yuge-sento' ), '<a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $bath['phone'] ) . '</a>', 'phone' ),
			);
			if ( $bath['email'] ) {
				$rows[] = array( __( 'Email', 'yuge-sento' ), '<a class="yg-mail" href="' . esc_url( 'mailto:' . $bath['email'] ) . '">' . esc_html( $bath['email'] ) . '</a>', 'email' );
			}
			$html = '<dl class="yg-card__list">';
			foreach ( $rows as $row ) {
				if ( '' === wp_strip_all_tags( $row[1] ) ) {
					continue;
				}
				$html .= '<div class="yg-card__row yg-card__row--' . $row[2] . '"><dt>' . esc_html( $row[0] ) . '</dt><dd>' . $row[1] . '</dd></div>';
			}
			$html .= '</dl><p class="yg-card__map"><a href="' . esc_url( yuge_sento_map_url( $bath ) ) . '" rel="noopener">' . esc_html__( 'Open in a map', 'yuge-sento' ) . '<span aria-hidden="true"> &#8599;</span></a></p>';
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'yg-card' ) ) . '>' . $html . '</div>';
	}
}

/**
 * Registers the block (server-rendered; the editor previews it and links to the Bath details screen).
 */
function yuge_sento_bath_block() {
	wp_register_script(
		'yuge-sento-bath-info',
		get_template_directory_uri() . '/assets/js/bath-info.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-server-side-render', 'wp-i18n' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script( 'yuge-sento-bath-info', 'window.yugeSentoBath = ' . wp_json_encode( array( 'settingsUrl' => admin_url( 'themes.php?page=yuge-sento-bath' ) ) ) . ';', 'before' );

	register_block_type(
		'yuge-sento/bath-info',
		array(
			'api_version'     => 3,
			'title'           => __( 'Bath details', 'yuge-sento' ),
			'description'     => __( 'Opening hours, the "Open now" state, address, phone or email from Appearance → Bath details. Edit them there once and every place updates.', 'yuge-sento' ),
			'category'        => 'theme',
			'icon'            => 'clock',
			'keywords'        => array( 'opening hours', 'open now', 'address', 'phone' ),
			'attributes'      => array(
				'show' => array(
					'type'    => 'string',
					'enum'    => array( 'card', 'state', 'opening', 'week', 'summary', 'phone-email' ),
					'default' => 'card',
				),
			),
			'supports'        => array(
				'html'            => false,
				'customClassName' => false,
				'reusable'        => false,
			),
			'editor_script'   => 'yuge-sento-bath-info',
			'render_callback' => 'yuge_sento_bath_render',
		)
	);
}
add_action( 'init', 'yuge_sento_bath_block' );

/**
 * The Bath details setting.
 */
function yuge_sento_bath_settings() {
	register_setting(
		'yuge_sento_bath',
		'yuge_sento_bath',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'yuge_sento_bath_sanitize',
		)
	);
}
add_action( 'init', 'yuge_sento_bath_settings' );

/**
 * Lets anyone who may edit the site's design (not only administrators) save the screen.
 */
function yuge_sento_bath_capability() {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_yuge_sento_bath', 'yuge_sento_bath_capability' );

/**
 * Adds Appearance → Bath details.
 */
function yuge_sento_bath_menu() {
	add_theme_page( __( 'Bath details', 'yuge-sento' ), __( 'Bath details', 'yuge-sento' ), 'edit_theme_options', 'yuge-sento-bath', 'yuge_sento_bath_page' );
}
add_action( 'admin_menu', 'yuge_sento_bath_menu' );

/**
 * Prints the Bath details form.
 */
function yuge_sento_bath_page() {
	$bath = yuge_sento_bath();
	$name = 'yuge_sento_bath';
	$text = array(
		'closed'  => __( 'Closed day (as written)', 'yuge-sento' ),
		'note'    => __( 'Note under the hours', 'yuge-sento' ),
		'station' => __( 'Getting here (station, walk)', 'yuge-sento' ),
		'phone'   => __( 'Telephone', 'yuge-sento' ),
		'email'   => __( 'Email', 'yuge-sento' ),
		'map'     => __( 'Map link (optional)', 'yuge-sento' ),
	);
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Bath details', 'yuge-sento' ); ?></h1>
		<?php settings_errors(); ?>
		<p><?php esc_html_e( 'Your opening hours, closed day, address, telephone and email. They appear in the bottom bar ("Open now"), on the home page, in the footer address card and on the Prices and Visit pages: change them here once and every place updates. "Now" follows the timezone in Settings → General.', 'yuge-sento' ); ?></p>
		<form method="post" action="options.php">
			<?php settings_fields( 'yuge_sento_bath' ); ?>
			<h2><?php esc_html_e( 'Opening hours', 'yuge-sento' ); ?></h2>
			<p class="description"><?php esc_html_e( 'For example 15:00 and 24:00. Leave both empty on a closed day. A closing time after midnight can be written as 25:00 or 1:00.', 'yuge-sento' ); ?></p>
			<table class="widefat striped" style="max-width:32rem">
				<thead><tr><th scope="col"><?php esc_html_e( 'Day', 'yuge-sento' ); ?></th><th scope="col"><?php esc_html_e( 'Opens', 'yuge-sento' ); ?></th><th scope="col"><?php esc_html_e( 'Closes', 'yuge-sento' ); ?></th></tr></thead>
				<tbody>
					<?php foreach ( yuge_sento_days() as $day => $label ) : ?>
						<tr>
							<th scope="row"><?php echo esc_html( $label[1] ); ?></th>
							<?php foreach ( array( 'open', 'close' ) as $edge ) : ?>
								<td><input type="text" style="width:6rem" name="<?php echo esc_attr( "{$name}[hours][{$day}][{$edge}]" ); ?>" value="<?php echo esc_attr( $bath['hours'][ $day ][ $edge ] ?? '' ); ?>" aria-label="<?php echo esc_attr( $label[1] . ' ' . ( 'open' === $edge ? __( 'opens', 'yuge-sento' ) : __( 'closes', 'yuge-sento' ) ) ); ?>"></td>
							<?php endforeach; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<table class="form-table" role="presentation">
				<?php foreach ( $text as $key => $label ) : ?>
					<tr>
						<th scope="row"><label for="yg-bath-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label></th>
						<td><input type="<?php echo 'email' === $key ? 'email' : ( 'map' === $key ? 'url' : 'text' ); ?>" class="large-text" id="yg-bath-<?php echo esc_attr( $key ); ?>" name="<?php echo esc_attr( "{$name}[{$key}]" ); ?>" value="<?php echo esc_attr( $bath[ $key ] ); ?>"></td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th scope="row"><label for="yg-bath-address"><?php esc_html_e( 'Address', 'yuge-sento' ); ?></label></th>
					<td><textarea class="large-text" rows="3" id="yg-bath-address" name="<?php echo esc_attr( "{$name}[address]" ); ?>"><?php echo esc_textarea( $bath['address'] ); ?></textarea></td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}
