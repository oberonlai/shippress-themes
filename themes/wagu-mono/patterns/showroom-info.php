<?php
/**
 * Title: Showroom details: address, hours, phone, email, social links (synced)
 * Slug: wagu-mono/showroom-info
 * Categories: wagu-mono, contact
 * Keywords: address, hours, opening, phone, email, social, visit, showroom
 * Description: The showroom's address, opening hours, phone number, email and social links as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the colophon footer, the Contact, Makers and Care pages change together.
 */

echo Wagu_Mono_Info::markup( 'showroom' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
