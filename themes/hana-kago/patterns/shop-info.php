<?php
/**
 * Title: Shop details: address, hours, phone, email, social links (synced)
 * Slug: hana-kago/shop-info
 * Categories: hana-kago, contact
 * Keywords: address, hours, opening, phone, email, social, visit
 * Description: The shop's address, opening hours, phone number, email and social links as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer, the Delivery page and the Contact page change together.
 */

echo Hana_Kago_Info::markup( 'shop' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
