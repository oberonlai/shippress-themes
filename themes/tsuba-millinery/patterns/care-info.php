<?php
/**
 * Title: Fit, sizing and care note (synced)
 * Slug: tsuba-millinery/care-info
 * Categories: tsuba-millinery
 * Keywords: fit, sizing, head size, felt, straw, care, synced, shared
 * Viewport Width: 1440
 * Description: Sizes (Small 54–55 cm, Medium 56–57 cm, Large 58–59 cm), the sizing ribbon and care of felt and straw as one synced pattern. Edit it once and the home page, Fit & sizing and every product page change together.
 */

$tsuba_info = class_exists( 'Tsuba_Millinery_Info' ) ? 'Tsuba_Millinery_Info' : 'Tsuba_Millinery_Info';
if ( class_exists( $tsuba_info ) ) {
	echo $tsuba_info::markup( 'care' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
}
