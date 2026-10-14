<?php
/**
 * Title: Atelier: milliner, address, hours, telephone and email (synced)
 * Slug: tsuba-millinery/foundry-info
 * Categories: tsuba-millinery
 * Keywords: atelier, milliner, hours, address, synced, shared
 * Viewport Width: 1440
 * Description: The milliner (Rin Tsubaki), the atelier address (2-11 Kasane-chō, Hoshikawa City), hours, telephone (0120-000-529) and email (hello@tsuba-millinery.example) as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer, Atelier and Contact change together.
 */

$tsuba_info = class_exists( 'Tsuba_Millinery_Info' ) ? 'Tsuba_Millinery_Info' : 'Tsuba_Millinery_Info';
if ( class_exists( $tsuba_info ) ) {
	echo $tsuba_info::markup( 'foundry' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
}
