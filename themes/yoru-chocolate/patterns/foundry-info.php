<?php
/**
 * Title: Shop: chocolatier, address, hours, telephone and email (synced)
 * Slug: yoru-chocolate/foundry-info
 * Categories: yoru-chocolate
 * Keywords: shop, hours, address, synced, shared
 * Viewport Width: 1440
 * Description: The chocolatier, the shop address, hours (Wed–Sun 12:00–19:00), telephone and email as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer, Origins and Contact change together.
 */

$yoru_info = class_exists( 'Yoru_Chocolate_Info' ) ? 'Yoru_Chocolate_Info' : 'Yoru_Chocolate_Info';
if ( class_exists( $yoru_info ) ) {
	echo $yoru_info::markup( 'foundry' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
}
