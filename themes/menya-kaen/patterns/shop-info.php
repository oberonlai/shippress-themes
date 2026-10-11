<?php
/**
 * Title: Shop details: hours, address, telephone, email and social links (synced)
 * Slug: menya-kaen/shop-info
 * Categories: menya-kaen
 * Keywords: hours, opening, address, phone, email, social, shop, contact
 * Description: The opening hours, address, telephone, email and social links as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer, the home page, the Access page and the Contact page change together.
 */

echo Menya_Kaen_Info::markup( 'shop' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
