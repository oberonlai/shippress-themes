<?php
/**
 * Title: Box office hours, address, telephone and email (synced)
 * Slug: neiro-hall/hall-info
 * Categories: neiro-hall
 * Keywords: programme, prices, hours, address
 * Description: The hall details as one synced pattern, shown in the footer colophon and on the Venue, Tickets and Contact pages.
 */

echo Neiro_Hall_Info::markup( 'hall' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
