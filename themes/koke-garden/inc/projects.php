<?php
/**
 * Koke Garden: the six garden projects, their line-drawn plan sketches, the project mosaic and the project pages.
 *
 * These helpers only build block markup for the patterns. The demo import expands the patterns into the Projects,
 * Home and project pages, so after the import every word and photo lives in the page itself and is edited in the
 * page editor; nothing here is read again for an existing page.
 *
 * @package koke-garden
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Koke_Garden_Projects' ) ) {

	/**
	 * Project data and markup builders.
	 */
	final class Koke_Garden_Projects {

		/** The six projects, in the order of the Projects index and the next-garden links. */
		public static function all() {
			return array(
				'kura-courtyard'    => array(
					'name'    => 'Kura Courtyard',
					'type'    => 'Private courtyard',
					'place'   => 'Kanazawa',
					'year'    => '2025',
					'photo'   => 'project-courtyard',
					'alt'     => 'A small walled courtyard with a carpet of moss, three grey stones and raked gravel beside a timber veranda',
					'lead'    => 'A walled courtyard behind an old merchant house, seen from three rooms at once.',
					'brief'   => 'The family wanted something to look at from the tatami room in every season, that two people in their seventies could keep without kneeling for an afternoon. No lawn, no flower beds, nothing that asks to be cut every week.',
					'site'    => 'Nine by six metres, walled on three sides, shaded until eleven and wet after every rain. The old garden had sunk into clay; we lifted it by twenty centimetres on a bed of crushed stone so the moss could breathe.',
					'plants'  => array( 'Polytrichum moss on the shaded side, sugi moss in the open', 'One Japanese maple, kept low over the veranda', 'Two dwarf azaleas, clipped once after flowering' ),
					'stone'   => array( 'Three local granite stones from the same quarry seam', 'Crushed granite gravel, raked in straight lines from the veranda', 'An old well cap reused as the stepping stone' ),
					'care'    => 'Four seasons plan: moss patched in spring, leaves cleared by hand in autumn, the maple pruned in February. The gravel is raked weekly by the family with a rake we made for them.',
					'details' => array(
						array( 'moss-closeup', 'Sugi moss along the shaded wall, six months after planting', 'Close-up of soft green sugi moss with small stems catching the light' ),
						array( 'stone-detail', 'The largest of the three stones, set a third into the ground', 'A grey granite stone half sunk in moss with raked gravel at its edge' ),
					),
					'plan'    => array(
						'stones' => array( array( 70, 72, 16 ), array( 104, 96, 10 ), array( 168, 62, 13 ) ),
						'moss'   => array( 64, 140, 58, 22 ),
						'steps'  => array( array( 200, 160 ), array( 186, 140 ), array( 172, 122 ), array( 154, 108 ) ),
					),
				),
				'hoshi-tea-garden'  => array(
					'name'    => 'Hoshi Tea Garden',
					'type'    => 'Tea garden',
					'place'   => 'Uji',
					'year'    => '2024',
					'photo'   => 'project-tea-garden',
					'alt'     => 'A narrow moss path with stepping stones leading to a small wooden tea house under maples',
					'lead'    => 'A dewy path from the gate to a four-and-a-half mat tea room, walked slowly.',
					'brief'   => 'A tea teacher asked for the path to her new tea room to feel longer than it is. Guests should leave the street behind in twelve steps, wash their hands at a stone basin and arrive quiet.',
					'site'    => 'A strip of garden twenty-two metres long and four wide between the house and a neighbour\'s wall. Morning sun only, and a slope of half a metre that we turned into two low terraces.',
					'plants'  => array( 'Sugi moss and Polytrichum moss on both sides of the path', 'Three Japanese maples and one winter camellia', 'Ferns under the basin, where the water splashes' ),
					'stone'   => array( 'Twelve river stones for the steps, each a little smaller than the last', 'A carved granite water basin and its flat kneeling stone', 'Gravel at the gate only, raked before each tea gathering' ),
					'care'    => 'Full keeping plan: a gardener comes every month and the evening before each tea gathering to water the moss and clear the path, so it looks freshly sprinkled when guests arrive.',
					'details' => array(
						array( 'gravel-rake', 'Gravel at the gate, raked before each gathering', 'Fine pale gravel raked in parallel lines with the teeth marks of a wooden rake' ),
						array( 'seasonal-autumn', 'The maples over the basin in late November', 'Red and amber maple leaves resting on dark green moss' ),
					),
					'plan'    => array(
						'stones' => array( array( 180, 66, 14 ) ),
						'moss'   => array( 90, 60, 70, 34 ),
						'steps'  => array( array( 24, 150 ), array( 46, 138 ), array( 70, 128 ), array( 94, 120 ), array( 118, 114 ), array( 142, 104 ), array( 160, 90 ) ),
					),
				),
				'sekimon-entrance'  => array(
					'name'    => 'Sekimon Entrance Garden',
					'type'    => 'Entrance garden',
					'place'   => 'Kamakura',
					'year'    => '2026',
					'photo'   => 'project-entry-gate',
					'alt'     => 'A wooden gate opening onto a stone path between moss and low clipped shrubs',
					'lead'    => 'Seven metres between the street and the front door, and one turn in the path.',
					'brief'   => 'A young couple bought a house whose front door faced the street directly. They wanted a little privacy and a moment of garden every time they came home, without losing the parking space.',
					'site'    => 'A gravel forecourt facing south, sunny and dry, with a cedar fence and an old wooden gate we kept. Car tyres on one side, so the path had to be stone set in mortar, not loose.',
					'plants'  => array( 'Drought-tolerant sugi moss in the shade of the fence', 'A clipped Japanese holly to hide the door from the gate', 'One small Japanese maple at the turn of the path' ),
					'stone'   => array( 'Local granite slabs, split by hand and laid with a turn', 'River stones as a drip edge under the eaves', 'Crushed granite around the slabs, raked weekly' ),
					'care'    => 'Moss keeping plan: two visits a year for weeding and moss repair, and a watering timer on the shaded side during the rainy-season gaps of July.',
					'details' => array(
						array( 'stone-detail', 'Split granite slab at the turn of the path', 'Close view of a weathered grey granite slab bordered by moss' ),
						array( 'seasonal-spring', 'The maple at the turn in April', 'Fresh pale green maple leaves over moss in soft spring light' ),
					),
					'plan'    => array(
						'stones' => array( array( 54, 54, 12 ), array( 190, 128, 11 ) ),
						'moss'   => array( 180, 48, 46, 26 ),
						'steps'  => array( array( 120, 166 ), array( 120, 144 ), array( 128, 122 ), array( 146, 104 ), array( 166, 90 ) ),
					),
				),
				'sora-rooftop'      => array(
					'name'    => 'Sora Rooftop Garden',
					'type'    => 'Rooftop garden',
					'place'   => 'Tokyo',
					'year'    => '2025',
					'photo'   => 'project-rooftop',
					'alt'     => 'A rooftop garden of raked gravel, low moss mounds and a few stones above a quiet city skyline',
					'lead'    => 'A dry garden on the fifth floor, light enough for the roof and calm enough for the office below.',
					'brief'   => 'A small architecture office wanted somewhere to step out between drawings. The roof could carry only a hundred and twenty kilograms per square metre, and nothing could blow away in a typhoon.',
					'site'    => 'Eleven by eight metres of flat roof, full sun, strong wind. We used lightweight soil in shallow trays, stones chosen for their shape rather than size, and gravel held in a raised edge.',
					'plants'  => array( 'Sun-tolerant moss on low mounds, misted by a drip line', 'Dwarf mondo grass along the parapet', 'One multi-stem Japanese maple in a deep planter' ),
					'stone'   => array( 'Five flat river stones, the largest only sixty kilograms', 'Light crushed granite gravel raked into waves', 'Granite setts for the path to the bench' ),
					'care'    => 'Four seasons plan plus a check after every typhoon warning: the gravel is re-raked, the moss misted in summer and the maple tied in before the autumn storms.',
					'details' => array(
						array( 'gravel-rake', 'Gravel raked into slow waves around the stones', 'Raked pale gravel making wave lines around a dark stone' ),
						array( 'moss-closeup', 'Moss mound beside the drip line', 'Close-up of a rounded green moss mound on dark soil' ),
					),
					'plan'    => array(
						'stones' => array( array( 66, 64, 11 ), array( 92, 80, 7 ), array( 160, 110, 14 ), array( 186, 54, 8 ) ),
						'moss'   => array( 64, 136, 40, 18 ),
						'steps'  => array( array( 214, 162 ), array( 206, 142 ), array( 214, 122 ) ),
					),
				),
				'kawabe-riverside'  => array(
					'name'    => 'Kawabe Riverside Garden',
					'type'    => 'Riverside garden',
					'place'   => 'Matsumoto',
					'year'    => '2023',
					'photo'   => 'project-riverside',
					'alt'     => 'A garden of mossy banks and river stones running down to a slow stream under trees',
					'lead'    => 'A garden that lets the river in twice a year and looks better for it.',
					'brief'   => 'A guesthouse beside a mountain river lost its lawn to a flood. The owners wanted a garden that could be under water for a day in the rainy season and recover by itself.',
					'site'    => 'A bank of thirty metres falling two metres to the water, cool and damp, with old cedars on the far side. We shaped three shelves with river stones taken from the same bed.',
					'plants'  => array( 'Polytrichum moss on the upper shelf, wet-loving mosses below', 'Japanese maples and a row of hydrangeas on the top terrace', 'Native sedges at the water line' ),
					'stone'   => array( 'River stones from the same riverbed, set in their old direction', 'A bank of larger boulders to slow flood water', 'Granite steps down to a flat stone at the water' ),
					'care'    => 'Full keeping plan: monthly visits, plus a visit within a week of every flood to reset stones, wash silt from the moss and patch what the river took.',
					'details' => array(
						array( 'seasonal-autumn', 'Maple leaves caught on the moss shelf in November', 'Autumn maple leaves scattered over a mossy bank' ),
						array( 'stone-detail', 'A river stone reset after the June flood', 'A smooth grey river stone surrounded by fresh moss' ),
					),
					'plan'    => array(
						'stones' => array( array( 60, 120, 12 ), array( 98, 140, 9 ), array( 150, 128, 13 ), array( 196, 146, 10 ) ),
						'moss'   => array( 110, 52, 84, 26 ),
						'steps'  => array( array( 30, 40 ), array( 48, 58 ), array( 64, 78 ), array( 74, 100 ) ),
					),
				),
				'ishidatami-walk'   => array(
					'name'    => 'Ishidatami Stone Walk',
					'type'    => 'Garden path',
					'place'   => 'Takayama',
					'year'    => '2024',
					'photo'   => 'stone-detail',
					'alt'     => 'Old granite paving stones set in moss, worn smooth by years of footsteps',
					'lead'    => 'Forty metres of old paving, lifted, sorted and laid again in moss.',
					'brief'   => 'An inn had a stone walk from its gate to the bath house that had heaved and cracked. They wanted it safe for guests in wooden sandals, and still looking a hundred years old.',
					'site'    => 'A long, gently curving walk under cedars, frosty for three months of the year. We lifted every stone, numbered it, laid a frost-proof bed of crushed stone and put each one back in its place.',
					'plants'  => array( 'Sugi moss in the joints between stones', 'Polytrichum moss on the banks beside the walk', 'Snow camellias at the bath-house end' ),
					'stone'   => array( 'The inn\'s own granite paving, three hundred and twelve stones', 'New granite only where an old stone had split', 'Pea gravel along the drainage edge' ),
					'care'    => 'Moss keeping plan, with a winter visit to sweep the walk and wrap the camellias in straw before the first snow.',
					'details' => array(
						array( 'moss-closeup', 'Moss growing back into the joints after one summer', 'Bright green moss filling the gaps between grey stones' ),
						array( 'seasonal-spring', 'The walk in May, when the cedar shade is softest', 'Spring sunlight falling through trees onto a mossy stone path' ),
					),
					'plan'    => array(
						'stones' => array( array( 186, 50, 9 ) ),
						'moss'   => array( 60, 54, 46, 24 ),
						'steps'  => array( array( 20, 160 ), array( 44, 150 ), array( 70, 138 ), array( 96, 124 ), array( 120, 108 ), array( 140, 90 ), array( 156, 72 ), array( 166, 52 ) ),
					),
				),
			);
		}

		/** Theme image URL. */
		private static function img( $name ) {
			return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.jpg' ) );
		}

		/** One project, or an empty array. */
		public static function get( $slug ) {
			$all = self::all();
			return isset( $all[ $slug ] ) ? $all[ $slug ] : array();
		}

		/** "Private courtyard · Kanazawa · 2025". */
		public static function meta( array $p ) {
			return esc_html( $p['type'] ) . ' &#183; ' . esc_html( $p['place'] ) . ' &#183; ' . esc_html( $p['year'] );
		}

		/**
		 * The plan sketch: raked gravel lines, rings around each stone, a patch of moss and the stepping-stone path.
		 * Lines are drawn in currentColor so the sketch takes the colour of the card it sits on.
		 *
		 * @param string $slug Project slug.
		 * @return string SVG markup.
		 */
		public static function plan_svg( $slug ) {
			$p = self::get( $slug );
			if ( ! $p ) {
				return '';
			}
			$d   = $p['plan'];
			$svg = '<svg class="kg-sketch" viewBox="0 0 240 180" role="img" aria-label="' . esc_attr( 'Plan sketch of ' . $p['name'] . ': stones, raked gravel, moss and the path' ) . '">';
			$svg .= '<rect class="kg-sketch__frame" x="2" y="2" width="236" height="176"/>';
			for ( $y = 16; $y <= 166; $y += 10 ) {
				$svg .= '<path class="kg-sketch__rake" d="M8 ' . $y . ' C 64 ' . ( $y - 3 ) . ' 124 ' . ( $y + 3 ) . ' 232 ' . $y . '"/>';
			}
			list( $mx, $my, $mrx, $mry ) = $d['moss'];
			$svg .= '<ellipse class="kg-sketch__moss" cx="' . $mx . '" cy="' . $my . '" rx="' . $mrx . '" ry="' . $mry . '"/>';
			foreach ( $d['stones'] as $s ) {
				list( $x, $y, $r ) = $s;
				$svg .= '<circle class="kg-sketch__clear" cx="' . $x . '" cy="' . $y . '" r="' . ( $r + 15 ) . '"/>';
				$svg .= '<circle class="kg-sketch__ring" cx="' . $x . '" cy="' . $y . '" r="' . ( $r + 14 ) . '"/>';
				$svg .= '<circle class="kg-sketch__ring" cx="' . $x . '" cy="' . $y . '" r="' . ( $r + 7 ) . '"/>';
				$svg .= '<circle class="kg-sketch__stone" cx="' . $x . '" cy="' . $y . '" r="' . $r . '"/>';
			}
			foreach ( $d['steps'] as $s ) {
				$svg .= '<ellipse class="kg-sketch__step" cx="' . $s[0] . '" cy="' . $s[1] . '" rx="7" ry="4.5"/>';
			}
			return $svg . '</svg>';
		}

		/** Block helpers (markup exactly as the editor saves it). */
		private static function p( $html, $class = '' ) {
			if ( '' === $class ) {
				return "<!-- wp:paragraph -->\n<p>" . $html . "</p>\n<!-- /wp:paragraph -->";
			}
			return '<!-- wp:paragraph {"className":"' . $class . '"} -->' . "\n" . '<p class="' . $class . '">' . $html . "</p>\n<!-- /wp:paragraph -->";
		}

		private static function h( $level, $html, $class ) {
			$attrs = 2 === $level ? '{"className":"' . $class . '"}' : '{"level":' . $level . ',"className":"' . $class . '"}';
			return '<!-- wp:heading ' . $attrs . ' -->' . "\n" . '<h' . $level . ' class="wp-block-heading ' . $class . '">' . $html . '</h' . $level . ">\n<!-- /wp:heading -->";
		}

		private static function group( $class, array $inner, $align = '' ) {
			$a = $align ? '"align":"' . $align . '",' : '';
			$c = $align ? 'wp-block-group align' . $align . ' ' . $class : 'wp-block-group ' . $class;
			return '<!-- wp:group {' . $a . '"className":"' . $class . '","layout":{"type":"default"}} -->' . "\n" . '<div class="' . $c . '">' . implode( "\n\n", $inner ) . "</div>\n<!-- /wp:group -->";
		}

		private static function section( $class, array $inner ) {
			return '<!-- wp:group {"tagName":"section","align":"full","className":"' . $class . '","layout":{"type":"constrained"}} -->' . "\n" . '<section class="wp-block-group alignfull ' . $class . '">' . implode( "\n\n", $inner ) . "</section>\n<!-- /wp:group -->";
		}

		private static function html( $markup ) {
			return "<!-- wp:html -->\n" . $markup . "\n<!-- /wp:html -->";
		}

		private static function image( $name, $alt, $class, $caption = '', $href = '' ) {
			$attrs = '{"sizeSlug":"large"' . ( $href ? ',"linkDestination":"custom"' : '' ) . ',"className":"' . $class . '"}';
			$img   = '<img src="' . self::img( $name ) . '" alt="' . esc_attr( $alt ) . '"/>';
			if ( $href ) {
				$img = '<a href="' . $href . '">' . $img . '</a>';
			}
			$cap = $caption ? '<figcaption class="wp-element-caption">' . $caption . '</figcaption>' : '';
			return '<!-- wp:image ' . $attrs . ' -->' . "\n" . '<figure class="wp-block-image size-large ' . $class . '">' . $img . $cap . "</figure>\n<!-- /wp:image -->";
		}

		private static function stones( array $items ) {
			$li = array();
			foreach ( $items as $item ) {
				$li[] = "<!-- wp:list-item -->\n<li>" . esc_html( $item ) . "</li>\n<!-- /wp:list-item -->";
			}
			return '<!-- wp:list {"className":"is-style-stones"} -->' . "\n" . '<ul class="wp-block-list is-style-stones">' . implode( "\n\n", $li ) . "</ul>\n<!-- /wp:list -->";
		}

		/**
		 * One mosaic card: a photo card (shape: tall, portrait, wide, square) or a plain plan card (tone: moss, stone,
		 * gravel) carrying the line-drawn plan.
		 */
		private static function card( $slug, $kind, $variant ) {
			$p    = self::get( $slug );
			$href = '/projects/' . $slug . '/';
			$name = self::h( 3, '<a href="' . $href . '">' . esc_html( $p['name'] ) . '</a>', 'kg-card__name' );
			$meta = self::p( self::meta( $p ), 'kg-card__meta' );
			if ( 'photo' === $kind ) {
				return self::group( 'kg-card kg-card--photo kg-card--' . $variant, array( self::image( $p['photo'], $p['alt'], 'kg-card__media', '', $href ), $meta, $name ) );
			}
			return self::group( 'kg-card kg-card--plan kg-card--' . $variant, array( self::p( 'Plan &#8212; ' . esc_html( $p['type'] ), 'kg-card__label' ), self::html( self::plan_svg( $slug ) ), $name, $meta ) );
		}

		/** The project mosaic: three columns of cards with different heights, offset like stones in gravel. */
		public static function mosaic() {
			$cols = array(
				array( array( 'kura-courtyard', 'photo', 'tall' ), array( 'ishidatami-walk', 'plan', 'stone' ) ),
				array( array( 'sora-rooftop', 'plan', 'gravel' ), array( 'hoshi-tea-garden', 'photo', 'portrait' ) ),
				array( array( 'sekimon-entrance', 'photo', 'wide' ), array( 'kawabe-riverside', 'photo', 'square' ), array( 'kura-courtyard', 'plan', 'moss' ) ),
			);
			$out = array();
			foreach ( $cols as $i => $cards ) {
				$inner = array();
				foreach ( $cards as $c ) {
					$inner[] = self::card( $c[0], $c[1], $c[2] );
				}
				$out[] = self::group( 'kg-mosaic__col kg-mosaic__col--' . ( $i + 1 ), $inner );
			}
			return self::group( 'kg-mosaic', $out, 'wide' );
		}

		/** The Projects index: one hairline row per garden. */
		public static function index_list() {
			$rows = array();
			$n    = 0;
			foreach ( self::all() as $slug => $p ) {
				++$n;
				$rows[] = self::group(
					'kg-index__row',
					array(
						self::p( sprintf( '%02d', $n ), 'kg-index__no' ),
						self::h( 3, '<a href="/projects/' . $slug . '/">' . esc_html( $p['name'] ) . '</a>', 'kg-index__name' ),
						self::p( esc_html( $p['type'] ), 'kg-index__type' ),
						self::p( esc_html( $p['place'] ), 'kg-index__place' ),
						self::p( esc_html( $p['year'] ), 'kg-index__year' ),
					)
				);
			}
			return self::group( 'kg-index', $rows, 'wide' );
		}

		/** A whole project page: brief, site, plants and stone, plan sketch, care plan, photos and the next garden. */
		public static function page( $slug ) {
			$p = self::get( $slug );
			if ( ! $p ) {
				return '';
			}
			$keys = array_keys( self::all() );
			$next = $keys[ ( array_search( $slug, $keys, true ) + 1 ) % count( $keys ) ];
			$np   = self::get( $next );

			$head = self::section(
				'kg-section kg-pagehead-wrap',
				array(
					self::group(
						'kg-pagehead',
						array(
							self::p( '<a href="/projects/">Projects</a> &#183; ' . self::meta( $p ), 'kg-eyebrow' ),
							self::h( 1, esc_html( $p['name'] ), 'kg-pagehead__title' ),
							self::p( esc_html( $p['lead'] ), 'is-style-lead' ),
						),
						'wide'
					),
					str_replace( 'wp-block-image size-large', 'wp-block-image alignwide size-large', str_replace( '{"sizeSlug"', '{"align":"wide","sizeSlug"', self::image( $p['photo'], $p['alt'], 'kg-figure', esc_html( $p['name'] ) . ', ' . esc_html( $p['place'] ) . ', ' . esc_html( $p['year'] ) ) ) ),
				)
			);

			$text = self::group(
				'kg-case__text',
				array(
					self::group( 'kg-case__part', array( self::p( 'Brief', 'kg-eyebrow' ), self::p( esc_html( $p['brief'] ) ) ) ),
					self::group( 'kg-case__part', array( self::p( 'Site', 'kg-eyebrow' ), self::p( esc_html( $p['site'] ) ) ) ),
					self::group( 'kg-case__part', array( self::p( 'Care plan', 'kg-eyebrow' ), self::p( esc_html( $p['care'] ) ), self::p( '<a href="/seasonal-care/">See the care calendar and plans</a>', 'kg-more' ) ) ),
				)
			);
			$aside = self::group(
				'kg-case__aside',
				array(
					self::group( 'kg-card kg-card--plan kg-card--gravel kg-case__plan', array( self::p( 'Plan sketch, not to scale', 'kg-card__label' ), self::html( self::plan_svg( $slug ) ) ) ),
					self::h( 2, 'Plants', 'kg-case__title' ),
					self::stones( $p['plants'] ),
					self::h( 2, 'Stone and gravel', 'kg-case__title' ),
					self::stones( $p['stone'] ),
				)
			);
			$body = self::section( 'kg-section', array( self::group( 'kg-case', array( $text, $aside ), 'wide' ) ) );

			$photos = array();
			foreach ( $p['details'] as $d ) {
				$photos[] = self::image( $d[0], $d[2], 'kg-photos__item', esc_html( $d[1] ) );
			}
			$gallery = self::section( 'kg-section kg-section--raked', array( self::group( 'kg-photos', $photos, 'wide' ) ) );

			$next_block = self::section(
				'kg-section kg-section--last',
				array(
					self::group(
						'kg-next',
						array(
							self::p( 'Next garden', 'kg-eyebrow' ),
							self::h( 2, '<a href="/projects/' . $next . '/">' . esc_html( $np['name'] ) . ' <span aria-hidden="true">&#8594;</span></a>', 'kg-next__title' ),
							self::p( self::meta( $np ), 'kg-card__meta' ),
						),
						'wide'
					),
				)
			);

			return implode( "\n\n", array( $head, $body, $gallery, $next_block ) );
		}
	}
}
