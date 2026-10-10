<?php
/**
 * Title: Shop details: address, hours, phone, email and social links (synced)
 * Slug: menya-kaen/shop-info
 * Categories: menya-kaen
 * Keywords: address, hours, opening, phone, email, social, shop, contact
 * Description: The shop’s address, opening hours, phone number, email and social links as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer, the Map page and the Contact page change together.
 */

echo Menya_Kaen_Info::markup( 'shop' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
