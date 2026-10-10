<?php
/**
 * Title: Studio details: address, hours, phone and email (synced)
 * Slug: kaze-yoga/studio-info
 * Categories: kaze-yoga, contact
 * Keywords: address, hours, opening, phone, email, studio, contact
 * Description: The studio's address, opening hours, phone number and email as one synced pattern. Edit it once (Appearance > Editor > Patterns) and the footer, the Contact page and the Trial class page change together.
 */

echo Kaze_Yoga_Info::markup( 'studio' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup from the theme.
