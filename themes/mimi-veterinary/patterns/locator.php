<?php
/**
 * Title: Locator card (synced)
 * Slug: mimi-veterinary/locator
 * Categories: mimi-veterinary
 * Keywords: map, address, hours, fees
 * Description: The paper locator card with the small street map, address, parking, nearest station, today's hours and the night-emergency partner, as one synced pattern used on the home and Contact pages.
 */

echo Mimi_Veterinary_Info::markup( 'locator' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
