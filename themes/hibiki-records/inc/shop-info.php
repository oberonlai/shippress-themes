<?php
/**
 * Shop details: the opening hours of each weekday, the closed days, address, how to find the shop, phone, email and the
 * shop's social account kept in ONE place (Appearance → Shop details) and shown wherever the theme needs them by one
 * small server-rendered block, hibiki-records/shop-info: the Open-now chip in the header bar, the first item of the
 * footer's "now playing" ticker, the footer shop card, the line under the home intro, the shop details on the home page,
 * Listening booth, About and Contact all read the same option, so changing the hours once changes them everywhere.
 * Until the form is saved the sample shop's details below are used.
 *
 * "Now" is worked out on the server in the site's own timezone (Settings → General), never from the visitor's clock.
 *
 * @package hibiki-records
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Weekdays in order (Monday first), keyed mon … sun: array( short, long ).
 */
function hibiki_records_days() {
	return array(
		'mon' => array( __( 'Mon', 'hibiki-records' ), __( 'Monday', 'hibiki-records' ) ),
		'tue' => array( __( 'Tue', 'hibiki-records' ), __( 'Tuesday', 'hibiki-records' ) ),
		'wed' => array( __( 'Wed', 'hibiki-records' ), __( 'Wednesday', 'hibiki-records' ) ),
		'thu' => array( __( 'Thu', 'hibiki-records' ), __( 'Thursday', 'hibiki-records' ) ),
		'fri' => array( __( 'Fri', 'hibiki-records' ), __( 'Friday', 'hibiki-records' ) ),
		'sat' => array( __( 'Sat', 'hibiki-records' ), __( 'Saturday', 'hibiki-records' ) ),
		'sun' => array( __( 'Sun', 'hibiki-records' ), __( 'Sunday', 'hibiki-records' ) ),
	);
}

/**
 * The sample shop's details (used until the Shop details form is saved).
 */
function hibiki_records_shop_defaults() {
	$day = array(
		'open'  => '12:00',
		'close' => '20:00',
	);
	return array(
		'hours'   => array(
			'mon' => array(
				'open'  => '',
				'close' => '',
			),
			'tue' => array(
				'open'  => '',
				'close' => '',
			),
			'wed' => $day,
			'thu' => $day,
			'fri' => array(
				'open'  => '12:00',
				'close' => '21:00',
			),
			'sat' => array(
				'open'  => '11:00',
				'close' => '21:00',
			),
			'sun' => array(
				'open'  => '11:00',
				'close' => '18:00',
			),
		),
		'closed'  => 'Mondays and Tuesdays',
		'note'    => 'The listening booth closes an hour before the shop.',
		'address' => "3-14-2 Sakanoue-cho\nMinase City 610-0318",
		'station' => 'Five minutes on foot from Sakanoue Station, down the narrow lane behind the bakery',
		'phone'   => '075-555-0412',
		'email'   => 'shop@hibiki-records.example',
		'social'  => '@hibiki.records',
		'map'     => '',
	);
}

/**
 * The saved shop details, with the sample values filling anything missing.
 */
function hibiki_records_shop() {
	$saved = get_option( 'hibiki_records_shop' );
	return is_array( $saved ) ? array_merge( hibiki_records_shop_defaults(), hibiki_records_shop_sanitize( $saved ) ) : hibiki_records_shop_defaults();
}

/**
 * Cleans the Shop details form (and any later update_option call) into the stored shape.
 *
 * @param mixed $input Raw value.
 * @return array
 */
function hibiki_records_shop_sanitize( $input ) {
	$input = is_array( $input ) ? $input : array();
	$clean = array();
	if ( isset( $input['hours'] ) && is_array( $input['hours'] ) ) {
		$clean['hours'] = array();
		foreach ( array_keys( hibiki_records_days() ) as $day ) {
			$row                    = $input['hours'][ $day ] ?? array();
			$clean['hours'][ $day ] = array(
				'open'  => hibiki_records_clean_time( $row['open'] ?? '' ),
				'close' => hibiki_records_clean_time( $row['close'] ?? '' ),
			);
		}
	}
	foreach ( array( 'closed', 'note', 'station', 'phone', 'social' ) as $key ) {
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
function hibiki_records_clean_time( $time ) {
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
function hibiki_records_minutes( $time ) {
	$parts = explode( ':', $time );
	return (int) $parts[0] * 60 + (int) ( $parts[1] ?? 0 );
}

/**
 * One day's opening span in minutes, or null when closed. A closing time at or before the opening time runs past
 * midnight.
 *
 * @param array  $shop Shop details.
 * @param string $day  mon … sun.
 * @return int[]|null array( open, close ).
 */
function hibiki_records_span( $shop, $day ) {
	$row = $shop['hours'][ $day ] ?? array();
	if ( empty( $row['open'] ) || empty( $row['close'] ) ) {
		return null;
	}
	$open  = hibiki_records_minutes( $row['open'] );
	$close = hibiki_records_minutes( $row['close'] );
	if ( $close <= $open ) {
		$close += 1440;
	}
	return array( $open, $close );
}

/**
 * Where the shop stands right now, in the site's timezone.
 *
 * @param array $shop Shop details.
 * @return array state (open|later|closed-today|after), day, next (day key or ''), today's row.
 */
function hibiki_records_now( $shop ) {
	$keys = array_keys( hibiki_records_days() );
	$now  = new DateTimeImmutable( 'now', wp_timezone() );
	$day  = strtolower( $now->format( 'D' ) );
	$day  = in_array( $day, $keys, true ) ? $day : 'mon';
	$i    = array_search( $day, $keys, true );
	$min  = (int) $now->format( 'G' ) * 60 + (int) $now->format( 'i' );

	// Still open from yesterday (a closing time after midnight).
	$yesterday = $keys[ ( $i + 6 ) % 7 ];
	$ys        = hibiki_records_span( $shop, $yesterday );
	if ( $ys && $ys[1] > 1440 && $min < $ys[1] - 1440 ) {
		return array( 'state' => 'open', 'day' => $yesterday, 'next' => '' );
	}

	$span = hibiki_records_span( $shop, $day );
	if ( $span && $min < $span[0] ) {
		return array( 'state' => 'later', 'day' => $day, 'next' => $day );
	}
	if ( $span && $min < $span[1] ) {
		return array( 'state' => 'open', 'day' => $day, 'next' => '' );
	}
	$next = '';
	for ( $n = 1; $n <= 7; $n++ ) {
		$k = $keys[ ( $i + $n ) % 7 ];
		if ( hibiki_records_span( $shop, $k ) ) {
			$next = $k;
			break;
		}
	}
	return array( 'state' => $span ? 'after' : 'closed-today', 'day' => $day, 'next' => $next );
}

/**
 * The hours of one day as text, "15:00–24:00", or "Closed".
 *
 * @param array  $shop Shop details.
 * @param string $day  mon … sun.
 * @return string
 */
function hibiki_records_day_text( $shop, $day ) {
	$row = $shop['hours'][ $day ] ?? array();
	if ( empty( $row['open'] ) || empty( $row['close'] ) ) {
		return __( 'Closed', 'hibiki-records' );
	}
	return $row['open'] . '–' . $row['close'];
}

/**
 * The week in one or two lines, consecutive days with the same hours grouped: "Tue–Sat 15:00–24:00 · Sun 14:00–23:00".
 *
 * @param array $shop Shop details.
 * @return string
 */
function hibiki_records_week_summary( $shop ) {
	$days   = hibiki_records_days();
	$groups = array();
	foreach ( array_keys( $days ) as $day ) {
		$text = hibiki_records_span( $shop, $day ) ? hibiki_records_day_text( $shop, $day ) : '';
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
 * @param array  $shop Shop details.
 * @param string $day  mon … sun.
 * @return string
 */
function hibiki_records_opens( $shop, $day ) {
	return (string) ( $shop['hours'][ $day ]['open'] ?? '' );
}

/**
 * Today's hours and the chip for the utility strip: "Today 8:00–21:00" + "Open now", "Opens 8:00" or "Closed today".
 *
 * @param array $shop Shop details.
 * @param bool  $hours Include today's hours before the chip.
 * @return string Inner HTML.
 */
function hibiki_records_state_html( $shop, $hours = true ) {
	$days = hibiki_records_days();
	$now  = hibiki_records_now( $shop );
	switch ( $now['state'] ) {
		case 'open':
			$text = sprintf( /* translators: %s: hours. */ __( 'Today %s', 'hibiki-records' ), hibiki_records_day_text( $shop, $now['day'] ) );
			$chip = __( 'Open now', 'hibiki-records' );
			break;
		case 'later':
			$text = sprintf( /* translators: %s: hours. */ __( 'Today %s', 'hibiki-records' ), hibiki_records_day_text( $shop, $now['day'] ) );
			/* translators: %s: opening time. */
			$chip = sprintf( __( 'Opens %s', 'hibiki-records' ), hibiki_records_opens( $shop, $now['next'] ) );
			break;
		case 'after':
			$text = $now['next'] ? sprintf( /* translators: 1: weekday, 2: hours. */ __( 'Next %1$s %2$s', 'hibiki-records' ), $days[ $now['next'] ][0], hibiki_records_day_text( $shop, $now['next'] ) ) : '';
			$chip = __( 'Closed now', 'hibiki-records' );
			break;
		default:
			$text = $now['next'] ? sprintf( /* translators: 1: weekday, 2: opening time. */ __( 'Back %1$s from %2$s', 'hibiki-records' ), $days[ $now['next'] ][0], hibiki_records_opens( $shop, $now['next'] ) ) : '';
			$chip = __( 'Closed today', 'hibiki-records' );
	}
	$class = 'open' === $now['state'] ? 'is-open' : 'is-closed';
	$out   = $hours ? '<span class="hb-state__hours">' . esc_html( $text ) . '</span>' : '';
	return $out . '<span class="hb-state__chip ' . $class . '"><span class="hb-state__dot" aria-hidden="true"></span>' . esc_html( $chip ) . '</span>';
}

/**
 * The ticker's first item: "Open today 8:00–21:00" or "Closed now · back Mon 8:00".
 *
 * @param array $shop Shop details.
 * @return string Text.
 */
function hibiki_records_today_text( $shop ) {
	$days = hibiki_records_days();
	$now  = hibiki_records_now( $shop );
	if ( 'open' === $now['state'] || 'later' === $now['state'] ) {
		/* translators: %s: hours. */
		return sprintf( __( 'Open today %s', 'hibiki-records' ), hibiki_records_day_text( $shop, $now['day'] ) );
	}
	if ( ! $now['next'] ) {
		return __( 'Closed today', 'hibiki-records' );
	}
	/* translators: 1: weekday, 2: opening time. */
	return sprintf( __( 'Closed now · back %1$s %2$s', 'hibiki-records' ), $days[ $now['next'] ][0], hibiki_records_opens( $shop, $now['next'] ) );
}

/**
 * The line under the home title: "Open now, until 21:00 today." or, when the shop is closed, the next opening.
 *
 * @param array $shop Shop details.
 * @return string Text.
 */
function hibiki_records_opening_text( $shop ) {
	$days = hibiki_records_days();
	$now  = hibiki_records_now( $shop );
	$row  = $shop['hours'][ $now['day'] ] ?? array();
	if ( 'open' === $now['state'] ) {
		/* translators: %s: closing time. */
		return sprintf( __( 'Open now, until %s today.', 'hibiki-records' ), $row['close'] ?? '' );
	}
	if ( 'later' === $now['state'] ) {
		/* translators: 1: opening time, 2: closing time. */
		return sprintf( __( 'Open today from %1$s until %2$s.', 'hibiki-records' ), $row['open'], $row['close'] );
	}
	if ( ! $now['next'] ) {
		return __( 'Closed for now.', 'hibiki-records' );
	}
	/* translators: 1: weekday, 2: opening time. */
	return sprintf( __( 'Closed now. Open again %1$s from %2$s.', 'hibiki-records' ), $days[ $now['next'] ][1], hibiki_records_opens( $shop, $now['next'] ) );
}

/**
 * The "Open in a map" address: the saved map link, or a map search for the address.
 *
 * @param array $shop Shop details.
 * @return string
 */
function hibiki_records_map_url( $shop ) {
	if ( ! empty( $shop['map'] ) ) {
		return $shop['map'];
	}
	return 'https://www.openstreetmap.org/search?query=' . rawurlencode( str_replace( "\n", ', ', $shop['address'] ) );
}

/**
 * Renders hibiki-records/shop-info.
 *
 * @param array $attributes Block attributes ("show").
 * @return string
 */
function hibiki_records_shop_render( $attributes ) {
	$shop = hibiki_records_shop();
	$show = $attributes['show'] ?? 'card';
	$tel  = 'tel:' . preg_replace( '/[^0-9+]/', '', $shop['phone'] );
	$days = hibiki_records_days();

	switch ( $show ) {
		case 'state':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'hb-state' ) ) . '>' . hibiki_records_state_html( $shop ) . '</p>';
		case 'chip':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'hb-state hb-state--chip' ) ) . '>' . hibiki_records_state_html( $shop, false ) . '</p>';
		case 'today':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'hb-today' ) ) . '>' . esc_html( hibiki_records_today_text( $shop ) ) . '</p>';
		case 'opening':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'hb-tonight' ) ) . '>' . esc_html( hibiki_records_opening_text( $shop ) ) . '</p>';
		case 'week':
			$today = hibiki_records_now( $shop )['day'];
			$html  = '<ul class="hb-week__list">';
			foreach ( $days as $day => $label ) {
				$open  = (bool) hibiki_records_span( $shop, $day );
				$attrs = 'class="hb-week__day' . ( $open ? '' : ' is-closed' ) . ( $day === $today ? ' is-today' : '' ) . '"' . ( $day === $today ? ' aria-current="date"' : '' );
				$html .= '<li ' . $attrs . '><span class="hb-week__name">' . esc_html( $label[1] ) . '</span><span class="hb-week__time">' . esc_html( hibiki_records_day_text( $shop, $day ) ) . '</span></li>';
			}
			$html .= '</ul>';
			if ( $shop['note'] ) {
				$html .= '<p class="hb-week__note">' . esc_html( $shop['note'] ) . '</p>';
			}
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'hb-week' ) ) . '>' . $html . '</div>';
		case 'phone-email':
			$links = array();
			if ( $shop['phone'] ) {
				$links[] = '<a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $shop['phone'] ) . '</a>';
			}
			if ( $shop['email'] ) {
				$links[] = '<a class="hb-mail" href="' . esc_url( 'mailto:' . $shop['email'] ) . '">' . esc_html( $shop['email'] ) . '</a>';
			}
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'hb-reach' ) ) . '>' . implode( '<br>', $links ) . '</p>';
		case 'summary':
			return '<p ' . get_block_wrapper_attributes( array( 'class' => 'hb-summary' ) ) . '>' . esc_html( hibiki_records_week_summary( $shop ) ) . '<br>' . esc_html( sprintf( /* translators: %s: closed day(s). */ __( 'Closed %s', 'hibiki-records' ), $shop['closed'] ) ) . '</p>';
		default:
			$rows = array(
				array( __( 'Address', 'hibiki-records' ), nl2br( esc_html( $shop['address'] ), false ), 'address' ),
				array( __( 'Getting here', 'hibiki-records' ), esc_html( $shop['station'] ), 'station' ),
				array( __( 'Hours', 'hibiki-records' ), esc_html( hibiki_records_week_summary( $shop ) ), 'hours' ),
				array( __( 'Closed', 'hibiki-records' ), esc_html( $shop['closed'] ), 'closed' ),
				array( __( 'Telephone', 'hibiki-records' ), '<a href="' . esc_url( $tel, array( 'tel' ) ) . '">' . esc_html( $shop['phone'] ) . '</a>', 'phone' ),
			);
			if ( $shop['email'] ) {
				$rows[] = array( __( 'Email', 'hibiki-records' ), '<a class="hb-mail" href="' . esc_url( 'mailto:' . $shop['email'] ) . '">' . esc_html( $shop['email'] ) . '</a>', 'email' );
			}
			if ( $shop['social'] ) {
				$rows[] = array( __( 'Social', 'hibiki-records' ), esc_html( $shop['social'] ), 'social' );
			}
			$html = '<dl class="hb-card__list">';
			foreach ( $rows as $row ) {
				if ( '' === wp_strip_all_tags( $row[1] ) ) {
					continue;
				}
				$html .= '<div class="hb-card__row hb-card__row--' . $row[2] . '"><dt>' . esc_html( $row[0] ) . '</dt><dd>' . $row[1] . '</dd></div>';
			}
			$html .= '</dl><p class="hb-card__map"><a href="' . esc_url( hibiki_records_map_url( $shop ) ) . '" rel="noopener">' . esc_html__( 'Open in a map', 'hibiki-records' ) . '<span aria-hidden="true"> &#8599;</span></a></p>';
			return '<div ' . get_block_wrapper_attributes( array( 'class' => 'hb-shopcard' ) ) . '>' . $html . '</div>';
	}
}

/**
 * Registers the block (server-rendered; the editor previews it and links to the Shop details screen).
 */
function hibiki_records_shop_block() {
	wp_register_script(
		'hibiki-records-shop-info',
		get_template_directory_uri() . '/assets/js/shop-info.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-server-side-render', 'wp-i18n' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script( 'hibiki-records-shop-info', 'window.hibikiRecordsShop = ' . wp_json_encode( array( 'settingsUrl' => admin_url( 'themes.php?page=hibiki-records-shop' ) ) ) . ';', 'before' );

	register_block_type(
		'hibiki-records/shop-info',
		array(
			'api_version'     => 3,
			'title'           => __( 'Shop details', 'hibiki-records' ),
			'description'     => __( 'Opening hours, today\'s "Open now" state, address, phone or email from Appearance → Shop details. Edit them there once and every place updates.', 'hibiki-records' ),
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
			'editor_script'   => 'hibiki-records-shop-info',
			'render_callback' => 'hibiki_records_shop_render',
		)
	);
}
add_action( 'init', 'hibiki_records_shop_block' );

/**
 * The Shop details setting.
 */
function hibiki_records_shop_settings() {
	register_setting(
		'hibiki_records_shop',
		'hibiki_records_shop',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'hibiki_records_shop_sanitize',
		)
	);
}
add_action( 'init', 'hibiki_records_shop_settings' );

/**
 * Lets anyone who may edit the site's design (not only administrators) save the screen.
 */
function hibiki_records_shop_capability() {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_hibiki_records_shop', 'hibiki_records_shop_capability' );

/**
 * Adds Appearance → Shop details.
 */
function hibiki_records_shop_menu() {
	add_theme_page( __( 'Shop details', 'hibiki-records' ), __( 'Shop details', 'hibiki-records' ), 'edit_theme_options', 'hibiki-records-shop', 'hibiki_records_shop_page' );
}
add_action( 'admin_menu', 'hibiki_records_shop_menu' );

/**
 * Prints the Shop details form.
 */
function hibiki_records_shop_page() {
	$shop = hibiki_records_shop();
	$name = 'hibiki_records_shop';
	$text = array(
		'closed'  => __( 'Closed day (as written)', 'hibiki-records' ),
		'note'    => __( 'Note under the hours', 'hibiki-records' ),
		'station' => __( 'Finding the shop (station, walk)', 'hibiki-records' ),
		'phone'   => __( 'Telephone', 'hibiki-records' ),
		'email'   => __( 'Email', 'hibiki-records' ),
		'social'  => __( 'Social account (as written)', 'hibiki-records' ),
		'map'     => __( 'Map link (optional)', 'hibiki-records' ),
	);
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Shop details', 'hibiki-records' ); ?></h1>
		<?php settings_errors(); ?>
		<p><?php esc_html_e( 'Your opening hours, closed day, address, telephone and email. They appear in the header (the Open now chip), the footer ticker and shop card, on the home page and on the Listening booth, About and Contact pages: change them here once and every place updates. "Now" follows the timezone in Settings → General.', 'hibiki-records' ); ?></p>
		<form method="post" action="options.php">
			<?php settings_fields( 'hibiki_records_shop' ); ?>
			<h2><?php esc_html_e( 'Opening hours', 'hibiki-records' ); ?></h2>
			<p class="description"><?php esc_html_e( 'For example 12:00 and 20:00. Leave both empty on a closed day. A closing time after midnight can be written as 25:00 or 1:00.', 'hibiki-records' ); ?></p>
			<table class="widefat striped" style="max-width:32rem">
				<thead><tr><th scope="col"><?php esc_html_e( 'Day', 'hibiki-records' ); ?></th><th scope="col"><?php esc_html_e( 'Opens', 'hibiki-records' ); ?></th><th scope="col"><?php esc_html_e( 'Closes', 'hibiki-records' ); ?></th></tr></thead>
				<tbody>
					<?php foreach ( hibiki_records_days() as $day => $label ) : ?>
						<tr>
							<th scope="row"><?php echo esc_html( $label[1] ); ?></th>
							<?php foreach ( array( 'open', 'close' ) as $edge ) : ?>
								<td><input type="text" style="width:6rem" name="<?php echo esc_attr( "{$name}[hours][{$day}][{$edge}]" ); ?>" value="<?php echo esc_attr( $shop['hours'][ $day ][ $edge ] ?? '' ); ?>" aria-label="<?php echo esc_attr( $label[1] . ' ' . ( 'open' === $edge ? __( 'opens', 'hibiki-records' ) : __( 'closes', 'hibiki-records' ) ) ); ?>"></td>
							<?php endforeach; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<table class="form-table" role="presentation">
				<?php foreach ( $text as $key => $label ) : ?>
					<tr>
						<th scope="row"><label for="hb-shop-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label></th>
						<td><input type="<?php echo 'email' === $key ? 'email' : ( 'map' === $key ? 'url' : 'text' ); ?>" class="large-text" id="hb-shop-<?php echo esc_attr( $key ); ?>" name="<?php echo esc_attr( "{$name}[{$key}]" ); ?>" value="<?php echo esc_attr( $shop[ $key ] ); ?>"></td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th scope="row"><label for="hb-shop-address"><?php esc_html_e( 'Address', 'hibiki-records' ); ?></label></th>
					<td><textarea class="large-text" rows="3" id="hb-shop-address" name="<?php echo esc_attr( "{$name}[address]" ); ?>"><?php echo esc_textarea( $shop['address'] ); ?></textarea></td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}
