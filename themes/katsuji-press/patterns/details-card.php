<?php
/**
 * Title: Press details (synced)
 * Slug: katsuji-press/details-card
 * Categories: katsuji-press
 * Keywords: address, phone, hours
 * Description: Opening hours, address, phone and email as one synced pattern used in the footer and on the Contact page.
 */

echo Katsuji_Press_Info::markup( 'details' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
