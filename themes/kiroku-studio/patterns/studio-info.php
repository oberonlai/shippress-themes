<?php
/**
 * Title: Studio details: address, email, phone and social links (synced)
 * Slug: kiroku-studio/studio-info
 * Categories: kiroku-studio
 * Keywords: address, phone, email, social, studio, contact
 * Viewport Width: 1440
 * Description: The studio's address, email addresses, phone number and social links as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer and the Contact page change together.
 */

echo Kiroku_Studio_Info::markup( 'studio' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
