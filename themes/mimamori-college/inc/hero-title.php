<?php
/**
 * Hero title: a space in front of the forced line break.
 *
 * Below 1100 px the stylesheet hides the <br> in the home hero title so the title can balance as one block. A hidden <br>
 * leaves no space between the two halves ("care,one"), and pages made by earlier versions store the title without one, so
 * the space is added when the heading renders. Latin text only: Chinese and Japanese have no spaces between words.
 *
 * @package mimamori-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @param string $content Rendered heading block.
 * @return string
 */
function mimamori_college_hero_title_space( $content ) {
	if ( false === strpos( $content, 'mc-hero__title' ) ) {
		return $content;
	}
	return preg_replace( '/([\x21-\x7E\x{00A0}-\x{024F}\x{2018}-\x{201F}])(<br\s*\/?>)/u', '$1 $2', $content );
}
add_filter( 'render_block_core/heading', 'mimamori_college_hero_title_space' );
