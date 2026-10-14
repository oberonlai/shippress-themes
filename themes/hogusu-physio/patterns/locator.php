<?php
/**
 * Title: Locator card (synced)
 * Slug: hogusu-physio/locator
 * Categories: hogusu-physio
 * Keywords: map, address, hours, out of hours
 * Description: The paper locator card with the small street map, address, parking, nearest station, today's hours and the out-of-hours emergency department (Kayanomori Municipal Hospital), as one synced pattern used on the home and Contact pages.
 */

echo Hogusu_Physio_Info::markup( 'locator' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
