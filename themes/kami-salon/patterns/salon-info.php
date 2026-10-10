<?php
/**
 * Title: Salon details: address, hours, phone, email and social links (synced)
 * Slug: kami-salon/salon-info
 * Categories: kami-salon
 * Keywords: address, hours, opening, phone, email, social, salon, contact
 * Description: The salon’s address, opening hours, phone number, email and social links as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer, the Booking page and the Contact page change together.
 */

echo Kami_Salon_Info::markup( 'salon' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
