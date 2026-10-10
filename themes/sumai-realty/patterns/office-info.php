<?php
/**
 * Title: Office details: address, hours, phone, email and social links (synced)
 * Slug: sumai-realty/office-info
 * Categories: sumai-realty
 * Keywords: address, hours, opening, phone, email, social, office, contact
 * Viewport Width: 1440
 * Description: The office’s address, opening hours, phone number, email and social links as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the utility strip at the top of every page, the footer’s address card and the Contact page change together.
 */

echo Sumai_Realty_Info::markup( 'office' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
