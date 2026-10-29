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
 * @return string Block markup.
 */
function saji_culinary_word( $word, $sub, $seal = '' ) {
	$mod = 'new' === $seal ? ' saji-word__w--new' : '';
	return '<!-- wp:group {"className":"saji-word sp-reveal sp-reveal--up","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group saji-word sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"saji-word__w' . $mod . '"} -->' . "\n"
		. '<h2 class="wp-block-heading saji-word__w' . $mod . '">' . esc_html( $word ) . '</h2>' . "\n"
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
