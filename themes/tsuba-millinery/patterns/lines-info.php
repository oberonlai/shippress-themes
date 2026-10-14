<?php
/**
 * Title: Shapes: shape, material, brim and season (synced)
 * Slug: tsuba-millinery/lines-info
 * Categories: tsuba-millinery
 * Keywords: shapes, material, brim, season, synced, shared
 * Viewport Width: 1440
 * Description: The house shapes as a ruled table (cloche, boater, bucket, wide brim) with material, brim and season, one synced pattern. Edit it once and the Atelier page changes everywhere.
 */

$tsuba_info = class_exists( 'Tsuba_Millinery_Info' ) ? 'Tsuba_Millinery_Info' : 'Tsuba_Millinery_Info';
if ( class_exists( $tsuba_info ) ) {
	echo $tsuba_info::markup( 'lines' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
}
