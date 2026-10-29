<?php
/**
 * Saji Culinary School: small helpers that print the block markup shared by the patterns (section word with its seal,
 * round halftone portrait, oval arrow link, photo). Everything is plain core blocks; the look lives in style.css.
 *
 * @package saji-culinary
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * URL of a theme image.
 *
 * @param string $file File name in assets/images.
 * @return string
 */
function saji_culinary_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * The giant section word with its subtitle (T3). The seal is drawn by CSS on the heading's ::after, so it overlaps the
 * last letter and needs no extra markup; `new` swaps the spoon for the word "new" (Notices).
 *
 * @param string $word Section word (already translated).
 * @param string $sub  Subtitle under the word.
 * @param string $seal '' (spoon) or 'new'.
 * @param int    $level Heading level (1 on inner pages).
 * @return string Block markup.
 */
function saji_culinary_word( $word, $sub, $seal = '', $level = 2 ) {
	$mod = 'new' === $seal ? ' saji-word__w--new' : '';
	return '<!-- wp:group {"className":"saji-word sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group saji-word sp-reveal sp-reveal--up"><!-- wp:heading {"level":' . (int) $level . ',"className":"saji-word__w' . $mod . '"} -->' . "\n"
		. '<h' . (int) $level . ' class="wp-block-heading saji-word__w' . $mod . '">' . esc_html( $word ) . ( 'new' === $seal ? '<span class="saji-word__seal">new</span>' : '' ) . '</h' . (int) $level . '>' . "\n"
		. '<!-- /wp:heading -->' . "\n\n"
		. '<!-- wp:paragraph {"className":"saji-word__sub"} -->' . "\n"
		. '<p class="saji-word__sub">' . esc_html( $sub ) . '</p>' . "\n"
		. '<!-- /wp:paragraph --></div>' . "\n"
		. '<!-- /wp:group -->';
}

/**
 * The round halftone portrait (T3). The halftone is CSS over a normal photo.
 *
 * @param string $file Image file.
 * @param string $alt  Alt text.
 * @return string Block markup.
 */
function saji_culinary_halftone( $file, $alt ) {
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"saji-halftone"} -->' . "\n"
		. '<figure class="wp-block-image size-full saji-halftone"><img src="' . saji_culinary_img( $file ) . '" alt="' . esc_attr( $alt ) . '"/></figure>' . "\n"
		. '<!-- /wp:image -->';
}

/**
 * A paragraph with a link and the 50×24 oval outline arrow.
 *
 * @param string $href  Link target.
 * @param string $label Link text.
 * @param string $class Extra class.
 * @return string Block markup.
 */
function saji_culinary_go( $href, $label, $class = '' ) {
	$class = trim( 'saji-go ' . $class );
	return '<!-- wp:paragraph {"className":"' . esc_attr( $class ) . '"} -->' . "\n"
		. '<p class="' . esc_attr( $class ) . '"><a href="' . esc_url( $href ) . '">' . esc_html( $label ) . '<span class="saji-oval" aria-hidden="true">→</span></a></p>' . "\n"
		. '<!-- /wp:paragraph -->';
}

/**
 * Full-bleed photo band with parallax (sp-parallax; the image moves slower than the page).
 *
 * @param string $file Image file.
 * @param string $alt  Alt text.
 * @return string Block markup.
 */
function saji_culinary_band( $file, $alt ) {
	return '<!-- wp:cover {"url":"' . saji_culinary_img( $file ) . '","dimRatio":20,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":56,"minHeightUnit":"vh","isDark":true,"align":"full","className":"saji-band sp-parallax"} -->' . "\n"
		. '<div class="wp-block-cover alignfull saji-band sp-parallax" style="min-height:56vh"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr( $alt ) . '" src="' . saji_culinary_img( $file ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>' . "\n"
		. '<!-- /wp:cover -->';
}

/**
 * Content of one inner page in the content language (English when that language has no entry).
 *
 * @param string $slug Page slug.
 * @return array
 */
function saji_culinary_page_data( $slug ) {
	static $tables = array();
	foreach ( array_unique( array( saji_culinary_lang(), 'en' ) ) as $lang ) {
		if ( ! isset( $tables[ $lang ] ) ) {
			$file            = get_template_directory() . '/inc/i18n/pages-' . $lang . '.php';
			$tables[ $lang ] = is_readable( $file ) ? (array) include $file : array();
		}
		if ( isset( $tables[ $lang ][ $slug ] ) ) {
			return (array) $tables[ $lang ][ $slug ];
		}
	}
	return array();
}

/**
 * Block markup of an inner page: the T3 word (h1) with an optional halftone portrait, a lead, paragraphs, hairline rows or
 * a ledger table, and one oval link.
 *
 * @param string $slug Page slug.
 * @return string Block markup.
 */
function saji_culinary_inner( $slug ) {
	$d = saji_culinary_page_data( $slug );
	if ( ! $d ) {
		return '';
	}
	$o  = '<!-- wp:group {"tagName":"section","align":"full","className":"saji-sec saji-inner","layout":{"type":"constrained"}} -->' . "\n";
	$o .= '<section class="wp-block-group alignfull saji-sec saji-inner">';
	$o .= '<!-- wp:group {"align":"wide","className":"saji-t3 saji-t3--solo","layout":{"type":"default"}} -->' . "\n";
	$o .= '<div class="wp-block-group alignwide saji-t3 saji-t3--solo">' . saji_culinary_word( $d['word'], $d['sub'], '', 1 );
	if ( ! empty( $d['img'] ) ) {
		$o .= "\n\n" . saji_culinary_halftone( $d['img'], $d['alt'] );
	}
	$o .= '</div>' . "\n<!-- /wp:group -->\n\n";
	$o .= '<!-- wp:group {"align":"wide","className":"saji-inner__body","layout":{"type":"default"}} -->' . "\n";
	$o .= '<div class="wp-block-group alignwide saji-inner__body"><!-- wp:paragraph {"className":"saji-pull"} -->' . "\n" . '<p class="saji-pull">' . esc_html( $d['pull'] ) . '</p>' . "\n<!-- /wp:paragraph -->\n\n";
	foreach ( $d['paras'] as $p ) {
		$o .= '<!-- wp:paragraph -->' . "\n<p>" . esc_html( $p ) . "</p>\n<!-- /wp:paragraph -->\n\n";
	}
	if ( ! empty( $d['rows'] ) ) {
		$o .= '<!-- wp:group {"className":"saji-inner__rows","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group saji-inner__rows">';
		foreach ( $d['rows'] as $r ) {
			$anchor = ! empty( $r[4] ) ? $r[4] : '';
			$attr   = $anchor ? '{"anchor":"' . esc_attr( $anchor ) . '","className":"saji-row","layout":{"type":"default"}}' : '{"className":"saji-row","layout":{"type":"default"}}';
			$o     .= '<!-- wp:group ' . $attr . ' -->' . "\n" . '<div' . ( $anchor ? ' id="' . esc_attr( $anchor ) . '"' : '' ) . ' class="wp-block-group saji-row">';
			$o     .= '<!-- wp:paragraph {"className":"saji-row__name"} -->' . "\n" . '<p class="saji-row__name">' . esc_html( $r[0] ) . '</p>' . "\n<!-- /wp:paragraph -->\n\n";
			$o     .= '<!-- wp:paragraph {"className":"saji-row__station"} -->' . "\n" . '<p class="saji-row__station">' . esc_html( $r[1] ) . '</p>' . "\n<!-- /wp:paragraph -->\n\n";
			if ( '' !== $r[2] ) {
				$o .= '<!-- wp:paragraph {"className":"saji-row__since"} -->' . "\n" . '<p class="saji-row__since">' . esc_html( $r[2] ) . '</p>' . "\n<!-- /wp:paragraph -->\n\n";
			}
			if ( '' !== $r[3] ) {
				$o .= '<!-- wp:paragraph {"className":"saji-row__text"} -->' . "\n" . '<p class="saji-row__text">' . esc_html( $r[3] ) . '</p>' . "\n<!-- /wp:paragraph -->";
			}
			$o .= '</div>' . "\n<!-- /wp:group -->\n\n";
		}
		$o .= '</div>' . "\n<!-- /wp:group -->\n\n";
	}
	if ( ! empty( $d['table'] ) ) {
		$t    = $d['table'];
		$head = array_shift( $t );
		$o   .= '<!-- wp:table {"hasFixedLayout":true,"className":"saji-ledger"} -->' . "\n" . '<figure class="wp-block-table saji-ledger"><table class="has-fixed-layout"><thead><tr><th>' . esc_html( $head[0] ) . '</th><th>' . esc_html( $head[1] ) . '</th><th>' . esc_html( $head[2] ) . '</th></tr></thead><tbody>';
		foreach ( $t as $r ) {
			$o .= '<tr><td>' . esc_html( $r[0] ) . '</td><td>' . esc_html( $r[1] ) . '</td><td>' . esc_html( $r[2] ) . '</td></tr>';
		}
		$o .= '</tbody></table></figure>' . "\n<!-- /wp:table -->\n\n";
	}
	if ( ! empty( $d['band'] ) ) {
		// A full-bleed photo band with parallax splits the page; the copy sections continue in a second section.
		$o .= '</div>' . "\n<!-- /wp:group --></section>\n<!-- /wp:group -->\n\n" . saji_culinary_band( $d['band'][0], $d['band'][1] ) . "\n\n";
		$o .= '<!-- wp:group {"tagName":"section","align":"full","className":"saji-sec saji-inner saji-inner--cont","layout":{"type":"constrained"}} -->' . "\n" . '<section class="wp-block-group alignfull saji-sec saji-inner saji-inner--cont">';
		$o .= '<!-- wp:group {"align":"wide","className":"saji-inner__body","layout":{"type":"default"}} -->' . "\n" . '<div class="wp-block-group alignwide saji-inner__body">';
	}
	foreach ( (array) ( $d['sections'] ?? array() ) as $sec ) {
		$o .= '<!-- wp:heading {"level":2,"className":"saji-inner__h"} -->' . "\n" . '<h2 class="wp-block-heading saji-inner__h">' . esc_html( $sec[0] ) . '</h2>' . "\n<!-- /wp:heading -->\n\n";
		$o .= '<!-- wp:paragraph -->' . "\n<p>" . esc_html( $sec[1] ) . "</p>\n<!-- /wp:paragraph -->\n\n";
	}
	$o .= saji_culinary_go( $d['go'][0], $d['go'][1], '' ) . '</div>' . "\n<!-- /wp:group --></section>\n<!-- /wp:group -->";
	return $o;
}
