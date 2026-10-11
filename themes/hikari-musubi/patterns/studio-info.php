<?php
/**
 * Title: Studio details: address, hours, phone and email (synced)
 * Slug: hikari-musubi/studio-info
 * Categories: hikari-musubi, contact
 * Keywords: address, hours, phone, email, studio, contact, synced
 * Description: The studio's address, hours, phone number and email as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer, the Contact page and the Venues page change together.
 */

echo Hikari_Musubi_Info::markup( 'studio' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
