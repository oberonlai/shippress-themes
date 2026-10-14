<?php
/**
 * Hut details: the opening hours of each weekday, the closed day, address, nearest station, phone and email kept in
 * ONE place (Appearance → Hut details) and shown wherever the theme needs them by one small server-rendered block,
 * kumotori-hut/hut-info: the "Open now" chip in the bottom bar, the opening line on the home page, the address card in
 * the footer and the hours on the Prices and Visit pages all read the same option, so changing the hours once changes
 * them everywhere. Until the form is saved the sample hut's details below are used.
 *
 * "Now" is worked out on the server in the site's own timezone (Settings → General), never from the visitor's clock.
 *
 * @package kumotori-hut
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Weekdays in order (Monday first), keyed mon … sun: array( short, long ).
 */
function kumotori_hut_days() {
	return array(
		'mon' => array( __( 'Mon', 'kumotori-hut' ), __( 'Monday', 'kumotori-hut' ) ),
		'tue' => array( __( 'Tue', 'kumotori-hut' ), __( 'Tuesday', 'kumotori-hut' ) ),
		'wed' => array( __( 'Wed', 'kumotori-hut' ), __( 'Wednesday', 'kumotori-hut' ) ),
		'thu' => array( __( 'Thu', 'kumotori-hut' ), __( 'Thursday', 'kumotori-hut' ) ),
		'fri' => array( __( 'Fri', 'kumotori-hut' ), __( 'Friday', 'kumotori-hut' ) ),
		'sat' => array( __( 'Sat', 'kumotori-hut' ), __( 'Saturday', 'kumotori-hut' ) ),
		'sun' => array( __( 'Sun', 'kumotori-hut' ), __( 'Sunday', 'kumotori-hut' ) ),
	);
}

/**
 * The sample hut's details (used until the Hut details form is saved).
 */
function kumotori_hut_desk_defaults() {
	$evening = array(
		'open'  => '12:00',
		'close' => '19:00',
	);
	return array(
		'hours'   => array(
			'mon' => $evening,
			'tue' => $evening,
			'wed' => $evening,
			'thu' => $evening,
			'fri' => $evening,
			'sat' => $evening,
			'sun' => $evening,
		),
		'closed'  => 'November to mid-June (winter room only). Season 2026: 20 June to 31 October',
		'note'    => 'Weather: clear mornings, thunder likely after 14:00. Ridge route closed above 15 m/s wind.',
		'address' => "Kumotori Saddle, 2,017 m\nOkuyama Ridge, Hakudo 399-0912",
		'station' => 'Four hours on foot from the Mizuhara trailhead bus stop',
		'phone'   => '0123-555-0217',
		'email'   => 'hello@kumotori-hut.example',
		'map'     => '',
	);
}

/**
 * The saved hut details, with the sample values filling anything missing.
 */
function kumotori_hut_desk() {
	$saved = get_option( 'kumotori_hut_desk' );
	return is_array( $saved ) ? array_merge( kumotori_hut_desk_defaults(), kumotori_hut_desk_sanitize( $saved ) ) : kumotori_hut_desk_defaults();
}

/**
 * Cleans the Hut details form (and any later update_option call) into the stored shape.
 *
 * @param mixed $input Raw value.
 * @return array
 */
function kumotori_hut_desk_sanitize( $input ) {
	$input = is_array( $input ) ? $input : array();
	$clean = array();
	if ( isset( $input['hours'] ) && is_array( $input['hours'] ) ) {
		$clean['hours'] = array();
		foreach ( array_keys( kumotori_hut_days() ) as $day ) {
			$row                    = $input['hours'][ $day ] ?? array();
			$clean['hours'][ $day ] = array(
				'open'  => kumotori_hut_clean_time( $row['open'] ?? '' ),
				'close' => kumotori_hut_clean_time( $row['close'] ?? '' ),
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
function kumotori_hut_clean_time( $time ) {
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
function kumotori_hut_minutes( $time ) {
	$parts = explode( ':', $time );
	return (int) $parts[0] * 60 + (int) ( $parts[1] ?? 0 );
}

/**
 * One day's opening span in minutes, or null when closed. A closing time at or before the opening time runs past
 * midnight.
 *
 * @param array  $hut Hut details.
 * @param string $day  mon … sun.
 * @return int[]|null array( open, close ).
 */
function kumotori_hut_span( $hut, $day ) {
	$row = $hut['hours'][ $day ] ?? array();
	if ( empty( $row['open'] ) || empty( $row['close'] ) ) {
		return null;
	}
	$open  = kumotori_hut_minutes( $row['open'] );
	$close = kumotori_hut_minutes( $row['close'] );
	if ( $close <= $open ) {
		$close += 1440;
	}
	return array( $open, $close );
}

/**
 * where reception stands right now, in the site's timezone.
 *
 * @param array $hut Hut details.
 * @return array state (open|later|closed-today|after), day, next (day key or ''), today's row.
 */
function kumotori_hut_now( $hut ) {
	$keys = array_keys( kumotori_hut_days() );
	$now  = new DateTimeImmutable( 'now', wp_timezone() );
	$day  = strtolower( $now->format( 'D' ) );
	$day  = in_array( $day, $keys, true ) ? $day : 'mon';
	$i    = array_search( $day, $keys, true );
	$min  = (int) $now->format( 'G' ) * 60 + (int) $now->format( 'i' );

	// Still open from yesterday evening (a closing time after midnight).
	$yesterday = $keys[ ( $i + 6 ) % 7 ];
	$ys        = kumotori_hut_span( $hut, $yesterday );
	if ( $ys && $ys[1] > 1440 && $min < $ys[1] - 1440 ) {
		return array( 'state' => 'open', 'day' => $yesterday, 'next' => '' );
	}

	$span = kumotori_hut_span( $hut, $day );
	if ( $span && $min < $span[0] ) {
		return array( 'state' => 'later', 'day' => $day, 'next' => $day );
	}
	if ( $span && $min < $span[1] ) {
		return array( 'state' => 'open', 'day' => $day, 'next' => '' );
	}
	$next = '';
	for ( $n = 1; $n <= 7; $n++ ) {
		$k = $keys[ ( $i + $n ) % 7 ];
		if ( kumotori_hut_span( $hut, $k ) ) {
			$next = $k;
			break;
		}
	}
	return array( 'state' => $span ? 'after' : 'closed-today', 'day' => $day, 'next' => $next );
}

/**
 * The hours of one day as text, "15:00–24:00", or "Closed".
 *
 * @param array  $hut Hut details.
 * @param string $day  mon … sun.
 * @return string
 */
function kumotori_hut_day_text( $hut, $day ) {
	$row = $hut['hours'][ $day ] ?? array();
	if ( empty( $row['open'] ) || empty( $row['close'] ) ) {
		return __( 'Closed', 'kumotori-hut' );
	}
	return $row['open'] . '–' . $row['close'];
}

/**
 * The week in one or two lines, consecutive days with the same hours grouped: "Tue–Sat 15:00–24:00 · Sun 14:00–23:00".
 *
 * @param array $hut Hut details.
 * @return string
 */
function kumotori_hut_week_summary( $hut ) {
	$days   = kumotori_hut_days();
	$groups = array();
	foreach ( array_keys( $days ) as $day ) {
		$text = kumotori_hut_span( $hut, $day ) ? kumotori_hut_day_text( $hut, $day ) : '';
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
 * @param array  $hut Hut details.
 * @param string $day  mon … sun.
 * @return string
 */
function kumotori_hut_opens( $hut, $day ) {
	return (string) ( $hut['hours'][ $day ]['open'] ?? '' );
}

/**
 * The bar's state: today's hours and the chip ("Open now", "Closed · opens 15:00", "Closed today").
 *
 * @param array $hut Hut details.
 * @return string Inner HTML.
 */
function kumotori_hut_state_html( $hut ) {
	$days = kumotori_hut_days();
	$now  = kumotori_hut_now( $hut );
	switch ( $now['state'] ) {
		case 'open':
			$hours = sprintf( /* translators: %s: hours. */ __( 'Today %s', 'kumotori-hut' ), kumotori_hut_day_text( $hut, $now['day'] ) );
			$chip  = __( 'Reception open', 'kumotori-hut' );
			break;
		case 'later':
			$hours = sprintf( /* translators: %s: hours. */ __( 'Today %s', 'kumotori-hut' ), kumotori_hut_day_text( $hut, $now['day'] ) );
			/* translators: %s: opening time. */
			$chip = sprintf( __( 'Closed · opens %s', 'kumotori-hut' ), kumotori_hut_opens( $hut, $now['next'] ) );
			break;
		case 'after':
			$hours = $now['next'] ? sprintf( /* translators: 1: weekday, 2: hours. */ __( 'Next %1$s %2$s', 'kumotori-hut' ), $days[ $now['next'] ][0], kumotori_hut_day_text( $hut, $now['next'] ) ) : '';
			/* translators: %s: opening time. */
			$chip = $now['next'] ? sprintf( __( 'Closed · opens %s', 'kumotori-hut' ), kumotori_hut_opens( $hut, $now['next'] ) ) : __( 'Closed season', 'kumotori-hut' );
			break;
		default:
			$hours = $now['next'] ? sprintf( /* translators: 1: weekday, 2: opening time. */ __( 'Back %1$s from %2$s', 'kumotori-hut' ), $days[ $now['next'] ][0], kumotori_hut_opens( $hut, $now['next'] ) ) : '';
			$chip  = __( 'Closed today', 'kumotori-hut' );
	}
	$class = 'open' === $now['state'] ? 'is-open' : 'is-closed';
	return '<span class="kh-state__hours">' . esc_html( $hours ) . '</span><span class="kh-state__chip ' . $class . '"><span class="kh-state__dot" aria-hidden="true"></span>' . esc_html( $chip ) . '</span>';
}

/**
 * The home page's opening line: "Open this evening from 15:00 until 24:00." or when reception is closed today, the
 * next opening.
 *
 * @param array $hut Hut details.
 * @return string Text.
 */
function kumotori_hut_opening_text( $hut ) {
	$days = kumotori_hut_days();
	$now  = kumotori_hut_now( $hut );
	$row  = $hut['hours'][ $now['day'] ] ?? array();
	if ( 'open' === $now['state'] ) {
		/* translators: %s: closing time. */
		return sprintf( __( 'Reception open now, until %s. Dinner at 17:30.', 'kumotori-hut' ), $row['close'] ?? '' );
	}
	if ( 'later' === $now['state'] ) {
		/* translators: 1: opening time, 2: closing time. */
		return sprintf( __( 'Reception opens today at %1$s, until %2$s.', 'kumotori-hut' ), $row['open'], $row['close'] );
	}
	if ( ! $now['next'] ) {
		return __( 'Closed for now.', 'kumotori-hut' );
	}
	/* translators: 1: weekday, 2: opening time. */
	return sprintf( __( 'Reception closed. Open again %1$s from %2$s.', 'kumotori-hut' ), $days[ $now['next'] ][1], kumotori_hut_opens( $hut, $now['next'] ) );
}

/**
 * The "Open in a map" address: the saved map link, or a map search for the address.
 *
 * @param array $hut Hut details.
 * @return string
 */
function kumotori_hut_map_url( $hut ) {
	if ( ! empty( $hut['map'] ) ) {
		return $hut['map'];
	}
	return 'https://www.openstreetmap.org/search?query=' . rawurlencode( str_replace( "\n", ', ', $hut['address'] ) );
}

/**
 * Renders kumotori-hut/hut-info.
 *
 * @param array $attributes Block attributes ("show").
 * @return string
 */
function kumotori_hut_desk_render( $attributes ) {
	$hut = kumotori_hut_desk();
	$show = $attributes['show'] ?? 'card';
	$tel  = 'tel:' . preg_replace( '/[^0-9+]/', '', $hut['phone'] );
	$days = kumotori_hut_days();

	switch ( $show ) {
		case 'state':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'kh-state' ) ) . '>' . kumotori_hut_state_html( $hut ) . '</p>';
		case 'opening':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'kh-tonight' ) ) . '>' . esc_html( kumotori_hut_opening_text( $hut ) ) . '</p>';
		case 'week':
			$today = kumotori_hut_now( $hut )['day'];
			$html  = '<ul class="kh-week__list">';
			foreach ( $days as $day => $label ) {
				$open  = (bool) kumotori_hut_span( $hut, $day );
				$attrs = 'class="kh-week__day' . ( $open ? '' : ' is-closed' ) . ( $day === $today ? ' is-today' : '' ) . '"' . ( $day === $today ? ' aria-current="date"' : '' );
				$html .= '<li ' . $attrs . '><span class="kh-week__name">' . esc_html( $label[1] ) . '</span><span class="kh-week__time">' . esc_html( kumotori_hut_day_text( $hut, $day ) ) . '</span></li>';
			}
			$html .= '</ul>';
			if ( $hut['note'] ) {
				$html .= '<p class="kh-week__note">' . esc_html( $hut['note'] ) . '</p>';
			}
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'kh-week' ) ) . '>' . $html . '</div>';
		case 'phone-email':
			$links = array();
			if ( $hut['phone'] ) {
				$links[] = '<a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $hut['phone'] ) . '</a>';
			}
			if ( $hut['email'] ) {
				$links[] = '<a class="kh-mail" href="' . esc_url( 'mailto:' . $hut['email'] ) . '">' . esc_html( $hut['email'] ) . '</a>';
			}
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'kh-reach' ) ) . '>' . implode( '<br>', $links ) . '</p>';
		case 'summary':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'kh-summary' ) ) . '>' . esc_html( kumotori_hut_week_summary( $hut ) ) . '<br>' . esc_html( sprintf( /* translators: %s: closed day(s). */ __( 'Closed season: %s', 'kumotori-hut' ), $hut['closed'] ) ) . '</p>';
		default:
			$rows = array(
				array( __( 'Address', 'kumotori-hut' ), nl2br( esc_html( $hut['address'] ), false ), 'address' ),
				array( __( 'Trailhead', 'kumotori-hut' ), esc_html( $hut['station'] ), 'station' ),
				array( __( 'Reception', 'kumotori-hut' ), esc_html( kumotori_hut_week_summary( $hut ) ), 'hours' ),
				array( __( 'Closed season', 'kumotori-hut' ), esc_html( $hut['closed'] ), 'closed' ),
				array( __( 'Telephone', 'kumotori-hut' ), '<a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $hut['phone'] ) . '</a>', 'phone' ),
			);
			if ( $hut['email'] ) {
				$rows[] = array( __( 'Email', 'kumotori-hut' ), '<a class="kh-mail" href="' . esc_url( 'mailto:' . $hut['email'] ) . '">' . esc_html( $hut['email'] ) . '</a>', 'email' );
			}
			$html = '<dl class="kh-card__list">';
			foreach ( $rows as $row ) {
				if ( '' === wp_strip_all_tags( $row[1] ) ) {
					continue;
				}
				$html .= '<div class="kh-card__row kh-card__row--' . $row[2] . '"><dt>' . esc_html( $row[0] ) . '</dt><dd>' . $row[1] . '</dd></div>';
			}
			$html .= '</dl><p class="kh-card__map"><a href="' . esc_url( kumotori_hut_map_url( $hut ) ) . '" rel="noopener">' . esc_html__( 'Open in a map', 'kumotori-hut' ) . '<span aria-hidden="true"> &#8599;</span></a></p>';
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'kh-card' ) ) . '>' . $html . '</div>';
	}
}

/**
 * Registers the block (server-rendered; the editor previews it and links to the Hut details screen).
 */
function kumotori_hut_desk_block() {
	wp_register_script(
		'kumotori-hut-hut-info',
		get_template_directory_uri() . '/assets/js/hut-info.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-server-side-render', 'wp-i18n' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script( 'kumotori-hut-hut-info', 'window.kumotoriHutDesk = ' . wp_json_encode( array( 'settingsUrl' => admin_url( 'themes.php?page=kumotori-hut-desk' ) ) ) . ';', 'before' );

	register_block_type(
		'kumotori-hut/hut-info',
		array(
			'api_version'     => 3,
			'title'           => __( 'Hut details', 'kumotori-hut' ),
			'description'     => __( 'Opening hours, the "Open now" state, address, phone or email from Appearance → Hut details. Edit them there once and every place updates.', 'kumotori-hut' ),
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
			'editor_script'   => 'kumotori-hut-hut-info',
			'render_callback' => 'kumotori_hut_desk_render',
		)
	);
}
add_action( 'init', 'kumotori_hut_desk_block' );

/**
 * The Hut details setting.
 */
function kumotori_hut_desk_settings() {
	register_setting(
		'kumotori_hut_desk',
		'kumotori_hut_desk',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'kumotori_hut_desk_sanitize',
		)
	);
}
add_action( 'init', 'kumotori_hut_desk_settings' );

/**
 * Lets anyone who may edit the site's design (not only administrators) save the screen.
 */
function kumotori_hut_desk_capability() {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_kumotori_hut_desk', 'kumotori_hut_desk_capability' );

/**
 * Adds Appearance → Hut details.
 */
function kumotori_hut_desk_menu() {
	add_theme_page( __( 'Hut details', 'kumotori-hut' ), __( 'Hut details', 'kumotori-hut' ), 'edit_theme_options', 'kumotori-hut-desk', 'kumotori_hut_desk_page' );
}
add_action( 'admin_menu', 'kumotori_hut_desk_menu' );

/**
 * Prints the Hut details form.
 */
function kumotori_hut_desk_page() {
	$hut = kumotori_hut_desk();
	$name = 'kumotori_hut_desk';
	$text = array(
		'closed'  => __( 'Closed season (as written)', 'kumotori-hut' ),
		'note'    => __( 'Weather note (under the hours)', 'kumotori-hut' ),
		'station' => __( 'Trailhead (bus stop, walk)', 'kumotori-hut' ),
		'phone'   => __( 'Telephone', 'kumotori-hut' ),
		'email'   => __( 'Email', 'kumotori-hut' ),
		'map'     => __( 'Map link (optional)', 'kumotori-hut' ),
	);
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Hut details', 'kumotori-hut' ); ?></h1>
		<?php settings_errors(); ?>
		<p><?php esc_html_e( 'Your opening hours, closed day, address, telephone and email. They appear in the bottom bar ("Open now"), on the home page, in the footer address card and on the Prices and Visit pages: change them here once and every place updates. "Now" follows the timezone in Settings → General.', 'kumotori-hut' ); ?></p>
		<form method="post" action="options.php">
			<?php settings_fields( 'kumotori_hut_desk' ); ?>
			<h2><?php esc_html_e( 'Opening hours', 'kumotori-hut' ); ?></h2>
			<p class="description"><?php esc_html_e( 'For example 15:00 and 24:00. Leave both empty on a closed day. A closing time after midnight can be written as 25:00 or 1:00.', 'kumotori-hut' ); ?></p>
			<table class="widefat striped" style="max-width:32rem">
				<thead><tr><th scope="col"><?php esc_html_e( 'Day', 'kumotori-hut' ); ?></th><th scope="col"><?php esc_html_e( 'Opens', 'kumotori-hut' ); ?></th><th scope="col"><?php esc_html_e( 'Closes', 'kumotori-hut' ); ?></th></tr></thead>
				<tbody>
					<?php foreach ( kumotori_hut_days() as $day => $label ) : ?>
						<tr>
							<th scope="row"><?php echo esc_html( $label[1] ); ?></th>
							<?php foreach ( array( 'open', 'close' ) as $edge ) : ?>
								<td><input type="text" style="width:6rem" name="<?php echo esc_attr( "{$name}[hours][{$day}][{$edge}]" ); ?>" value="<?php echo esc_attr( $hut['hours'][ $day ][ $edge ] ?? '' ); ?>" aria-label="<?php echo esc_attr( $label[1] . ' ' . ( 'open' === $edge ? __( 'opens', 'kumotori-hut' ) : __( 'closes', 'kumotori-hut' ) ) ); ?>"></td>
							<?php endforeach; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<table class="form-table" role="presentation">
				<?php foreach ( $text as $key => $label ) : ?>
					<tr>
						<th scope="row"><label for="kh-hut-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label></th>
						<td><input type="<?php echo 'email' === $key ? 'email' : ( 'map' === $key ? 'url' : 'text' ); ?>" class="large-text" id="kh-hut-<?php echo esc_attr( $key ); ?>" name="<?php echo esc_attr( "{$name}[{$key}]" ); ?>" value="<?php echo esc_attr( $hut[ $key ] ); ?>"></td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th scope="row"><label for="kh-hut-address"><?php esc_html_e( 'Address', 'kumotori-hut' ); ?></label></th>
					<td><textarea class="large-text" rows="3" id="kh-hut-address" name="<?php echo esc_attr( "{$name}[address]" ); ?>"><?php echo esc_textarea( $hut['address'] ); ?></textarea></td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}
