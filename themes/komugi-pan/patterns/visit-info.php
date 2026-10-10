<?php
/**
 * Title: Visit: address, hours and phone (synced)
 * Slug: komugi-pan/visit-info
 * Categories: komugi-pan, contact
 * Keywords: address, hours, opening, phone, email, visit
 * Description: The address, opening hours, phone number and email as one synced pattern. Edit it once (Appearance > Editor > Patterns) and every page and the footer change together.
 */

echo Komugi_Pan_Info::markup( 'visit' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
