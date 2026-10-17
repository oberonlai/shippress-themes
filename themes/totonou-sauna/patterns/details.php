<?php
/**
 * Title: Sauna details (synced)
 * Slug: totonou-sauna/details
 * Categories: totonou-sauna
 * Keywords: ekiden, relay race, running
 * Description: Opening hours, closed day, address, phone and email as one synced pattern used in the footer and on Reserve a seat.
 */

echo Totonou_Sauna_Info::markup( 'details' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
