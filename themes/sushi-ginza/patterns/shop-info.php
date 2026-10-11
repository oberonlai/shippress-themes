<?php
/**
 * Title: Seatings, address, telephone and email (synced)
 * Slug: sushi-ginza/shop-info
 * Categories: sushi-ginza
 * Keywords: prices, hours, address
 * Description: The seatings, address, telephone and email as one synced pattern, shown in the footer, on the home, booking and contact pages.
 */

echo Sushi_Ginza_Info::markup( 'shop' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
