<?php
/**
 * Title: Origins: country, farm, cacao and notes (synced)
 * Slug: yoru-chocolate/lines-info
 * Categories: yoru-chocolate
 * Keywords: origins, cacao, tasting notes, synced, shared
 * Viewport Width: 1440
 * Description: The four origins as a ruled table (Tanzania 70%, Peru 66%, Vietnam 72%, Belize 75%), one synced pattern. Edit it once and Origins changes everywhere.
 */

$yoru_info = class_exists( 'Yoru_Chocolate_Info' ) ? 'Yoru_Chocolate_Info' : 'Yoru_Chocolate_Info';
if ( class_exists( $yoru_info ) ) {
	echo $yoru_info::markup( 'lines' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
}
