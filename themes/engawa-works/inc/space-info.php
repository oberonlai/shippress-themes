<?php
/**
 * Space details: the opening hours of each weekday, the closed day, address, nearest station, phone and email kept in
 * ONE place (Appearance → Space details) and shown wherever the theme needs them by one small server-rendered block,
 * engawa-works/space-info: today's hours in the header's utility strip, the first item of the footer's "today at the
 * space" ticker, the line under the home title, the footer address card and the hours on the Plans, Tour booking and
 * Contact pages all read the same option, so changing the hours once changes them everywhere. Until the form is saved
 * the sample space's details below are used.
 *
 * "Now" is worked out on the server in the site's own timezone (Settings → General), never from the visitor's clock.
 *
 * @package engawa-works
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Weekdays in order (Monday first), keyed mon … sun: array( short, long ).
 */
function engawa_works_days() {
	return array(
		'mon' => array( __( 'Mon', 'engawa-works' ), __( 'Monday', 'engawa-works' ) ),
		'tue' => array( __( 'Tue', 'engawa-works' ), __( 'Tuesday', 'engawa-works' ) ),
		'wed' => array( __( 'Wed', 'engawa-works' ), __( 'Wednesday', 'engawa-works' ) ),
		'thu' => array( __( 'Thu', 'engawa-works' ), __( 'Thursday', 'engawa-works' ) ),
		'fri' => array( __( 'Fri', 'engawa-works' ), __( 'Friday', 'engawa-works' ) ),
		'sat' => array( __( 'Sat', 'engawa-works' ), __( 'Saturday', 'engawa-works' ) ),
		'sun' => array( __( 'Sun', 'engawa-works' ), __( 'Sunday', 'engawa-works' ) ),
	);
}

/**
 * The sample space's details (used until the Space details form is saved).
 */
function engawa_works_space_defaults() {
	$day = array(
		'open'  => '8:00',
		'close' => '21:00',
	);
	return array(
		'hours'   => array(
			'mon' => $day,
			'tue' => $day,
			'wed' => $day,
			'thu' => $day,
			'fri' => $day,
			'sat' => array(
				'open'  => '10:00',
				'close' => '18:00',
			),
			'sun' => array(
				'open'  => '',
				'close' => '',
			),
		),
		'closed'  => 'Sundays and public holidays',
		'note'    => 'Studio desk and Team table members have a key and may stay later.',
		'address' => "2-9-4 Nishioka, Kawabe Ward\nMinato-Kita City 150-0042",
		'station' => 'Four minutes on foot from Nishioka Station, south exit',
		'phone'   => '0123-555-0164',
		'email'   => 'hello@engawa-works.example',
		'map'     => '',
	);
}

/**
 * The saved space details, with the sample values filling anything missing.
 */
function engawa_works_space() {
	$saved = get_option( 'engawa_works_space' );
	return is_array( $saved ) ? array_merge( engawa_works_space_defaults(), engawa_works_space_sanitize( $saved ) ) : engawa_works_space_defaults();
}

/**
 * Cleans the Space details form (and any later update_option call) into the stored shape.
 *
 * @param mixed $input Raw value.
 * @return array
 */
function engawa_works_space_sanitize( $input ) {
	$input = is_array( $input ) ? $input : array();
	$clean = array();
	if ( isset( $input['hours'] ) && is_array( $input['hours'] ) ) {
		$clean['hours'] = array();
		foreach ( array_keys( engawa_works_days() ) as $day ) {
			$row                    = $input['hours'][ $day ] ?? array();
			$clean['hours'][ $day ] = array(
				'open'  => engawa_works_clean_time( $row['open'] ?? '' ),
				'close' => engawa_works_clean_time( $row['close'] ?? '' ),
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
function engawa_works_clean_time( $time ) {
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
function engawa_works_minutes( $time ) {
	$parts = explode( ':', $time );
	return (int) $parts[0] * 60 + (int) ( $parts[1] ?? 0 );
}

/**
 * One day's opening span in minutes, or null when closed. A closing time at or before the opening time runs past
 * midnight.
 *
 * @param array  $space Space details.
 * @param string $day  mon … sun.
 * @return int[]|null array( open, close ).
 */
function engawa_works_span( $space, $day ) {
	$row = $space['hours'][ $day ] ?? array();
	if ( empty( $row['open'] ) || empty( $row['close'] ) ) {
		return null;
	}
	$open  = engawa_works_minutes( $row['open'] );
	$close = engawa_works_minutes( $row['close'] );
	if ( $close <= $open ) {
		$close += 1440;
	}
	return array( $open, $close );
}

/**
 * Where the space stands right now, in the site's timezone.
 *
 * @param array $space Space details.
 * @return array state (open|later|closed-today|after), day, next (day key or ''), today's row.
 */
function engawa_works_now( $space ) {
	$keys = array_keys( engawa_works_days() );
	$now  = new DateTimeImmutable( 'now', wp_timezone() );
	$day  = strtolower( $now->format( 'D' ) );
	$day  = in_array( $day, $keys, true ) ? $day : 'mon';
	$i    = array_search( $day, $keys, true );
	$min  = (int) $now->format( 'G' ) * 60 + (int) $now->format( 'i' );

	// Still open from yesterday (a closing time after midnight).
	$yesterday = $keys[ ( $i + 6 ) % 7 ];
	$ys        = engawa_works_span( $space, $yesterday );
	if ( $ys && $ys[1] > 1440 && $min < $ys[1] - 1440 ) {
		return array( 'state' => 'open', 'day' => $yesterday, 'next' => '' );
	}

	$span = engawa_works_span( $space, $day );
	if ( $span && $min < $span[0] ) {
		return array( 'state' => 'later', 'day' => $day, 'next' => $day );
	}
	if ( $span && $min < $span[1] ) {
		return array( 'state' => 'open', 'day' => $day, 'next' => '' );
	}
	$next = '';
	for ( $n = 1; $n <= 7; $n++ ) {
		$k = $keys[ ( $i + $n ) % 7 ];
		if ( engawa_works_span( $space, $k ) ) {
			$next = $k;
			break;
		}
	}
	return array( 'state' => $span ? 'after' : 'closed-today', 'day' => $day, 'next' => $next );
}

/**
 * The hours of one day as text, "15:00–24:00", or "Closed".
 *
 * @param array  $space Space details.
 * @param string $day  mon … sun.
 * @return string
 */
function engawa_works_day_text( $space, $day ) {
	$row = $space['hours'][ $day ] ?? array();
	if ( empty( $row['open'] ) || empty( $row['close'] ) ) {
		return __( 'Closed', 'engawa-works' );
	}
	return $row['open'] . '–' . $row['close'];
}

/**
 * The week in one or two lines, consecutive days with the same hours grouped: "Tue–Sat 15:00–24:00 · Sun 14:00–23:00".
 *
 * @param array $space Space details.
 * @return string
 */
function engawa_works_week_summary( $space ) {
	$days   = engawa_works_days();
	$groups = array();
	foreach ( array_keys( $days ) as $day ) {
		$text = engawa_works_span( $space, $day ) ? engawa_works_day_text( $space, $day ) : '';
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
 * @param array  $space Space details.
 * @param string $day  mon … sun.
 * @return string
 */
function engawa_works_opens( $space, $day ) {
	return (string) ( $space['hours'][ $day ]['open'] ?? '' );
}

/**
 * Today's hours and the chip for the utility strip: "Today 8:00–21:00" + "Open now", "Opens 8:00" or "Closed today".
 *
 * @param array $space Space details.
 * @param bool  $hours Include today's hours before the chip.
 * @return string Inner HTML.
 */
function engawa_works_state_html( $space, $hours = true ) {
	$days = engawa_works_days();
	$now  = engawa_works_now( $space );
	switch ( $now['state'] ) {
		case 'open':
			$text = sprintf( /* translators: %s: hours. */ __( 'Today %s', 'engawa-works' ), engawa_works_day_text( $space, $now['day'] ) );
			$chip = __( 'Open now', 'engawa-works' );
			break;
		case 'later':
			$text = sprintf( /* translators: %s: hours. */ __( 'Today %s', 'engawa-works' ), engawa_works_day_text( $space, $now['day'] ) );
			/* translators: %s: opening time. */
			$chip = sprintf( __( 'Opens %s', 'engawa-works' ), engawa_works_opens( $space, $now['next'] ) );
			break;
		case 'after':
			$text = $now['next'] ? sprintf( /* translators: 1: weekday, 2: hours. */ __( 'Next %1$s %2$s', 'engawa-works' ), $days[ $now['next'] ][0], engawa_works_day_text( $space, $now['next'] ) ) : '';
			$chip = __( 'Closed now', 'engawa-works' );
			break;
		default:
			$text = $now['next'] ? sprintf( /* translators: 1: weekday, 2: opening time. */ __( 'Back %1$s from %2$s', 'engawa-works' ), $days[ $now['next'] ][0], engawa_works_opens( $space, $now['next'] ) ) : '';
			$chip = __( 'Closed today', 'engawa-works' );
	}
	$class = 'open' === $now['state'] ? 'is-open' : 'is-closed';
	$out   = $hours ? '<span class="ew-state__hours">' . esc_html( $text ) . '</span>' : '';
	return $out . '<span class="ew-state__chip ' . $class . '"><span class="ew-state__dot" aria-hidden="true"></span>' . esc_html( $chip ) . '</span>';
}

/**
 * The ticker's first item: "Open today 8:00–21:00" or "Closed now · back Mon 8:00".
 *
 * @param array $space Space details.
 * @return string Text.
 */
function engawa_works_today_text( $space ) {
	$days = engawa_works_days();
	$now  = engawa_works_now( $space );
	if ( 'open' === $now['state'] || 'later' === $now['state'] ) {
		/* translators: %s: hours. */
		return sprintf( __( 'Open today %s', 'engawa-works' ), engawa_works_day_text( $space, $now['day'] ) );
	}
	if ( ! $now['next'] ) {
		return __( 'Closed today', 'engawa-works' );
	}
	/* translators: 1: weekday, 2: opening time. */
	return sprintf( __( 'Closed now · back %1$s %2$s', 'engawa-works' ), $days[ $now['next'] ][0], engawa_works_opens( $space, $now['next'] ) );
}

/**
 * The line under the home title: "Open now, until 21:00 today." or, when the space is closed, the next opening.
 *
 * @param array $space Space details.
 * @return string Text.
 */
function engawa_works_opening_text( $space ) {
	$days = engawa_works_days();
	$now  = engawa_works_now( $space );
	$row  = $space['hours'][ $now['day'] ] ?? array();
	if ( 'open' === $now['state'] ) {
		/* translators: %s: closing time. */
		return sprintf( __( 'Open now, until %s today.', 'engawa-works' ), $row['close'] ?? '' );
	}
	if ( 'later' === $now['state'] ) {
		/* translators: 1: opening time, 2: closing time. */
		return sprintf( __( 'Open today from %1$s until %2$s.', 'engawa-works' ), $row['open'], $row['close'] );
	}
	if ( ! $now['next'] ) {
		return __( 'Closed for now.', 'engawa-works' );
	}
	/* translators: 1: weekday, 2: opening time. */
	return sprintf( __( 'Closed now. Open again %1$s from %2$s.', 'engawa-works' ), $days[ $now['next'] ][1], engawa_works_opens( $space, $now['next'] ) );
}

/**
 * The "Open in a map" address: the saved map link, or a map search for the address.
 *
 * @param array $space Space details.
 * @return string
 */
function engawa_works_map_url( $space ) {
	if ( ! empty( $space['map'] ) ) {
		return $space['map'];
	}
	return 'https://www.openstreetmap.org/search?query=' . rawurlencode( str_replace( "\n", ', ', $space['address'] ) );
}

/**
 * Renders engawa-works/space-info.
 *
 * @param array $attributes Block attributes ("show").
 * @return string
 */
function engawa_works_space_render( $attributes ) {
	$space = engawa_works_space();
	$show = $attributes['show'] ?? 'card';
	$tel  = 'tel:' . preg_replace( '/[^0-9+]/', '', $space['phone'] );
	$days = engawa_works_days();

	switch ( $show ) {
		case 'state':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'ew-state' ) ) . '>' . engawa_works_state_html( $space ) . '</p>';
		case 'chip':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'ew-state ew-state--chip' ) ) . '>' . engawa_works_state_html( $space, false ) . '</p>';
		case 'today':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'ew-today' ) ) . '>' . esc_html( engawa_works_today_text( $space ) ) . '</p>';
		case 'opening':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'ew-tonight' ) ) . '>' . esc_html( engawa_works_opening_text( $space ) ) . '</p>';
		case 'week':
			$today = engawa_works_now( $space )['day'];
			$html  = '<ul class="ew-week__list">';
			foreach ( $days as $day => $label ) {
				$open  = (bool) engawa_works_span( $space, $day );
				$attrs = 'class="ew-week__day' . ( $open ? '' : ' is-closed' ) . ( $day === $today ? ' is-today' : '' ) . '"' . ( $day === $today ? ' aria-current="date"' : '' );
				$html .= '<li ' . $attrs . '><span class="ew-week__name">' . esc_html( $label[1] ) . '</span><span class="ew-week__time">' . esc_html( engawa_works_day_text( $space, $day ) ) . '</span></li>';
			}
			$html .= '</ul>';
			if ( $space['note'] ) {
				$html .= '<p class="ew-week__note">' . esc_html( $space['note'] ) . '</p>';
			}
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'ew-week' ) ) . '>' . $html . '</div>';
		case 'phone-email':
			$links = array();
			if ( $space['phone'] ) {
				$links[] = '<a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $space['phone'] ) . '</a>';
			}
			if ( $space['email'] ) {
				$links[] = '<a class="ew-mail" href="' . esc_url( 'mailto:' . $space['email'] ) . '">' . esc_html( $space['email'] ) . '</a>';
			}
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'ew-reach' ) ) . '>' . implode( '<br>', $links ) . '</p>';
		case 'summary':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'ew-summary' ) ) . '>' . esc_html( engawa_works_week_summary( $space ) ) . '<br>' . esc_html( sprintf( /* translators: %s: closed day(s). */ __( 'Closed %s', 'engawa-works' ), $space['closed'] ) ) . '</p>';
		default:
			$rows = array(
				array( __( 'Address', 'engawa-works' ), nl2br( esc_html( $space['address'] ), false ), 'address' ),
				array( __( 'Getting here', 'engawa-works' ), esc_html( $space['station'] ), 'station' ),
				array( __( 'Hours', 'engawa-works' ), esc_html( engawa_works_week_summary( $space ) ), 'hours' ),
				array( __( 'Closed', 'engawa-works' ), esc_html( $space['closed'] ), 'closed' ),
				array( __( 'Telephone', 'engawa-works' ), '<a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $space['phone'] ) . '</a>', 'phone' ),
			);
			if ( $space['email'] ) {
				$rows[] = array( __( 'Email', 'engawa-works' ), '<a class="ew-mail" href="' . esc_url( 'mailto:' . $space['email'] ) . '">' . esc_html( $space['email'] ) . '</a>', 'email' );
			}
			$html = '<dl class="ew-card__list">';
			foreach ( $rows as $row ) {
				if ( '' === wp_strip_all_tags( $row[1] ) ) {
					continue;
				}
				$html .= '<div class="ew-card__row ew-card__row--' . $row[2] . '"><dt>' . esc_html( $row[0] ) . '</dt><dd>' . $row[1] . '</dd></div>';
			}
			$html .= '</dl><p class="ew-card__map"><a href="' . esc_url( engawa_works_map_url( $space ) ) . '" rel="noopener">' . esc_html__( 'Open in a map', 'engawa-works' ) . '<span aria-hidden="true"> &#8599;</span></a></p>';
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'ew-card' ) ) . '>' . $html . '</div>';
	}
}

/**
 * Registers the block (server-rendered; the editor previews it and links to the Space details screen).
 */
function engawa_works_space_block() {
	wp_register_script(
		'engawa-works-space-info',
		get_template_directory_uri() . '/assets/js/space-info.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-server-side-render', 'wp-i18n' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script( 'engawa-works-space-info', 'window.engawaWorksSpace = ' . wp_json_encode( array( 'settingsUrl' => admin_url( 'themes.php?page=engawa-works-space' ) ) ) . ';', 'before' );

	register_block_type(
		'engawa-works/space-info',
		array(
			'api_version'     => 3,
			'title'           => __( 'Space details', 'engawa-works' ),
			'description'     => __( 'Opening hours, today\'s "Open now" state, address, phone or email from Appearance → Space details. Edit them there once and every place updates.', 'engawa-works' ),
			'category'        => 'theme',
			'icon'            => 'clock',
			'keywords'        => array( 'opening hours', 'open now', 'address', 'phone' ),
			'attributes'      => array(
				'show' => array(
					'type'    => 'string',
					'enum'    => array( 'card', 'state', 'chip', 'today', 'opening', 'week', 'summary', 'phone-email' ),
					'default' => 'card',
				),
			),
			'supports'        => array(
				'html'            => false,
				'customClassName' => false,
				'reusable'        => false,
			),
			'editor_script'   => 'engawa-works-space-info',
			'render_callback' => 'engawa_works_space_render',
		)
	);
}
add_action( 'init', 'engawa_works_space_block' );

/**
 * The Space details setting.
 */
function engawa_works_space_settings() {
	register_setting(
		'engawa_works_space',
		'engawa_works_space',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'engawa_works_space_sanitize',
		)
	);
}
add_action( 'init', 'engawa_works_space_settings' );

/**
 * Lets anyone who may edit the site's design (not only administrators) save the screen.
 */
function engawa_works_space_capability() {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_engawa_works_space', 'engawa_works_space_capability' );

/**
 * Adds Appearance → Space details.
 */
function engawa_works_space_menu() {
	add_theme_page( __( 'Space details', 'engawa-works' ), __( 'Space details', 'engawa-works' ), 'edit_theme_options', 'engawa-works-space', 'engawa_works_space_page' );
}
add_action( 'admin_menu', 'engawa_works_space_menu' );

/**
 * Prints the Space details form.
 */
function engawa_works_space_page() {
	$space = engawa_works_space();
	$name = 'engawa_works_space';
	$text = array(
		'closed'  => __( 'Closed day (as written)', 'engawa-works' ),
		'note'    => __( 'Note under the hours', 'engawa-works' ),
		'station' => __( 'Getting here (station, walk)', 'engawa-works' ),
		'phone'   => __( 'Telephone', 'engawa-works' ),
		'email'   => __( 'Email', 'engawa-works' ),
		'map'     => __( 'Map link (optional)', 'engawa-works' ),
	);
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Space details', 'engawa-works' ); ?></h1>
		<?php settings_errors(); ?>
		<p><?php esc_html_e( 'Your opening hours, closed day, address, telephone and email. They appear in the header\'s utility strip (today\'s hours), the footer ticker and address card, on the home page and on the Plans, Tour booking and Contact pages: change them here once and every place updates. "Now" follows the timezone in Settings → General.', 'engawa-works' ); ?></p>
		<form method="post" action="options.php">
			<?php settings_fields( 'engawa_works_space' ); ?>
			<h2><?php esc_html_e( 'Opening hours', 'engawa-works' ); ?></h2>
			<p class="description"><?php esc_html_e( 'For example 8:00 and 21:00. Leave both empty on a closed day. A closing time after midnight can be written as 25:00 or 1:00.', 'engawa-works' ); ?></p>
			<table class="widefat striped" style="max-width:32rem">
				<thead><tr><th scope="col"><?php esc_html_e( 'Day', 'engawa-works' ); ?></th><th scope="col"><?php esc_html_e( 'Opens', 'engawa-works' ); ?></th><th scope="col"><?php esc_html_e( 'Closes', 'engawa-works' ); ?></th></tr></thead>
				<tbody>
					<?php foreach ( engawa_works_days() as $day => $label ) : ?>
						<tr>
							<th scope="row"><?php echo esc_html( $label[1] ); ?></th>
							<?php foreach ( array( 'open', 'close' ) as $edge ) : ?>
								<td><input type="text" style="width:6rem" name="<?php echo esc_attr( "{$name}[hours][{$day}][{$edge}]" ); ?>" value="<?php echo esc_attr( $space['hours'][ $day ][ $edge ] ?? '' ); ?>" aria-label="<?php echo esc_attr( $label[1] . ' ' . ( 'open' === $edge ? __( 'opens', 'engawa-works' ) : __( 'closes', 'engawa-works' ) ) ); ?>"></td>
							<?php endforeach; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<table class="form-table" role="presentation">
				<?php foreach ( $text as $key => $label ) : ?>
					<tr>
						<th scope="row"><label for="ew-space-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label></th>
						<td><input type="<?php echo 'email' === $key ? 'email' : ( 'map' === $key ? 'url' : 'text' ); ?>" class="large-text" id="ew-space-<?php echo esc_attr( $key ); ?>" name="<?php echo esc_attr( "{$name}[{$key}]" ); ?>" value="<?php echo esc_attr( $space[ $key ] ); ?>"></td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th scope="row"><label for="ew-space-address"><?php esc_html_e( 'Address', 'engawa-works' ); ?></label></th>
					<td><textarea class="large-text" rows="3" id="ew-space-address" name="<?php echo esc_attr( "{$name}[address]" ); ?>"><?php echo esc_textarea( $space['address'] ); ?></textarea></td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}
