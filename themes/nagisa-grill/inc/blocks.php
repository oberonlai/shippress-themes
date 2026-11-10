<?php
/**
 * Nagisa Grill: small block-markup helpers for the inner-page patterns (photo head, section split, day rows,
 * photo duo scene, slate band, price table, people rows). Every helper returns serialized block markup.
 *
 * @package nagisa-grill
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Block comment opener with JSON attributes. */
function nagisa_grill_open( $name, $attrs = array() ) {
	$json = $attrs ? ' ' . wp_json_encode( $attrs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) : '';
	return '<!-- wp:' . $name . $json . ' -->';
}

/** Theme image URL. */
function nagisa_grill_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/** Group block (div unless a tag is given) with a class list. */
function nagisa_grill_group( $class, $inner, $tag = 'div', $align = '' ) {
	$attrs = array( 'className' => $class );
	if ( 'div' !== $tag ) {
		$attrs['tagName'] = $tag;
	}
	if ( $align ) {
		$attrs['align'] = $align;
	}
	return nagisa_grill_open( 'group', $attrs ) . "\n" . '<' . $tag . ' class="wp-block-group' . ( $align ? ' align' . $align : '' ) . ' ' . esc_attr( $class ) . '">' . $inner . '</' . $tag . '>' . "\n<!-- /wp:group -->\n\n";
}

/** Paragraph; $html is trusted markup (links allowed). */
function nagisa_grill_p( $html, $class = '' ) {
	$attrs = $class ? array( 'className' => $class ) : array();
	return nagisa_grill_open( 'paragraph', $attrs ) . "\n" . '<p' . ( $class ? ' class="' . esc_attr( $class ) . '"' : '' ) . '>' . wp_kses_post( $html ) . "</p>\n<!-- /wp:paragraph -->\n\n";
}

/** Heading. $size is a font-size slug or ''. */
function nagisa_grill_h( $level, $text, $class = '', $size = '' ) {
	$attrs = array();
	if ( 2 !== $level ) {
		$attrs['level'] = $level;
	}
	if ( $class ) {
		$attrs['className'] = $class;
	}
	if ( $size ) {
		$attrs['fontSize'] = $size;
	}
	$cls = 'wp-block-heading' . ( $class ? ' ' . $class : '' ) . ( $size ? ' has-' . $size . '-font-size' : '' );
	return nagisa_grill_open( 'heading', $attrs ) . "\n" . '<h' . $level . ' class="' . esc_attr( $cls ) . '">' . wp_kses_post( $text ) . '</h' . $level . ">\n<!-- /wp:heading -->\n\n";
}

/** Text link with the long thin arrow. */
function nagisa_grill_link( $href, $label ) {
	return nagisa_grill_p( '<a href="' . esc_url( $href ) . '">' . esc_html( $label ) . '</a>', 'ng-link' );
}

/** Pill button. $mailto fallbacks keep their class and href. */
function nagisa_grill_button( $href, $label, $class = '' ) {
	return nagisa_grill_open( 'buttons', $class ? array( 'className' => $class ) : array() ) . "\n" . '<div class="wp-block-buttons' . ( $class ? ' ' . esc_attr( $class ) : '' ) . '">'
		. "<!-- wp:button -->\n" . '<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $href ) . '">' . esc_html( $label ) . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n";
}

/** Tide mark plus a small caps label. */
function nagisa_grill_label( $text = '' ) {
	$inner = nagisa_grill_tide() . "\n\n" . ( $text ? nagisa_grill_p( esc_html( $text ), 'ng-label__t' ) : '' );
	return nagisa_grill_group( 'ng-label', $inner );
}

/** T1: photo head (dimmed film photo, parallax, title, hairline info bar with a fact in brackets). */
function nagisa_grill_head( $file, $alt, $title, $left, $fact, $title_block = '' ) {
	$url = nagisa_grill_img( $file );
	$out = nagisa_grill_open(
		'cover',
		array(
			'url'             => $url,
			'dimRatio'        => 35,
			'overlayColor'    => 'scene',
			'isUserOverlayColor' => true,
			'minHeight'       => 62,
			'minHeightUnit'   => 'vh',
			'contentPosition' => 'bottom left',
			'align'           => 'full',
			'className'       => 'ng-head sp-parallax',
			'tagName'         => 'section',
		)
	) . "\n";
	$out .= '<section class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left ng-head sp-parallax" style="min-height:62vh"><span aria-hidden="true" class="wp-block-cover__background has-scene-background-color has-background-dim-35 has-background-dim"></span>';
	$out .= '<img class="wp-block-cover__image-background" alt="' . esc_attr( $alt ) . '" src="' . $url . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container">';
	$out .= $title_block ? $title_block : nagisa_grill_h( 1, esc_html( $title ), 'ng-head__t', 'xx-large' );
	$info  = nagisa_grill_p( '<span class="ng-tick" aria-hidden="true"></span>' . esc_html( $left ), 'ng-infobar__l' );
	$info .= nagisa_grill_p( esc_html( $fact ), 'ng-infobar__boat' );
	$out  .= nagisa_grill_group( 'ng-infobar', $info );
	return $out . '</div></section>' . "\n<!-- /wp:cover -->\n\n";
}

/** Section split: tide + section word on the left, $right markup on the right. */
function nagisa_grill_split( $word, $right, $class = '', $tag = 'section' ) {
	$left   = nagisa_grill_label() . nagisa_grill_h( 2, esc_html( $word ), 'ng-word', 'x-large' );
	$inner  = nagisa_grill_group( 'ng-split__l', $left ) . nagisa_grill_group( 'ng-split__r', $right );
	return nagisa_grill_group( 'ng-sect ' . $class, nagisa_grill_group( 'ng-split', $inner ), $tag, 'full' );
}

/** Paragraphs from a list of plain strings. */
function nagisa_grill_paras( $list, $class = '' ) {
	$out = '';
	foreach ( $list as $text ) {
		$out .= nagisa_grill_p( esc_html( $text ), $class );
	}
	return $out;
}

/** Copy block: h3 heading and paragraphs (right column of a split). */
function nagisa_grill_copy( $heading, $paras ) {
	return nagisa_grill_h( 3, esc_html( $heading ), 'ng-copy-h' ) . nagisa_grill_paras( $paras );
}

/** Day rows: list of array( time, title, text ) with tide hairlines between them. */
function nagisa_grill_rows( $rows ) {
	$out = '';
	foreach ( $rows as $r ) {
		$body = nagisa_grill_h( 3, esc_html( $r[1] ) ) . nagisa_grill_p( esc_html( $r[2] ) );
		$out .= nagisa_grill_group( 'ng-row sp-reveal sp-reveal--up', nagisa_grill_p( esc_html( $r[0] ), 'ng-row__time' ) . nagisa_grill_group( 'ng-row__body', $body ) );
	}
	return nagisa_grill_group( 'ng-rows sp-stagger', $out );
}

/** Ruled statements (tide hairlines). */
function nagisa_grill_rules( $list ) {
	return nagisa_grill_group( 'ng-rules', nagisa_grill_paras( $list, 'ng-rule' ) );
}

/** People as text rows: array( name, role, line ). */
function nagisa_grill_people( $people ) {
	$out = '';
	foreach ( $people as $p ) {
		$who  = nagisa_grill_h( 3, esc_html( $p[0] ), 'ng-person__n' ) . nagisa_grill_p( esc_html( $p[1] ), 'ng-person__r' );
		$out .= nagisa_grill_group( 'ng-person sp-reveal sp-reveal--up', nagisa_grill_group( 'ng-person__who', $who ) . nagisa_grill_p( esc_html( $p[2] ), 'ng-person__l' ) );
	}
	return nagisa_grill_group( 'ng-people sp-stagger', $out );
}

/** Figure inside a duo cell. */
function nagisa_grill_fig( $file, $alt ) {
	return nagisa_grill_open( 'image', array( 'sizeSlug' => 'full', 'linkDestination' => 'none' ) ) . "\n" . '<figure class="wp-block-image size-full"><img src="' . nagisa_grill_img( $file ) . '" alt="' . esc_attr( $alt ) . '"/></figure>' . "\n<!-- /wp:image -->\n\n";
}

/** T3: near-black scene, label + heading, then the offset photo duo and copy. $s and $l are array( file, alt ). */
function nagisa_grill_scene( $label, $heading, $s, $l, $paras ) {
	$head = nagisa_grill_label( $label ) . nagisa_grill_h( 2, wp_kses_post( $heading ), 'ng-h-photo', 'x-large' );
	$duo  = nagisa_grill_group( 'ng-duo__s sp-parallax', nagisa_grill_fig( $s[0], $s[1] ) );
	$duo .= nagisa_grill_group( 'ng-duo__lw sp-reveal sp-reveal--mask', nagisa_grill_group( 'ng-duo__l sp-parallax', nagisa_grill_fig( $l[0], $l[1] ) ) );
	$duo .= nagisa_grill_group( 'ng-duo__copy', nagisa_grill_paras( $paras ) );
	return nagisa_grill_group( 'ng-scene', nagisa_grill_group( 'ng-scene__head', $head ) . nagisa_grill_group( 'ng-duo', $duo ), 'section', 'full' );
}

/** Slate band: label, light heading, paragraph, text link. */
function nagisa_grill_band( $label, $heading, $text, $href = '', $link = '' ) {
	$inner  = nagisa_grill_label( $label ) . nagisa_grill_h( 2, esc_html( $heading ), 'ng-h-photo', 'x-large' );
	$inner .= nagisa_grill_p( esc_html( $text ), 'ng-copy' );
	if ( $href ) {
		$inner .= nagisa_grill_link( $href, $link );
	}
	return nagisa_grill_group( 'ng-band', nagisa_grill_group( 'ng-band__col', $inner ), 'section', 'full' );
}

/** Photo panel for the menu band: array( file, alt, title, line ). */
function nagisa_grill_panel( $p ) {
	$url = nagisa_grill_img( $p[0] );
	$out = nagisa_grill_open( 'cover', array( 'url' => $url, 'dimRatio' => 35, 'overlayColor' => 'scene', 'isUserOverlayColor' => true, 'minHeight' => 520, 'className' => 'ng-panel sp-reveal sp-reveal--up' ) ) . "\n";
	$out .= '<div class="wp-block-cover ng-panel sp-reveal sp-reveal--up" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-scene-background-color has-background-dim-35 has-background-dim"></span>';
	$out .= '<img class="wp-block-cover__image-background" alt="' . esc_attr( $p[1] ) . '" src="' . $url . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container">';
	$out .= nagisa_grill_h( 3, esc_html( $p[2] ), 'ng-panel__t' ) . nagisa_grill_p( esc_html( $p[3] ), 'ng-panel__p' );
	return $out . '</div></div>' . "\n<!-- /wp:cover -->\n\n";
}

/** Slate band with three photo panels. */
function nagisa_grill_plates( $heading, $panels ) {
	$out = nagisa_grill_h( 2, esc_html( $heading ), 'ng-plates__h', 'x-large' );
	$all = '';
	foreach ( $panels as $p ) {
		$all .= nagisa_grill_panel( $p );
	}
	return nagisa_grill_group( 'ng-plates', $out . nagisa_grill_group( 'ng-panels sp-stagger', $all ), 'section', 'full' );
}

/** Price table: array( array( item, what, price ), ... ) with column heads $heads. */
function nagisa_grill_prices( $heads, $rows ) {
	$t  = nagisa_grill_open( 'table', array( 'className' => 'ng-price' ) ) . "\n" . '<figure class="wp-block-table ng-price"><table><thead><tr>';
	foreach ( $heads as $h ) {
		$t .= '<th>' . esc_html( $h ) . '</th>';
	}
	$t .= '</tr></thead><tbody>';
	foreach ( $rows as $r ) {
		$t .= '<tr><td data-label="' . esc_attr( $heads[0] ) . '">' . esc_html( $r[0] ) . '</td><td data-label="' . esc_attr( $heads[1] ) . '">' . esc_html( $r[1] ) . '</td><td class="ng-price__v">' . esc_html( $r[2] ) . '</td></tr>';
	}
	return $t . '</tbody></table></figure>' . "\n<!-- /wp:table -->\n\n";
}

/** A padded plain section (prose column, full width background). */
function nagisa_grill_section( $class, $inner ) {
	return nagisa_grill_group( 'ng-sect ' . $class, $inner, 'section', 'full' );
}
