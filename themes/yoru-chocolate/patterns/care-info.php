<?php
/**
 * Title: Gift boxes and shipping note (synced)
 * Slug: yoru-chocolate/care-info
 * Categories: yoru-chocolate
 * Keywords: gift boxes, shipping, warm weather, synced, shared
 * Viewport Width: 1440
 * Description: Keeping, gifting and shipping (with the warm-weather pause, 15 June to 15 September) as one synced pattern. Edit it once and the home page, Gift boxes and every product page change together.
 */

$yoru_info = class_exists( 'Yoru_Chocolate_Info' ) ? 'Yoru_Chocolate_Info' : 'Yoru_Chocolate_Info';
if ( class_exists( $yoru_info ) ) {
	echo $yoru_info::markup( 'care' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
}
